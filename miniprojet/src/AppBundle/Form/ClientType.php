<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Adresse;


class ClientType extends AbstractType
{
   
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
           ->add('nom',TextType::class, array(
            'label' => 'nom',
            'required' => false,
            'attr' => array(
            'placeholder' => '- nom -',
        //    'class' => 'complement-adresse input-sm',
            'nom' => 'nom',
            'data-num' => 0
              )))
        ->add('numClient',TextType::class, array(
                    'label' => 'Num client',
                    'required' => false,
                    'attr' => array(
                    'placeholder' => '- Num client -',
                 //   'class' => 'complement-adresse input-sm',
                    'numclient' => 'numClient',
                    'data-num' => 0
                       )))
         
        ->add('isProspect',TextType::class, array(
            'label' => 'isProspect',
            'required' => false,
            'attr' => array(
            'placeholder' => '- isProspect -',
            //'class' => 'complement-adresse input-sm',
            'isProspect' => 'isProspect',
            'data-num' => 0
                 )))

                
                 ->add('adresse', AdresseType::class,  array(
                    'required' => false,
                    'attr' => array(
                          'class' => 'well'
                    )
              ))

            ->add('Ajouter un Client', SubmitType::class)
              
       ;
    }


     /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }

}
