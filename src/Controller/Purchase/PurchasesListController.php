<?php

namespace App\Controller\Purchase;

use App\Entity\User;
use App\Repository\CategoryRepository;
use Twig\Environment;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PurchasesListController extends AbstractController{

    protected $security;
    protected $router;
    protected $twig;

    public function __construct(Security $security, RouterInterface $router, Environment $twig)
    {
        $this->security = $security;
        $this->router = $router;
        $this->twig = $twig;
    }


    /**
     * 
     * @Route("/purchases", name="purchase_index")
     * 
     */
    public function index(CategoryRepository $categoryRepository)
    {
        //Get user logged
        /**
         * @var User
         */
        $user = $this->security->getUser();
        $categories = $categoryRepository->findAll();


        //If not logged return
        if(!$user)
        {
            throw new AccessDeniedException('You should be logged in');
        }

        //Create html
        $html = $this->twig->render('purchases/index.html.twig',[
            'purchases' => $user->getPurchases(),
            "categoryList" => $categories
        ]);
        
        return new Response($html);
    }

}