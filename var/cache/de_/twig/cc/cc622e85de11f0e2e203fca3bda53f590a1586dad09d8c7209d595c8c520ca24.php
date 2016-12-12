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
        $__internal_032cc695c94939750fe73df81bd565fd99174d79468f46bb7c63769cbd2424e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032cc695c94939750fe73df81bd565fd99174d79468f46bb7c63769cbd2424e6->enter($__internal_032cc695c94939750fe73df81bd565fd99174d79468f46bb7c63769cbd2424e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b2042187a79623d4b6cd9b9b078e8f12f01df15b91181d62ed9c78bccb26a604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2042187a79623d4b6cd9b9b078e8f12f01df15b91181d62ed9c78bccb26a604->enter($__internal_b2042187a79623d4b6cd9b9b078e8f12f01df15b91181d62ed9c78bccb26a604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_032cc695c94939750fe73df81bd565fd99174d79468f46bb7c63769cbd2424e6->leave($__internal_032cc695c94939750fe73df81bd565fd99174d79468f46bb7c63769cbd2424e6_prof);

        
        $__internal_b2042187a79623d4b6cd9b9b078e8f12f01df15b91181d62ed9c78bccb26a604->leave($__internal_b2042187a79623d4b6cd9b9b078e8f12f01df15b91181d62ed9c78bccb26a604_prof);

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
