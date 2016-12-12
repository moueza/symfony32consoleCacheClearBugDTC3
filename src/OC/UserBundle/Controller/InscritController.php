<?php

namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use OC\UserBundle\Entity\Inscrit;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DatetimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityRepository;
use OC\UserBundle\Repository;
use OC\InscritBundle\Repository\InscritRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class InscritController extends Controller {

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionAction(Request $request) {
        //https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/creer-des-formulaires-avec-symfony
        // // On crée un objet Advert
        $inscrit = new Inscrit();


        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $inscrit);


        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
                ->add('username', TextType::class)
                ->add('isPseudoOVS', CheckboxType::class, array('required' => false))
                ->add('email', TextType::class, array('required' => true))
                ->add('password', TextType::class)
                ->add('is_femme', CheckboxType::class, array('required' => false))
                /**/
                ->add('is_rulesAccepted', CheckboxType::class, array('required' => true,))
                ->add('save', SubmitType::class)
        ;

        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();



        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $inscrit contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On enregistre notre objet $inscrit dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($inscrit);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Inscription bien enregistrée.');
                // On redirige vers la page de visualisation de l'annonce nouvellement créée
                return $this->redirectToRoute('inscrit_view', array('id' => $inscrit->getId()));
            }
        }





        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('OCUserBundle:Inscription:inscription.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/inscrit/{id}", name="inscrit_view")
     */
    public function inscritAction($id) {
        /*         * viewAction 
         * https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/manipuler-ses-entites-avec-doctrine2-1 */
        //find($id)
        //https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Inscrit')
        ;
        $inscrit = $repository->find($id);

// $inscrit est une instance de OC\PlatformBundle\Entity\Advert
// Correspondant à l'id 5
        // return $this->render('OCUserBundle:Inscription:inscrit.html.twig', array('id' => $inscrit->getId()));
        return $this->render('OCUserBundle:Inscription:inscrit.html.twig', array('inscrit' => $inscrit));
    }

    /* TODO routes multiples 
     * inscrits_view:
     *    path: /inscrits 
     * 
     * "/", name="index"
     */

    /**
     * @Route("/inscrits", name="inscrits")
     * @Route("/")
     * @Route("/index")
     */
    public function inscritsAction(Request $request) {
        // https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Inscrit');
        $listInscrits = $repository->findAll();
//        foreach ($listInscrits as $inscrit) {
//            // $inscrit est une instance de Advert
//            echo getPseudo()." ".$inscrit->get();
//        }
        return $this->render('OCUserBundle:Inscription:inscrits.html.twig', array('listInscrits' => $listInscrits
        ));
    }

    /**
     * @Route("/updatemail/{username}", name="updatemail")
     * @Security("is_granted('ROLE_INSCRIT', id)")
     */
    public function updatemailAction($username) {
        $inscrit = new Inscrit();


        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $inscrit);


        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
                ->add('username', TextType::class)
                ->add('isPseudoOVS', CheckboxType::class, array('required' => false))
                ->add('email', TextType::class, array('required' => true))
                ->add('password', TextType::class)
                ->add('is_femme', CheckboxType::class, array('required' => false))
                ->add('is_rulesAccepted', CheckboxType::class, array('required' => true,
                ))
                ->add('save', SubmitType::class)
        ;

        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();



        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $inscrit contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On enregistre notre objet $inscrit dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($inscrit);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Inscription bien enregistrée.');
                // On redirige vers la page de visualisation de l'annonce nouvellement créée
                return $this->redirectToRoute('inscrit_view', array('id' => $inscrit->getId()));
            }
        }





        //On passe la méthode createView() du formulaire à la vue
        //afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('OCUserBundle:Inscription:inscription.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    
    
    
    
      /**
     * @Route("/updateusername/{mail}", name="updateusername")
     * @Security("is_granted('ROLE_INSCRIT', id)")
     */
    public function updateusernameAction($mail) {
        $inscrit = new Inscrit();
    }
    
    
    
    /** fait un get user pr voir le user connecté 
      TODO : tracer à chaque connexion à cette page */

    /**
     * @Route("/secu", name="secu")
     * @Security("has_role('ROLE_INSCRIT')")
     */
    public function secuAction() {
        //On récupère le service
        //$security = $container->get('security.token_storage');
        $security = $this->get('security.token_storage');

        //On récupère le token
        $token = $security->getToken();


        // Si la requête courante n'est pas derrière un pare-feu, $token est null
        //Sinon, on récupère l'utilisateur
        $user = $token->getUser();


        //Si l'utilisateur courant est anonyme, $user vaut « anon. »
        //Sinon, c'est une instance de notre entité User, on peut l'utiliser normalement
        //$user->getUsername();
        //$user->getPseudo();
        $pseudoo = $user->getUsername();


        $passwordd = $user->getPassword();








        //$user = $this->getUser();
        if (null === $user) {
            //Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
        } else {
            //Ici, $user est une instance de notre classe User
        }


        return $this->render('OCUserBundle:Inscription:secu.html.twig', array('pseudoo' => $pseudoo,
                    'passwordd' => $passwordd
        ));
    }

    
    
    
    
    /**
     * @Route("/myaccount", name="myaccount")
     */
    public function myaccountAction() {
        
    }

     /**
     * @Route("/mypublicprofile", name="mypublicprofile")
     */
    public function mypublicprofileAction() {
        
    }
    
     /**
     * @Route("/mydispos", name="mypublicprofile")
     */
    public function mydisposAction() {
        
    }

         /**
     * @Route("/dispos", name="dispos")
     */
    public function disposAction() {
        
    }

    
      /**
     * @Route("/desinscription", name="desinscription")
     * 
     */
    public function desinscriptionAction(Request $request) {
        // https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
    }
}
