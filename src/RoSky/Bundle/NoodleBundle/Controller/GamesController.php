<?php

namespace RoSky\Bundle\NoodleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GamesController extends Controller
{
    public function showGamesListAction()
    {
        return $this->render('RoSkyNoodleBundle:Games:gamesList.html.twig');
    }
}
