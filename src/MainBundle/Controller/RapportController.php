<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RapportController extends Controller
{
       public function getAction($page)
    {

        $paginator=$this->get('knp_paginator');
        $em=$this->getDoctrine()->getManager();
        $query=$this->getDoctrine()->getRepository("MainBundle:WebsiteRapport")->findAll();

        $list= $paginator->paginate($query, $page,1);

        if($page==1){

    		return $this->render('MainBundle:Front:rapport_stage.html.twig', array(
                                  'list'=>$list         
                  ));
    	}
        if ($page==2) {
        	return $this->render('MainBundle:Front:these.html.twig');
        }
        if ($page==3) {
        	return $this->render('MainBundle:Front:memoire.html.twig');
        }
    }
    public function getById($id){

        /*$urlRapport=$id+"-"+$this->getDoctrine()->getRepository('MainBundle:WebsiteRapport')->findDatePublicationById($id);

        return $this->render('MainBundle:Front:')*/
    }
}