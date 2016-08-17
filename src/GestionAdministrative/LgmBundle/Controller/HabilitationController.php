<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Habilitation;
use GestionAdministrative\LgmBundle\Form\HabilitationType;

/**
 * Habilitation controller.
 *
 */
class HabilitationController extends Controller
{
    /**
     * Lists all Habilitation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habilitations = $em->getRepository('LgmBundle:Habilitation')->findAll();

        return $this->render('habilitation/index.html.twig', array(
            'habilitations' => $habilitations,
        ));
    }

    /**
     * Creates a new Habilitation entity.
     *
     */
    public function newAction(Request $request)
    {
        $habilitation = new Habilitation();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\HabilitationType', $habilitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habilitation);
            $em->flush();

            return $this->redirectToRoute('habilitation_show', array('id' => $habilitation->getId()));
        }

        return $this->render('habilitation/new.html.twig', array(
            'habilitation' => $habilitation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Habilitation entity.
     *
     */
    public function showAction(Habilitation $habilitation)
    {
        $deleteForm = $this->createDeleteForm($habilitation);

        return $this->render('habilitation/show.html.twig', array(
            'habilitation' => $habilitation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Habilitation entity.
     *
     */
    public function editAction(Request $request, Habilitation $habilitation)
    {
        $deleteForm = $this->createDeleteForm($habilitation);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\HabilitationType', $habilitation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habilitation);
            $em->flush();

            return $this->redirectToRoute('habilitation_edit', array('id' => $habilitation->getId()));
        }

        return $this->render('habilitation/edit.html.twig', array(
            'habilitation' => $habilitation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Habilitation entity.
     *
     */
    public function deleteAction(Request $request, Habilitation $habilitation)
    {
        $form = $this->createDeleteForm($habilitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habilitation);
            $em->flush();
        }

        return $this->redirectToRoute('habilitation_index');
    }

    /**
     * Creates a form to delete a Habilitation entity.
     *
     * @param Habilitation $habilitation The Habilitation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habilitation $habilitation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habilitation_delete', array('id' => $habilitation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
