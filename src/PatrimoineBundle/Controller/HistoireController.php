<?php

namespace PatrimoineBundle\Controller;

use PatrimoineBundle\Entity\Histoire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Histoire controller.
 *
 */
class HistoireController extends Controller
{
    /**
     * Lists all histoire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $histoires = $em->getRepository('PatrimoineBundle:Histoire')->findAll();

        return $this->render('PatrimoineBundle:histoire:index.html.twig', array(
            'histoires' => $histoires,
        ));
    }

    /**
     * Creates a new histoire entity.
     *
     */
    public function newAction(Request $request)
    {
        $histoire = new Histoire();
        $form = $this->createForm('PatrimoineBundle\Form\HistoireType', $histoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($histoire);
            $em->flush($histoire);

            return $this->redirectToRoute('histoire_show', array('id' => $histoire->getId()));
        }

        return $this->render('PatrimoineBundle:histoire:new.html.twig', array(
            'histoire' => $histoire,
            'form' => $form->createView(),
        ));
    }
    

    /**
     * Displays a form to edit an existing histoire entity.
     *
     */
    public function editAction(Request $request, Histoire $histoire)
    {
        $deleteForm = $this->createDeleteForm($histoire);
        $editForm = $this->createForm('PatrimoineBundle\Form\HistoireType', $histoire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('histoire_edit', array('id' => $histoire->getId()));
        }

        return $this->render('PatrimoineBundle:histoire:edit.html.twig', array(
            'histoire' => $histoire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a histoire entity.
     *
     */
    public function deleteAction(Request $request, Histoire $histoire)
    {
        $form = $this->createDeleteForm($histoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($histoire);
            $em->flush($histoire);
        }

        return $this->redirectToRoute('histoire_index');
    }

    /**
     * Creates a form to delete a histoire entity.
     *
     * @param Histoire $histoire The histoire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Histoire $histoire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('histoire_delete', array('id' => $histoire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
