<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HhhController extends AbstractController
{
    #[Route('/hhh', name: 'app_hhh')]
    public function index(): Response
    {
        return $this->render('hhh/index.html.twig', [
            'controller_name' => 'HhhController',
        ]);
    }
}
