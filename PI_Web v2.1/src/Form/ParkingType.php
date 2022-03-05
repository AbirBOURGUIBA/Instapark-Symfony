<?php

namespace App\Form;

use App\Entity\Parking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParkingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_parking', TextType::class,[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('nbr_place', TextType::class,[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('latitude_parking', TextType::class,[
                'attr' => ['class' => 'form-control'],])

            ->add('longitude_parking', TextType::class,[
                'attr' => ['class' => 'form-control'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Parking::class,
        ]);
    }
}
