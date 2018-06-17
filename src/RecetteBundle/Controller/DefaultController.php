<?php

namespace RecetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/recette")
     */
    public function recetteAction()
    {
        return $this->render('recette/recette.html.twig');
    }

    

    /**
     * @Route("/nouvelleRecette", name="ajouterRecette")
     */
    public function ajouterRecetteAction()
    {
        return $this->render('recette/nouvelleRecette.html.twig');
    }
}
