<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\Groupes;
use GestionAdministrative\LgmBundle\Form\GroupesType;

/**
 * Groupes controller.
 *
 */
class GroupesController extends Controller
{
    /**
     * Lists all Groupes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groupes = $em->getRepository('LgmBundle:Groupes')->findAll();

        return $this->render('groupes/index.html.twig', array(
            'groupes' => $groupes,
        ));
    }

    /**
     * Creates a new Groupes entity.
     *
     */
    public function newAction(Request $request)
    {
        $groupes = new Groupes();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\GroupesType', $groupes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupes);
            $em->flush();

            return $this->redirectToRoute('groupes_show', array('id' => $groupes->getId()));
        }

        return $this->render('groupes/new.html.twig', array(
            'groupe' => $groupes,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Groupes entity.
     *
     */
    public function showAction(Groupes $groupes)
    {
        $deleteForm = $this->createDeleteForm($groupes);

        return $this->render('groupes/show.html.twig', array(
            'groupes' => $groupes,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Groupes entity.
     *
     */
    public function editAction(Request $request, Groupes $groupes)
    {
        $deleteForm = $this->createDeleteForm($groupes);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\GroupesType', $groupes);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupes);
            $em->flush();

            return $this->redirectToRoute('groupes_edit', array('id' => $groupes->getId()));
        }

        return $this->render('groupes/edit.html.twig', array(
            'groupes' => $groupes,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Groupes entity.
     *
     */
    public function deleteAction(Request $request, Groupes $groupes)
    {
        $form = $this->createDeleteForm($groupes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($groupes);
            $em->flush();
        }

        return $this->redirectToRoute('groupes_index');
    }

    /**
     * Creates a form to delete a Groupes entity.
     *
     * @param Groupes $groupe The Groupes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Groupes $groupes)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groupes_delete', array('id' => $groupes->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
