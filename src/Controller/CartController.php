<?php

namespace App\Controller;

use App\Cart\CartService;
use App\Form\CartConfirmationType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var CartService
     */
    protected $cartService;

    public function __construct(ProductRepository $productRepository, CartService $cartService)
    {
        $this->productRepository = $productRepository;
        $this->cartService = $cartService;
    }

    /**
     * @Route("cart/add/{id}", name="cart_add")
     */
    public function add(int $id, Request $request): Response
    {

        $product = $this->productRepository->find($id);

        if(!$product){
            throw $this->createNotFoundException("Le produit n'existe pas");
        }

        $this->cartService->add($id);

        $this->addFlash('success', "Le produit à bien été ajouté au panier!");
      
        if($request->query->get('returnToCart'))
        {
            return $this->redirectToRoute('cart');
        }


        return $this->redirectToRoute('product', [
            'id' => $id
        ]);
    
    }

    /**
    * @Route("cart/decrement/{id}", name="cart_decrement", requirements={"id": "\d+"})
     */
    public function decrement(int $id): Response
    {
        $product = $this->productRepository->find($id);

        if(!$product){
            throw $this->createNotFoundException("Le produit n'existe pas");
        }

        $this->cartService->decrement($id);
        $this->addFlash('sucess',"le produit a bien été decrementé");
        return $this->redirectToRoute('cart');

    }



    /**
     * @Route("cart", name="cart")
     */
    public function show(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findAll();

        $detailledCart = $this->cartService->getDetailledCartItem();

        $form = $this->createForm(CartConfirmationType::class);


        $total = $this->cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'items' => $detailledCart,
            'total' => $total,
            'confirmationForm' => $form->createView(),
            "categoryList" => $categories
        ]);

    }


    /**
     * @Route("/cart/delete/{id}", name="cart_delete", requirements = {"id":"\d+"}) 
     */
    public function delete($id){

        $product = $this->productRepository->find($id);
        if(!$product){
            throw $this->createNotFoundException("le produit ne peut pas être supprimé");
        }

        $this->cartService->remove($id);

        $this->addFlash("success", "le produit à bien été supprimé");
        
        return $this->redirectToRoute('cart');
    }


}
