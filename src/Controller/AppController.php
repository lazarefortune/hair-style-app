<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {

        $user = $this->getUser();

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'user' => $user,
        ]);
    }
}
