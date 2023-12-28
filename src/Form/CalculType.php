<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Dimenssion;
use App\Entity\Epaisseur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dimenssion', EntityType::class,
                array( 'class' => Dimenssion::class,
                    'choice_label' => 'nom',
                    'multiple' => false,
                    'placeholder' => 'Selectionnez une dimension *'))
            ->add('epaisseur', EntityType::class,
                array( 'class' => Epaisseur::class,
                    'choice_label' => 'nom',
                    'multiple' => false,
                    'placeholder' => 'Selectionnez un épaisseur *'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
