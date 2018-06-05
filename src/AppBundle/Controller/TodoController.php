<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    /**
     * @Route("/todos", name="todo_list")
     */
    public function listAction(Request $request)
    {
        return $this->render('todo/index.html.twig');
    }
	
	/**
     * @Route("/todos/create", name="todo_create")
     */
    public function createAction(Request $request)
    {
        return $this->render('todo/create.html.twig');
    }
	s
	/**
     * @Route("/todos/edit{id}", name="todo_edit")
     */	
    public function editAction(Request $request)
    {
        return $this->render('todo/edit.html.twig');
    }
}
