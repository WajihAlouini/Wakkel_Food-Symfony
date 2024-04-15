<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/Main", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/admin", name="display_admin")
     */
    public function indexAdmin(): Response
    {
        return $this->render('Admin/index.html.twig');
    }
}
