<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Twig\Environment;

class Controller extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Environment $twig): Response
    {
        return new Response($twig->render('index.html.twig', ['message'=> 'Welcome to your new controller!
']));
    }

    #[Route('/test', name: 'test')]
    #[IsGranted('ROLE_ADMIN')]
    public function test(Environment $twig): Response
    {
        return new Response($twig->render('index.html.twig', ['message' => 'Test!
']));
    }
}
