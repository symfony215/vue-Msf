<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\support_parfum;

class SupportAddController extends Controller
{
    public function supportAction()
    {
        $em = $this->getDoctrine()->getManager();


        $supports = new Support_parfum();
        $supports->setCategorieSupport('support');
        $supports->setDescription('support de diffusion');
        $supports->setDisponible('1');
        $supports->setImage('img/msf_spray.jpg');
        $supports->setNomSupport('diffuseur de parfum');
        $supports->setPrix('35');
        $supports->setTva('20');

        $em->persist($supports);
        $em->flush();
        $supports = $em->getRepository('EcommerceEcommerceBundle:support_parfum')->findAll();

        return $this->render('EcommerceEcommerceBundle:Default:vu.html.twig', array('supports'=> $supports));
    }
}
