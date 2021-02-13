<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\AddProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AddProductController extends AbstractController
{
    /**
     * @Route("/admin/add_product", name="add_product")
     */
    public function index(EntityManagerInterface $entity, Request $request, ValidatorInterface $validator): Response
    {
         $product = new Product();

         $form = $this->createForm(AddProductType::class, $product);
 
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

             $product = $form->getData();
             $errors = $validator->validate($product);

             if (count($errors) > 0) {
          
                 $errorsString = (string) $errors;
         
                 return new Response($errorsString);
             }

             
             $entity->persist($product);
             $entity->flush();
             dump($product);
 
             return $this->redirectToRoute('home');
         }
 
    return $this->render('add_product/index.html.twig', [
            'form' => $form->createView(),]);



    }
}
