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

class MessagerieexterneController extends Controller {

    /**
     * @Route("/echeances", name="echeances")
     */
    public function echeancesAction(Request $request) {
        return $this->render('OCUserBundle:Inscription:echeances.html.twig', [
        ]);
    }

    /**
     * @Route("/echeancesPoub", name="echeancesPoub")
     */
    public function echeancesPoubAction(Request $request) {
        $inscrits = $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:Inscrit')
                ->findAll();
        $totInscri = sizeof($inscrits);
        $echeancesNbinscritsmoinsun = $totInscri - 1;
        $echeOb = new \OC\UserBundle\Entity\Echeance;
        // $echDatesList = new ArrayCollection(); //https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/les-relations-entre-entites-avec-doctrine2-1
        // $echDatesList->add($echeOb->numberToDate(1));
        $diff = $echeOb->getDeltaDays0();
        $datesPERIOD = $echeOb->echeancesinscritsmoinsunToDatesPERIOD(1);
        $daysEps = $echeOb->echeancesinscritsmoinsunToDatesPERIOD($echeancesNbinscritsmoinsun);
        //$daysEpsDay=$daysEps->day;
        $daysEpsDay = $echeOb->getDeltaDays0() / $echeancesNbinscritsmoinsun;
        $dateNth = $echeOb->nthecheanceNbintervalsToDate(1, 1)->format("Y/m/d");
        return $this->render('OCUserBundle:Inscription:echeancesPoub.html.twig', [
                    'diff' => $diff,
                    'datesPERIOD' => $datesPERIOD,
                    'daysEpsDay' => $daysEpsDay,
                    'dateNth' => $dateNth,
                    'echeancesNbinscritsmoinsun' => $echeancesNbinscritsmoinsun,
                    'inscrits' => $inscrits]);
    }

}
