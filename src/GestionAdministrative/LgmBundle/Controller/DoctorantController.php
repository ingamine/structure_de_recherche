<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GestionAdministrative\LgmBundle\Entity\Doctorant;
use GestionAdministrative\LgmBundle\Form\DoctorantType;

/**
 * Doctorant controller.
 *
 * @Route("/doctorant")
 */
class DoctorantController extends Controller
{
    /**
     * Lists all Doctorant entities.
     *
     * @Route("/", name="doctorant_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $doctorants = $em->getRepository('LgmBundle:Doctorant')->findAll();

        return $this->render('doctorant/index.html.twig', array(
            'doctorants' => $doctorants,
        ));
    }

    /**
     * Creates a new Doctorant entity.
     *
     * @Route("/new", name="doctorant_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $doctorant = new Doctorant();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\DoctorantType', $doctorant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doctorant);
            $em->flush();

            return $this->redirectToRoute('doctorant_show', array('id' => $doctorant->getId()));
        }

        return $this->render('doctorant/new.html.twig', array(
            'doctorant' => $doctorant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Doctorant entity.
     *
     * @Route("/{id}", name="doctorant_show")
     * @Method("GET")
     */
    public function showAction(Doctorant $doctorant)
    {
        $deleteForm = $this->createDeleteForm($doctorant);

        return $this->render('doctorant/show.html.twig', array(
            'doctorant' => $doctorant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Doctorant entity.
     *
     * @Route("/{id}/edit", name="doctorant_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Doctorant $doctorant)
    {
        $deleteForm = $this->createDeleteForm($doctorant);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\DoctorantType', $doctorant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doctorant);
            $em->flush();

            return $this->redirectToRoute('doctorant_edit', array('id' => $doctorant->getId()));
        }

        return $this->render('doctorant/edit.html.twig', array(
            'doctorant' => $doctorant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Doctorant entity.
     *
     * @Route("/{id}", name="doctorant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Doctorant $doctorant)
    {
        $form = $this->createDeleteForm($doctorant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($doctorant);
            $em->flush();
        }

        return $this->redirectToRoute('doctorant_index');
    }

    /**
     * Creates a form to delete a Doctorant entity.
     *
     * @param Doctorant $doctorant The Doctorant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Doctorant $doctorant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('doctorant_delete', array('id' => $doctorant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
