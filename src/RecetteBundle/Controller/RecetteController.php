<?php

namespace RecetteBundle\Controller;

use RecetteBundle\Entity\Recette;
use RecetteBundle\Services\FileManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Recette controller.
 *
 * @Route("dashboard/recettes")
 */
class RecetteController extends Controller
{

    private $fileSysteme;

    public function __construct()
    {
        $this->fileSysteme = new Filesystem();
    }

    /**
     * Lists all recette entities.
     *
     * @Route("/", name="recette_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recettes = $em->getRepository('RecetteBundle:Recette')->findAll();

        $n = sizeof($recettes);

        return $this->render('recette/index.html.twig', array(
            'recettes' => $recettes,
            'n_recettes' => $n
        ));
    }

    /**
     * Creates a new recette entity.
     *
     * @Route("/new", name="recette_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $fileSysteme = $this->fileSysteme;

        //$fileManager = $this->get('file.manager');




        $uploadRootPath = $this->getParameter('files_directory');
        $username = $this->getUser()->getUsername();
        $userUploadPath = $uploadRootPath.$username.'/';

        //Création du dossier par username
        if($fileSysteme->exists($userUploadPath) == false) {
            $fileSysteme->mkdir($userUploadPath,0700);
        }

        //Création de Form
        $recette = new Recette();
        $form = $this->createForm('RecetteBundle\Form\RecetteType', $recette);

        /*
        $formfieldNames = $this->getChildrenNames($form);
        dump($formfieldNames);
        die();
        */

        $form->handleRequest($request);



        if ($form->isSubmitted()) {

            //upload the file
            /**
             * @var UploadedFile $profil_file
             */
            $image_file = $recette->getImage();
            $image_filename = md5(uniqid()) . '.' . $image_file->guessExtension();

            $recetteUploadPath = $userUploadPath.$recette->getTitre().'/';

            if($fileSysteme->exists($recetteUploadPath) == false) {
                $fileSysteme->mkdir($recetteUploadPath,0700);
            }

            $image_file->move(
                $recetteUploadPath,
                $image_filename
            );



           // $etapes = $recette->getEtape();


            /*
            $em = $this->getDoctrine()->getManager();
            $recette->setUser($this->getUser());
            $recette->setImage($form->getData());



            $em->persist($recette);
            $em->flush();
            */

            die();
            return $this->redirectToRoute('recette_show', array('id' => $recette->getId()));
        }



        return $this->render('recette/new.html.twig', array(
            'recette' => $recette,
            'formfieldNames' => $formfieldNames,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recette entity.
     *
     * @Route("/{id}", name="recette_show")
     * @Method("GET")
     */
    public function showAction(Recette $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);

        return $this->render('recette/show.html.twig', array(
            'recette' => $recette,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recette entity.
     *
     * @Route("/{id}/edit", name="recette_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Recette $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);
        $editForm = $this->createForm('RecetteBundle\Form\RecetteType', $recette);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recette_edit', array('id' => $recette->getId()));
        }

        return $this->render('recette/edit.html.twig', array(
            'recette' => $recette,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recette entity.
     *
     * @Route("/{id}", name="recette_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Recette $recette)
    {
        $form = $this->createDeleteForm($recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recette);
            $em->flush();
        }

        return $this->redirectToRoute('recette_index');
    }

    /**
     * Creates a form to delete a recette entity.
     *
     * @param Recette $recette The recette entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recette $recette)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recette_delete', array('id' => $recette->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    private function getChildrenNames($form_views) {

        $childrens = $form_views->all();
        $childrenNames = [];
        foreach($childrens as $child) {
            array_push($childrenNames,$child->getName());
        }


        return $childrenNames;
    }
}
