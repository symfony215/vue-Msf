<?php

namespace MyScentFactory\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SubscribeController extends Controller
{
    /**
     * @Route("/Inscription/{inscription}", name="inscription")
     */
    public function subscribeAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Subscribe:subscribe.html.twig', array(
                                'inscription' => 'inscription',
                                'compte' => 'compte',
                                'lab' => 'Laboratoire'
        ));
    }

    /**
     * @Route("Connexion")
     */
    public function loginAction()
    {
        $ids = "membre to login";
        return $this->render('MyScentFactoryEcommerceBundle:Subscribe:login.html.twig',
                            array('ids' => $ids));
    }

}
