<?php

namespace App\Controller;

use App\Repository\ClientRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;



class SecurityController extends AbstractController
{
    private $clientRepository;
    private $passwordEncoder;

    public function __construct(ClientRepository $clientRepository, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->clientRepository = $clientRepository;
        $this->passwordEncoder = $passwordEncoder;
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,SessionInterface $session): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');

    }

    #[Route('/authenticate', name: 'app_authenticate', methods: ['POST'])]
    public function authenticate(Request $request, Security $security, TokenStorageInterface $tokenStorage): Response
    {
        $email = $request->request->get('email_c');
        $password = $request->request->get('password'); // Corrected parameter name
    
        // Retrieve the user by email
        $client = $this->clientRepository->findOneBy(['email_c' => $email]);
    
        // Check if the user exists
        if (!$client) {
            throw new CustomUserMessageAuthenticationException('Invalid credentials.');
        }
    
        // Check if the provided password matches the hashed password in the database
        if (!$this->passwordEncoder->isPasswordValid($client, $password)) {
            throw new CustomUserMessageAuthenticationException('Invalid credentials.');
        }
        // Check if the user is banned
        if ($client->isBanned()) {
        return $this->redirectToRoute('banned_Compte');
        }
        // Authenticating the user programmatically
        $token = new UsernamePasswordToken($client, null, 'main', $client->getRoles());
        $tokenStorage->setToken($token);
        if (in_array('admin', $client->getRoles())) {
            return $this->redirectToRoute('app_back');
        } else {
            return $this->redirectToRoute('app_front');
        }

    }
}    

