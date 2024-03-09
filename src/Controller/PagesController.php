<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
        // return $this->json(['message' => 'Bienvenue <3']);
    }
    
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }
    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('pages/Connexion.html.twig');
    }
    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('pages/Inscription.html.twig');
    }
}
