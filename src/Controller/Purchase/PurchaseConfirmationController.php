<?php

namespace App\Controller\Purchase;

use DateTime;
use App\Entity\Purchase;
use App\Cart\CartService;
use App\Entity\PurchaseItem;
use App\Form\CartConfirmationType;
use App\Purchase\PurchasePersister;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PurchaseConfirmationController extends AbstractController
{
    protected $cartService;
    protected $entityManager;
    protected $persister;

    public function __construct(CartService $cartService, EntityManagerInterface $entityManager, PurchasePersister $persister)
    {
        $this->cartService = $cartService;
        $this->persister = $persister;
        $this->entityManager = $entityManager;
    }

    /**
    * @Route("/purchase/confirm", name= "purchase_confirm", priority=1)
    * @IsGranted("ROLE_USER", message="You should be logged in")
    */
    public function confirm(Request $request) {

        // $form = $this->formFactory->create(CartConfirmationType::class);

        $form = $this->createForm(CartConfirmationType::class);



        $form->handleRequest($request);

        if(!$form->isSubmitted()){
            // $flashBag->add('warning', 'You should fill the confirmation form');
            $this->addFlash('warning', 'You should fill the confirmation form');
            // return new RedirectResponse($this->router->generate('cart'));
            $this->redirectToRoute('cart');
        }

        // $user = $this->security->getUser();
        $user = $this->getUser();
        
        /*
        if(!$user){
            throw new AccessDeniedException('You should be logged in');
        }
        Remplacé par annotation isGranted
        */


        $cartItem = $this->cartService->getDetailledCartItem();

        if(!count($cartItem) === 0){
            $this->addFlash('warning',"You can't confirm an empty order");
            return $this->redirectToRoute('cart');
        }

        /** @var Purchase */
        $purchase = $form->getData();
        $this->persister->storePurchase($purchase);

        return $this->redirectToRoute('purchase_payment_form',[
            'id' => $purchase->getId()
        ]);

    }
}