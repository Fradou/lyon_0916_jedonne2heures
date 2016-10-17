<?php

namespace Jd2hBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function homepageAction()
{
    return $this->render('front/homepage.html.twig');
}
    public function quisommesnousAction()
{
    return $this->render('front/quisommesnous.html.twig');
}
}