<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class Panier2Controller extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, VoitureRepository $voitureRepository)
    {
        $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity)
        { $panierWithData[] =
            [
                'voiture' => $voitureRepository->find($id),
                'quantity' => $quantity
            ];
            //dd($panierWithData);
        }
        $total =0;
        foreach ($panierWithData as $item)
        {
            $totalItem = $item['voiture']->getPrix() * $item['quantity'];
            $total += $totalItem;
        }


        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            'items' => $panierWithData,
            'total' => $total

        ]);
    }

    /**
     * @Route("/{id}/edit", name="frontvoiture_edit", methods={"GET","POST"})
     */
    public function add($id, SessionInterface $session)
    {
        $panier =$session->get('panier', []);
        if(!empty($panier[$id]))
        {
            $panier[$id]++;
        } else
        {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/panier/remove/{id}" , name="voiture_remove")
     */
    public function remove($id, SessionInterface $session){
        $panier = $session->get('panier',[]);
        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');

    }
}
