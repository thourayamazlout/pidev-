<?php

namespace App\Form;

use App\Entity\Maisondhote;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class MaisondhoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nommaison')
            ->add('Ville')
            ->add('Address')
            ->add('Nombrechambres')
            ->add('prix')
            ->add('Description')
            ->add('Image', FileType::class, array('data_class' => null))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Maisondhote::class,
        ]);
    }
}
