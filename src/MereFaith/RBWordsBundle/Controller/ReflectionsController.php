<?php

namespace MereFaith\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ReflectionsController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MereFaithRBWordsBundle:Reflections:index.html.twig');
    }
}
