<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Enseignant_Chercheur;
use GestionAdministrative\LgmBundle\Form\Enseignant_ChercheurType;

/**
 * Enseignant_Chercheur controller.
 *
 */
class Enseignant_ChercheurController extends Controller
{
    /**
     * Lists all Enseignant_Chercheur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enseignant_Chercheurs = $em->getRepository('LgmBundle:Enseignant_Chercheur')->findAll();

        return $this->render('enseignant_chercheur/index.html.twig', array(
            'enseignant_Chercheurs' => $enseignant_Chercheurs,
        ));
    }

    /**
     * Creates a new Enseignant_Chercheur entity.
     *
     */
    public function newAction(Request $request)
    {
        $enseignant_Chercheur = new Enseignant_Chercheur();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\Enseignant_ChercheurType', $enseignant_Chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enseignant_Chercheur);
            $em->flush();

            return $this->redirectToRoute('enseignant_chercheur_show', array('id' => $enseignant_Chercheur->getId()));
        }

        return $this->render('enseignant_chercheur/new.html.twig', array(
            'enseignant_Chercheur' => $enseignant_Chercheur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Enseignant_Chercheur entity.
     *
     */
    public function showAction(Enseignant_Chercheur $enseignant_Chercheur)
    {
        $deleteForm = $this->createDeleteForm($enseignant_Chercheur);

        return $this->render('enseignant_chercheur/show.html.twig', array(
            'enseignant_Chercheur' => $enseignant_Chercheur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Enseignant_Chercheur entity.
     *
     */
    public function editAction(Request $request, Enseignant_Chercheur $enseignant_Chercheur)
    {
        $deleteForm = $this->createDeleteForm($enseignant_Chercheur);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\Enseignant_ChercheurType', $enseignant_Chercheur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enseignant_Chercheur);
            $em->flush();

            return $this->redirectToRoute('enseignant_chercheur_edit', array('id' => $enseignant_Chercheur->getId()));
        }

        return $this->render('enseignant_chercheur/edit.html.twig', array(
            'enseignant_Chercheur' => $enseignant_Chercheur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Enseignant_Chercheur entity.
     *
     */
    public function deleteAction(Request $request, Enseignant_Chercheur $enseignant_Chercheur)
    {
        $form = $this->createDeleteForm($enseignant_Chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enseignant_Chercheur);
            $em->flush();
        }

        return $this->redirectToRoute('enseignant_chercheur_index');
    }

    /**
     * Creates a form to delete a Enseignant_Chercheur entity.
     *
     * @param Enseignant_Chercheur $enseignant_Chercheur The Enseignant_Chercheur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Enseignant_Chercheur $enseignant_Chercheur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enseignant_chercheur_delete', array('id' => $enseignant_Chercheur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
