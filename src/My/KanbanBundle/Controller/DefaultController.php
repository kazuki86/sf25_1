<?php

namespace My\KanbanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyKanbanBundle:Default:index.html.twig', array('name' => $name));
    }

    public function boardAction($board_id)
    {
        return $this->render('MyKanbanBundle:Default:index.html.twig', array('name' => $board_id));
    }

}
