<?php

namespace projet\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('projetBundle:Default:index.html.twig', array('name' => $name));
    }
}
