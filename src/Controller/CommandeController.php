<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;



#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
public function index(CommandeRepository $commandeRepository, PaginatorInterface $paginator, Request $request): Response
{   
    // Récupérer les paramètres de tri depuis la requête
    $orderBy = $request->query->get('orderBy', 'idCommande');
    $orderDirection = $request->query->get('orderDirection', 'asc');

    // Construire la requête de récupération des commandes
    $query = $commandeRepository->createQueryBuilder('c')
        ->orderBy("c.$orderBy", $orderDirection)
        ->getQuery();

    // Paginer les résultats
    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        4
    );

    // Récupérer les commandes pour calculer les statistiques
    $commandes = $pagination->getItems();
    
    // Récupérer les statistiques des commandes
    $stats = $this->calculateCommandeStats($commandes, $commandeRepository);

    return $this->render('commande/index.html.twig', [
        'pagination' => $pagination,
        'stats' => $stats, // Passer les statistiques au modèle Twig
    ]);
}



#[Route('/statistics', name: 'app_statistics')]
public function statistics(CommandeRepository $commandeRepository): Response
{
    // Récupérer toutes les commandes depuis le repository
    $commandes = $commandeRepository->findAll();
    
    // Récupérez les statistiques des commandes
    $stats = $this->calculateCommandeStats($commandes, $commandeRepository);

    return $this->render('commande/statistics.html.twig', [
        'stats' => $stats,
    ]);
}



    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{idCommande}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{idCommande}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{idCommande}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getIdCommande(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }
    private function calculateCommandeStats(array $commandes, CommandeRepository $commandeRepository): array
{
    $totalCommandes = count($commandes);
    $commandesEnCours = 0;
    $commandesEffectue = 0;
    $commandesAnnule = 0;

    foreach ($commandes as $commande) {
        switch ($commande->getStatusCommande()) {
            case 'enCours':
                $commandesEnCours++;
                break;
            case 'effectue':
                $commandesEffectue++;
                break;
            case 'Annule':
                $commandesAnnule++;
                break;
            default:
                // Traitez ici les cas où le statut de la commande ne correspond à aucun des cas précédents
                break;
        }
    }

    return [
        'totalCommandes' => $totalCommandes,
        'commandesEnCours' => $commandesEnCours,
        'commandesEffectue' => $commandesEffectue,
        'commandesAnnule' => $commandesAnnule
    ];
}

#[Route('/generateCommandePdf/{idCommande}', name: 'generateCommandePdf')]
public function generateCommandePdf(Commande $commande): Response
{
    // Créez une instance de Dompdf
    $dompdf = new Dompdf();

    // Récupérez le contenu HTML que vous souhaitez inclure dans le PDF
    $html = $this->renderView('commande/pdf_template.html.twig', [
        // Envoyez des données à votre template si nécessaire
        'commande' => $commande, // Transmettez les données de la commande au modèle Twig
    ]);

    // Chargez le contenu HTML dans Dompdf
    $dompdf->loadHtml($html);

    // Réglez la taille et l'orientation du papier du PDF
    $dompdf->setPaper('A4', 'portrait');

    // Effectuez le rendu du PDF
    $dompdf->render();

    // Générez le contenu du PDF
    $pdfContent = $dompdf->output();

    // Créez une réponse PDF avec le contenu généré
    $response = new Response($pdfContent);
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', 'attachment; filename="commande.pdf"');

    return $response;
}

}
