<?php

namespace projet\symfony2Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use projet\symfony2Bundle\Entity\ChefDEnquete;
use projet\symfony2Bundle\Form\ChefDEnqueteType;

/**
 * ChefDEnquete controller.
 *
 */
class ChefDEnqueteController extends Controller
{

    /**
     * Lists all ChefDEnquete entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('projetBundle:ChefDEnquete')->findAll();

        return $this->render('projetBundle:ChefDEnquete:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ChefDEnquete entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ChefDEnquete();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chefdenquete_show', array('id' => $entity->getId())));
        }

        return $this->render('projetBundle:ChefDEnquete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a ChefDEnquete entity.
    *
    * @param ChefDEnquete $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(ChefDEnquete $entity)
    {
        $form = $this->createForm(new ChefDEnqueteType(), $entity, array(
            'action' => $this->generateUrl('chefdenquete_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ChefDEnquete entity.
     *
     */
    public function newAction()
    {
        $entity = new ChefDEnquete();
        $form   = $this->createCreateForm($entity);

        return $this->render('projetBundle:ChefDEnquete:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ChefDEnquete entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:ChefDEnquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChefDEnquete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('projetBundle:ChefDEnquete:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ChefDEnquete entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:ChefDEnquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChefDEnquete entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('projetBundle:ChefDEnquete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ChefDEnquete entity.
    *
    * @param ChefDEnquete $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ChefDEnquete $entity)
    {
        $form = $this->createForm(new ChefDEnqueteType(), $entity, array(
            'action' => $this->generateUrl('chefdenquete_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ChefDEnquete entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:ChefDEnquete')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ChefDEnquete entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chefdenquete_edit', array('id' => $id)));
        }

        return $this->render('projetBundle:ChefDEnquete:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ChefDEnquete entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('projetBundle:ChefDEnquete')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ChefDEnquete entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chefdenquete'));
    }

    /**
     * Creates a form to delete a ChefDEnquete entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chefdenquete_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
