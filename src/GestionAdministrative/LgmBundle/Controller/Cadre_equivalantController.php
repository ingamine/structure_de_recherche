<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Cadre_equivalant;
use GestionAdministrative\LgmBundle\Form\Cadre_equivalantType;

/**
 * Cadre_equivalant controller.
 *
 */
class Cadre_equivalantController extends Controller
{
    /**
     * Lists all Cadre_equivalant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cadre_equivalants = $em->getRepository('LgmBundle:Cadre_equivalant')->findAll();

        return $this->render('cadre_equivalant/index.html.twig', array(
            'cadre_equivalants' => $cadre_equivalants,
        ));
    }

    /**
     * Creates a new Cadre_equivalant entity.
     *
     */
    public function newAction(Request $request)
    {
        $cadre_equivalant = new Cadre_equivalant();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\Cadre_equivalantType', $cadre_equivalant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cadre_equivalant);
            $em->flush();

            return $this->redirectToRoute('cadre_equivalant_show', array('id' => $cadre_equivalant->getId()));
        }

        return $this->render('cadre_equivalant/new.html.twig', array(
            'cadre_equivalant' => $cadre_equivalant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cadre_equivalant entity.
     *
     */
    public function showAction(Cadre_equivalant $cadre_equivalant)
    {
        $deleteForm = $this->createDeleteForm($cadre_equivalant);

        return $this->render('cadre_equivalant/show.html.twig', array(
            'cadre_equivalant' => $cadre_equivalant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cadre_equivalant entity.
     *
     */
    public function editAction(Request $request, Cadre_equivalant $cadre_equivalant)
    {
        $deleteForm = $this->createDeleteForm($cadre_equivalant);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\Cadre_equivalantType', $cadre_equivalant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cadre_equivalant);
            $em->flush();

            return $this->redirectToRoute('cadre_equivalant_edit', array('id' => $cadre_equivalant->getId()));
        }

        return $this->render('cadre_equivalant/edit.html.twig', array(
            'cadre_equivalant' => $cadre_equivalant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cadre_equivalant entity.
     *
     */
    public function deleteAction(Request $request, Cadre_equivalant $cadre_equivalant)
    {
        $form = $this->createDeleteForm($cadre_equivalant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cadre_equivalant);
            $em->flush();
        }

        return $this->redirectToRoute('cadre_equivalant_index');
    }

    /**
     * Creates a form to delete a Cadre_equivalant entity.
     *
     * @param Cadre_equivalant $cadre_equivalant The Cadre_equivalant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cadre_equivalant $cadre_equivalant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cadre_equivalant_delete', array('id' => $cadre_equivalant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
