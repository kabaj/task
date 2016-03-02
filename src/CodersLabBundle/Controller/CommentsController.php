<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CommentsController extends Controller
{
    /**
     * @Route("/addcomments")
     * @Template()
     */
    public function addcommentsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/allcomments")
     * @Template()
     */
    public function allcommentsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/mycomments")
     * @Template()
     */
    public function mycommentsAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/removecomments")
     * @Template()
     */
    public function removecommentsAction()
    {
        return array(
                // ...
            );    }

}
