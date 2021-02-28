<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenetController extends AbstractController
{
    /**
     * @Route("/evenet", name="evenet")
     */
    public function index(): Response
    {
        return $this->render('evenet/event.html.twig', [
            'controller_name' => 'EvenetController',
        ]);
    }
}
