<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Front:index.html.twig');

    }
    public function presentationAction()
    {
        return $this->render('MainBundle:Front:presentation.html.twig');

    }
     public function adhesionAction()
    {
        return $this->render('MainBundle:Front:adhesion.html.twig');

    }
    public function actualiteAction()
    {
        return $this->render('MainBundle:Front:actualite.html.twig');

    }
     public function detailOffreAction($id)
    {
        return $this->render('MainBundle:Front:detail-offre.html.twig');

    }
    public function offreAction($page)
    {
    	if($page==1){

    		return $this->render('MainBundle:Front:offre.html.twig');
    	}
        if ($page==2) {
        	return $this->render('MainBundle:Front:offre_emploi.html.twig');
        }

    }
    public function rapportAction($page)
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
    public function forumAction()
    {
        return $this->render('MainBundle:Front:forum.html.twig');

    }
     public function chatAction()
    {
        return $this->render('MainBundle:Front:chat.html.twig');

    }
     public function contactAction()
    {
        return $this->render('MainBundle:Front:contact.html.twig');

    }
      public function connexionAction()
    {
        return $this->render('MainBundle:Front:connexion.html.twig');

    }
}
