<?php

namespace CodersLabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('date', 'date',array(
                'input' => 'datetime',
                'widget' => 'single_text',
                'attr' => array(
                    'class' => 'calendar'
                )))
            ->add('status', 'choice', ['label'    => 'Status',
                'multiple' => false,
                'choices'  => ['0'=>'----','Zrobiony' => 'Zrobiony', 'Do zrobienia' => 'Do zrobienia']])
            ->add('priority','choice', ['label'    => 'Priority',
                'multiple' => false,
                'choices'  => ['0'=>'----','Pilny' => 'Pilny', 'Ważny' => 'Ważny', 'Normalny'=>'Normalny']]) ;
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CodersLabBundle\Entity\Task'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'coderslabbundle_task';
    }
}
