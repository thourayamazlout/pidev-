<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EscapadeController extends AbstractController
{
    /**
     * @Route("/escapade", name="escapade")
     */
    public function index(): Response
    {
        return $this->render('escapade/index.html.twig', [
            'controller_name' => 'EscapadeController',
        ]);
    }
}
