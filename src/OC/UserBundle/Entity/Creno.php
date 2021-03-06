<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creno=disponibilite
 *
 * @ORM\Table(name="creno")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\CrenoRepository")
 */
class Creno
{
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
     * @ORM\Column(name="jour", type="date", nullable=false)
     */
    private $jour;

    
    
    
    /**
     * 
     *
     * @ORM\Column( type="string", nullable=true)
     */
    private $lieu;
    
    
    /**
     * 
     *
     * @ORM\Column( type="string", nullable=true)
     */
    private $comment;
    
    
    

    /**
     * 
     *
     * @ORM\Column(name="startTime", type="time", nullable=false)
     */
    private $startTime;

    /**
     * 
     *
     * @ORM\Column(name="endTime", type="time", nullable=false)
     */
    private $endTime;

    /**
     * @var \stdClass
     *
     * @ORM\Column( type="object")
     */
    private $username;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jour
     *
     * @param \DateTime $jour
     *
     * @return Creno
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Creno
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Creno
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set username
     *
     * @param \stdClass $username
     *
     * @return Creno
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return \stdClass
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Creno
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Creno
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
