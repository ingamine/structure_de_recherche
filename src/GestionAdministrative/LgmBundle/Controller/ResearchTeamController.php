<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use GestionAdministrative\LgmBundle\Entity\ResearchTeam;
use GestionAdministrative\LgmBundle\Form\ResearchTeamType;

/**
 * ResearchTeam controller.
 *
 */
class ResearchTeamController extends Controller
{
    /**
     * Lists all ResearchTeam entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $researchTeams = $em->getRepository('LgmBundle:ResearchTeam')->findAll();

        return $this->render('researchteam/index.html.twig', array(
            'researchTeams' => $researchTeams,
        ));
    }

    /**
     * Creates a new ResearchTeam entity.
     *
     */
    public function newAction(Request $request)
    {
        $researchTeam = new ResearchTeam();
        $form = $this->createForm('GestionAdministrative\LgmBundle\Form\ResearchTeamType', $researchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($researchTeam);
            $em->flush();

            return $this->redirectToRoute('researchteam_show', array('id' => $researchTeam->getId()));
        }

        return $this->render('researchteam/new.html.twig', array(
            'researchTeam' => $researchTeam,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ResearchTeam entity.
     *
     */
    public function showAction(ResearchTeam $researchTeam)
    {
        $deleteForm = $this->createDeleteForm($researchTeam);

        return $this->render('researchteam/show.html.twig', array(
            'researchTeam' => $researchTeam,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ResearchTeam entity.
     *
     */
    public function editAction(Request $request, ResearchTeam $researchTeam)
    {
        $deleteForm = $this->createDeleteForm($researchTeam);
        $editForm = $this->createForm('GestionAdministrative\LgmBundle\Form\ResearchTeamType', $researchTeam);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($researchTeam);
            $em->flush();

            return $this->redirectToRoute('researchteam_edit', array('id' => $researchTeam->getId()));
        }

        return $this->render('researchteam/edit.html.twig', array(
            'researchTeam' => $researchTeam,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ResearchTeam entity.
     *
     */
    public function deleteAction(Request $request, ResearchTeam $researchTeam)
    {
        $form = $this->createDeleteForm($researchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($researchTeam);
            $em->flush();
        }

        return $this->redirectToRoute('researchteam_index');
    }

    /**
     * Creates a form to delete a ResearchTeam entity.
     *
     * @param ResearchTeam $researchTeam The ResearchTeam entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ResearchTeam $researchTeam)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('researchteam_delete', array('id' => $researchTeam->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
