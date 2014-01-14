<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Loicolas\Bundle\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContactAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Nom'))
            ->add('firstname', 'text', array('label' => 'Prénom'))
            ->add('email', 'text', array('label' => 'Email'))
            ->add('company', 'text', array('label' => 'Société'))
            ->add('message') 
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('firstname')
            ->add('name')
            ->add('company')
            ->add('email')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstname')
            ->addIdentifier('name')
            ->add('company')
            ->add('email')
        ;
    }
}
