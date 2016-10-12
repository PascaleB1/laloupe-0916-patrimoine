<?php

namespace PatrimoineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function realisationAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sites = $em->getRepository('Patrimoine:Site')->findAll();

        return $this->render('PatrimoineBundle:patrimoine:Realisation.html.twig', array(
            'sites' => $sites,
        ));
    }
}