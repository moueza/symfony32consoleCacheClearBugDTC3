<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_09bf3399521d3dfe8b24cdc2c006eb0cd116f39471c524098ffaa509ee37f40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bf3399521d3dfe8b24cdc2c006eb0cd116f39471c524098ffaa509ee37f40e->enter($__internal_09bf3399521d3dfe8b24cdc2c006eb0cd116f39471c524098ffaa509ee37f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b3d88e6307aebcbebbf72ea5687d7dafc203bccb2814f7c9958885cd2f808c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d88e6307aebcbebbf72ea5687d7dafc203bccb2814f7c9958885cd2f808c51->enter($__internal_b3d88e6307aebcbebbf72ea5687d7dafc203bccb2814f7c9958885cd2f808c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_09bf3399521d3dfe8b24cdc2c006eb0cd116f39471c524098ffaa509ee37f40e->leave($__internal_09bf3399521d3dfe8b24cdc2c006eb0cd116f39471c524098ffaa509ee37f40e_prof);

        
        $__internal_b3d88e6307aebcbebbf72ea5687d7dafc203bccb2814f7c9958885cd2f808c51->leave($__internal_b3d88e6307aebcbebbf72ea5687d7dafc203bccb2814f7c9958885cd2f808c51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
