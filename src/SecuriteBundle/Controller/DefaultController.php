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
    public function loginAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $errors = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('securite/login.html.twig', [
            'errors' => $errors,
            'last_username' =>  $lastUsername
        ]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request)
    {
        return $this->render('securite/register.html.twig');
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
        throw new \RuntimeException('This should never be called directly');
    }
}
