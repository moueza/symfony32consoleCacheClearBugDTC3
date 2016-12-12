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
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DatetimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityRepository;
use OC\UserBundle\Repository;
use OC\InscritBundle\Repository\MatchhRepository;
use OC\UserBundle\Entity\Matchh;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MatchhController extends Controller {
    /*     * TODO par annotations */

    private $emailone;

       /**
     * @Route("/matchform", name="matchform")
     */
    public function matchformAction(Request $request) {
//https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/creer-des-formulaires-avec-symfony
// // On crée un objet Advert
        $match = new Matchh();

// On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $match);
// On ajoute les champs de l'entité que l'on veut à notre formulaire
        /*         * joueur1 ref ManyToMany */



        $formBuilder
                ->add('beginningDate', DateType::class, ['required' => true,
                    'data' => null])//TODO choiceType EntityType
                ->add('beginningTime', TimeType::class, ['required' => true,
                ])
//              
                ->add('emailone', EntityType::class, array(
                    'class' => 'OCUserBundle:Inscrit',
                    'choice_label' => 'email',
                    'multiple' => false,
                    'expanded' => false,
                    'required' => true,
                    'data' => null))
                //http://stackoverflow.com/questions/7913086/how-to-set-default-value-for-form-field-in-symfony2
                ->add('emailtwo', EntityType::class, array(
                    'class' => 'OCUserBundle:Inscrit',
                    'choice_label' => 'email',
                    'multiple' => false,
                    'expanded' => false,
                    'required' => true,
                    'data' => null))
                ->add('score1j1', TextType::class, array('required' => true))
                ->add('score1j2', TextType::class, array('required' => true))
                ->add('isScore1tie', CheckboxType::class, array('required' => false))
                ->add('score2j1', TextType::class, array('required' => true))
                ->add('score2j2', TextType::class, array('required' => true))
                ->add('isScore2tie', CheckboxType::class, array('required' => false))
                ->add('score3j1', TextType::class, array('required' => false))
                ->add('score3j2', TextType::class, array('required' => false))
                ->add('isScore3tie', CheckboxType::class, array('required' => false))
                ->add('endTime', TimeType::class, array('required' => false))
                ->add('save', SubmitType::class)
        ;

// Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
// À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();



// Si la requête est en POST
        if ($request->isMethod('POST')) {
// On fait le lien Requête <-> Formulaire
// À partir de maintenant, la variable $match contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
// On vérifie que les valeurs entrées sont correctes
// (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
// On enregistre notre objet $match dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($match);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Match bien enregistré.');
// On redirige vers la page de visualisation de l'annonce nouvellement créée
                return $this->redirectToRoute('matchview', array('id' => $match->getId()));
            }
        }





// On passe la méthode createView() du formulaire à la vue
// afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('OCUserBundle:Matchh:matchform.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

      /**
     * @Route("/matchview/{id}", name="matchview")
     */
    public function matchviewAction($id) {
        /*         * viewAction 
         * https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/manipuler-ses-entites-avec-doctrine2-1 */
//find($id)
//https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Matchh')
        ;
        $match = $repository->find($id);

// $match est une instance de OC\PlatformBundle\Entity\Advert
// Correspondant à l'id 5
// return $this->render('OCUserBundle:Inscription:inscrit.html.twig', array('id' => $match->getId()));
        return $this->render('OCUserBundle:Matchh:matchview.html.twig', array('match' => $match));
    }

    
     /**
     * @Route("/matchsview", name="matchsview")
     */
    public function matchsviewAction(Request $request) {
// https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Matchh');
        $listMatchs = $repository->findAll();
//        foreach ($listMatchs as $inscrit) {
//            // $inscrit est une instance de Advert
//            echo getPseudo()." ".$inscrit->get();
//        }
        return $this->render('OCUserBundle:Matchh:matchsview.html.twig', array('listMatchs' => $listMatchs
        ));
    }

    
      /**
     * @Route("/selectjoueur", name="selectjoueur")
     */
     public function selectjoueurAction(Request $request) {
// https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Matchh');
        $listMatchs = $repository->findAll();
//        foreach ($listMatchs as $inscrit) {
//            // $inscrit est une instance de Advert
//            echo getPseudo()." ".$inscrit->get();
//        }
        return $this->render('OCUserBundle:Matchh:matchsview.html.twig', array('listMatchs' => $listMatchs
        ));
    }

    
       /**
     * @Route("/switchjoueur", name="switchjoueur")
     */
     public function switchjoueurAction(Request $request) {
// https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/recuperer-ses-entites-avec-doctrine2-1
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Matchh');
        $listMatchs = $repository->findAll();
//        foreach ($listMatchs as $inscrit) {
//            // $inscrit est une instance de Advert
//            echo getPseudo()." ".$inscrit->get();
//        }
        return $this->render('OCUserBundle:Matchh:matchsview.html.twig', array('listMatchs' => $listMatchs
        ));
    }
}
