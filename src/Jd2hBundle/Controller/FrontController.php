<?php

namespace Jd2hBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller {

    public function homepageAction()
        {
            return $this->render('front/homepage.html.twig');
        }

    public function quisommesnousAction()
        {
            return $this->render('front/quisommesnous.html.twig');
        }

    public function jedonneAction()
        {
            return $this->render('front/jedonne.html.twig');
        }

    public function jeproposeAction()
        {
            return $this->render('front/jepropose.html.twig');
        }

    public function mentionslegalesAction()
        {
        return $this->render('front/mentionslegales.html.twig');
        }

    public function errorAction()
        {
            return $this->render('front/error404.html.twig');
        }
}