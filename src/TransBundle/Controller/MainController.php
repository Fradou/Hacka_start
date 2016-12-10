<?php

namespace TransBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
            // ...
        ));
    }

    public function demandeAction()
    {
        return $this->render('Main/demande.html.twig', array(
            // ...
        ));
    }

    public function offerlistAction()
    {
        return $this->render('Main/offerlist.html.twig', array(
        ));
    }

    public function comAction()
    {
        return $this->render('Main/com.html.twig', array(
            // ...
        ));
    }

    public function ratingAction()
    {
        return $this->render('Main/rating.html.twig', array(
            // ...
        ));
    }

}
