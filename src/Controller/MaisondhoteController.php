<?php

namespace App\Controller;

use App\Entity\Maisondhote;
use App\Entity\PropertySearchPhp;
use App\Entity\Reservationmaison;
use App\Form\AccepterReservationType;
use App\Form\MaisondhoteType;
use App\Form\PropertySearchType as PropertySearchType;
use App\Repository\MaisondhoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/maisondhote")
 */
class MaisondhoteController extends AbstractController
{
    /**
     * @Route("/", name="maisondhote_index", methods={"GET"})
     */
    public function index(MaisondhoteRepository $maisondhoteRepository): Response
    {
        return $this->render('maisondhote/index.html.twig', [
            'maisondhotes' => $maisondhoteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="maisondhote_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $maisondhote = new Maisondhote();
        $form = $this->createForm(MaisondhoteType::class, $maisondhote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $maisondhote->setDisponible(false);
            $file = $maisondhote->getImage();
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
            $maisondhote->setImage($fileName);
            $entityManager->persist($maisondhote);
            $entityManager->flush();

            return $this->redirectToRoute('maisondhote_index');
        }


        return $this->render('maisondhote/new.html.twig', [
            'maisondhote' => $maisondhote,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}", name="maisondhote_show", methods={"GET"})
     */
    public function show(Maisondhote $maisondhote): Response
    {
        return $this->render('maisondhote/show.html.twig', [
            'maisondhote' => $maisondhote,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maisondhote_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maisondhote $maisondhote): Response
    {
        $form = $this->createForm(MaisondhoteType::class, $maisondhote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maisondhote_index');
        }

        return $this->render('maisondhote/edit.html.twig', [
            'maisondhote' => $maisondhote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editDisponibilite", name="maisondhote_editDisponibilite", methods={"GET","POST"})
     */
    public function editDisponibilite(Request $request, Maisondhote $maisondhote): Response
    {
        $form = $this->createForm(AccepterReservationType::class, $maisondhote);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maisondhote_index');
        }

        return $this->render('maisondhote/edit.html.twig', [
            'maisondhote' => $maisondhote,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maisondhote_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maisondhote $maisondhote): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maisondhote->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maisondhote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maisondhote_index');
    }
}
