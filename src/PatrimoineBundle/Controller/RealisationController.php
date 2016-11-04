<?php

namespace PatrimoineBundle\Controller;

use PatrimoineBundle\Entity\Realisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Realisation controller.
 *
 */
class RealisationController extends Controller
{
    /**
     * Lists all Realisation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $realisations = $em->getRepository('PatrimoineBundle:Realisation')->findAll();

        return $this->render('PatrimoineBundle:realisation:index.html.twig', array(
            'realisations' => $realisations,
        ));
    }

    /**
     * Creates a new Realisation entity.
     *
     */
    public function newAction(Request $request)
    {
        $realisation = new Realisation();
        $form = $this->createForm('PatrimoineBundle\Form\RealisationType', $realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisation);
            $em->flush();

            return $this->redirectToRoute('realisation_edit', array('id' => $realisation->getId()));
        }

        return $this->render('PatrimoineBundle:realisation:new.html.twig', array(
            'realisation' => $realisation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Realisation entity.
     *
     */
    public function editAction(Request $request, Realisation $realisation)
    {
        $deleteForm = $this->createDeleteForm($realisation);
        $editForm = $this->createForm('PatrimoineBundle\Form\RealisationType', $realisation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisation);
            $em->flush();

            return $this->redirectToRoute('realisation_edit', array('id' => $realisation->getId()));
        }

        if (null !== ($editForm->get('file1')->getData()))
        {
            $extention = $article->getArticleLogoChemin();
            if (null !== $article->getArticleLogoChemin())
            {
                if (file_exists($article->getAbsolutePath()))
                {
                    unlink($article->getAbsolutePath());
                }
            }
            $article->preUpload();
            if ($article->getArticleLogoChemin() == $extention)
            {
                $article->upload();
            }
        }



        return $this->render('PatrimoineBundle:realisation:edit.html.twig', array(
            'realisation' => $realisation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Realisation entity.
     *
     */
    public function deleteAction(Request $request, Realisation $realisation)
    {
        $form = $this->createDeleteForm($realisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($realisation);
            $em->flush();
        }

        return $this->redirectToRoute('realisation_index');
    }

    /**
     * Creates a form to delete a Realisation entity.
     *
     * @param Realisation $realisation The Realisation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Realisation $realisation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('realisation_delete', array('id' => $realisation->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
