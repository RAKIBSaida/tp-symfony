<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;





class VilleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
        
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          
        $builder
        ->add('code',TextType::class, array(
            'label' => 'code',
            'required' => false,
            'attr' => array(
            'placeholder' => '- code -',
        //    'class' => 'complement-adresse input-sm',
            'nom' => 'code',
            'data-num' => 0
              )))

                ->add('libelle',TextType::class, array(
                    'label' => 'libelle',
                    'required' => false,
                    'attr' => array(
                    'placeholder' => '- libelle -',
                //    'class' => 'complement-adresse input-sm',
                    'nom' => 'libelle',
                    'data-num' => 0
                    )))
                    ->add('codePostale',TextType::class, array(
                        'label' => 'codePostale',
                        'required' => false,
                        'attr' => array(
                        'placeholder' => '- codePostale -',
                    //    'class' => 'complement-adresse input-sm',
                        'nom' => 'codePostale',
                        'data-num' => 0
                        )))
                        ->add('IdPays',TextType::class, array(
                            'label' => 'IdPays',
                            'required' => false,
                            'attr' => array(
                            'placeholder' => '- code Pays -',
                        //    'class' => 'complement-adresse input-sm',
                            'nom' => 'IdPays',
                            'data-num' => 0
                            )))
                

            ->add('Ajouter une ville', SubmitType::class);          
 
    }
      
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
      
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ville'
        ));
    }

}
