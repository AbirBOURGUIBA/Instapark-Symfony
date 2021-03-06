<?php

namespace App\Form;

use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class Admin2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])
        ->add('prenom', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])
        ->add('numtel', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])
        ->add('login', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])   
        ->add('password', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])
        ->add('role', TextType::class,[
            'attr' => ['class' => 'form-control'],
        ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Admin::class,
        ]);
    }
}
