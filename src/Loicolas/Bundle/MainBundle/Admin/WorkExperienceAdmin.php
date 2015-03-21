<?php

namespace Loicolas\Bundle\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class WorkExperienceAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('company')
            ->add('startAt')
            ->add('endAt')
            ->add('active')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('company')
            ->add('startAt')
            ->add('endAt')
            ->add('active')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('company','sonata_type_model_list', array(
                    'btn_add'       => 'Create',      //Specify a custom label
                    'btn_list'      => 'Select',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                ), array(
                    'placeholder' => 'No company selected'
            ))
            ->add('startAt', null, array(
                'years' => range(2001, date('Y') + 1)
            ))
            ->add('endAt', null, array(
                'years' => range(2001, date('Y') + 1)
            ))
            ->add('missions')
            ->add('active')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('title')
            ->add('company')
            ->add('startAt')
            ->add('endAt')
            ->add('missions')
            ->add('active')
        ;
    }
}
