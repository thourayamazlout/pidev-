<?php

namespace App\Controller;


use App\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reclamation;

class ReclamationfrontController extends AbstractController
{




    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function newrecla(Request $request): Response
    {
        $Reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $Reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('globale');
        }

        return $this->render('reclamationfront/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("reclamation/{idReclamation}", name="editrecla", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $user): Response
    {
        $form = $this->createForm(ReclamationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('globale');
        }

        return $this->render('reclamationfront/editrecla.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
}