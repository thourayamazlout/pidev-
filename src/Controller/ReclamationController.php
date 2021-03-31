<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\Reclamation1Type;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamationback")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findAll();

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{idReclamation}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReclamation}", name="reclamation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }
    /**
     *  @Route("/admin/stat", name="reclamation_stat", methods={"GET"})
     */
    public function stat()
    {
        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sqlAdmin2 = 'SELECT nom,COUNT(*) AS toBeUsed FROM reclamation,User WHERE User.id = reclamation.idUser GROUP BY nom';
        $sqlNbUsers = 'SELECT COUNT(*) AS nbUsers FROM User';
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

        $data2 = array(['user','Nombre de Reclamations']);
        foreach ($arrayAdmin2 as $item){
            array_push($data2,[$item['nom'],intval($item['toBeUsed'])]);

        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data2);
        $pieChart->getOptions()->setTitle('Pourcentages des reclamations pour chaque utilisateurs');
        $pieChart->getOptions()->setWidth(600);
        $pieChart->getOptions()->setHeight(400);
        return $this->render('reclamation/stat.html.twig',[
            "piechart"=>$pieChart,
            "nbUsers"=>$nb_users
        ]);
    }


}
