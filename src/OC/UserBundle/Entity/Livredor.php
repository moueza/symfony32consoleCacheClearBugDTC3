<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livredor
 *
 * @ORM\Table(name="livredor")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\LivredorRepository")
 */
class Livredor
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
     * @var string
     *
     * @ORM\Column(name="who", type="string", length=255, nullable=true)
     */
    private $who;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetimee", type="datetime")
     */
    private $datetimee;


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
     * Set who
     *
     * @param string $who
     *
     * @return Livredor
     */
    public function setWho($who)
    {
        $this->who = $who;

        return $this;
    }

    /**
     * Get who
     *
     * @return string
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Livredor
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

    /**
     * Set datetimee
     *
     * @param \DateTime $datetimee
     *
     * @return Livredor
     */
    public function setDatetimee($datetimee)
    {
        $this->datetimee = $datetimee;

        return $this;
    }

    /**
     * Get datetimee
     *
     * @return \DateTime
     */
    public function getDatetimee()
    {
        return $this->datetimee;
    }
}
