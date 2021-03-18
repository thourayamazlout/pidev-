<?php

namespace App\Controller;

use App\Entity\Escapade;
use App\Form\EscapadeType;
use App\Repository\EscapadeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\VarDumper\Dumper\esc;

/**
 * @Route("/escapade")
 */
class EscapadeController extends AbstractController
{
    /**
     * @Route("/", name="escapade_index", methods={"GET"})
     */
    public function index(EscapadeRepository $escapadeRepository): Response
    {
        return $this->render('escapade/index.html.twig', [
            'escapades' => $escapadeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="escapade_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $escapade = new Escapade();
        $form = $this->createForm(EscapadeType::class, $escapade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $this->addFlash('success', 'Article Created! Knowledge is power!');
            $file = $escapade->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $filename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $entityManager = $this->getDoctrine()->getManager();
            $escapade->setImage($filename);
            $entityManager->persist($escapade);
            $entityManager->flush();

            return $this->redirectToRoute('escapade_index');
        }

        return $this->render('escapade/new.html.twig', [
            'escapade' => $escapade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_esc}", name="escapade_show", methods={"GET"})
     */
    public function show(Escapade $escapade): Response
    {
        return $this->render('escapade/show.html.twig', [
            'escapade' => $escapade,
        ]);
    }

    /**
     * @Route("/{id_esc}/edit", name="escapade_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Escapade $escapade): Response
    {
        $form = $this->createForm(EscapadeType::class, $escapade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $escapade->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $filename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $escapade->setImage($filename);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('escapade_index');
        }

        return $this->render('escapade/edit.html.twig', [
            'escapade' => $escapade,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_esc}", name="escapade_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Escapade $escapade): Response
    {
        if ($this->isCsrfTokenValid('delete'.$escapade->getId_esc(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($escapade);
            $entityManager->flush();
        }

        return $this->redirectToRoute('escapade_index');
    }
    /**
     * @Route("escapade/recherche", name="rechercher")
     */
    public function recherche (EscapadeRepository $repository, Request $request)
    {
        $data= $request->get('recherche');
        $escapades = $repository-> findBy(["ville"=>$data]);
        return $this->render('escapade/index.html.twig',['escapades'=>$escapades]);

    }


}
