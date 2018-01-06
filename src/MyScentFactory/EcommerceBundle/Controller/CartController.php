<?php

namespace MyScentFactory\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CartController extends Controller
{
    /**
     * @Route("/Shop")
     */
    public function ShopAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Cart:shop.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Discount")
     */
    public function DiscountAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Cart:discount.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Name")
     */
    public function NameAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Cart:name.html.twig', array(
            // ...
        ));
    }

}
