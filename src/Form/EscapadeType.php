<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use App\Entity\Escapade;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EscapadeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price',NumberType::class, ['label'=>'Prix',
                'attr'=>['placeholder'=>'Entrez le prix souhaité']])
            ->add('histoire',TextareaType::class ,['label'=>'Description',
                    'attr'=>['placeholder'=>'decrire le produit']])
            ->add('title',TextType::class,['label'=>'Nom du produit',
                'attr'=>['placeholder'=>'Entrez le nom']])
            ->add('ville',ChoiceType::class, [
                'choices' => [
                    'Nabeul' => 'Nabeul',
                    'Hammamet' => 'Hammamet',
                    'Tozeur' => 'Tozeur',
                    'Sousse' => 'Sousse',
                    'Zaghouan' => 'Zaghouan',
                ] ])
            ->add('image',FileType::class, array('data_class' => null))
            //->add('image',FileType::class,['label'=>'image',
              //  'attr'=>['placeholder'=>'telecharger une image']])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Escapade::class,
        ]);
    }
}
