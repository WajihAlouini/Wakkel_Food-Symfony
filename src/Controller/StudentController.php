<?php

namespace App\Controller;

use App\Entity\Classroom;

use App\Entity\Student ;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('student', name : 'app_student' )]
    public function index() : Response
    {
        return $this->render("student/index.html.twig");
    }
    #[Route('readstudent', name : 'read_student' )]
    public function read(StudentRepository $rep) : Response
    { $students = $rep->findAll();
        return $this->render("student/read.html.twig",
            ["students"=>$students]);
    }
    #[Route('/addstudent', name: 'adds')]
    public function  add(ManagerRegistry $doctrine, Request  $request) : Response
    { $student = new Student() ;
        $form = $this->createForm(StudentType::class, $student);

        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid())
        { $em = $doctrine->getManager();
            $em->persist($student);
            $em->flush();


            return $this->redirectToRoute('read_student');
        }
        return $this->renderForm("student/add.html.twig",
            ["f"=>$form]) ;
    }
    #[Route('about', name : 'app_about' )]
    public function about() : Response
    {
        return new Response('Welcome to About Page');
    }




}