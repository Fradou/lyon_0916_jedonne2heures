<?php

namespace Jd2hBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Jd2hBundle:Default:index.html.twig');
    }

    public function redirectionAction()
    {
        return $this->render('Jd2hBundle:Default:form.html.twig');
    }

    public function sendMailAction()
    {
            print_r($_POST);
            $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom(array('projet.jd2h@gmail.com' => 'Je donne 2 heures'))
            ->setTo('aymen.mechiche@gmail.com')
            ->setBody('Test envoi mail');
              //  $this->renderView('Jd2hBundle:Default:email.html.twig'));
             $this->send($message);

        return $this->render('front/homepage.html.twig');
    }


}


