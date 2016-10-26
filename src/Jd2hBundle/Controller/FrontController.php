<?php

namespace Jd2hBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Jd2hBundle\Entity\Donneur;
use Jd2hBundle\Entity\Entrepreneur;

class FrontController extends Controller {

    public function homepageAction()
        {
            return $this->render('front/homepage.html.twig');
        }

    public function quisommesnousAction()
        {
            return $this->render('front/quisommesnous.html.twig');
        }

    public function inscriptionokAction()
        {
            return $this->render('front/inscriptionvalide.html.twig');
        }

    public function jedonneAction(Request $request)
        {
            $donneur = new Donneur();
            $form = $this->createForm('Jd2hBundle\Form\DonneurType', $donneur);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($donneur);
                $em->flush($donneur);

                /*
                 * Envoie mail-auto de validation d'inscription
                 */
                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject('Inscription à Je donne 2 heures')
                    ->setFrom(array('projet.jd2h@gmail.com' => 'Je donne 2 heures'))
                    ->setTo($donneur->getMailAdress())
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h1>' . ucfirst($donneur->getFirstName()) . ' ' .ucfirst($donneur->getName()) .
                        '</h1>' .
                        '</body>' .
                        '</html>',
                        'text/html')
                        ->addPart('<img src="/web/img/">Here is the message itself</img>', 'text/html');

                $mailer->send($message);



                return $this->redirectToRoute('front_inscriptok', array('id' => $donneur->getId()));
            }

            return $this->render('front/jedonne.html.twig', array(
                'donneur' => $donneur,
                'form' => $form->createView(),
            ));
            // return $this->render('front/jedonne.html.twig');
        }

    public function jeproposeAction(Request $request)
        {
            $entrepreneur = new Entrepreneur();
            $form = $this->createForm('Jd2hBundle\Form\EntrepreneurType', $entrepreneur);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entrepreneur);
                $em->flush($entrepreneur);

                return $this->redirectToRoute('front_inscriptok', array('id' => $entrepreneur->getId()));
            }

            return $this->render('front/jepropose.html.twig', array(
                'entrepreneur' => $entrepreneur,
                'form' => $form->createView(),
            ));
            // return $this->render('front/jepropose.html.twig');
        }

    public function mentionslegalesAction()
        {
        return $this->render('front/mentionslegales.html.twig');
        }

    public function plandusiteAction()
    {
        return $this->render('front/plandusite.html.twig');
    }

    public function errorAction()
        {
            return $this->render('front/error404.html.twig');
        }
}