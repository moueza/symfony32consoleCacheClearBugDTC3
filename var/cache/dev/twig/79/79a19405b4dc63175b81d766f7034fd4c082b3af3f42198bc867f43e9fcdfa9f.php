<?php

/* @OCPlatform/Default/menu.html.twig */
class __TwigTemplate_11cf05f766bb5b0523dafe832cf8f0b262dbbd24819f23428052c0b4ae6c5808 extends Twig_Template
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
        $__internal_45b965f18b21fbdbb78311248d898dff41457a358cf3b08a46b0868f5a0eef85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b965f18b21fbdbb78311248d898dff41457a358cf3b08a46b0868f5a0eef85->enter($__internal_45b965f18b21fbdbb78311248d898dff41457a358cf3b08a46b0868f5a0eef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

        $__internal_d12d5a220ba1ef6e0a33663b8bcba382ffb062a721709bd9a9aafbd95a80b059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12d5a220ba1ef6e0a33663b8bcba382ffb062a721709bd9a9aafbd95a80b059->enter($__internal_d12d5a220ba1ef6e0a33663b8bcba382ffb062a721709bd9a9aafbd95a80b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

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
        
        $__internal_45b965f18b21fbdbb78311248d898dff41457a358cf3b08a46b0868f5a0eef85->leave($__internal_45b965f18b21fbdbb78311248d898dff41457a358cf3b08a46b0868f5a0eef85_prof);

        
        $__internal_d12d5a220ba1ef6e0a33663b8bcba382ffb062a721709bd9a9aafbd95a80b059->leave($__internal_d12d5a220ba1ef6e0a33663b8bcba382ffb062a721709bd9a9aafbd95a80b059_prof);

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
        return array (  95 => 57,  84 => 49,  74 => 42,  57 => 28,  47 => 21,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


    <ul class=\"nav nav-pills nav-stacked\">

        <li>

            <a href=\"http://moueza.esy.es/m/\">
                Accueil DTC3
            </a>

        </li>






        <li>

            <a href=\"{{ path('inscription') }}\">
                Inscription
            </a>

        </li>
        <li>

            <a href=\"{{ path('inscrits') }}\">
                Inscrits
            </a>

        </li>
        <li>

            <a href=\"http://moueza.esy.es/m/reglement/\">
                Règlement
            </a>

        </li>
        <li>

            <a href=\"{{ path('matchform') }}\">
                Match formulaire
            </a>

        </li>
        <li>

            <a href=\"{{ path('matchsview') }}\">
                Matchs
            </a>

        </li>

        <li>

            <a href=\"{{ path('echeances') }}\">
                Échéances
            </a>

        </li>

    </ul>





", "@OCPlatform/Default/menu.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/PlatformBundle/Resources/views/Default/menu.html.twig");
    }
}
