<?php

namespace Jd2hBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Jd2hBundle:Default:index.html.twig');
    }
}
