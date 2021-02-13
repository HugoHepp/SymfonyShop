<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @Route("/search", name="home_search")
     */
    public function index(ProductRepository $repository, CategoryRepository $categoryRepository, Request $request): Response
    {

        $categories = $categoryRepository->findAll();

        if($req = $request->query->get('item'))
        {
            $productList = $repository->findBy(['title' => $req]);   
                  
            return $this->render('home/search.html.twig', [
                "productList" => $productList,
                "categoryList" => $categories
            ]);   
        } else {
            
            $productList = $repository->findBy([],['countSold' => 'DESC']);
        }

        return $this->render('home/index.html.twig', [
            "productList" => $productList,
            "categoryList" => $categories
        ]);
    }





}
