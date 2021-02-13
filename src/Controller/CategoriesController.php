<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function index(): Response
    {
        $categoryList = $this->categoryRepository->findAll();

        return $this->render('categories/index.html.twig', [
            "categoryList" => $categoryList
        ]);
    }
    /**
     * @Route("/category/{id}", name="category")
     */
    public function category(ProductRepository $repository, int $id): Response
    {
        $categoryList = $this->categoryRepository->findAll();
        $productByCategory = $repository->findBy(['category'=>$id]);
        return $this->render('categories/category.html.twig', [
            "productByCategory" => $productByCategory,
            "categoryList" => $categoryList
        ]);
    }
    
}
