<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActualiteController extends Controller
{
    public function getAction()
    {
        return $this->render('MainBundle:Front:actualite.html.twig');

    }
}