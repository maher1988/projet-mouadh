<?php

namespace projet\symfony2Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use projet\symfony2Bundle\Entity\Equip;
use projet\symfony2Bundle\Form\EquipType;

/**
 * Equip controller.
 *
 */
class EquipController extends Controller
{

    /**
     * Lists all Equip entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('projetBundle:Equip')->findAll();

        return $this->render('projetBundle:Equip:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Equip entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Equip();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('equip_show', array('id' => $entity->getId())));
        }

        return $this->render('projetBundle:Equip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Equip entity.
    *
    * @param Equip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Equip $entity)
    {
        $form = $this->createForm(new EquipType(), $entity, array(
            'action' => $this->generateUrl('equip_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Equip entity.
     *
     */
    public function newAction()
    {
        $entity = new Equip();
        $form   = $this->createCreateForm($entity);

        return $this->render('projetBundle:Equip:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Equip entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:Equip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('projetBundle:Equip:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Equip entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:Equip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equip entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('projetBundle:Equip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Equip entity.
    *
    * @param Equip $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equip $entity)
    {
        $form = $this->createForm(new EquipType(), $entity, array(
            'action' => $this->generateUrl('equip_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Equip entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('projetBundle:Equip')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Equip entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('equip_edit', array('id' => $id)));
        }

        return $this->render('projetBundle:Equip:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Equip entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('projetBundle:Equip')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Equip entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('equip'));
    }

    /**
     * Creates a form to delete a Equip entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equip_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
