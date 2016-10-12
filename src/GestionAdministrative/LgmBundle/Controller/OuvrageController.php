<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Ouvrage;
use GestionAdministrative\LgmBundle\Form\OuvrageType;

/**
 * Ouvrage controller.
 *
 */
class OuvrageController extends Controller
{
    /**
     * Lists all Ouvrage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ouvrages = $em->getRepository('LgmBundle:Ouvrage')->findAll();

        return $this->render('ouvrage/index.html.twig', array(
            'ouvrages' => $ouvrages,
        ));
    }

    /**
     * Creates a new Ouvrage entity.
     *
     */
    public function newAction(Request $request)
    {
        $ouvrage = new Ouvrage();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\OuvrageType', $ouvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ouvrage);
            $em->flush();

            return $this->redirectToRoute('ouvrage_show', array('id' => $ouvrage->getId()));
        }

        return $this->render('ouvrage/new.html.twig', array(
            'ouvrage' => $ouvrage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ouvrage entity.
     *
     */
    public function showAction(Ouvrage $ouvrage)
    {
        $deleteForm = $this->createDeleteForm($ouvrage);

        return $this->render('ouvrage/show.html.twig', array(
            'ouvrage' => $ouvrage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ouvrage entity.
     *
     */
    public function editAction(Request $request, Ouvrage $ouvrage)
    {
        $deleteForm = $this->createDeleteForm($ouvrage);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\OuvrageType', $ouvrage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ouvrage);
            $em->flush();

            return $this->redirectToRoute('ouvrage_edit', array('id' => $ouvrage->getId()));
        }

        return $this->render('ouvrage/edit.html.twig', array(
            'ouvrage' => $ouvrage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ouvrage entity.
     *
     */
    public function deleteAction(Request $request, Ouvrage $ouvrage)
    {
        $form = $this->createDeleteForm($ouvrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ouvrage);
            $em->flush();
        }

        return $this->redirectToRoute('ouvrage_index');
    }

    /**
     * Creates a form to delete a Ouvrage entity.
     *
     * @param Ouvrage $ouvrage The Ouvrage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ouvrage $ouvrage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ouvrage_delete', array('id' => $ouvrage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
