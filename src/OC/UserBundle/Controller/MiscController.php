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

class MiscController extends Controller {
    /*     * TODO par annotations */

    public function echeances2Action(Request $request) {
        return $this->render('OCUserBundle:Misc:echeances.html.twig', array(
        ));
    }

}
