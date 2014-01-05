<?php

namespace Loicolas\Bundle\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'Nom *' ))
            ->add('firstname', null, array('label' => 'Prénom *' ))
            ->add('email', 'email', array('label' => 'Email *' ))
            ->add('company', null, array('label' => 'Entreprise *' ))
            ->add('message', null, array('label' => 'Message *' ))
            ->add('human', 'hidden', array('label' => '' ))
            ->add('send', 'submit', array('label' => 'Envoyer'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Loicolas\Bundle\MainBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'loicolas_bundle_mainbundle_contact';
    }
}
