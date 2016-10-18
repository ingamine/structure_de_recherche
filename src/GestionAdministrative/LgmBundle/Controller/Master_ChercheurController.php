<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Master_Chercheur;
use GestionAdministrative\LgmBundle\Form\Master_ChercheurType;

/**
 * Master_Chercheur controller.
 *
 */
class Master_ChercheurController extends Controller
{
    /**
     * Lists all Master_Chercheur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $master_Chercheurs = $em->getRepository('LgmBundle:Master_Chercheur')->findAll();

        return $this->render('master_chercheur/index.html.twig', array(
            'master_Chercheurs' => $master_Chercheurs,
        ));
    }

    /**
     * Creates a new Master_Chercheur entity.
     *
     */
    public function newAction(Request $request)
    {
        $master_Chercheur = new Master_Chercheur();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\Master_ChercheurType', $master_Chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($master_Chercheur);
            $em->flush();

            return $this->redirectToRoute('master_chercheur_show', array('id' => $master_Chercheur->getId()));
        }

        return $this->render('master_chercheur/new.html.twig', array(
            'master_Chercheur' => $master_Chercheur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Master_Chercheur entity.
     *
     */
    public function showAction(Master_Chercheur $master_Chercheur)
    {
        $deleteForm = $this->createDeleteForm($master_Chercheur);

        return $this->render('master_chercheur/show.html.twig', array(
            'master_Chercheur' => $master_Chercheur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Master_Chercheur entity.
     *
     */
    public function editAction(Request $request, Master_Chercheur $master_Chercheur)
    {
        $deleteForm = $this->createDeleteForm($master_Chercheur);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\Master_ChercheurType', $master_Chercheur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($master_Chercheur);
            $em->flush();

            return $this->redirectToRoute('master_chercheur_edit', array('id' => $master_Chercheur->getId()));
        }

        return $this->render('master_chercheur/edit.html.twig', array(
            'master_Chercheur' => $master_Chercheur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Master_Chercheur entity.
     *
     */
    public function deleteAction(Request $request, Master_Chercheur $master_Chercheur)
    {
        $form = $this->createDeleteForm($master_Chercheur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($master_Chercheur);
            $em->flush();
        }

        return $this->redirectToRoute('master_chercheur_index');
    }

    /**
     * Creates a form to delete a Master_Chercheur entity.
     *
     * @param Master_Chercheur $master_Chercheur The Master_Chercheur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Master_Chercheur $master_Chercheur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('master_chercheur_delete', array('id' => $master_Chercheur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
