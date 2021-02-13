<?php

namespace App\Controller\Purchase;

use App\Entity\Purchase;
use App\Repository\CategoryRepository;
use App\Repository\PurchaseRepository;
use App\Stripe\StripeService;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PurchasePaymentController extends AbstractController
{
    /**
     * 
     *@Route("/purchase/payment/{id}", name="purchase_payment_form")
     *@IsGranted("ROLE_USER")
     */
    
        public function showCardForm($id, PurchaseRepository $purchaseRepository, StripeService $stripeService, CategoryRepository $categoryRepository){

        $purchase = $purchaseRepository->find($id);
        $categories = $categoryRepository->findAll();

        if (!$purchase || 
        $purchase->getUser() !== $this->getUser() || 
       ($purchase && $purchase->getStatus() === Purchase::STATUS_PAID)){
           
            return $this->redirectToRoute('cart');
        }

        $intent = $stripeService->getPaymentIntent($purchase);

        return $this->render('purchases/payment.html.twig', [
            'clientSecret' => $intent->client_secret,
            'purchase' => $purchase,
            'stripePublicKey' => $stripeService->getPublicKey(),
            'categoryList' => $categories
        ]);
    }
}