<?php

namespace RoSky\Bundle\NoodleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RoSkyNoodleBundle:Default:index.html.twig', array('name' => $name));
    }
}
