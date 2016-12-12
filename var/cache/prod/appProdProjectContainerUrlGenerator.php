<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homepage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscrit_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inscrit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscrits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscrits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_user_inscrit_inscrits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'oc_user_inscrit_inscrits_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updatemail' => array (  0 =>   array (    0 => 'username',  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::updatemailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    1 =>     array (      0 => 'text',      1 => '/updatemail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateusername' => array (  0 =>   array (    0 => 'mail',  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::updateusernameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mail',    ),    1 =>     array (      0 => 'text',      1 => '/updateusername',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'secu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::secuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/secu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myaccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::myaccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myaccount',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mypublicprofile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::mydisposAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mydispos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dispos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::disposAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dispos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'desinscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\InscritController::desinscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/desinscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matchform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matchform',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matchview' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/matchview',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matchsview' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchsviewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matchsview',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'selectjoueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::selectjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/selectjoueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'switchjoueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::switchjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/switchjoueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'echeances' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\EcheanceController::echeancesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/echeances',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'echeancesPoub' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\UserBundle\\Controller\\EcheanceController::echeancesPoubAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/echeancesPoub',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
