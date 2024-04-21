<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Entity\RestaurantCategory;
use App\Form\RestaurantType;
use App\Repository\RestaurantCategoryRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/restaurant')]
class RestaurantController extends AbstractController
{
    #[Route('/', name: 'app_restaurant_index', methods: ['GET'])]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('Admin/restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="restaurant_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);

        // Récupérer la liste des catégories de restaurants disponibles
        $categories = $this->getDoctrine()->getRepository(RestaurantCategory::class)->findAll();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traitement du formulaire
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($restaurant);
            $entityManager->flush();

            return $this->redirectToRoute('app_restaurant_index');
        } else {
            // Store validation error messages in the flash bag
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        return $this->render('Admin/restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
            'categories' => $categories, // Passer les catégories au formulaire
        ]);
    }


    #[Route('/{id}/edit', name: 'app_restaurant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_restaurant_index');
        }

        return $this->renderForm('Admin/restaurant/edit.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_restaurant_delete', methods: ['POST'])]
    public function delete(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurant->getIdRestaurant(), $request->request->get('_token'))) {
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_restaurant_index');
    }
    #[Route('/restaurants/category/{idCategory}', name: 'restaurants_by_category')]
    public function restaurantsByCategory($idCategory, RestaurantRepository $restaurantRepository, RestaurantCategoryRepository $restaurantCategoryRepository): Response
    {
        // Retrieve the restaurants associated with the given category ID
        $restaurants = $restaurantRepository->findByCategory($idCategory);

        // Retrieve the RestaurantCategory object associated with the given category ID
        $restaurant_categories = $restaurantCategoryRepository->find($idCategory);

        // Render the list.html.twig template with the restaurants data and RestaurantCategory object
        return $this->render('admin/restaurant/list.html.twig', [
            'restaurants' => $restaurants,
            'restaurantCategory' => $restaurant_categories,
        ]);
    }



}
