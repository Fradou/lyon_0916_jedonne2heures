<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 21/10/16
 * Time: 11:45
 */

namespace Jd2hBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}