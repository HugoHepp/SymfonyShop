<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    protected $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        
        $users = [];


        for ($u = 0; $u < 5; $u++)
        {
            $user = new User();
            $hash = $this->encoder->encodePassword($user, 'password');
            $user->setEmail("user$u@gmail.com")
                 ->setPassword($hash);
            $users[]=$user;
            $manager->persist($user);
            
        }

        $products = [];
        $categories = ['Electronics', 'Outdoor', 'Beauty', 'Games', 'Music', 'Movies'];

        
        foreach ( $categories as $categoryElement)
        {

            $category = new Category;
            $category->setTitle($categoryElement);
            $manager->persist($category);

            for($i = 0; $i < 8; $i++)
            {
                $product = new Product;
                $product->setTitle($faker->words($nb = 1, $asText = true));
                $product->setPrice(random_int(1000,50000));
                $product->setCreationDate($faker->dateTimeBetween('-6 months'));
                $product->setDescription($faker->text(15));
                $product->setImg('https://picsum.photos/id/'. rand(1,50) .'/400/400');
                $product->setCountSold(rand(500,2500));   
                $product->setCategory($category);  
                
                $products[] = $product;

                $manager->persist($product);
            }


        }

        for($p = 0; $p < mt_rand(5,10); $p++ )
        {
            $purchase = new Purchase();

            $purchase->setFullName($faker->name())
                ->setAdress($faker->streetAddress)
                ->setPostalCode($faker->postcode)
                ->setCity($faker->city)
                ->setUser($faker->randomElement($users))
                ->setTotal(mt_rand(50,200))
                ->setPurchasedAt($faker->dateTimeBetween('-6 months'));
            
            
            $selectedProducts = $faker->randomElements($products, mt_rand(3,5));

            foreach ($selectedProducts as $product)
            {
                $purchaseItem = new PurchaseItem;
                $purchaseItem->setProduct($product)
                            ->setQuantity(mt_rand(1,3))
                            ->setProductTitle($product->getTitle())
                            ->setProductPrice($product->getPrice())
                            ->setTotal(
                                $purchaseItem->getProductPrice() * $purchaseItem->getQuantity()
                            )
                            ->setPurchase($purchase);
                $manager->persist($purchaseItem);

            }

            if($faker->boolean(90))
            {
                $purchase->setStatus(Purchase::STATUS_PAID);
            }

            $manager->persist($purchase);
            

        }

        $manager->flush();
    }
}
