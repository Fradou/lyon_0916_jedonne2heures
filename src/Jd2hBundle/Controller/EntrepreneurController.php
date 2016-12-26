<?php

namespace Jd2hBundle\Controller;

use Jd2hBundle\Entity\Entrepreneur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Entrepreneur controller.
 *
 */
class EntrepreneurController extends Controller
{
    /**
     * Lists all entrepreneur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entrepreneurs = $em->getRepository('Jd2hBundle:Entrepreneur')->findAll();

        return $this->render('entrepreneur/index.html.twig', array(
            'entrepreneurs' => $entrepreneurs,
        ));
    }

    /**
     * Creates a new entrepreneur entity, for back only !
     *
     */
    public function newAction(Request $request)
    {
        $entrepreneur = new Entrepreneur();
        $form = $this->createForm('Jd2hBundle\Form\EntrepreneurType', $entrepreneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entrepreneur);
            $em->flush($entrepreneur);

            return $this->redirectToRoute('entrepreneur_show', array('id' => $entrepreneur->getId()));
        }

        return $this->render('entrepreneur/new.html.twig', array(
            'entrepreneur' => $entrepreneur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a entrepreneur entity.
     *
     */
    public function showAction(Entrepreneur $entrepreneur)
    {
        $deleteForm = $this->createDeleteForm($entrepreneur);

        return $this->render('entrepreneur/show.html.twig', array(
            'entrepreneur' => $entrepreneur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing entrepreneur entity.
     *
     */
    public function editAction(Request $request, Entrepreneur $entrepreneur)
    {
        $deleteForm = $this->createDeleteForm($entrepreneur);
        $editForm = $this->createForm('Jd2hBundle\Form\EntrepreneurType', $entrepreneur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entrepreneur_edit', array('id' => $entrepreneur->getId()));
        }

        return $this->render('entrepreneur/edit.html.twig', array(
            'entrepreneur' => $entrepreneur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a entrepreneur entity.
     *
     */
    public function deleteAction(Request $request, Entrepreneur $entrepreneur)
    {
        $form = $this->createDeleteForm($entrepreneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entrepreneur);
            $em->flush($entrepreneur);
        }

        return $this->redirectToRoute('entrepreneur_index');
    }

    /**
     * Creates a form to delete a entrepreneur entity.
     *
     * @param Entrepreneur $entrepreneur The entrepreneur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entrepreneur $entrepreneur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entrepreneur_delete', array('id' => $entrepreneur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
