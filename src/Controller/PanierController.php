<?php

namespace App\Controller;
use App\Repository\EscapadeRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


class  PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, EscapadeRepository $escapadeRepository)
    { $panier=$session->get('panier',[]);
    $panierwithdata=[];
    foreach ($panier as $id_esc => $quantity)
    {
        $panierwithdata[]=['escapade'=>$escapadeRepository->find($id_esc),'quantity'=>$quantity];
    }
    $total = 0;
        foreach ($panierwithdata as $item ) {
            $totalitem = $item['escapade']->getPrice() * $item['quantity'];
            $total += $totalitem;

    }

        return $this->render('panier/index.html.twig',[
            'items' => $panierwithdata,
            'total'=>$total
        ]);
    }
    /**
     * @Route("/favoris/{id_esc}", name="panier_favoris")
     */
    public function favoris( $id_esc, SessionInterface $session)
    {
        $panier =$session->get('panier',[]);
        if (!empty($panier[$id_esc])){
            $panier[$id_esc]++;
        } else {
            $panier[$id_esc] = 1;
        }
        $session->set('panier',$panier);
        //dd($session->get('panier'));

        return $this->redirectToRoute('panier');
    }
    /**
     * @Route("/supprimer/{id_esc}", name="supprimer_favoris")
     */
    public function delete($id_esc, SessionInterface $session)
    { $panier = $session->get('panier',[]);
        if (!empty($panier[$id_esc])) {
            unset($panier[$id_esc]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');
    }

}
