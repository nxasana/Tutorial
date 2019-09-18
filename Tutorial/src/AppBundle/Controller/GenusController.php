<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        // replace this example code with whatever you need
        $templating = $this->container->get('templating');
        $html = $templating->render('default/index.html.twig',  array(
                'name' => $genusName
        ));
        return new Response($html);
           
    }
}
