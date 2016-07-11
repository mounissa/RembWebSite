<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RapportController extends Controller
{
       public function getAction($page)
    {
        if($page==1){

    		return $this->render('MainBundle:Front:rapport_stage.html.twig');
    	}
        if ($page==2) {
        	return $this->render('MainBundle:Front:these.html.twig');
        }
        if ($page==3) {
        	return $this->render('MainBundle:Front:memoire.html.twig');
        }
    }
}