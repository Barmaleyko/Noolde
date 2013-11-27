<?php

namespace RoSky\Bundle\NoodleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RoSky\Bundle\NoodleBundle\Entity\GamesList;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GamesController extends Controller
{
    public function showGamesListAction()
    {
        $games = $this->getDoctrine()->getRepository('RoSkyNoodleBundle:GamesList')->findByGstatus('new');

        return $this->render('RoSkyNoodleBundle:Games:gamesList.html.twig', array('games' => $games));
    }

    public function newGameAction()
    {
        $games = new GamesList();
        $form = $this->createFormBuilder($games)
            ->add('gname', 'text', array('label' => 'Название: '))
            ->add('pcount', 'choice', array('label' => 'Кол-во игрококв: ', 'choices' => array('1' => '2','2' => '3', '3' => '4', '4' => '5')))
            ->getForm();

        return $this->render('RoSkyNoodleBundle:Games:newGame.html.twig', array('form' => $form->createView()));
    }

    public function createGameAction(Request $request)
    {
        if ($request->getMethod() === 'POST')
        {
            $game = new GamesList();
            $game->setGname($request->request->get('form[gname]', null, true));
            $game->setPcount($request->request->get('form[pcount]', null, true));
            $game->setGstatus('new');
            $game->setPname($this->getUser()->getUserName());

            $em = $this->getDoctrine()->getManager();
            $em->persist($game);
            $em->flush();

            return new Response('Была создана игра ' . $game->getId());
        }
        else
        {
            return $this->redirect($this->generateUrl('noodle_mainPage'));
        }
    }
}
