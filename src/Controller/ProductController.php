<?php

namespace App\Controller;
use App\Entity\Produit;

use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/product/add', name: 'app_add_product')]
    public function add(Request $request): Response
    {
        //charge le form
        $product = new Produit();
        $form = $this->createForm(ProductType::class, $product) ;

        $form->handleRequest($request);
        return $this->render('product/add.html.twig', [
            'controller_name' => 'addProductController',
        ]);
    }
}
