<?php

namespace App\Controller;

use App\Entity\Client;
use App\Enum\ClientRole;
use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AjoutClientType;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Twig\Environment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class ClientController extends AbstractController
{
    #[Route('/back', name: 'app_back')]
    public function back(ClientRepository $clientRepository): Response
    {
        $clients = $clientRepository->findAll();

        return $this->render('client/index.html.twig', [
            'clients' => $clients,
        ]);
    }

    #[Route('/create_account', name: 'app_createaccount')]
    public function createCompte(Request $request, UserPasswordEncoderInterface $encoder, MailerInterface $mailer): Response
    {
    $client = new Client();
    $client->setRole(ClientRole::client);
    $form = $this->createForm(AjoutClientType::class, $client);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $password = $encoder->encodePassword(
            $client,
            $form->get('mdp')->getData()
        );
        $client->setMdp($password);
        $entityManager->persist($client);
        $entityManager->flush();
        $tex = sprintf("Hi %s,\n\nYour Account has been Created , \n\n this is your email  %s.  \n\n and this is your Password  %s.\n\nBest regards,\nWakkel Food team",
            $client->getNomC(), $client->getEmailC(),$form->get('mdp')->getData());
        $email = (new Email())
            ->from("guesmiaymen181@gmail.com")
            ->to($client->getEmailC())
            ->subject('Account has been Created')
            ->text($tex);
        $mailer->send($email);
        return $this->redirectToRoute('app_login');
    }
    return $this->render('security/createCompte.html.twig', [
        'form' => $form->createView(),
    ]);
}

#[Route('/forgotmdp', name: 'app_forgotmdp')]
public function forgotmdp(Request $request, ClientRepository $clientRepository, MailerInterface $mailer, UserPasswordEncoderInterface $passwordEncoder): Response{
    if ($request->isMethod('POST')) {
        $email = $request->request->get('email');
        $client = $clientRepository->findOneBy(['email_c' => $email]);

        if ($client) {
            // Générer un mot de passe aléatoire
            $newPassword = bin2hex(random_bytes(8));

            // Mettre à jour le mot de passe dans la base de données
            $entityManager = $this->getDoctrine()->getManager();
            $encodedPassword = $passwordEncoder->encodePassword($client, $newPassword);
            $client->setMdp($encodedPassword);
            $entityManager->flush();

            // Envoyer un e-mail avec le nouveau mot de passe
            $email = (new Email())
                ->from("guesmiaymen181@gmail.com")
                ->to($client->getEmailC())
                ->subject('Nouveau mot de passe')
                ->text("Votre nouveau mot de passe est : $newPassword");

            $mailer->send($email);

            // Rediriger vers une page de confirmation
            return $this->redirectToRoute('app_login');
        } else {
            // Si l'e-mail n'existe pas dans la base de données, afficher un message d'erreur
            $this->addFlash('error', 'Adresse e-mail non trouvée.');
        }
    }

    return $this->render('security/forgotMdp.html.twig');
}
    #[Route('/search', name: 'app_search')]
    public function search(Request $request, ClientRepository $ClientRepository, Environment $twig): Response
    {
        $searchTerm = $request->request->get('searchTerm');
        $clients = $ClientRepository->search($searchTerm); // Appel à une méthode de recherche dans votre repository
        return new Response($twig->render('client/List.twig', ['clients' => $clients]));
    }
    #[Route('/client/delete/{id}', name: 'delete_client')]
public function deleteClient(EntityManagerInterface $entityManager, $id): Response
{
    $client = $entityManager->getRepository(Client::class)->find($id);

    if (!$client) {
        throw $this->createNotFoundException('L\'utilisateur avec l\'ID ' . $id . ' n\'existe pas.');
    }

    $entityManager->remove($client);
    $entityManager->flush();

    return $this->redirectToRoute('app_back');
}

    #[Route('/client/edit/{id}', name: 'edit_client')]
    public function editClient(Request $request, UserPasswordEncoderInterface $passwordEncoder, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $client = $entityManager->getRepository(Client::class)->find($id);

    if (!$client) {
        throw $this->createNotFoundException('Utilisateur non trouvé pour id ' . $id);
    }

        $form = $this->createForm(AjoutClientType::class, $client);
        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Vérifiez si le mot de passe a été modifié dans le formulaire
        $plainPassword = $form->get('mdp')->getData();
        if ($plainPassword) {
            // Encodez le nouveau mot de passe
            $encodedPassword = $passwordEncoder->encodePassword($client, $plainPassword);
            // Définir le nouveau mot de passe encodé
            $client->setMdp($encodedPassword);
        }

        // Enregistrez les modifications dans la base de données
        $entityManager->flush();

        return $this->redirectToRoute('app_back');
    }
        return $this->render('client/edit.html.twig', [
        'client' => $client,
        'form' => $form->createView(),
    ]);
}
    #[Route('/client/ban/{id}', name: 'ban_client')]
    public function banClient(EntityManagerInterface $entityManager, $id): JsonResponse
    {
        $client = $entityManager->getRepository(Client::class)->find($id);

        if (!$client) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé.']); // Utilisez JsonResponse ici
        }

        $client->setBanned(true);
        $entityManager->flush();

        return new JsonResponse(['success' => true]); // Utilisez JsonResponse ici
    }

    #[Route('/client/unban/{id}', name: 'unban_client')]
    public function unbanClient(EntityManagerInterface $entityManager, $id): JsonResponse
    {
        $client = $entityManager->getRepository(Client::class)->find($id);

        if (!$client) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur non trouvé.']); // Utilisez JsonResponse ici
        }

        $client->setBanned(false);
        $entityManager->flush();

        return new JsonResponse(['success' => true]); // Utilisez JsonResponse ici
    }
    #[Route('/bannedCompte', name: 'banned_Compte')]
    public function bannedCompte(): Response
    {
        return $this->render('security/bannedCompte.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/edit', name: 'edit_c')]
    public function editc(Request $request): Response
    {
    $user = $this->getUser(); // Récupérer l'utilisateur connecté

    $form = $this->createForm(AjoutClientType::class, $user, [
        'include_password' => false,
        'include_email' => false,
        'include_numero' => false,
    ]);
        $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();

        // Vérifier si le champ du mot de passe a été modifié
        /*$plainPassword = $form->get('mdp')->getData();
        if (!empty($plainPassword)) {
            // Le champ du mot de passe a été modifié
            $encodedPassword = $passwordEncoder->encodePassword($user, $plainPassword);
            $user->setMdp($encodedPassword); // Utilisation de la méthode setMdp pour définir le mot de passe
        }*/
        $entityManager->flush();

        // Rediriger l'utilisateur vers une autre page après la modification
        return $this->redirectToRoute('app_front');
    }
    return $this->render('client/editc.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/front', name: 'app_front')]
    public function front(): Response
    {
        return $this->render('back&front/front.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }

    #[Route('/verifmdp', name: 'verif_mdp')]
    public function verifmdp(Request $request, Security $security, UserPasswordEncoderInterface $passwordEncoder): Response
{
    // Récupérer l'utilisateur connecté
    $user = $security->getUser();

    // Vérifier si l'utilisateur est connecté
    if (!$user) {
        // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
        return $this->redirectToRoute('app_login');
    }

    // Récupérer le mot de passe saisi dans le formulaire
    $submittedPassword = $request->request->get('password');

    if ($submittedPassword !== null) {
        // Vérifier si le mot de passe saisi correspond au mot de passe de l'utilisateur connecté
        $passwordValid = $passwordEncoder->isPasswordValid($user, $submittedPassword);

        if ($passwordValid) {
            // Le mot de passe est valide, rediriger vers une autre page
            return $this->redirectToRoute('edit_privacy');
        }
    }

    // Si le mot de passe est null ou invalide, afficher un message d'erreur
    $this->addFlash('error', 'Invalid password.');

    return $this->render('client/verifierMdp.html.twig');
}
#[Route('/editprivacy', name: 'edit_privacy')]
public function editprivacy(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
{
    $user = $this->getUser(); // Récupérer l'utilisateur connecté
    
    $form = $this->createForm(AjoutClientType::class, $user, [
        'include_nom' => false,
        'include_prenom' => false,
        'include_adresse' => false,
        'include_genre' => false,
    ]);

    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $plainPassword = $form->get('mdp')->getData();
        if ($plainPassword) {
            // Encodez le nouveau mot de passe
            $encodedPassword = $passwordEncoder->encodePassword($user, $plainPassword);
            // Définir le nouveau mot de passe encodé
            $user->setMdp($encodedPassword);
        }
            
            // Enregistrer les modifications dans la base de données
            $entityManager->flush();
            
            // Rediriger l'utilisateur vers une autre page après la modification
            return $this->redirectToRoute('app_front');
        }
    return $this->render('client/editPrivacy.htm.twig', [
        'form' => $form->createView(),
    ]);    
}

}
