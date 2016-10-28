<?php

namespace Jd2hBundle\Controller;


use Jd2hBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Jd2hBundle\Entity\Donneur;
use Jd2hBundle\Entity\Entrepreneur;

class FrontController extends Controller {

    public function homepageAction()
        {
            return $this->render('front/homepage.html.twig');
        }

    public function quisommesnousAction(Request $request)
        {
            $contact = new Contact();
            $form = $this->createForm('Jd2hBundle\Form\ContactType', $contact);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()){
                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject('The Booster - Demande de contact')
                    ->setFrom(array('projet.jd2h@gmail.com' => 'Admin The Booster'))
                    /**     Remplacer par adresse où envoyer les infos pour chaque inscription **/
                    ->setTo("projet.jd2h@gmail.com")
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Demande de contact'.
                        '</h4>' .
                        '<p>Nom et prénom : '.$contact->getName().
                        '<br>Mail de contact : '.$contact->getMail().
                        '<br><br>Entreprise : '.$contact->getCompany().
                        '<br><br>Sujet : '.$contact->getSubject().
                        '<br>Message :<br>'.
                        $contact->getMessage().
                        '</body>' .
                        '</html>',
                        'text/html');

                $mailer->send($message);

                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject("Demande de contact envoyé")
                    ->setFrom(array('projet.jd2h@gmail.com' => 'The Booster'))
                    ->setTo($contact->getMail())
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Bonjour' . ucfirst($contact->getName()) .
                        '</h4>
                        <p>Nous vous remercions de votre intérêt. <br> Nous avons bien reçu votre demande de contact concernant "'.$contact->getSubject(). '" et reviendrons vers vous dans les plus brefs délais.<br><br> À très vite.<br> L\'équipe The Booster</p>.
                        </body></html>',
                        'text/html');

                $mailer->send($message);

                return $this->redirectToRoute('front_contactok');
            }

            return $this->render('front/quisommesnous.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
        }

    public function inscriptionokAction()
        {
            return $this->render('front/inscriptionvalide.html.twig');
        }

    public function contactokAction()
        {
            return $this->render('front/demandecontact.html.twig');
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
                 * Envoie mail-auto de validatioInscription validée
n d'inscription
                 */

 /*             $message = \Swift_Message::newInstance();



                $message->setSubject('Inscription à Je donne 2 heures')
                        ->setFrom(array('projet.jd2h@gmail.com' => 'Je donne 2 heures'))
                        ->setTo($donneur->getMailAddress())
                        ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h1>' . ucfirst($donneur->getFirstName()) . ' ' .ucfirst($donneur->getName()) .
                        '</h1>'.
                         //<img src="'  .$message->embed(\Swift_Image::fromPath('localhost/Projets/lyon_jedonne2heures/web/img/je-donne-2-heures-logo-header2.png')) .
                         //'" alt="" />
*/              $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject("Confirmation d'inscription à The Booster")
                    ->setFrom(array('projet.jd2h@gmail.com' => 'The Booster'))
                    ->setTo($donneur->getMailAddress())
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Bienvenue sur The Booster ' . ucfirst($donneur->getFirstName()) . ' ' .ucfirst($donneur->getName()) .
                        '</h4>' .
                        "<p>Nous vous remercions de votre intérêt et de votre inscription.<br> Découvrez très bientôt comment en offrant un peu de votre temps libre vous allez pouvoir aider concrètement les Entrepreneurs et l'Économie.<br><br> À très vite.<br> L'équipe The Booster</p>".
                        '</body>' .
                        '</html>',
                        'text/html');

                $mailer->send($message);

                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject('The Booster - Inscription Donneur : '.$donneur->getFirstName().' '.$donneur->getName())
                    ->setFrom(array('projet.jd2h@gmail.com' => 'Admin The Booster'))
               /**     Remplacer par adresse où envoyer les infos pour chaque inscription **/
                    ->setTo("projet.jd2h@gmail.com")
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Inscription Donneur'.
                        '</h4>' .
                        '<p>Nom et prénom : '.$donneur->getName().' '.$donneur->getFirstName().
                        '<br>Adresse mail : '.$donneur->getMailAddress().
                        '<br>Adresse : '.$donneur->getTown().", ".$donneur->getCountry().
                        '<br>Statut : '.$donneur->getStatus().
                        '<br>Prêt à donner : '.$donneur->getHour().' heures'.
                        '</body>' .
                        '</html>',
                        'text/html');

                $mailer->send($message);



                return $this->redirectToRoute('front_inscriptok');
            }

            return $this->render('front/jedonne.html.twig', array(
                'donneur' => $donneur,
                'form' => $form->createView(),
            ));
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


                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject("Confirmation d'inscription à The Booster")
                    ->setFrom(array('projet.jd2h@gmail.com' => 'The Booster'))
                    ->setTo($entrepreneur->getMailAddress())
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Bienvenue sur The Booster ' . ucfirst($entrepreneur->getFirstName()) . ' ' .ucfirst($entrepreneur->getName()) .
                        '</h4>' .
                        "<p>Nous vous remercions de votre intérêt et de votre inscription.<br> Découvrez très bientôt comment le monde entier, en vous offrant un peu de son temps libre, va vous aider à réaliser vos projets et à grandir.<br><br> À très vite.<br> L'équipe The Booster </p >".                       '</body>' .
                        '</html>',
                        'text/html');
                $mailer->send($message);

                $mailer = $this->container->get('mailer');
                $message = \Swift_Message::newInstance()
                    ->setSubject('The Booster - Inscription Entrepreneur : '.$entrepreneur->getFirstName().' '.$entrepreneur->getName())
                    ->setFrom(array('projet.jd2h@gmail.com' => 'Admin The Booster'))
                    /**     Remplacer par adresse où envoyer les infos pour chaque inscription **/
                    ->setTo("projet.jd2h@gmail.com")
                    ->setBody(
                        '<html>' .
                        '<head></head>' .
                        '<body>' .
                        '<h4>Inscription Entrepreneur'.
                        '</h4>' .
                        '<p>Nom et prénom : '.$entrepreneur->getName().' '.$entrepreneur->getFirstName().
                        '<br>Adresse mail : '.$entrepreneur->getMailAddress().
                        '<br>Adresse : '.$entrepreneur->getTown().", ".$entrepreneur->getCountry().
                        '<br>Position : '.$entrepreneur->getPosition().
                        '<br>Entreprise : '.$entrepreneur->getCompany().
                        '<br>Dans le secteur : '    .$entrepreneur->getActivity().
                        '</body>' .
                        '</html>',
                        'text/html');

                $mailer->send($message);


                return $this->redirectToRoute('front_inscriptok');
            }

            return $this->render('front/jepropose.html.twig', array(
                'entrepreneur' => $entrepreneur,
                'form' => $form->createView(),
            ));
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