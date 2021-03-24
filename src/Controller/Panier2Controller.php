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
     * @Route("/voiturepanier", name="paniervoiture")
     */
    public function index(SessionInterface $session, VoitureRepository $voitureRepository)
    {
        $panier = $session->get('paniervoiture' , []);
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


        return $this->render('panier2/index.html.twig', [
            'controller_name' => 'Panier2Controller',
            'items' => $panierWithData,
            'total' => $total

        ]);
    }

    /**
     * @Route("frontvoiture/{id}/edit", name="frontvoiture_edit", methods={"GET","POST"})
     */
    public function add($id, SessionInterface $session)
    {
        $paniervoiture =$session->get('paniervoiture', []);
        if(!empty($panier[$id]))
        {
            $paniervoiture[$id]++;
        } else
        {
            $paniervoiture[$id] = 1;
        }

        $session->set('paniervoiture', $paniervoiture);
        return $this->redirectToRoute('paniervoiture');
    }

    /**
     * @Route("/panier/remove/{id}" , name="voiture_remove")
     */
    public function remove($id, SessionInterface $session){
        $panier = $session->get('paniervoiture',[]);
        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('paniervoiture',$panier);
        return $this->redirectToRoute('paniervoiture');

    }
}
