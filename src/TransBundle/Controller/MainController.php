<?php

namespace TransBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function countDownAction()
    {
        return $this->render('Main/countdown.html.twig');
    }
    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
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

    public function ratingValidAction()
    {
        return $this->render('Main/ratingvalid.html.twig', array(
            // ...
        ));
    }

    public function ratingAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('TransBundle:User')->find(4);
        return $this->render(':Main:rating.html.twig', array(
            'user' => $user,
        ));
    }
}
