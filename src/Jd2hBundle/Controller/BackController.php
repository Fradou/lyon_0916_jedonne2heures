<?php

namespace Jd2hBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Jd2hBundle\Entity\Donneur;
use Jd2hBundle\Entity\Entrepreneur;

/**
 * Donneur controller.
 *
 */
class BackController extends Controller
{
    /**
     * Lists all donneur entities.
     *
     */
    public function donneurAction(Donneur $donneur)
    {
        $em = $this->getDoctrine()->getManager();

        $donneurs = $em->getRepository('Jd2hBundle:Donneur')->findAll();

        return $this->render('donneur/index.html.twig', array(
            'donneurs' => $donneurs,
        ));
    }
    /**
     * Lists all entrepreneur entities.
     *
     */
    public function entrepreneurAction(Entrepreneur $entrepreneur)
    {
        $em = $this->getDoctrine()->getManager();

        $entrepreneurs = $em->getRepository('Jd2hBundle:Entrepreneur')->findAll();

        return $this->render('entrepreneur/index.html.twig', array(
            'entrepreneurs' => $entrepreneurs,
        ));
    }
}
