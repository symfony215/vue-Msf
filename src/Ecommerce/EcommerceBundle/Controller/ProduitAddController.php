<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\produit;

class ProduitAddController extends Controller
{
    public function produitAction()
    {
        $em = $this->getDoctrine()->getManager();

        /* $produit = new Produit();
        $produit->setCategorie('essence');
        $produit->setDescription('base de parfum');
        $produit->setDisponible('1');
        $produit->setImage('img/msf_spray.jpg');
        $produit->setNom('essence de parfum');
        $produit->setPrixHt('15');
        $produit->setTva('20');

        $em->persist($produit);

        $produit2 = new Produit();
        $produit2->setCategorie('support');
        $produit2->setDescription('support de parfum');
        $produit2->setDisponible('1');
        $produit2->setImage('img/msf_spray.jpg');
        $produit2->setNom('support de parfum');
        $produit2->setPrixHt('10');
        $produit2->setTva('20');

        $em->persist($produit2);
        $em->flush();*/
        $produits = $em->getRepository('EcommerceEcommerceBundle:produit')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:vu.html.twig', array('produits'=> $produits));
    }

}
