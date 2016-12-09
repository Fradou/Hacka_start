<?php

namespace TransBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('TransBundle:Main:index.html.twig', array(
            // ...
        ));
    }

    public function demandeAction()
    {
        return $this->render('TransBundle:Main:demande.html.twig', array(
            // ...
        ));
    }

    public function offerlistAction()
    {
        return $this->render('TransBundle:Main:offerlist.html.twig', array(
            // ...
        ));
    }

    public function comAction()
    {
        return $this->render('TransBundle:Main:com.html.twig', array(
            // ...
        ));
    }

    public function ratingAction()
    {
        return $this->render('TransBundle:Main:rating.html.twig', array(
            // ...
        ));
    }

}
