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
        $__internal_372ad3c71420de3520b9facaaad52eed071d9a7e73aae23105eea6d451cee7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372ad3c71420de3520b9facaaad52eed071d9a7e73aae23105eea6d451cee7e0->enter($__internal_372ad3c71420de3520b9facaaad52eed071d9a7e73aae23105eea6d451cee7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_137c829971f40131002d9e071444b77754bbf5b75a8a03693c70e6ac3061f0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137c829971f40131002d9e071444b77754bbf5b75a8a03693c70e6ac3061f0a3->enter($__internal_137c829971f40131002d9e071444b77754bbf5b75a8a03693c70e6ac3061f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_372ad3c71420de3520b9facaaad52eed071d9a7e73aae23105eea6d451cee7e0->leave($__internal_372ad3c71420de3520b9facaaad52eed071d9a7e73aae23105eea6d451cee7e0_prof);

        
        $__internal_137c829971f40131002d9e071444b77754bbf5b75a8a03693c70e6ac3061f0a3->leave($__internal_137c829971f40131002d9e071444b77754bbf5b75a8a03693c70e6ac3061f0a3_prof);

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
