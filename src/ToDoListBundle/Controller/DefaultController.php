<?php

namespace ToDoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ToDoListBundle\Entity\Task;

class DefaultController extends Controller {

    /**
     * @Route("/showAll")
     * @Template()
     */
    public function indexAction() {
        $taskRepo = $this->getDoctrine()->getRepository('ToDoListBundle:Task');
        $tasks = $taskRepo->findAll();

        if(!$tasks) {
            return [
                'error' => 'Brak zadań'
            ];
        }
        
        return [
            'tasks' => $tasks
        ];
    }

    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction(Request $req) {

        $taskRepo = $this->getDoctrine()->getRepository('ToDoListBundle:Task');
        $task = new Task();
        
        $form = $this->createFormBuilder($task)
                ->add('title', 'text', ['label' => 'Nazwa zadania'])
                ->add('description', 'text', ['label' => 'Treść'])
                ->add('date', 'date', ['label' => 'Termin'])
                ->add('save', 'submit', ['label' => 'Dodaj'])
                ->getForm();
        
        $form->handleRequest($req);
        
        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            
            return [
                'success'   => TRUE
            ];
        }
        
        return [
            'form'  => $form->createView()
        ];
    }

}
