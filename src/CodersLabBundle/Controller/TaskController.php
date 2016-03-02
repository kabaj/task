<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TaskController extends Controller
{
    /**
     * @Route("/createtask")
     * @Template()
     */
    public function createtaskAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/alltask")
     * @Template()
     */
    public function alltaskAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/mytask")
     * @Template()
     */
    public function mytaskAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/oldtask")
     * @Template()
     */
    public function oldtaskAction()
    {
        return array(
                // ...
            );    }

}
