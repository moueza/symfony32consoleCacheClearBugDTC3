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
//use OC\UserBundle\Entity\Inscrit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\Common\Collections\ArrayCollection;

class EcheanceController extends Controller {
 /**
     * @Route("/setsgagnesmatch", name="setsgagnesmatch")
     */
    public function setsgagnesmatchAction(Request $request) {
        return $this->render('OCUserBundle:Inscription:echeances.html.twig', [
        ]);
    }
    
    /**
     * @Route("/setsgagneschampionnat", name="setsgagneschampionnat")
     */
    public function setsgagneschampionnatAction(Request $request) {
        return $this->render('OCUserBundle:Inscription:echeances.html.twig', [
        ]);
    }

}
