<?php

namespace PatrimoineBundle\Controller;

use PatrimoineBundle\Entity\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Agenda controller.
 *
 */
class AgendaController extends Controller
{
    /**
     * Lists all agenda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agendas = $em->getRepository('PatrimoineBundle:Agenda')->findAll();

        return $this->render('PatrimoineBundle:agenda:index.html.twig', array(
            'agendas' => $agendas,
        ));
    }
    
}
