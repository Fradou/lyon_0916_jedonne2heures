<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/10/16
 * Time: 11:45
 */

namespace Jd2hBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('back/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    public function adminAction()
    {
        return $this->render('back/consultation.html.twig');
    }
}