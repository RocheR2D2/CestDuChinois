<?php

namespace RecetteBundle\Controller;

use RecetteBundle\Entity\Product;
use RecetteBundle\Entity\Recette;
use RecetteBundle\Form\ProductType;
use RecetteBundle\Form\RecetteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("dashboard/recette")
     */
    public function recetteAction()
    {
        return $this->render('recette/recette.html.twig');
    }

    

    /**
     * @Route("/dashboard/recette/ajouter", name="ajouterRecette")
     * @Method({"GET", "POST"})
     */
    public function ajouterRecetteAction(Request $request)
    {

        $recette = new Recette();
        $form = $this->createForm(RecetteType::class, $recette);

        $form->handleRequest($request);
        if($form->isSubmitted()) {
            return new JsonResponse(dump($form));
        }

        return $this->render('recette/recette.html.twig', [
            'form' => $form->createView()
        ]);
    }





}
