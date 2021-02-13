<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewArrivalsController extends AbstractController
{
    /**
     * @Route("/new_arrivals", name="new_arrivals")
     */
    public function index(ProductRepository $productRepository, CategoryRepository $categoryRepository): Response
    {
        $productList = $productRepository->findBy(array(),array('creationDate' => 'DESC'));
        $categories = $categoryRepository->findAll();
        return $this->render('new_arrivals/index.html.twig', [
            'productList' => $productList,
            'categoryList' => $categories
        ]);
    }
}
