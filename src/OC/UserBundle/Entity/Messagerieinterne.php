<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerieinterne
 *
 * @ORM\Table(name="messagerieinterne")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\MessagerieinterneRepository")
 */
class Messagerieinterne
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
