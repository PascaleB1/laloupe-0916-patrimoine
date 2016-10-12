<?php

namespace PatrimoineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PatrimoineBundle\Entity\patrimoine;
use PatrimoineBundle\Form\patrimoineType;

/**
 * patrimoine controller.
 *
 */
class PatrimoineController extends Controller
{
    /**
     * Lists all patrimoine entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $patrimoines = $em->getRepository('PatrimoineBundle:patrimoine')->findAll();

        return $this->render('PatrimoineBundle:patrimoine:index.html.twig', array(
            'patrimoines' => $patrimoines,
        ));
    }

    /**
     * Creates a new patrimoine entity.
     *
     */
    public function newAction(Request $request)
    {
        $patrimoine = new patrimoine();
        $form = $this->createForm('PatrimoineBundle\Form\patrimoineType', $patrimoine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patrimoine);
            $em->flush();

            return $this->redirectToRoute('patrimoine_show', array('id' => $patrimoine->getId()));
        }

        return $this->render('PatrimoineBundle:patrimoine:new.html.twig', array(
            'patrimoine' => $patrimoine,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a patrimoine entity.
     *
     */
    public function showAction(patrimoine $patrimoine)
    {
        $deleteForm = $this->createDeleteForm($patrimoine);

        return $this->render('PatrimoineBundle:patrimoine:show.html.twig', array(
            'patrimoine' => $patrimoine,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing patrimoine entity.
     *
     */
    public function editAction(Request $request, patrimoine $patrimoine)
    {
        $deleteForm = $this->createDeleteForm($patrimoine);
        $editForm = $this->createForm('PatrimoineBundle\Form\patrimoineType', $patrimoine);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($patrimoine);
            $em->flush();

            return $this->redirectToRoute('patrimoine_edit', array('id' => $patrimoine->getId()));
        }

        return $this->render('PatrimoineBundle:patrimoine:edit.html.twig', array(
            'patrimoine' => $patrimoine,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a patrimoine entity.
     *
     */
    public function deleteAction(Request $request, patrimoine $patrimoine)
    {
        $form = $this->createDeleteForm($patrimoine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patrimoine);
            $em->flush();
        }

        return $this->redirectToRoute('patrimoine_index');
    }

    /**
     * Creates a form to delete a patrimoine entity.
     *
     * @param patrimoine $patrimoine The patrimoine entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(patrimoine $patrimoine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('patrimoine_delete', array('id' => $patrimoine->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
