<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if ($pathinfo === '/homepage') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'accueil',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'OC\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/inscri')) {
            // inscription
            if ($pathinfo === '/inscription') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscriptionAction',  '_route' => 'inscription',);
            }

            if (0 === strpos($pathinfo, '/inscrit')) {
                // inscrit_view
                if (preg_match('#^/inscrit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscrit_view')), array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritAction',));
                }

                // inscrits
                if ($pathinfo === '/inscrits') {
                    return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  '_route' => 'inscrits',);
                }

            }

        }

        // oc_user_inscrit_inscrits
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oc_user_inscrit_inscrits');
            }

            return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  '_route' => 'oc_user_inscrit_inscrits',);
        }

        // oc_user_inscrit_inscrits_1
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::inscritsAction',  '_route' => 'oc_user_inscrit_inscrits_1',);
        }

        if (0 === strpos($pathinfo, '/update')) {
            // updatemail
            if (0 === strpos($pathinfo, '/updatemail') && preg_match('#^/updatemail/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updatemail')), array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::updatemailAction',));
            }

            // updateusername
            if (0 === strpos($pathinfo, '/updateusername') && preg_match('#^/updateusername/(?P<mail>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateusername')), array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::updateusernameAction',));
            }

        }

        // secu
        if ($pathinfo === '/secu') {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::secuAction',  '_route' => 'secu',);
        }

        if (0 === strpos($pathinfo, '/my')) {
            // myaccount
            if ($pathinfo === '/myaccount') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::myaccountAction',  '_route' => 'myaccount',);
            }

            // mypublicprofile
            if ($pathinfo === '/mydispos') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::mydisposAction',  '_route' => 'mypublicprofile',);
            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            // dispos
            if ($pathinfo === '/dispos') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::disposAction',  '_route' => 'dispos',);
            }

            // desinscription
            if ($pathinfo === '/desinscription') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\InscritController::desinscriptionAction',  '_route' => 'desinscription',);
            }

        }

        if (0 === strpos($pathinfo, '/match')) {
            // matchform
            if ($pathinfo === '/matchform') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchformAction',  '_route' => 'matchform',);
            }

            // matchview
            if (0 === strpos($pathinfo, '/matchview') && preg_match('#^/matchview/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'matchview')), array (  '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchviewAction',));
            }

            // matchsview
            if ($pathinfo === '/matchsview') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::matchsviewAction',  '_route' => 'matchsview',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // selectjoueur
            if ($pathinfo === '/selectjoueur') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::selectjoueurAction',  '_route' => 'selectjoueur',);
            }

            // switchjoueur
            if ($pathinfo === '/switchjoueur') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\MatchhController::switchjoueurAction',  '_route' => 'switchjoueur',);
            }

        }

        if (0 === strpos($pathinfo, '/echeances')) {
            // echeances
            if ($pathinfo === '/echeances') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\EcheanceController::echeancesAction',  '_route' => 'echeances',);
            }

            // echeancesPoub
            if ($pathinfo === '/echeancesPoub') {
                return array (  '_controller' => 'OC\\UserBundle\\Controller\\EcheanceController::echeancesPoubAction',  '_route' => 'echeancesPoub',);
            }

        }

        // add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'add',);
        }

        // menu
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'OC\\PlatformBundle\\Controller\\AdvertController::menuAction',  '_route' => 'menu',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
