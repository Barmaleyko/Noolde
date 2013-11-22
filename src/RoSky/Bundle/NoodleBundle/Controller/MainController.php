<?php

namespace RoSky\Bundle\NoodleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('RoSkyNoodleBundle:Main:index.html.twig');
    }
}
