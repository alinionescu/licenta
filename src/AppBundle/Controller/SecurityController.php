<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 15.02.2016
 * Time: 19:57
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/register", name="register")
     */
    public function registerAction()
    {
        return $this->render('AppBundle:security:register.html.twig');
    }
}