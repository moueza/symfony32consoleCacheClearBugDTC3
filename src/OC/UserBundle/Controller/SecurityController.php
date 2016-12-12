<?php

namespace OC\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SecurityController extends Controller {

    public function loginAction(Request $request) {

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('oc_platform_accueil');
        }


        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');



        // On récupère le service
        //$security = $container->get('security.token_storage');
        $security = $this->container->get('security.token_storage');
        // On récupère le token
        $token = $security->getToken();
        // Si la requête courante n'est pas derrière un pare-feu, $token est null
        // Sinon, on récupère l'utilisateur
        $user = $token->getUser();
        //$user = $token->getUser();


        if (null === $user) {

            // Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
        } else {

            // Ici, $user est une instance de notre classe User
            // Si la requête courante n'est pas derrière un pare-feu, $token est null
            // Sinon, on récupère l'utilisateur
            // Si l'utilisateur courant est anonyme, $user vaut « anon. »
            // Sinon, c'est une instance de notre entité User, on peut l'utiliser normalement
            //echo "username=".$user->getUsername();
            //$user->getUsername();
            //'usernamee' => $user->getUsername()
            return $this->render('OCUserBundle:Security:login.html.twig', array(
                        'last_username' => $authenticationUtils->getLastUsername(),
                        'error' => $authenticationUtils->getLastAuthenticationError(),
            ));
        }
    }

}
