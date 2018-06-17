<?php

namespace SecuriteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('securite/login.html.twig');
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
        throw new \RuntimeException('This should never be called directly');
    }
}
