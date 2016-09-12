<?php

namespace MainBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ConnexionType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('login', EmailType::class, array('label'=>'Identifiant','required'=>'true'))
                ->add('password', PasswordType::class, array('label'=>'Mot de passe', 'required'=>'true'))
                ->add('connexion', SubmitType::class, array('label' => 'Se connecter'));

    }

    public function getName()
    {

        return 'Connexion';

    }

}

?>