<?php

namespace MainBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChatController extends Controller
{
     public function chatAction()
    {
        return $this->render('MainBundle:Front:chat.html.twig');

    }

}




