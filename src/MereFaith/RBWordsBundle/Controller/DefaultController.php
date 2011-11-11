<?php

namespace MereFaith\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MereFaithRBWordsBundle:Default:index.html.twig');
    }

    public function preacherAction()
    {
        return $this->render('MereFaithRBWordsBundle:Default:preacher.html.twig');
    }

    public function retreatsAction()
    {
        return $this->render('MereFaithRBWordsBundle:Default:retreats.html.twig');
    }

    public function contactAction()
    {
        return $this->render('MereFaithRBWordsBundle:Default:contact.html.twig');
    }
}
