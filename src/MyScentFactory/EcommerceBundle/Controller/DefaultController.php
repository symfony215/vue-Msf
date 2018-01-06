<?php

namespace MyScentFactory\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $ste = 'My Scent Factory';

        return $this->render('MyScentFactoryEcommerceBundle:Default:index.html.twig'
            );
    }
    public function homeAction(){
        $pictures = array('photo accueil', 'photo produit', 'photo composition');
        return $this->render('MyScentFactoryEcommerceBundle:Default:home.html.twig', array('pictures' => $pictures));
    }

    public function LoginAction($ids){

    $ids = 'membre to subscribe';

        return $this->render('MyScentFactoryEcommerceBundle:Default:login.html.twig', array(
            'ids' => $ids
        ));
    }

    public function SubscribeAction(){
        return $this->render('MyScentFactoryEcommerceBundle:Default:subscribe.html.twig');
    }

    public function ClientAction()
    {
        return $this->render('MyScentFactoryEcommerceBundle:Default:client.html.twig');
    }
}
