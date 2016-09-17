<?php


namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Form\Type\ConnexionType;
use MainBundle\Form\Handler\ConnexionHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;



/*use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
*/
class FrontController extends Controller
{
    public function indexAction()
    {

       //$em=$this->getDoctrine()->getManager();
       
       $assoc=$this->getDoctrine()->getRepository('MainBundle:WebsiteAssociation')->find(1);
       $actu=$this->getDoctrine()->getRepository('MainBundle:WebsiteActualite')->findAll();
       $calendar=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();
      
       if (!$assoc) {
        throw $this->createNotFoundException(
            'aucune donnée trouvée '
        );
       }

        return $this->render('MainBundle:Front:index.html.twig', array(

               'assoc'=>$assoc,
               'actu'=>$actu,
               'agenda'=>$calendar
            ));
    
    }
    public function indexTmpAction()
    {
        
        return $this->render('MainBundle:Front:accueil_tmp.html.twig');
    }
    public function presentationAction()
    {
        $assoc=$this->getDoctrine()->getRepository('MainBundle:WebsiteAssociation')->find(1);
        $calendar=$this->getDoctrine()->getRepository('MainBundle:WebsiteAgenda')->findAll();
        $poles=$this->getDoctrine()->getRepository('MainBundle:WebsitePole')->findAll();
        $reals=$this->getDoctrine()->getRepository('MainBundle:WebsiteRealisation')->findAll();
        
        return $this->render('MainBundle:Front:presentation.html.twig', array(
            'assoc'=>$assoc,
            'agenda'=>$calendar,
            'realisations'=>$reals,
            'poles'=>$poles,
            
        ));

    }
     public function adhesionAction()
    {
        return $this->render('MainBundle:Front:adhesion.html.twig');

    }
    public function loginAction(Request $request)
    {
        

        /*$form=$this->createForm(ConnexionType::class);

        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $data=$form->getData();
            $repository=$this->getDoctrine()->getRepository('MainBundle:WebsiteUtilisateur');
            $user=$repository->findOneBy(array('mail'=>$data['login'],'mdp'=>$data['password']) );
            if(!$user){
                
                return $this->render('MainBundle:Front:form_connexion.html.twig', array(

                    'form' => $form->createView(), 'error'=>'Votre identifiant ou votre mot de passe est incorect',
                ));
            }
            else{

                 return $this->redirectToRoute('main_homepage');
            }
           
        }*/

 
        

    // get the login error if there is one

    $session = $request->getSession();

    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {

        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);

    }else {

        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }
    return $this->render('MainBundle:Front:form_connexion.html.twig', array(


                    //'form' => $form->createView(),
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error'=> $error,
                ));

    }
    public function loginTmpAction(Request $request){

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
