<?php

namespace Eo\SetefiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SetefiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function getName()
    {
        return 'setefi';
    }
}