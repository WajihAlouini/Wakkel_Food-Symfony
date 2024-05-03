<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/evenement')]
class EvenementController extends AbstractController

{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $entityManager
            ->getRepository(Evenement::class)
            ->createQueryBuilder('e')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('evenement/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/frontindex', name: 'app_evenement_frontindex', methods: ['GET'])]
public function frontindex(Request $request, EntityManagerInterface $entityManager): Response
{
    // Get the filter date from the request parameters
    $filterDate = $request->query->get('filter_date');

// Convert the filter date string to a DateTime object
if ($filterDate) {
    $filterDate = new \DateTime($filterDate);
    
    // Get events filtered by date if provided
    $evenements = $entityManager
        ->getRepository(Evenement::class)
        ->findBy(['dateDebut' => $filterDate]);
} else {
    // If no filter date provided, retrieve all events
    $evenements = $entityManager
        ->getRepository(Evenement::class)
        ->findAll();
}

    return $this->render('evenement/frontindex.html.twig', [
        'evenements' => $evenements,
    ]);
}
    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{idEvent}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{idEvent}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
 
   }
   #[Route('showfront/{idEvent}', name: 'app_evenement_showfront', methods: ['GET'])]
public function showfront(Evenement $evenement, EvenementRepository $evenementRepository, Request $request, int $idEvent): Response
{
    $evenement = $evenementRepository->find($idEvent);

    if (!$evenement) {
        throw $this->createNotFoundException('Evenement non trouvé');
    }

    $qrContent = "🏷️ ID: " . $evenement->getIdEvent() . "\n" .
    "📅 Start Date: " . $evenement->getDateDebut()->format('Y-m-d') . "\n" .
    "🔚 End Date: " . $evenement->getDateFin()->format('Y-m-d') . "\n" .
    "📌 Event Name: " . $evenement->getEventName() . "\n";
       ;
    // Créer un objet QrCode avec le contenu spécifique du produit
    $qrCode = new QrCode($qrContent);

    // Utiliser un écrivain pour générer l'image du code QR au format PNG
    $writer = new PngWriter();
    $qrImage = $writer->write($qrCode)->getDataUri();

    return $this->render('evenement/showfront.html.twig', [
        'evenement' => $evenement,
        'qrImage' => $qrImage,
    ]);
}



       #[Route('/back', name: 'app_back')]
    public function back(Request $request): Response
    {
        $evenement = new evenement();
        
        return $this->render('back&front/back.html.twig', [
            'evenement' => $evenement
        ]);
    }
   
}
