<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index(ProductRepository $repository, int $id, CategoryRepository $categoryRepository): Response
    {
        $product = $repository->findBy(['id'=>$id]);
        $categories = $categoryRepository->findAll();


        return $this->render('product/index.html.twig', [
            "product" => $product,
            'categoryList' => $categories
        ]);
    }
}
