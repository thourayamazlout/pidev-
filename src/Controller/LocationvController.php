<?php

namespace App\Controller;

use App\Entity\Locationv;
use App\Form\LocationvType;
use App\Repository\LocationvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/locationv")
 */
class LocationvController extends Controller
{
    /**
     * @Route("/locationvindex", name="locationv_index", methods={"GET"})
     */
    public function index(LocationvRepository $locationvRepository, Request $request): Response
    {
        $alllocationvs = $locationvRepository->findAll();
        // Paginate the results of the query
        $locationvs = $this->get('knp_paginator')->paginate(
        // Doctrine Query, not results
            $alllocationvs,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            3
        );
        return $this->render('locationv/index.html.twig', [
            'locationvs' => $locationvs,
        ]);
    }

    /**
     * @Route("/new", name="locationv_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $locationv = new Locationv();
        $form = $this->createForm(LocationvType::class, $locationv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($locationv);
            $entityManager->flush();

            return $this->redirectToRoute('locationv_index');
        }

        return $this->render('locationv/new.html.twig', [
            'locationv' => $locationv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="locationv_show", methods={"GET"})
     */
    public function show(Locationv $locationv): Response
    {
        return $this->render('locationv/show.html.twig', [
            'locationv' => $locationv,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="locationv_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Locationv $locationv): Response
    {
        $form = $this->createForm(LocationvType::class, $locationv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('locationv_index');
        }

        return $this->render('locationv/edit.html.twig', [
            'locationv' => $locationv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="locationv_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Locationv $locationv): Response
    {
        if ($this->isCsrfTokenValid('delete'.$locationv->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($locationv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('locationv_index');
    }


    /**
     * @Route("locationv/list", name="list_index", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function list(LocationvRepository $locationvRepository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $locationvs=$locationvRepository->findAll();




        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('locationv/list.html.twig', [
            'locationvs' => $locationvs,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }



}
