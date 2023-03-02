<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class Controller extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response('Welcome to your new controller!');
    }

    #[Route('/test', name: 'test')]
    #[IsGranted('ROLE_ADMIN')]
    public function test(): Response
    {
        return new Response('Test!');
    }
}
