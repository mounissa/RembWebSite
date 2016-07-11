<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller
{
       public function getAction($page)
    {
       if($page==1){

            return $this->render('MainBundle:Front:offre.html.twig');
        }
        if ($page==2) {
            return $this->render('MainBundle:Front:offre_emploi.html.twig');
        }
    }
    public function getById($id){

        return $this->render('MainBundle:Front:detail-offre.html.twig');
    }
}