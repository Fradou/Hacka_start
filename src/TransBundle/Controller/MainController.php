<?php

namespace TransBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TransBundle\Entity\Demand;
use TransBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;


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

    public function demandeAction()
    {

        return $this->render('Main/demande.html.twig', array(
            // ...
        ));
    }

    public function offerlistAction(Request $request, Demand $demand)

    {
        $em = $this->getDoctrine()->getManager();
        $helper = $em->getRepository('TransBundle:User')->findTranslator($demand);

      //  $helper=$this->get('main.repository')->findTranslator($demand);

        return $this->render('Main/offerlist.html.twig', array(
            'helpers' => $helper,
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

    public function mailValidAction(Request $request, Demand $demand)
    {
        $mailvalid = $this->getDoctrine()->getManager();
        $em = $mailvalid->getRepository('TransBundle:Demand')->find($demand);

        $am = $this->getDoctrine()->getManager();
        $user = $am->getRepository('TransBundle:User')->find(4);

        return $this->render('Main/mailvalid.html.twig', array(
            'demand' => $em,
            'user' => $user,
        ));
    }
}
