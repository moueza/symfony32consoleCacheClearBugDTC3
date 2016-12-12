<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_53cffb39e2741b475995220b9752f0b648b1f897c6060d4f8f11efcb8503422e extends Twig_Template
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
        $__internal_b6758e1b4876268cb450ea5a5a10a85034e68b3cc83e21214a5cce652faa20b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6758e1b4876268cb450ea5a5a10a85034e68b3cc83e21214a5cce652faa20b7->enter($__internal_b6758e1b4876268cb450ea5a5a10a85034e68b3cc83e21214a5cce652faa20b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e70d46e22884cd0c8cc413a08b649bafd916d74cf08a1d3ba6cdbf66b001cbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70d46e22884cd0c8cc413a08b649bafd916d74cf08a1d3ba6cdbf66b001cbf3->enter($__internal_e70d46e22884cd0c8cc413a08b649bafd916d74cf08a1d3ba6cdbf66b001cbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b6758e1b4876268cb450ea5a5a10a85034e68b3cc83e21214a5cce652faa20b7->leave($__internal_b6758e1b4876268cb450ea5a5a10a85034e68b3cc83e21214a5cce652faa20b7_prof);

        
        $__internal_e70d46e22884cd0c8cc413a08b649bafd916d74cf08a1d3ba6cdbf66b001cbf3->leave($__internal_e70d46e22884cd0c8cc413a08b649bafd916d74cf08a1d3ba6cdbf66b001cbf3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
