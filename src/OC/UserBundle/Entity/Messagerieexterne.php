<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerieexterne
 *
 * @ORM\Table(name="messagerieexterne")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\MessagerieexterneRepository")
 */
class Messagerieexterne
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
