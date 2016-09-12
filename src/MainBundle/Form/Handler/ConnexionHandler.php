<?php


namespace MainBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class ConnexionHandler

{

   protected $form;
   protected $request;

   public function __construct(Form $form, Request $request){

     $this->form=$form;
     $this->request=$request;     

   }

    public function process(){

    	if ($this->form->isSubmitted() && $this->form->isValid()) {

            $this->form->handleRequest($this->request);
            $data=$this->form->getData();
            $repository=$this->getDoctrine()->getRepository('MainBundle:WebsiteUtilisateur');
            $user=$repository->findOneBy(array('mail'=>$data['login'],'mdp'=>$data['password']) );
            if($user){
                
                return true;
            }
            else{

                 return false;
            }
           
        }
    }


    protected function onSuccess()

    {}

}