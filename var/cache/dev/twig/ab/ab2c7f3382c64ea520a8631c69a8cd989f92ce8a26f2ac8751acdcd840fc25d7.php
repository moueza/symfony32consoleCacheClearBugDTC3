<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d8a5f79ca1204afe21050cd49d1e5b4c552b7664b24aaa5da84e1944e5a5e515 extends Twig_Template
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
        $__internal_b90636a18104e6dfd389412dcd3d84931b9538780d39f5c7ac70d5da962d7131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90636a18104e6dfd389412dcd3d84931b9538780d39f5c7ac70d5da962d7131->enter($__internal_b90636a18104e6dfd389412dcd3d84931b9538780d39f5c7ac70d5da962d7131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4de3b9974ba9c9ddc265018adbc66758bbaaef3298c92703c06fe3ee66faa420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3b9974ba9c9ddc265018adbc66758bbaaef3298c92703c06fe3ee66faa420->enter($__internal_4de3b9974ba9c9ddc265018adbc66758bbaaef3298c92703c06fe3ee66faa420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b90636a18104e6dfd389412dcd3d84931b9538780d39f5c7ac70d5da962d7131->leave($__internal_b90636a18104e6dfd389412dcd3d84931b9538780d39f5c7ac70d5da962d7131_prof);

        
        $__internal_4de3b9974ba9c9ddc265018adbc66758bbaaef3298c92703c06fe3ee66faa420->leave($__internal_4de3b9974ba9c9ddc265018adbc66758bbaaef3298c92703c06fe3ee66faa420_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
