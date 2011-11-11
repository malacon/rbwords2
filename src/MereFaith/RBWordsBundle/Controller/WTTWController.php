<?php

namespace MereFaith\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WTTWController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MereFaithRBWordsBundle:WTTW:index.html.twig');
    }

    /**
     *  Have the lectionary searchable
     *
     **/
    public function lectionaryAction()
    {

      $repository = $this->getDoctrine()
        ->getRepository('AcmeStoreBundle:Product');
      $products = $repository->findAll();
      return $this->render('MereFaithRBWordsBundle:WTTW:lectionary.html.twig');
    }
}
