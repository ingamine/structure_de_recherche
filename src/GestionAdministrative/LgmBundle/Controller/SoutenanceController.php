<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Soutenance;
use GestionAdministrative\LgmBundle\Form\SoutenanceType;

/**
 * Soutenance controller.
 *
 */
class SoutenanceController extends Controller
{
    /**
     * Lists all Soutenance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $soutenances = $em->getRepository('LgmBundle:Soutenance')->findAll();

        return $this->render('soutenance/index.html.twig', array(
            'soutenances' => $soutenances,
        ));
    }

    /**
     * Creates a new Soutenance entity.
     *
     */
    public function newAction(Request $request)
    {
        $soutenance = new Soutenance();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\SoutenanceType', $soutenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soutenance);
            $em->flush();

            return $this->redirectToRoute('soutenance_show', array('id' => $soutenance->getId()));
        }

        return $this->render('soutenance/new.html.twig', array(
            'soutenance' => $soutenance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Soutenance entity.
     *
     */
    public function showAction(Soutenance $soutenance)
    {
        $deleteForm = $this->createDeleteForm($soutenance);

        return $this->render('soutenance/show.html.twig', array(
            'soutenance' => $soutenance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Soutenance entity.
     *
     */
    public function editAction(Request $request, Soutenance $soutenance)
    {
        $deleteForm = $this->createDeleteForm($soutenance);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\SoutenanceType', $soutenance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soutenance);
            $em->flush();

            return $this->redirectToRoute('soutenance_edit', array('id' => $soutenance->getId()));
        }

        return $this->render('soutenance/edit.html.twig', array(
            'soutenance' => $soutenance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Soutenance entity.
     *
     */
    public function deleteAction(Request $request, Soutenance $soutenance)
    {
        $form = $this->createDeleteForm($soutenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($soutenance);
            $em->flush();
        }

        return $this->redirectToRoute('soutenance_index');
    }

    /**
     * Creates a form to delete a Soutenance entity.
     *
     * @param Soutenance $soutenance The Soutenance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Soutenance $soutenance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soutenance_delete', array('id' => $soutenance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
