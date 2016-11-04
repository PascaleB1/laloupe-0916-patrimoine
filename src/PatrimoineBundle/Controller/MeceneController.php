<?php

namespace PatrimoineBundle\Controller;

use PatrimoineBundle\Entity\Mecene;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Mecene controller.
 *
 */
class MeceneController extends Controller
{
    /**
     * Lists all mecene entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mecenes = $em->getRepository('PatrimoineBundle:Mecene')->findAll();

        return $this->render('PatrimoineBundle:mecene:index.html.twig', array(
            'mecenes' => $mecenes,
        ));
    }

    /**
     * Creates a new mecene entity.
     *
     */
    public function newAction(Request $request)
    {
        $mecene = new Mecene();
        $form = $this->createForm('PatrimoineBundle\Form\MeceneType', $mecene);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mecene);
            $em->flush($mecene);

            return $this->redirectToRoute('mecene_index', array('id' => $mecene->getId()));
        }

        return $this->render('PatrimoineBundle:mecene:new.html.twig', array(
            'mecene' => $mecene,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mecene entity.
     *
     */
    public function editAction(Request $request, Mecene $mecene)
    {
        $deleteForm = $this->createDeleteForm($mecene);
        $editForm = $this->createForm('PatrimoineBundle\Form\MeceneType', $mecene);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mecene_edit', array('id' => $mecene->getId()));
        }

        return $this->render('PatrimoineBundle:mecene:edit.html.twig', array(
            'mecene' => $mecene,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mecene entity.
     *
     */
    public function deleteAction(Request $request, Mecene $mecene)
    {
        $form = $this->createDeleteForm($mecene);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mecene);
            $em->flush($mecene);
        }

        return $this->redirectToRoute('mecene_index');
    }

    /**
     * Creates a form to delete a mecene entity.
     *
     * @param Mecene $mecene The mecene entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mecene $mecene)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mecene_delete', array('id' => $mecene->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}

