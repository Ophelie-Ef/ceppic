<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', 'homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
        return new Response('Bienvenue au CEPPIC ! Venez ! On se marre bien !');
    }
}
