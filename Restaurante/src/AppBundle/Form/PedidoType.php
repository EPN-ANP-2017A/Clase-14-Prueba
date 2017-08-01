<?php

namespace AppBundle\Form;

use AppBundle\AppBundle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PedidoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cliente', EntityType::class, array(
                	'class' => 'AppBundle:Cliente',
	                'placeholder' => 'Seleccione un cliente...',
	                'choice_label' => 'nombre'
                ))
                ->add('plato', EntityType::class, array(
                	'class' => 'AppBundle:Plato',
	                'choice_label' => 'nombre',
	                'placeholder' => 'Seleccione un plato...',
	                'mapped' => false
                ))
                ->add('cantidad', IntegerType::class, array(
	                'mapped' => false
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pedido'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_pedido';
    }


}
