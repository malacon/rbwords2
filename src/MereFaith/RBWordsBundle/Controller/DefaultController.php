<?php

namespace MereFaith\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MereFaithRBWordsBundle:Default:index.html.twig');
    }
}
