<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloworldController extends AbstractController
{
    /**
     * @Route("/", name="helloworld")
     */
    public function index()
    {
        return $this->render('helloworld/index.html.twig', [
            'controller_name' => 'HelloworldController',
        ]);
    }
}
