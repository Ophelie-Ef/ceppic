<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', 'homepage')]
    public function index(): Response
    {
        return new Response('Bienvenue au CEPPIC ! Venez ! On se marre bien !');
    }
}
