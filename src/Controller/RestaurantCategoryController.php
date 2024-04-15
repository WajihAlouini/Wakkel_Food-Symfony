<?php

namespace App\Controller;

use App\Entity\RestaurantCategory;
use App\Form\RestaurantCategoryType;
use App\Repository\RestaurantCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/restaurant_category')]
class RestaurantCategoryController extends AbstractController
{
    #[Route('/', name: 'app_restaurant_category_index', methods: ['GET'])]
    public function index(RestaurantCategoryRepository $restaurantCategoryRepository): Response
    {
        return $this->render('Admin/restaurant_category/index.html.twig', [
            'restaurant_categories' => $restaurantCategoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_restaurant_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $restaurantCategory = new RestaurantCategory();
        $form = $this->createForm(RestaurantCategoryType::class, $restaurantCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($restaurantCategory);
            $entityManager->flush();

            return $this->redirectToRoute('app_restaurant_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Admin/restaurant_category/new.html.twig', [
            'restaurant_category' => $restaurantCategory,
            'form' => $form,
        ]);
    }

    #[Route('/{idCategory}', name: 'app_restaurant_category_show', methods: ['GET'])]
    public function show(RestaurantCategory $restaurantCategory): Response
    {
        return $this->render('Admin/restaurant_category/show.html.twig', [
            'restaurant_category' => $restaurantCategory,
        ]);
    }

    #[Route('/{idCategory}/edit', name: 'app_restaurant_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RestaurantCategory $restaurantCategory, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RestaurantCategoryType::class, $restaurantCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_restaurant_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('Admin/restaurant_category/edit.html.twig', [
            'restaurant_category' => $restaurantCategory,
            'form' => $form,
        ]);
    }

    #[Route('/{idCategory}', name: 'app_restaurant_category_delete', methods: ['POST'])]
    public function delete(Request $request, RestaurantCategory $restaurantCategory, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurantCategory->getIdCategory(), $request->request->get('_token'))) {
            $entityManager->remove($restaurantCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_restaurant_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
