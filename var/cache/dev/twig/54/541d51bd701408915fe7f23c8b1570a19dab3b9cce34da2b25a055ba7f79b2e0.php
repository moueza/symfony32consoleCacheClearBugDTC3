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
        $__internal_490a0df2c9178a1a4e4fd9b2b462cabc18eec2aab83b81ff852976dd8b180a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490a0df2c9178a1a4e4fd9b2b462cabc18eec2aab83b81ff852976dd8b180a5e->enter($__internal_490a0df2c9178a1a4e4fd9b2b462cabc18eec2aab83b81ff852976dd8b180a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ef91e3fe3c74fc691ba69fd1a06d8e5a4d79c3d2025db8c0719b05826e14cc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef91e3fe3c74fc691ba69fd1a06d8e5a4d79c3d2025db8c0719b05826e14cc24->enter($__internal_ef91e3fe3c74fc691ba69fd1a06d8e5a4d79c3d2025db8c0719b05826e14cc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_490a0df2c9178a1a4e4fd9b2b462cabc18eec2aab83b81ff852976dd8b180a5e->leave($__internal_490a0df2c9178a1a4e4fd9b2b462cabc18eec2aab83b81ff852976dd8b180a5e_prof);

        
        $__internal_ef91e3fe3c74fc691ba69fd1a06d8e5a4d79c3d2025db8c0719b05826e14cc24->leave($__internal_ef91e3fe3c74fc691ba69fd1a06d8e5a4d79c3d2025db8c0719b05826e14cc24_prof);

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
