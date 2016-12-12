<?php

/* @OCPlatform/Default/menu.html.twig */
class __TwigTemplate_808448704bce358c7ffa33788e9505b0d3f93d59c379abc7c950e95417f87447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


    <ul class=\"nav nav-pills nav-stacked\">

        <li>

            <a href=\"http://moueza.esy.es/m/\">
                Accueil DTC3
            </a>

        </li>






        <li>

            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">
                Inscription
            </a>

        </li>
        <li>

            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscrits");
        echo "\">
                Inscrits
            </a>

        </li>
        <li>

            <a href=\"http://moueza.esy.es/m/reglement/\">
                Règlement
            </a>

        </li>
        <li>

            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matchform");
        echo "\">
                Match formulaire
            </a>

        </li>
        <li>

            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matchsview");
        echo "\">
                Matchs
            </a>

        </li>

        <li>

            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("echeances");
        echo "\">
                Échéances
            </a>

        </li>

    </ul>





";
    }

    public function getTemplateName()
    {
        return "@OCPlatform/Default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 57,  78 => 49,  68 => 42,  51 => 28,  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCPlatform/Default/menu.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/PlatformBundle/Resources/views/Default/menu.html.twig");
    }
}
