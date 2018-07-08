<?php

namespace DashboardBundle\Controller;

use AppBundle\AppBundle;
use SecuriteBundle\SecuriteBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use SecuriteBundle\Entity\User;
use SecuriteBundle\Form\UserRegisterType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DefaultController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     * @IsGranted("ROLE_USER")
     */
    public function dashboardAction()
    {
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Route("/dashboard/userlist", name="userlist")
     * @IsGranted("ROLE_ADMIN")
     */
    public function userListAction(Request $request)
    {
        $users =  $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();

        return $this->render('dashboard/userlist.html.twig',  [
            'users' => $users
        ]);
    }

    /**
     * @Route("/dashboard/myinfo", name="myinfo")
     * @IsGranted("ROLE_USER")
     */
    public function userInfoAction(Request $request) {


        $user = new User();
        $form = $this->createForm(UserRegisterType::class, $user);

        return $this->render('dashboard/userInfo.html.twig',  [
            'form' => $form->createView()

        ]);
    }

}
