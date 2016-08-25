<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\These;
use GestionAdministrative\LgmBundle\Form\TheseType;

/**
 * These controller.
 *
 */
class TheseController extends Controller
{
    /**
     * Lists all These entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $theses = $em->getRepository('LgmBundle:These')->findAll();

        return $this->render('these/index.html.twig', array(
            'theses' => $theses,
        ));
    }

    /**
     * Creates a new These entity.
     *
     */
    public function newAction(Request $request)
    {
        $these = new These();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\TheseType', $these);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($these);
            $em->flush();

            return $this->redirectToRoute('these_show', array('id' => $these->getId()));
        }

        return $this->render('these/new.html.twig', array(
            'these' => $these,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a These entity.
     *
     */
    public function showAction(These $these)
    {
        $deleteForm = $this->createDeleteForm($these);

        return $this->render('these/show.html.twig', array(
            'these' => $these,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing These entity.
     *
     */
    public function editAction(Request $request, These $these)
    {
        $deleteForm = $this->createDeleteForm($these);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\TheseType', $these);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($these);
            $em->flush();

            return $this->redirectToRoute('these_edit', array('id' => $these->getId()));
        }

        return $this->render('these/edit.html.twig', array(
            'these' => $these,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a These entity.
     *
     */
    public function deleteAction(Request $request, These $these)
    {
        $form = $this->createDeleteForm($these);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($these);
            $em->flush();
        }

        return $this->redirectToRoute('these_index');
    }

    /**
     * Creates a form to delete a These entity.
     *
     * @param These $these The These entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(These $these)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('these_delete', array('id' => $these->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
