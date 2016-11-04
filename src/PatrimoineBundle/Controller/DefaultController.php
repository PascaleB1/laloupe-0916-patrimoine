<?php

namespace PatrimoineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function sendMailAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $Subject = $Request->get("Subject");
            $message = " " . $Request->get("message") . " \n\n " . $Request->get("entreprise") . "\n\n " . $Request->get("siret") . " \n\n " . $Request->get("nom") . " \n\n " . $Request->get("prenom") . " \n\n " . $Request->get("adresse") . " \n\n " . $Request->get("ville") . " \n\n" . $Request->get("code_postal") . " \n\n " . $Request->get("email") . " \n\n " . $Request->get("phone") . " \n\n " . $Request->get("don") . " \n\n " . $Request->get("comment") . " \n\n ";
            $message = \Swift_Message::newInstance('Test')
                ->setSubject($Subject)
                ->setFrom('fondsperche@gmail.com')
                ->setTo('fondsperche@gmail.com')
                ->setBody($message);
            $this->get('mailer')->send($message);
            return $this->render('PatrimoineBundle:Default:mail.html.twig');
        }
        return $this->render('PatrimoineBundle:accueil:index.html.twig');
    }

}
