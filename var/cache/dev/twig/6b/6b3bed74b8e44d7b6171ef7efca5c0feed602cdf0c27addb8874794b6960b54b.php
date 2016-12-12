<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
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
        $__internal_1b620cbd371a406911c0915b8e209edec1e18539cd1a387be2c40ceb5e83cc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b620cbd371a406911c0915b8e209edec1e18539cd1a387be2c40ceb5e83cc73->enter($__internal_1b620cbd371a406911c0915b8e209edec1e18539cd1a387be2c40ceb5e83cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_53c2fb4c6858a90b026375a8924a029a9f49fc5952fb1d4ffbd6cb8584ba7e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c2fb4c6858a90b026375a8924a029a9f49fc5952fb1d4ffbd6cb8584ba7e64->enter($__internal_53c2fb4c6858a90b026375a8924a029a9f49fc5952fb1d4ffbd6cb8584ba7e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1b620cbd371a406911c0915b8e209edec1e18539cd1a387be2c40ceb5e83cc73->leave($__internal_1b620cbd371a406911c0915b8e209edec1e18539cd1a387be2c40ceb5e83cc73_prof);

        
        $__internal_53c2fb4c6858a90b026375a8924a029a9f49fc5952fb1d4ffbd6cb8584ba7e64->leave($__internal_53c2fb4c6858a90b026375a8924a029a9f49fc5952fb1d4ffbd6cb8584ba7e64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
