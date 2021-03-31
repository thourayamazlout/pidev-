<?php

namespace App\Controller;

use App\Entity\Reservationesc;
use App\Form\ReservationescType;
use App\Repository\EscapadeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Escapade;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;



class ThourayaController extends AbstractController
{
    /**
     * @Route("/thouraya/esca", name="thouraya")
     */
    public function index(EscapadeRepository $escapadeRepository): Response
    {
        return $this->render('thouraya/index.html.twig', [
            'escapades' => $escapadeRepository->findAll(),
        ]);
    }

    /**
     * @Route("thouraya/reserver", name="reserver", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationesc = new Reservationesc();
        $form = $this->createForm(ReservationescType::class, $reservationesc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationesc);
            $entityManager->flush();
            $this->addFlash('success', 'Votre Reservation est effectuée avec succée, 
            pour toute information supplementaire veuillez nous contactez, merci pour votre confiance.');
            return $this->redirectToRoute('thouraya');
        }

        return $this->render('thouraya/ajouter.html.twig', [
            'reservationesc' => $reservationesc,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/searchEscapade ", name="searchEscapade")
     */
    public function searchEscapade(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Escapade::class);
        $requestString=$request->get('searchValue');
        $escapades = $repository->findEscapadeByVille($requestString);
        $jsonContent = $Normalizer->normalize($escapades, 'json',['groups'=>'post:read']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }
    /**
     * @Route("/thouraya/map", name="map")
     */
    public function map ()
    {
        return $this->render('thouraya/map.html.twig');
    }

}
