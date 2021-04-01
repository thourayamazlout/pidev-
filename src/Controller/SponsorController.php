<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sponsor")
 */
class SponsorController extends AbstractController
{
    /**
     * @Route("/sponsor", name="sponsor_index", methods={"GET"})
     */
    public function index(): Response
    {
        $sponsors = $this->getDoctrine()
            ->getRepository(Sponsor::class)
            ->findAll();

        return $this->render('sponsor/index.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }

    /**
     * @Route("/new", name="sponsor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('sponsor_index');
        }

        return $this->render('sponsor/new.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/ajout", name="sponsor_ajout", methods={"GET","POST"})
     */
    public function ajout(Request $request): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('globale');
        }

        return $this->render('sponsor/ajout.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{refSponsor}", name="sponsor_show", methods={"GET"})
     */
    public function show(Sponsor $sponsor): Response
    {
        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    /**
    /**

     * @Route("/{refSponsor}/edit", name="sponsor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Sponsor $sponsor): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sponsor_index');
        }

        return $this->render('sponsor/edit.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{cin}/modifier", name="sponsor_modifier", methods={"GET","POST"})
     */
    public function modifier(Request $request, Sponsor $sponsor): Response
    {
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sponsor_index');
        }

        return $this->render('sponsor/modifier.html.twig', [
            'sponsor' => $sponsor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{refSponsor}", name="sponsor_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Sponsor $sponsor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sponsor->getRefSponsor(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('globale');
    }
    /**
     *  @Route("/stat/sponsor", name="sponsor_stat", methods={"GET"})
     */
    public function stat()
    {
        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sqlAdmin2 = 'SELECT nomEvent AS toBeUsed FROM Sponsor';
        $sqlNbUsers = 'SELECT COUNT(*) AS nbUsers FROM Sponsor';
        $stmtAdmin2 = $conn->prepare($sqlAdmin2);
        $stmtnbuser = $conn->prepare($sqlNbUsers);
        $stmtnbuser->execute();
        $stmtAdmin2->execute();
        $arrayAdmin2 = $stmtAdmin2->fetchAll();
        $nb_users=$stmtAdmin2->fetchAll();
        //NUMBER OF USERS
        $nbUsers = 0;
        foreach ($nb_users as $nb){
            $nbUsers += intval($nb['nbUsers']);
        }

        $data2 = array(['Sponsor','Nombre de Reclamations']);
        foreach ($arrayAdmin2 as $item){
            array_push($data2,[$item['nomEvent'],intval($item['toBeUsed'])]);
        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data2);
        $pieChart->getOptions()->setTitle('Pourcentages de budget pour chaque sponsor');
        $pieChart->getOptions()->setWidth(600);
        $pieChart->getOptions()->setHeight(400);
        return $this->render('stat/statsponsor.html.twig',[
            "piechart"=>$pieChart,
            "nbUsers"=>$nb_users
        ]);
    }

}
