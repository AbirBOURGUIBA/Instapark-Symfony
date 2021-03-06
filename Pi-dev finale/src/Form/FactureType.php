<?php

namespace App\Form;

use App\Entity\Facture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nbheure', TextType::class,[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('pu', TextType::class,[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('total', TextType::class,[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateentrer', DateType::class,[
                'attr' => ['class' => 'form-control'],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Facture::class,
        ]);
    }
}
