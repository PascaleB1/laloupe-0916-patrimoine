<?php

namespace PatrimoineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PatrimoineBundle:Default:index.html.twig');
    }
}
