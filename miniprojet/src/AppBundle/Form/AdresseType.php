<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Ville;
use AppBundle\Entity\Pays;

class AdresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numero',TextType::class, array(
            'label' => 'numero',
            'required' => false,
            'attr' => array(
            'placeholder' => '- numero -',
        //    'class' => 'complement-adresse input-sm',
            'nom' => 'numero',
            'data-num' => 0
              )))
              ->add('complement',TextType::class, array(
                'label' => 'complement',
                'required' => false,
                'attr' => array(
                'placeholder' => '- complement -',
            //    'class' => 'complement-adresse input-sm',
                'nom' => 'complement',
                'data-num' => 0
                  )))
               

        ->add('Ville', EntityType::class, array(
            'label' => 'Ville',
            'placeholder' => '- Ville -',
            'class' => 'AppBundle:Ville',
            'choice_label' => 'libelle',
            'attr' => array(
                'class' => 'ville',
                'data-partie' => 'ville',
                'data-num' => ''
                )))
                ->add('pays', EntityType::class, array(
                    'label' => 'Pays',
                    'placeholder' => '- Pays -',
                    'class' => 'AppBundle:Pays',
                    'choice_label' => 'libelle',
                    'attr' => array(
                        'class' => 'pays',
                        'data-partie' => 'pays',
                        'data-num' => ''
                    
            ))) ;
    }
    





    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Adresse'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_adresse';
    }


}
