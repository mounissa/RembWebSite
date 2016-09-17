<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActualiteController extends Controller
{
    public function getAllAction($page)
    {
      $agenda=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();
    	$lastActu=$this->getDoctrine()->getRepository('MainBundle:WebsiteActualite')->getLastActu();
      $fourLastActu=$this->getDoctrine()->getRepository('MainBundle:WebsiteActualite')->getFourLastActu();

        $paginator=$this->get('knp_paginator');
        $em=$this->getDoctrine()->getManager();
        $query=$em->createQuery('select a from MainBundle:WebsiteActualite a order by a.date desc');
        $pagination = $paginator->paginate($query, $page,3);

        return $this->render('MainBundle:Front:actualite.html.twig', array(
             'actu'=>$pagination,
             'agenda'=>$agenda,
             'lastActu'=>$lastActu,
             'fourLastActu'=>$fourLastActu,
        
             
        	));

    }

    public function getByIdAction($id){

    	$actu=$this->getDoctrine()->getRepository('MainBundle:WebsiteActualite')->findOneById($id);
        $agenda=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();
    	return $this->render('MainBundle:Front:detail_actualite.html.twig', array(
              'actu'=>$actu,
              'agenda'=>$agenda


    		));
    }
}