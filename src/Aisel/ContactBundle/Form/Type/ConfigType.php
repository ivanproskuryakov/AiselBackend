<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aisel\ContactBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Form for Config settings in Backend
 *
 * @author Ivan Proskoryakov <volgodark@gmail.com>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', 'text', array('label' => 'Name', 'attr' => array('class' => 'form-control')))
            ->add('Email', 'email', array('label' => 'E-mail', 'attr' => array('class' => 'form-control')))
            ->add('AddressLine1', 'text', array('label' => 'Address Line 1', 'attr' => array('class' => 'form-control')))
            ->add('AddressLine2', 'text', array('label' => 'Address Line 2', 'required' => false, 'attr' => array('class' => 'form-control')))
            ->add('information', 'ckeditor', array('label' => 'Some Information', 'attr' => array('class' => 'form-control')))
            ->add('save', 'submit', array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary')));

    }

    public function getName()
    {
        return 'config_contact';
    }
}
