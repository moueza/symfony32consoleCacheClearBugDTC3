<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;




//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
//use OC\UserBundle\Entity\Inscrit;
//use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
//use Symfony\Component\Form\Extension\Core\Type\FormType;
//use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\DatetimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Doctrine\ORM\EntityRepository;
//use OC\UserBundle\Repository;
//use OC\InscritBundle\Repository\InscritRepository;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdvertController extends Controller {
      /**
     * @Route("/add", name="add")
     */
    public function addAction(Request $request) {
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_AUTEUR')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
        // Ici l'utilisateur a les droits suffisant,
        // on peut ajouter une annonce
    }
    
    
          /**
     * @Route("/menu", name="menu")
     */
 public function menuAction(Request $request) {
     return $this->render('OCPlatformBundle:Default:menu.html.twig');   
    }
}
