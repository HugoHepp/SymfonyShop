<?php

namespace App\Form;

use App\Entity\Purchase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartConfirmationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Full name',
                'attr' => [
                    'placeholder'=> 'Full name for delivery',
                ]
            ])
            ->add('adress', TextareaType::class, [
                'label' => 'Full address',
                'attr'=> [
                    'placeholder'=>'Full address for delivery'
                ]
            ])
            ->add('postalCode', TextType::class,
            [
                'label' => 'Zip code',
                'attr' => [
                    'placeholder' => 'Zip code'
                ]
            ])
            ->add('city', TextType::class,[
                'label' => 'City',
                'attr' => [
                    'placeholder' => 'City'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Purchase::class
        ]);
    }
}
