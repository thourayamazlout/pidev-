<?php

namespace App\Form;

//use App\Entity\Classroom;
use App\Entity\Escapade;
use App\Entity\Reservationesc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class ReservationescType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('nbrepers',NumberType::class, ['label'=>'Prix',
                'attr'=>['placeholder'=>'nombre de personnes']])
            ->add('commentaire',TextType::class,['label'=>'Nom du produit',
                'attr'=>['placeholder'=>'Entrez un commentaire']])
            ->add('tel',NumberType::class, ['label'=>'Prix',
                'attr'=>['placeholder'=>'numéro de télephone']])
            ->add('escapade',EntityType::class,['class'=>Escapade::class,'choice_label'=>'title'])
            ->add('dateres',DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservationesc::class,
        ]);
    }
}
