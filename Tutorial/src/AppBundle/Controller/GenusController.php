<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\FrameworkExtraBundle\Configuration\Method;
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

        $notes = [
                    'Octopus asked me a riddle, outsmart me',
                    'I counted countd 8 legs... as they wrapped around me',
                    'Inked!'
        ];
     
        return $this->render('genus/show.html.twig', [
            'name'=> $genusName,
            'notes' => $notes
        ]);
       
           
    }

    /**
     * @Route("/genus/{genusName}/notes")
     * @Meth
     */
    public function getNotesAction()
    {

    }
}
