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
        $__internal_dd903aa4232755fc263194507c37a32076f1eceb559e352cf75906514b754bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd903aa4232755fc263194507c37a32076f1eceb559e352cf75906514b754bab->enter($__internal_dd903aa4232755fc263194507c37a32076f1eceb559e352cf75906514b754bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_1447b12625824d1c1752be63638d1aeb2105a499ef9d3d2ff37ea51e950492cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1447b12625824d1c1752be63638d1aeb2105a499ef9d3d2ff37ea51e950492cc->enter($__internal_1447b12625824d1c1752be63638d1aeb2105a499ef9d3d2ff37ea51e950492cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dd903aa4232755fc263194507c37a32076f1eceb559e352cf75906514b754bab->leave($__internal_dd903aa4232755fc263194507c37a32076f1eceb559e352cf75906514b754bab_prof);

        
        $__internal_1447b12625824d1c1752be63638d1aeb2105a499ef9d3d2ff37ea51e950492cc->leave($__internal_1447b12625824d1c1752be63638d1aeb2105a499ef9d3d2ff37ea51e950492cc_prof);

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
