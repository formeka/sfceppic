<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationsController extends AbstractController
{
    // #[Route('/formations/{domaine}', name: 'app_formations', defaults:['domaine' => ''] )]
    // public function index(string $domaine): Response
    // {
    //     return $this->render('formations/index.html.twig',
    // [
    //     'domaine' => $domaine
    // ]);
    // }

    #[Route('/formations/{page<\d+>}', name: 'app_formations', defaults:['page' => '1'] )]
    public function index(int $page): Response
    {
        return $this->render('formations/index.html.twig',
    [
        'page' => $page
    ]);
    }
}
