<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_837384be6dedc608256c57effce700e733301d1b2b6a4d8287e329bfcc041e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837384be6dedc608256c57effce700e733301d1b2b6a4d8287e329bfcc041e5f->enter($__internal_837384be6dedc608256c57effce700e733301d1b2b6a4d8287e329bfcc041e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9c3cb8504ef2e9c81241368bc85396d49b5018acfa206622f29f0ef771e7764e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3cb8504ef2e9c81241368bc85396d49b5018acfa206622f29f0ef771e7764e->enter($__internal_9c3cb8504ef2e9c81241368bc85396d49b5018acfa206622f29f0ef771e7764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_837384be6dedc608256c57effce700e733301d1b2b6a4d8287e329bfcc041e5f->leave($__internal_837384be6dedc608256c57effce700e733301d1b2b6a4d8287e329bfcc041e5f_prof);

        
        $__internal_9c3cb8504ef2e9c81241368bc85396d49b5018acfa206622f29f0ef771e7764e->leave($__internal_9c3cb8504ef2e9c81241368bc85396d49b5018acfa206622f29f0ef771e7764e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
