<?php

namespace App\Controller;
use App\Entity\Reservationesc;
use App\Form\ReservationescType;
use App\Repository\ReservationescRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/reservationesc")
 */
class ReservationescController extends AbstractController
{
    /**
     * @Route("/", name="reservationesc_index", methods={"GET"})
     */
    public function index(ReservationescRepository $reservationescRepository): Response
    {
        return $this->render('reservationesc/index.html.twig', [
            'reservationescs' => $reservationescRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reservationesc_new", methods={"GET","POST"})
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
            $this->addFlash('success', 'Article Created! Knowledge is power!');
            return $this->redirectToRoute('reservationesc_index');
        }

        return $this->render('reservationesc/new.html.twig', [
            'reservationesc' => $reservationesc,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{ref}", name="reservationesc_show", methods={"GET"})
     */
    public function show(Reservationesc $reservationesc): Response
    {
        return $this->render('reservationesc/show.html.twig', [
            'reservationesc' => $reservationesc,
        ]);
    }

    /**
     * @Route("/{ref}/edit", name="reservationesc_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservationesc $reservationesc): Response
    {
        $form = $this->createForm(ReservationescType::class, $reservationesc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('reservationesc_index');
        }

        return $this->render('reservationesc/edit.html.twig', [
            'reservationesc' => $reservationesc,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{ref}", name="reservationesc_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reservationesc $reservationesc): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationesc->getRef(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationesc);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservationesc_index');
    }
    /**
     * @Route("reservation/recherche", name="rechercherr")
     */
    public function recherche (ReservationescRepository $repository, Request $request)
    {
        $data= $request->get('recherche');
        //$students = $repository-> findBy(["nsc"=>$data]);
        $reservationescs= $repository-> findBy(["tel"=>$data]);
        return $this->render('reservationesc/index.html.twig',['reservationescs'=>$reservationescs]);

    }

    /**
     * @Route("reservationesc/list", name="list_index", methods={"GET"}, requirements={"id":"\d+"})
     */
    public function list (ReservationescRepository $reservationescRepository) :Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $reservationescs =$reservationescRepository->findAll();




        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservationesc/pdf.html.twig', [
            'reservationescs' =>$reservationescs,
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
