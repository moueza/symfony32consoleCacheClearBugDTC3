<?php

/**
 * 
 * TODO Tests
 * embbedded Twig7
 * href
 * Services 

 * Drag&Drop
 * Tester Email cher Byost */

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
/**
 * Echeance
 *
 * @ORM\Table(name="echeance")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\EcheanceRepository")
 */
class Echeance {

    /**
     * @var \DateTime
     *
     * @ORM\Column( type="date")
     */
    private $to;

    /**
     * @var \DateTime
     * echeance1
     * @ORM\Column( type="date")
     */
    private $from;

    public function __construct() {
        //  $this->from = new \Date();
        //http://php.net/manual/fr/class.dateperiod.php
        //http://php.net/manual/fr/class.dateinterval.php
        $this->from = new \DateTime('2016-12-11');
        $this->to = new \DateTime('2017-05-14');
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", unique=true)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer", unique=true)
     */
    private $number;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Echeance
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Echeance
     */
    public function setNumber($number) {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber() {
        return $this->number;
    }

    public function setDates($date1, $date2) {
        $this->setFrom($date1);
        $this->setTo($date2);
    }

    /** TESTED 
     * du nombre d echeances, retourne date N ieme */
    public function numberecheancesToDate4N($nthEcheanc, $nbIntervals, $date1, $date2) {
        $start = $date1;
        $echeancesNbinscritsmoinsun = $nbIntervals;
        $intervalEpsFLOAT = $this->getDeltaDays2($date1, $date2) / $echeancesNbinscritsmoinsun;
        $this->intervalEpsINTERVAL = new \DateInterval("P" . $intervalEpsFLOAT . "D");
        $intervalFLOAT = $this->getDeltaDays0() / $echeancesNbinscritsmoinsun;
        $intervalEpsINTERVAL = new \DateInterval("P" . $intervalFLOAT . "D");
        $occurrences = $echeancesNbinscritsmoinsun;

        $period = new \DatePeriod($start, $intervalEpsINTERVAL, $nbIntervals); //http://php.net/manual/fr/class.dateperiod.php
        $vec = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($period as $date) {
            // echo $date->format("Ymd") . "<br>";
            $vec->add($date);
        }
        $echeancOffset;
        //return $period[$noEcheance];
        return $vec[$nthEcheanc];
        // nthecheanceNbintervalsToDate($noEcheance, $echeancesNbinscritsmoinsun) 
    }

    /** du nombre d echeances, retourne date N ieme */
    public function numberecheancesToDate3N($numberEcheanc, $nbInscritss, $n) {
        
    }

    /** ens des echeances */
    public function echeancesinscritsmoinsunToDatesPERIOD($echeancesNbinscritsmoinsun) {
        // $inscritss = new Inscrit();
//        $repository = $this
//                ->getDoctrine()
//                ->getManager()
//                ->getRepository('OCUserBundle:Inscrit')
//                ->findAll();
        // $nbInscritss = sizeof($repository);
        //  return ($this->from) + ($noEcheance - 1) * (($this->getDeltaDays0()) / ($echeancesNbinscritsmoinsun));
        $start = $this->from;
        $intervalFLOAT = $this->getDeltaDays0() / $echeancesNbinscritsmoinsun;
        $intervalINTERVAL = new \DateInterval("P" . $intervalFLOAT . "D");
        $occurrences = $echeancesNbinscritsmoinsun;

        $period = new \DatePeriod($start, $intervalINTERVAL, $occurrences); //http://php.net/manual/fr/class.dateperiod.php
        return $period;
    }

    /** TESTED
     * @param number : numero d echeance
     * @result date
     */
    public function nthecheanceNbintervalsToDate($noEcheance, $echeancesNbinscritsmoinsun) {
        // $inscritss = new Inscrit();
//        $repository = $this
//                ->getDoctrine()
//                ->getManager()
//                ->getRepository('OCUserBundle:Inscrit')
//                ->findAll();
        // $nbInscritss = sizeof($repository);
        //  return ($this->from) + ($noEcheance - 1) * (($this->getDeltaDays0()) / ($echeancesNbinscritsmoinsun));
        $start = $this->from;
        $intervalEpsFLOAT = $this->getDeltaDays0() / $echeancesNbinscritsmoinsun;
        $this->intervalEpsINTERVAL = new \DateInterval("P" . $intervalEpsFLOAT . "D");
        $intervalFLOAT = $this->getDeltaDays0() / $echeancesNbinscritsmoinsun;
        $intervalEpsINTERVAL = new \DateInterval("P" . $intervalFLOAT . "D");
        $occurrences = $echeancesNbinscritsmoinsun;

        $period = new \DatePeriod($start, $intervalEpsINTERVAL, $occurrences); //http://php.net/manual/fr/class.dateperiod.php
        $vec = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($period as $date) {
            // echo $date->format("Ymd") . "<br>";
            $vec->add($date);
        }
        //return $period[$noEcheance];
        return $vec[$noEcheance];
    }

    private $deltaDays;

    public function setDeltaDays() {
        
    }

    /** TESTED */
    public function getDeltaDays2($date1, $date2) {
        return intval($date1->diff($date2)->format('%a')); //http://php.net/manual/fr/datetime.diff.php
    }

    public function getDeltaDays0() {
        //return $this->from ->diff($this->to)->d;//http://php.net/manual/en/dateinterval.construct.php
        //  return intval($this->from->diff($this->to)->format('%a')); //http://php.net/manual/fr/datetime.diff.php
        return $this->from->diff($this->to)->days;
    }

    /** donne echeance no n à afficher
     *  à partir de la date d aujourd hui */
    public function present2echeance() {
        return $this->from - $this->from;
    }

    /**
     * Set to
     *
     * @param \DateTime $to
     *
     * @return Echeance
     */
    public function setTo($to) {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return \DateTime
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * Set from
     *
     * @param \DateTime $from
     *
     * @return Echeance
     */
    public function setFrom($from) {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \DateTime
     */
    public function getFrom() {
        return $this->from;
    }

}
