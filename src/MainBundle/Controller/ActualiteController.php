<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function getAction()
    {
        return $this->render('MainBundle:Front:actualite.html.twig');

    }
}