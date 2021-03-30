<?php

namespace App\Controller;

use App\Entity\Maisondhote;
use App\Entity\Reservationmaison;
use App\Form\FrontmaisonType;
use App\Repository\MaisondhoteRepository;
use phpDocumentor\Reflection\Types\True_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FrontmaisonController extends AbstractController
{
    /**
     * @Route("/frontmaison", name="frontmaison", methods={"GET"})
     */
    public function index(MaisondhoteRepository $maisondhoteRepository): Response
    {


        return $this->render('frontmaison/index.html.twig', [
            'maisondhotes' => $maisondhoteRepository->findBy(array('Disponible' => false)),
        ]);
    }

    /**
     * @Route("/add", name="reservationmaison_add", methods={"GET","POST"})
     */
    public function newreservation(Request $request): Response
    {
        $frontmaison = new Reservationmaison();
        $form = $this->createForm(FrontmaisonType::class, $frontmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $maison = $em->getRepository(Maisondhote::class);
            $maisonreserver = $frontmaison->getMaisondhote();
            //$maisondhote = $maisonreserver;
            $maisondhote = $em->getRepository(Maisondhote::class)->find($maisonreserver->getId());
            if (!$maisondhote) {
                throw $this->createNotFoundException('pas de maison');
            }
            $maisondhote->setDisponible(true);
            $em->persist($maisondhote);
            $em->flush();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($frontmaison);
            $entityManager->flush();
            $this->get('session')->getFlashBag()->add('notice','Votre reservation est en cours de validation');

        }

        return $this->render('frontmaison/add.html.twig', [
            'frontmaison' => $frontmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/searchfrontMaisondhote", name="searchfrontMaisondhote")
     */
    public function searchMaisondhote(Request $request, NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Maisondhote::class);
        $requestString = $request->get('searchValue');
        $maisondhote = $repository->findMaisondhoteByVille($requestString);
        $jsonContent = $Normalizer->normalize($maisondhote, 'json', ['groups' => 'post:read']);
        $retour = json_encode($jsonContent);
        return new Response($retour);
    }
}