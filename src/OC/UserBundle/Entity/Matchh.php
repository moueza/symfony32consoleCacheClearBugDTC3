<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/validez-vos-donnees-1
use Gedmo\Mapping\Annotation as Gedmo;
// N'oubliez pas de rajouter ce « use », il définit le namespace pour les annotations de validation
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Matchh
 *
 * @ORM\Table(name="matchh")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\MatchhRepository")
 * 
 */
class Matchh {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     *
     * ORM\Column( type="string")
     */
    //private $emailun;

    /**
     * @ORM\Column(unique=false)
     * @ORM\OneToOne(targetEntity="OC\UserBundle\Entity\Inscrit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emailone;

    /**
     * @ORM\Column(unique=false)
     * @ORM\OneToOne(targetEntity="OC\UserBundle\Entity\Inscrit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emailtwo;

    /**
     * 
     *
     * ORM\Column( type="string")
     */
    // private $emaildeux;

    /**
     * 
     *
     * @ORM\Column(name="creation_datetime", type="datetime")
     */
    private $creationDatetime;

    /**
     * 
     *
     * @ORM\Column(name="beginning_date", type="date", nullable=false)
     */
    private $beginningDate;

    /*     * TODO CASCADE */
    /*     * TODO constraint annee >= 2016 */

    /**
     * 
     *
     * @ORM\Column( type="time", nullable=false)
     */
    private $beginningTime;

    /**
     * 
     *
     * @ORM\Column( type="time", nullable=true)
     */
    private $endTime;

    /**
     * @var int
     *
     * @ORM\Column(name="score1j1", type="integer")
     * @Assert\Length(max=2,maxMessage="score1j1 fait de longueur max")
     */
    private $score1j1;

    /**
     * @var int
     *
     * @ORM\Column(name="score1j2", type="integer")
      @Assert\Length(max=2,maxMessage="score1j2 fait de longueur max")
     */
    private $score1j2;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isScore1tie;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $secret;

    /**
     * @var int
     *
     * @ORM\Column( type="integer",nullable=true)
     */
    private $score2jtournoiNo;

    /**
     * @var int
     *
     * @ORM\Column(name="score2j1", type="integer")
      @Assert\Length(max=2,maxMessage="score2j1 fait de longueur max")
     */
    private $score2j1;

    /**
     * @var int
     *
     * @ORM\Column(name="score2j2", type="integer")
      @Assert\Length(max=2,maxMessage="score2j2 fait de longueur max")
     */
    private $score2j2;

    /**
     * @var bool
     *
     * @ORM\Column( type="boolean", nullable=true)
     */
    private $isScore2tie;

    /**
     * @var int
     *
     * @ORM\Column(name="score3j1", type="integer", nullable=true)
      @Assert\Length(max=2,maxMessage="score3j1 fait de longueur max")
     */
    private $score3j1;

    /**
     * @var int
     *
     * @ORM\Column(name="score3j2", type="integer", nullable=true)
      @Assert\Length(max=2,maxMessage="score3j2 fait de longueur max")
     */
    private $score3j2;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isScore3tie;

    public function __construct() {

        $this->creationDatetime = new \Datetime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set creationDatetime
     *
     * @param \DateTime $creationDatetime
     *
     * @return Matchh
     */
    public function setCreationDatetime($creationDatetime) {
        $this->creationDatetime = $creationDatetime;

        return $this;
    }

    /**
     * Get creationDatetime
     *
     * @return \DateTime
     */
    public function getCreationDatetime() {
        return $this->creationDatetime;
    }

    /**
     * Set beginningDate
     *
     * @param \DateTime $beginningDate
     *
     * @return Matchh
     */
    public function setBeginningDate($beginningDate) {
        $this->beginningDate = $beginningDate;

        return $this;
    }

    /**
     * Get beginningDate
     *
     * @return \DateTime
     */
    public function getBeginningDate() {
        return $this->beginningDate;
    }

    /**
     * Set beginningTime
     *
     * @param \DateTime $beginningTime
     *
     * @return Matchh
     */
    public function setBeginningTime($beginningTime) {
        $this->beginningTime = $beginningTime;

        return $this;
    }

    /**
     * Get beginningTime
     *
     * @return \DateTime
     */
    public function getBeginningTime() {
        return $this->beginningTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Matchh
     */
    public function setEndTime($endTime) {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime() {
        return $this->endTime;
    }

    /**
     * Set score1j1
     *
     * @param integer $score1j1
     *
     * @return Matchh
     */
    public function setScore1j1($score1j1) {
        $this->score1j1 = $score1j1;

        return $this;
    }

    /**
     * Get score1j1
     *
     * @return integer
     */
    public function getScore1j1() {
        return $this->score1j1;
    }

    /**
     * Set score1j2
     *
     * @param integer $score1j2
     *
     * @return Matchh
     */
    public function setScore1j2($score1j2) {
        $this->score1j2 = $score1j2;

        return $this;
    }

    /**
     * Get score1j2
     *
     * @return integer
     */
    public function getScore1j2() {
        return $this->score1j2;
    }

    /**
     * Set isScore1tie
     *
     * @param boolean $isScore1tie
     *
     * @return Matchh
     */
    public function setIsScore1tie($isScore1tie) {
        $this->isScore1tie = $isScore1tie;

        return $this;
    }

    /**
     * Get isScore1tie
     *
     * @return boolean
     */
    public function getIsScore1tie() {
        return $this->isScore1tie;
    }

    /**
     * Set score2j1
     *
     * @param integer $score2j1
     *
     * @return Matchh
     */
    public function setScore2j1($score2j1) {
        $this->score2j1 = $score2j1;

        return $this;
    }

    /**
     * Get score2j1
     *
     * @return integer
     */
    public function getScore2j1() {
        return $this->score2j1;
    }

    /**
     * Set score2j2
     *
     * @param integer $score2j2
     *
     * @return Matchh
     */
    public function setScore2j2($score2j2) {
        $this->score2j2 = $score2j2;

        return $this;
    }

    /**
     * Get score2j2
     *
     * @return integer
     */
    public function getScore2j2() {
        return $this->score2j2;
    }

    /**
     * Set isScore2tie
     *
     * @param boolean $isScore2tie
     *
     * @return Matchh
     */
    public function setIsScore2tie($isScore2tie) {
        $this->isScore2tie = $isScore2tie;

        return $this;
    }

    /**
     * Get isScore2tie
     *
     * @return boolean
     */
    public function getIsScore2tie() {
        return $this->isScore2tie;
    }

    /**
     * Set score3j1
     *
     * @param integer $score3j1
     *
     * @return Matchh
     */
    public function setScore3j1($score3j1) {
        $this->score3j1 = $score3j1;

        return $this;
    }

    /**
     * Get score3j1
     *
     * @return integer
     */
    public function getScore3j1() {
        return $this->score3j1;
    }

    /**
     * Set score3j2
     *
     * @param integer $score3j2
     *
     * @return Matchh
     */
    public function setScore3j2($score3j2) {
        $this->score3j2 = $score3j2;

        return $this;
    }

    /**
     * Get score3j2
     *
     * @return integer
     */
    public function getScore3j2() {
        return $this->score3j2;
    }

    /**
     * Set isScore3tie
     *
     * @param boolean $isScore3tie
     *
     * @return Matchh
     */
    public function setIsScore3tie($isScore3tie) {
        $this->isScore3tie = $isScore3tie;

        return $this;
    }

    /**
     * Get isScore3tie
     *
     * @return boolean
     */
    public function getIsScore3tie() {
        return $this->isScore3tie;
    }

    /**
     * Set emailone
     *
     * @param \OC\UserBundle\Entity\Inscrit $emailone
     *
     * @return Matchh
     */
    public function setEmailone(\OC\UserBundle\Entity\Inscrit $emailone) {
        $this->emailone = $emailone;

        return $this;
    }

    /**
     * Get emailone
     *
     * @return \OC\UserBundle\Entity\Inscrit
     */
    public function getEmailone() {
        return $this->emailone;
    }

    /**
     * Add emailone
     *
     * @param \OC\UserBundle\Entity\Inscrit $emailone
     *
     * @return Matchh
     */
    public function addEmailone(\OC\UserBundle\Entity\Inscrit $emailone) {
        $this->emailone[] = $emailone;

        return $this;
    }

    /**
     * Remove emailone
     *
     * @param \OC\UserBundle\Entity\Inscrit $emailone
     */
    public function removeEmailone(\OC\UserBundle\Entity\Inscrit $emailone) {
        $this->emailone->removeElement($emailone);
    }

    /**
     * Set emailtwo
     *
     * @param string $emailtwo
     *
     * @return Matchh
     */
    public function setEmailtwo($emailtwo) {
        $this->emailtwo = $emailtwo;

        return $this;
    }

    /**
     * Get emailtwo
     *
     * @return string
     */
    public function getEmailtwo() {
        return $this->emailtwo;
    }

    /**
     * Set secret
     *
     * @param boolean $secret
     *
     * @return Matchh
     */
    public function setSecret($secret) {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return boolean
     */
    public function getSecret() {
        return $this->secret;
    }

    /**
     * Set score2jtournoiNo
     *
     * @param integer $score2jtournoiNo
     *
     * @return Matchh
     */
    public function setScore2jtournoiNo($score2jtournoiNo) {
        $this->score2jtournoiNo = $score2jtournoiNo;

        return $this;
    }

    /**
     * Get score2jtournoiNo
     *
     * @return integer
     */
    public function getScore2jtournoiNo() {
        return $this->score2jtournoiNo;
    }

}
