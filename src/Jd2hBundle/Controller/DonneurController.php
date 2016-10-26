<?php

namespace Jd2hBundle\Controller;

use Jd2hBundle\Entity\Donneur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Donneur controller.
 *
 */
class DonneurController extends Controller
{
    /**
     * Lists all donneur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donneurs = $em->getRepository('Jd2hBundle:Donneur')->findAll();

        return $this->render('donneur/index.html.twig', array(
            'donneurs' => $donneurs,
        ));
    }

    /**
     * Creates a new donneur entity, for back only !
     *
     */
    public function newAction(Request $request)
    {
        $donneur = new Donneur();
        $form = $this->createForm('Jd2hBundle\Form\DonneurType', $donneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($donneur);
            $em->flush($donneur);

            return $this->redirectToRoute('donneur_show', array('id' => $donneur->getId()));
        }

        return $this->render('donneur/new.html.twig', array(
            'donneur' => $donneur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a donneur entity.
     *
     */
    public function showAction(Donneur $donneur)
    {
        $deleteForm = $this->createDeleteForm($donneur);

        return $this->render('donneur/show.html.twig', array(
            'donneur' => $donneur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing donneur entity.
     *
     */
    public function editAction(Request $request, Donneur $donneur)
    {
        $deleteForm = $this->createDeleteForm($donneur);
        $editForm = $this->createForm('Jd2hBundle\Form\DonneurType', $donneur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('donneur_edit', array('id' => $donneur->getId()));
        }

        return $this->render('donneur/edit.html.twig', array(
            'donneur' => $donneur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a donneur entity.
     *
     */
    public function deleteAction(Request $request, Donneur $donneur)
    {
        $form = $this->createDeleteForm($donneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($donneur);
            $em->flush($donneur);
        }

        return $this->redirectToRoute('donneur_index');
    }

    /**
     * Creates a form to delete a donneur entity.
     *
     * @param Donneur $donneur The donneur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Donneur $donneur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('donneur_delete', array('id' => $donneur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
