<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Entity\WebsiteCommentaire;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ForumController extends Controller
{
       public function getByPageAction($page)
    {

    	  $paginator=$this->get('knp_paginator');
        $em=$this->getDoctrine()->getManager();
        $query=$em->createQuery('select f from MainBundle:WebsiteForum f 
                                order by f.date desc');

        /*$query=$em->createQuery('select f from MainBundle:WebsiteForum f 
                                order by f.date desc'); */

        $listForum = $paginator->paginate($query, $page,1);

        return $this->render('MainBundle:Front:forum.html.twig', array(
               'listForum'=>$listForum,
               
           	));
    }

    public function getByIdForumAction($id,Request $request){

      $listCommentaire=$this->getDoctrine()->getRepository('MainBundle:WebsiteCommentaire')->findByForum($id);
      $agenda=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();


      $com = new WebsiteCommentaire();
      $com->setForum($this->getDoctrine()->getRepository('MainBundle:WebsiteForum')->find($id));

      $form=$this->createFormBuilder($com)
                   ->add('contenu',TextType::class)
                   ->add('btn_envoyez',SubmitType::class,array('label'=>'Envoyer'))
                   ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()&& $form->isValid()){

        $com=$form->getData();

        $session = $request->getSession();

        if (class_exists('\Symfony\Component\Security\Core\Security')) {
            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;
        } /*else {
            // BC for SF < 2.6
            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;
            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;
        }$

        if ($request->attributes->has($authErrorKey)) {
            $error = $request->attributes->get($authErrorKey);
        } elseif (null !== $session && $session->has($authErrorKey)) {
            $error = $session->get($authErrorKey);
            $session->remove($authErrorKey);
        } else {
            $error = null;
        }
        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);
        
        if (!$error instanceof AuthenticationException) {
            $error = null; // The value does not come from the security component.
        }

        if ($this->has('security.csrf.token_manager')) {
            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
        } else {
            // BC for SF < 2.4
            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }*/
        
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          return $this->render('UserBundle:security:login.html.twig',array(
                             // 'last_username'=>$lastUsername,
                             //'csrfToken'=>$csrfToken,
                             //'error'=>$error
            ));
           //return new RedirectResponse($this->get('router')->generate('login'));
        }
        $em=$this->getDoctrine()->getManager();
        $em->persist($com);
        $em->flush();
      }
      
      return $this->render('MainBundle:Front:detail-forum.html.twig',array(
                   
                   'listCommentaire'=>$listCommentaire,
                   'agenda'=>$agenda,
                   'form'=>$form->createView()
        ));
    }
    /*public function ajoutCommentaire(Request $request){

       $com=new WebsiteCommentaire();

       $form=$this->createFormBuilder($com)
                   ->add('input_comm',TextType::class)
                   ->add('btn_envoyez',SubmitType::class,array('placeholder'=>'Votre commentaire'))
                   ->getForm();
    }*/

}