<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationsController extends AbstractController
{
    #[Route('/formations/{slug}', 'domaine')]
    public function domaine(string $slug): Response
    {
        return new Response('Formation : '.$slug);
    }

    // #[Route('/formations', 'formations')]
    // public function index(): Response
    // {
    //     return $this->render('formations/index.html.twig');
    // }
}
