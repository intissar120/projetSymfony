<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);

    }
    #[Route('/contact2', name: 'contact')]
    public function about(): Response
    {
        return $this->render('contact/index.html.twig', [
         'tableau' => ["Intissar","EL Qadi","Toulouse","intissar.elqadi@gmail.com"],

        ]);
    }
}
