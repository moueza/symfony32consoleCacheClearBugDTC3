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
        $__internal_e4938fbd408445036b1ea1ce4f7319b8df0d252bebc6d98b56e7b19eb946bf4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4938fbd408445036b1ea1ce4f7319b8df0d252bebc6d98b56e7b19eb946bf4b->enter($__internal_e4938fbd408445036b1ea1ce4f7319b8df0d252bebc6d98b56e7b19eb946bf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1cc55257be2f44e4dc475914b704395cd058a6883d0ea80fa73120abf7ff751d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc55257be2f44e4dc475914b704395cd058a6883d0ea80fa73120abf7ff751d->enter($__internal_1cc55257be2f44e4dc475914b704395cd058a6883d0ea80fa73120abf7ff751d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e4938fbd408445036b1ea1ce4f7319b8df0d252bebc6d98b56e7b19eb946bf4b->leave($__internal_e4938fbd408445036b1ea1ce4f7319b8df0d252bebc6d98b56e7b19eb946bf4b_prof);

        
        $__internal_1cc55257be2f44e4dc475914b704395cd058a6883d0ea80fa73120abf7ff751d->leave($__internal_1cc55257be2f44e4dc475914b704395cd058a6883d0ea80fa73120abf7ff751d_prof);

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
