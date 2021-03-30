<?php

namespace App\Controller;

use App\Entity\Maisondhote;
use App\Entity\Reservationmaison;
use App\Form\ReservationmaisonType;
use App\Repository\ReservationmaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/reservationmaison")
 */
class ReservationmaisonController extends Controller
{
    /**
     * @Route("/", name="reservationmaison_index", methods={"GET"})
     */
    public function index(ReservationmaisonRepository $reservationmaisonRepository,Request $request): Response
    {
        $allreservationmaison = $reservationmaisonRepository->findAll();
        $reservationmaison = $this->get('knp_paginator')->paginate(

            $allreservationmaison,

            $request->query->getInt('page', 1),

            3
        );
        return $this->render('reservationmaison/index.html.twig', [
            'reservationmaisons' => $reservationmaison,
        ]);
    }
    /**
     * @Route("/listr", name="reservationmaison_list", methods={"GET"})
     */
    public function listr(ReservationmaisonRepository $reservationmaisonRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservationmaison/listr.html.twig', [
            'reservationmaisons' => $reservationmaisonRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }


    /**
     * @Route("/new", name="reservationmaison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservationmaison = new Reservationmaison();
        $form = $this->createForm(ReservationmaisonType::class, $reservationmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservationmaison);
            $entityManager->flush();

            return $this->redirectToRoute('reservationmaison_index');
        }

        return $this->render('reservationmaison/new.html.twig', [
            'reservationmaison' => $reservationmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationmaison_show", methods={"GET"})
     */
    public function show(Reservationmaison $reservationmaison): Response
    {
        return $this->render('reservationmaison/show.html.twig', [
            'reservationmaison' => $reservationmaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservationmaison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationmaison $reservationmaison): Response
    {
        $form = $this->createForm(ReservationmaisonType::class, $reservationmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservationmaison_index');
        }

        return $this->render('reservationmaison/edit.html.twig', [
            'reservationmaison' => $reservationmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservationmaison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reservationmaison $reservationmaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationmaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationmaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationmaison_index');
    }
}
