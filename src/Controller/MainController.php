<?php

namespace App\Controller;

use App\Repository\RestaurantCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/Main", name="index")
     */
    public function index(RestaurantCategoryRepository $restaurantCategoryRepository): Response
    {
        // Retrieve all restaurant categories
        $restaurantCategories = $restaurantCategoryRepository->findAll();

        return $this->render('index.html.twig', [
            'restaurant_categories' => $restaurantCategories,
        ]);
    }

    /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {
        return $this->render('Admin/index.html.twig');
    }
}
