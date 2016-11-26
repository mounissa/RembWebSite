<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller
{
       public function getAction($page,$type,$domaine,$lieu)
    {

       $agenda=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();
       $paginator=$this->get('knp_paginator');
       $em=$this->getDoctrine()->getManager();
       $dep=$this->getDoctrine()->getRepository("MainBundle:WebsiteDepartement")->findAll();
       $query=$em->createQuery('select o from MainBundle:WebsiteOffre o order by o.datePublication desc');
       if( ($type!=null)&&($domaine!=null)&&($lieu!=null)){
           
            $query=$em->createQuery('select o 
                                     from MainBundle:WebsiteOffre o
                                     where o.typeContrat= :type
                                     and o.domaine= :domaine
                                     and o.lieu=: lieu
                                     order by o.datePublication desc')->setParameters(array(
                                                                                          'domaine'=>$domaine,
                                                                                          'type'=>$type,
                                                                                          'lieu'=>$lieu)) ;
       }
      
       $pagination = $paginator->paginate($query, $page,1);
       
        return $this->render('MainBundle:Front:offre.html.twig',array(
             'agenda'=>$agenda,
             'offres'=>$pagination,
             'dep'=>$dep

            ));
         
    }
    public function getByIdAction($id){

        $detailOffre=$this->getDoctrine()->getRepository('MainBundle:WebsiteOffre')->findOneById($id);
        return $this->render('MainBundle:Front:detail-offre.html.twig',array(

                     'detailOffre'=>$detailOffre   
            ));
    }
}