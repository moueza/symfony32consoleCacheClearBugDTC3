<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
