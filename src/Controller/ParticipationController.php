<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Form\ParticipationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
//use App\Service\SmsSender;
use Symfony\Component\Notifier\Texter\TexterInterface;
//use Symfony\Component\Notifier\Message\SmsMessage;
//use Symfony\Component\Notifier\Recipient\PhoneRecipient;

#[Route('/participation')]
class ParticipationController extends AbstractController
{
    private $entityManager;
    private $mailer;
   // private $smsSender;

   

    
    public function __construct(EntityManagerInterface $entityManager, MailerInterface $mailer)//,SmsSender $smsSender)
    {
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
      //  $this->smsSender = $smsSender;

    }
    #[Route('/', name: 'app_participation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $participations = $entityManager
            ->getRepository(Participation::class)
            ->findAll();

        return $this->render('participation/index.html.twig', [
            'participations' => $participations,
        ]);
    }

    #[Route('/new', name: 'app_participation_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $this->entityManager->persist($participation);
            $this->entityManager->flush();

            // Send confirmation email
            $this->sendConfirmationEmail($participation);

            // Add a success flash message
            $this->addFlash('success', 'Participation saved successfully! Check your mail to see further information about your participation. ');
           // $this->smsSender->sendSms('+21628591509', 'Un nouveau partcipant a été ajouté à notre site web.');
            return $this->redirectToRoute('app_participation_new');
        }

        return $this->renderForm('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form->createView(),
            'form' => $form,
        ]);
    }


    #[Route('/show/{idP}', name: 'app_participation_show', methods: ['GET'])]
    public function show(int $idP, EntityManagerInterface $entityManager): Response
    {
        $participation = $entityManager
            ->getRepository(Participation::class)
            ->find($idP);

        if (!$participation) {
            throw $this->createNotFoundException('Participation not found');
        }

        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{idP}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form,
        ]);
    }

    #[Route('/{idP}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $participation->getIdP(), $request->request->get('_token'))) {
            $entityManager->remove($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participation_index', [], Response::HTTP_SEE_OTHER);
    }

    private function sendConfirmationEmail(Participation $participation): void
    {
        $email = (new Email())
            ->from('majed.khemakhem123@gmail.com')
            ->to($participation->getEmailUser())
            ->subject('Confirmation of Participation')
            ->html($this->renderView(
                'participation/confirmation.html.twig',
                ['participation' => $participation]
            ));

        $this->mailer->send($email);
    }
    #[Route('/front', name: 'app_front')]
    public function front(Request $request): Response
    {
        $participation = new Participation();
        
        return $this->render('back&front/front.html.twig', [
            'participation' => $participation
        ]);
    }
}
