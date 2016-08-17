<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Mastere;
use GestionAdministrative\LgmBundle\Form\MastereType;

/**
 * Mastere controller.
 *
 */
class MastereController extends Controller
{
    /**
     * Lists all Mastere entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $masteres = $em->getRepository('LgmBundle:Mastere')->findAll();

        return $this->render('mastere/index.html.twig', array(
            'masteres' => $masteres,
        ));
    }

    /**
     * Creates a new Mastere entity.
     *
     */
    public function newAction(Request $request)
    {
        $mastere = new Mastere();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\MastereType', $mastere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mastere);
            $em->flush();

            return $this->redirectToRoute('mastere_show', array('id' => $mastere->getId()));
        }

        return $this->render('mastere/new.html.twig', array(
            'mastere' => $mastere,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mastere entity.
     *
     */
    public function showAction(Mastere $mastere)
    {
        $deleteForm = $this->createDeleteForm($mastere);

        return $this->render('mastere/show.html.twig', array(
            'mastere' => $mastere,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mastere entity.
     *
     */
    public function editAction(Request $request, Mastere $mastere)
    {
        $deleteForm = $this->createDeleteForm($mastere);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\MastereType', $mastere);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mastere);
            $em->flush();

            return $this->redirectToRoute('mastere_edit', array('id' => $mastere->getId()));
        }

        return $this->render('mastere/edit.html.twig', array(
            'mastere' => $mastere,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mastere entity.
     *
     */
    public function deleteAction(Request $request, Mastere $mastere)
    {
        $form = $this->createDeleteForm($mastere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mastere);
            $em->flush();
        }

        return $this->redirectToRoute('mastere_index');
    }

    /**
     * Creates a form to delete a Mastere entity.
     *
     * @param Mastere $mastere The Mastere entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mastere $mastere)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mastere_delete', array('id' => $mastere->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
