<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/formations')]
class FormationsController extends AbstractController
{
    #[Route('/', 'app_formations')]
    public function index(): Response
    {
        return $this->render('formations/index.html.twig');
    }

    #[Route('/{page<\d+>}', name: 'app_formations_show', defaults:['page' => '1'] )]
    public function show(int $page): Response
    {
        return $this->render('formations/show.html.twig',
            [
                'page' => $page
            ]
        );
    }
}
