<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/validez-vos-donnees-1
use Gedmo\Mapping\Annotation as Gedmo;
// N'oubliez pas de rajouter ce « use », il définit le namespace pour les annotations de validation
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="inscrit")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Repository\InscritRepository")
 */
class Inscrit implements UserInterface {

    public function __toString() {
        // return $this->name;
        return $this->getEmail();
    }

    public function __construct() {
//DatetimeType
        $this->date = new \Datetime();
        $this->roles = ['ROLE_INSCRIT'];

        // On ne se sert pas du sel pour l'instant
        $this->setSalt('');
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
     * 
     *
     * @ORM\Column(name="date", type="datetime", unique=false)
     */
    private $date;

    /**
     * var string
     * Assert\NotBlank()
     * ORM\Column(name="pseudo", type="string", length=15, unique=true)
     */
    // private $pseudo;

    /**
     *  @var string
     *  @Assert\Regex(
     *  pattern="/.+@.+/",
     *     match=true,
     *     message="doit contenir @")
     * @Assert\Length(min=3,minMessage="mail au - 3 car")
     * @ORM\Column(name="email", type="string", length=40, unique=false)
     */
    private $email;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="password", type="string", length=15)
     */
    private $password;

    /**
     * 
     *
     * @ORM\Column(name="is_pseudo_ovs", type="boolean",unique=false)
     */
    private $isPseudoOVS;

    /**
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="is_rules_accepted", type="boolean")
     */
    private $is_rulesAccepted;

    /**
     * 
     *
     * @ORM\Column(name="is_femme", type="boolean",unique=false)
     */
    private $is_femme;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Inscrit
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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Inscrit
     */
//    public function setPseudo($pseudo) {
//        $this->pseudo = $pseudo;
//
//        return $this;
//    }
//    public function getPseudo() {
//        return $this->pseudo;
//    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Inscrit
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set joueur1mail
     *
     * @param string $joueur1mail
     *
     * @return Inscrit
     */
    public function setJoueur1mail($joueur1mail) {
        $this->joueur1mail = $joueur1mail;

        return $this;
    }

    /**
     * Get joueur1mail
     *
     * @return string
     */
    public function getJoueur1mail() {
        return $this->joueur1mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Inscrit
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set isPseudoOVS
     *
     * @param boolean $isPseudoOVS
     *
     * @return Inscrit
     */
    public function setIsPseudoOVS($isPseudoOVS) {
        $this->isPseudoOVS = $isPseudoOVS;

        return $this;
    }

    /**
     * Get isPseudoOVS
     *
     * @return boolean
     */
    public function getIsPseudoOVS() {
        return $this->isPseudoOVS;
    }

    /**
     * Set isRulesAccepted
     *
     * @param boolean $isRulesAccepted
     *
     * @return Inscrit
     */
    public function setIsRulesAccepted($isRulesAccepted) {
        $this->is_rulesAccepted = $isRulesAccepted;

        return $this;
    }

    /**
     * Get isRulesAccepted
     *
     * @return boolean
     */
    public function getIsRulesAccepted() {
        return $this->is_rulesAccepted;
    }

    /**
     * Set isFemme
     *
     * @param boolean $isFemme
     *
     * @return Inscrit
     */
    public function setIsFemme($isFemme) {
        $this->is_femme = $isFemme;

        return $this;
    }

    /**
     * Get isFemme
     *
     * @return boolean
     */
    public function getIsFemme() {
        return $this->is_femme;
    }

    /* http://stackoverflow.com/questions/8818387/doctrine2-conversion-error */

    /**
     * @ORM\Column(type="array",nullable=true,unique=false)
     */
    private $roles = array();

    /*     * ++++++ */

    public function getRoles() {
        return $this->roles;
    }

    /**
     * @ORM\Column( type="string", length=255,nullable=true,unique=false)
     */
    private $salt;

    public function getSalt() {
        
    }

    /* Assert\NotBlank() */

    /**
     *  @var string
     * 
     * @ORM\Column( type="string", length=25, unique=true,nullable=false,unique=true)
     */
    private $username;

    public function getUsername() {
        //$this->getPseudo();
        return $this->username;
    }

    /* User security 
      https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/securite-et-gestion-des-utilisateurs-1 */

    public function eraseCredentials() {
        
    }

//    public function loginAction(Request $request) {
//
//        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
//        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
//
//            return $this->redirectToRoute('accueil');
//        }
//
//
//        // Le service authentication_utils permet de récupérer le nom d'utilisateur
//        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
//        // (mauvais mot de passe par exemple)
//        $authenticationUtils = $this->get('security.authentication_utils');
//
//
//        return $this->render('OCUserBundle:Security:login.html.twig', array(
//                    'last_username' => $authenticationUtils->getLastUsername(),
//                    'error' => $authenticationUtils->getLastAuthenticationError(),
//        ));
//    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Inscrit
     */
    public function setRoles($roles) {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Inscrit
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Inscrit
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Inscrit
     */
//    public function setPseudo($pseudo)
//    {
//        $this->pseudo = $pseudo;
//
//        return $this;
//    }

    /**
     * Get pseudo
     *
     * @return string
     */
//    public function getPseudo()
//    {
//        return $this->pseudo;
//    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Inscrit
     */
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
//    public function getPseudo()
//    {
//        return $this->pseudo;
//    }
}
