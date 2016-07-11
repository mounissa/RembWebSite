
<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
     public function chatAction()
    {
        return $this->render('MainBundle:Front:chat.html.twig');

    }

}




