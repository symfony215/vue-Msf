<?php

namespace MyScentFactory\BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     *@Route("/blog", name="msf_blog")
     */
    public function indexAction()
    {
        $favoris = array('bougie', 'huiles', 'tchiouraye', 'tiges de bambou', 'céramique', 'diffuseur');
        $blog    ="blog";
        $client  = "client";
        return $this->render('MyScentFactoryBlogBundle:Default:index.html.twig',
                                    array('blog'  =>$blog,
                                        'client'  =>$client,
                                        'favoris' =>$favoris));
    }

    public function eventAction()
    {
        return $this->render('MyScentFactoryBlogBundle:Default:event.html.twig');
    }

    public function avisAction()
    {
        return $this->render('MyScentFactoryBlogBundle:Default:avis.html.twig');
    }
}
