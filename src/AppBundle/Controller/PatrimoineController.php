<?php

namespace PatrimoineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class patrimoineController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function realisationAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sites = $em->getRepository('PatrimoineBundle:Site')->findAll();

        return $this->render('PatrimoineBundle:patrimoine:Realisation.html.twig', array(
            'sites' => $sites,
        ));
    }
}