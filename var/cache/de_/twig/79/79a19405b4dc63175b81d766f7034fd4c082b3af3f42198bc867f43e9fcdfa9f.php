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
        $__internal_ccc754f5b0f38588c9b8543915f8f2555b7406ac3747ce06e4770649a83d5caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc754f5b0f38588c9b8543915f8f2555b7406ac3747ce06e4770649a83d5caa->enter($__internal_ccc754f5b0f38588c9b8543915f8f2555b7406ac3747ce06e4770649a83d5caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

        $__internal_0a768c2136d7be647e5d3840e9f528b6849415bee7c9013648423d3287206ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a768c2136d7be647e5d3840e9f528b6849415bee7c9013648423d3287206ce7->enter($__internal_0a768c2136d7be647e5d3840e9f528b6849415bee7c9013648423d3287206ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

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
        
        $__internal_ccc754f5b0f38588c9b8543915f8f2555b7406ac3747ce06e4770649a83d5caa->leave($__internal_ccc754f5b0f38588c9b8543915f8f2555b7406ac3747ce06e4770649a83d5caa_prof);

        
        $__internal_0a768c2136d7be647e5d3840e9f528b6849415bee7c9013648423d3287206ce7->leave($__internal_0a768c2136d7be647e5d3840e9f528b6849415bee7c9013648423d3287206ce7_prof);

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
