<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackeventController extends AbstractController
{
    /**
     * @Route("/backevent", name="backevent")
     */
    public function index(): Response
    {
        return $this->render('backevent/index.html.twig', [
            'controller_name' => 'BackeventController',
        ]);
    }
}
