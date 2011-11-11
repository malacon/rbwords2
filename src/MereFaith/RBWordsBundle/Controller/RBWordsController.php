<?php

namespace MereFaith\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RBWordsController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MereFaithRBWordsBundle:RBWords:index.html.twig');
    }
}
