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
            $message = $Request->get("message") . " " . $Request->get("entreprise") . " " . $Request->get("siret") . " " . $Request->get("nom") . " " . $Request->get("prenom") . " " . $Request->get("adresse") . " " . $Request->get("ville") . " " . $Request->get("code_postal") . " " . $Request->get("email") . " " . $Request->get("phone") . " " . $Request->get("don") . " " . $Request->get("comment");
            $message = \Swift_Message::newInstance('Test')
                ->setSubject($Subject)
                ->setFrom('fondsperche@gmail.com')
                ->setTo('fondsperche@gmail.com')
                ->setBody($message);
            $this->get('mailer')->send($message);
            return $this->render('PatrimoineBundle:Default:mail.html.twig');
        }
        return $this->render('PatrimoineBundle:Default:formMail.html.twig');
    }
    public function redirectionAction()
    {

        return $this->render('PatrimoineBundle:Default:formMail.html.twig');
    }
}
