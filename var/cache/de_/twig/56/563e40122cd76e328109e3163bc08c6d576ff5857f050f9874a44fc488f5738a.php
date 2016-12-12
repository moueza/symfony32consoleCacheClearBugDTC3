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
        $__internal_0ff656095feaa5bf42851eb85fb0fa8106e7690576d69fcd0a0b2fd7c93a3068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff656095feaa5bf42851eb85fb0fa8106e7690576d69fcd0a0b2fd7c93a3068->enter($__internal_0ff656095feaa5bf42851eb85fb0fa8106e7690576d69fcd0a0b2fd7c93a3068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b505ff8e9244b9ba5b476432fb231c1d58ed46b21964ee9216c932fb568836e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b505ff8e9244b9ba5b476432fb231c1d58ed46b21964ee9216c932fb568836e8->enter($__internal_b505ff8e9244b9ba5b476432fb231c1d58ed46b21964ee9216c932fb568836e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ff656095feaa5bf42851eb85fb0fa8106e7690576d69fcd0a0b2fd7c93a3068->leave($__internal_0ff656095feaa5bf42851eb85fb0fa8106e7690576d69fcd0a0b2fd7c93a3068_prof);

        
        $__internal_b505ff8e9244b9ba5b476432fb231c1d58ed46b21964ee9216c932fb568836e8->leave($__internal_b505ff8e9244b9ba5b476432fb231c1d58ed46b21964ee9216c932fb568836e8_prof);

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
