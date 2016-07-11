<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
       public function getAllAction()
    {
           return $this->render('MainBundle:Front:forum.html.twig');
    }

}