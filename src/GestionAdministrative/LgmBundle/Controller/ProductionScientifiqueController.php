<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\ProductionScientifique;
use GestionAdministrative\LgmBundle\Form\ProductionScientifiqueType;

/**
 * ProductionScientifique controller.
 *
 */
class ProductionScientifiqueController extends Controller
{
    /**
     * Lists all ProductionScientifique entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productionScientifiques = $em->getRepository('LgmBundle:ProductionScientifique')->findAll();

        return $this->render('productionscientifique/index.html.twig', array(
            'productionScientifiques' => $productionScientifiques,
        ));
    }

    /**
     * Creates a new ProductionScientifique entity.
     *
     */
    public function newAction(Request $request)
    {
        $productionScientifique = new ProductionScientifique();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\ProductionScientifiqueType', $productionScientifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productionScientifique);
            $em->flush();

            return $this->redirectToRoute('productionscientifique_show', array('id' => $productionScientifique->getId()));
        }

        return $this->render('productionscientifique/new.html.twig', array(
            'productionScientifique' => $productionScientifique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProductionScientifique entity.
     *
     */
    public function showAction(ProductionScientifique $productionScientifique)
    {
        $deleteForm = $this->createDeleteForm($productionScientifique);

        return $this->render('productionscientifique/show.html.twig', array(
            'productionScientifique' => $productionScientifique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProductionScientifique entity.
     *
     */
    public function editAction(Request $request, ProductionScientifique $productionScientifique)
    {
        $deleteForm = $this->createDeleteForm($productionScientifique);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\ProductionScientifiqueType', $productionScientifique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productionScientifique);
            $em->flush();

            return $this->redirectToRoute('productionscientifique_edit', array('id' => $productionScientifique->getId()));
        }

        return $this->render('productionscientifique/edit.html.twig', array(
            'productionScientifique' => $productionScientifique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ProductionScientifique entity.
     *
     */
    public function deleteAction(Request $request, ProductionScientifique $productionScientifique)
    {
        $form = $this->createDeleteForm($productionScientifique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productionScientifique);
            $em->flush();
        }

        return $this->redirectToRoute('productionscientifique_index');
    }

    /**
     * Creates a form to delete a ProductionScientifique entity.
     *
     * @param ProductionScientifique $productionScientifique The ProductionScientifique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProductionScientifique $productionScientifique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productionscientifique_delete', array('id' => $productionScientifique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
