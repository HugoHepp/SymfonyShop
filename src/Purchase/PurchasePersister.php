<?php

namespace App\Purchase;

use App\Cart\CartService;
use DateTime;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

class PurchasePersister
{
    protected $security;
    protected $cartService;
    protected $entityManager;

    public function __construct(Security $security, CartService $cartService, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->cartService = $cartService;
        $this->entityManager = $entityManager;
    }

    public function storePurchase(Purchase $purchase)
    {

        $purchase->setUser($this->security->getUser());
        $purchase->setPurchasedAt(new DateTime())
                 ->setTotal($this->cartService->getTotal());


        $this->entityManager->persist($purchase);

        foreach($this->cartService->getDetailledCartItem() as $cartItem)
        {
            $purchaseItem = new PurchaseItem;
            $purchaseItem->setPurchase($purchase)
            ->setProduct($cartItem->product)
            ->setProductTitle($cartItem->product->getTitle())
            ->setQuantity($cartItem->qty)
            ->setTotal($cartItem->getTotal())
            ->setProductPrice($cartItem->product->getPrice());


            $this->entityManager->persist($purchaseItem);
        }


        $this->entityManager->flush();
    }
}