<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{


    /**
     * @Route("/main")
     * @Template("CodersLabBundle:Task:main.html.twig")
     */

    public function mainAction(){

        return new Response('hej');
    }


}
