<?php

namespace App\Controller;

use App\Entity\Locationv;
use App\Entity\PropertySearch;
use App\Entity\Voiture;
use App\Form\FrontType;
use App\Form\PropertySearchType;
use App\Repository\VoitureRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;




class FrontvoitureController extends AbstractController
{
    /**
     * @Route("/frontvoiture", name="frontvoiture", methods={"GET"})
     */
    public function index(VoitureRepository $voitureRepository, request $request ,SessionInterface $session): Response
    {

        $search = new PropertySearch();
        $form= $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);

        return $this->render('frontvoiture/index.html.twig', [
            'voitures' => $voitureRepository->findBy(array('Disponible'=>false)),
            'form' => $form->createView(),

        ]);

    }
    /**
     * @Route("/ajouter", name="detail", methods={"GET","POST"})
     */
    public function ajouter(Request $request): Response
    {
        $frontvoiture = new Locationv();
        $form = $this->createForm(FrontType::class, $frontvoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $voiture = $em->getRepository(Voiture::class);
                $voiturelouer = $frontvoiture->getVoiture();
                $voiture = $em->getRepository(Voiture::class)->find($voiturelouer->getId());
                if(!$voiture){
                    throw $this->createNotFoundException('voiture n existe pas ');
                }
                $voiture->setDisponible(true);
                $em->persist($voiture);
                $em->flush();

                $file = $frontvoiture->getPermis();
                $fileName= md5(uniqid()).'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $entityManager = $this->getDoctrine()->getManager();
                $frontvoiture->setPermis($fileName);
                $entityManager->persist($frontvoiture);
                $entityManager->flush();
                $this->get('session')->getFlashBag()->add('notice','Location faite avec succès');

            //return $this->redirectToRoute('frontvoiture');
        }


        return $this->render('frontvoiture/add.html.twig', [
            'frontvoiture' => $frontvoiture,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/searchfrontVoiture", name="searchfrontVoiture")
     */
    public function searchVoiture(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Voiture::class);
        $requestString=$request->get('searchValue');
        $voiture= $repository->findVoitureByDescreption($requestString);
        $jsonContent = $Normalizer->normalize($voiture, 'json',['groups'=>'post:read']);
        $retour=json_encode($jsonContent);
        return new Response($retour);
    }



}
