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
        $__internal_00462590505a02c29dcae1fc650526c279e0e53472fef5ddcfb4a2489aa6ec6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00462590505a02c29dcae1fc650526c279e0e53472fef5ddcfb4a2489aa6ec6f->enter($__internal_00462590505a02c29dcae1fc650526c279e0e53472fef5ddcfb4a2489aa6ec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

        $__internal_3d6f6d19d2df622f1181f822c04490e74be6761b44fda187068fb96c269ed2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6f6d19d2df622f1181f822c04490e74be6761b44fda187068fb96c269ed2f4->enter($__internal_3d6f6d19d2df622f1181f822c04490e74be6761b44fda187068fb96c269ed2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Default/menu.html.twig"));

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
        
        $__internal_00462590505a02c29dcae1fc650526c279e0e53472fef5ddcfb4a2489aa6ec6f->leave($__internal_00462590505a02c29dcae1fc650526c279e0e53472fef5ddcfb4a2489aa6ec6f_prof);

        
        $__internal_3d6f6d19d2df622f1181f822c04490e74be6761b44fda187068fb96c269ed2f4->leave($__internal_3d6f6d19d2df622f1181f822c04490e74be6761b44fda187068fb96c269ed2f4_prof);

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
