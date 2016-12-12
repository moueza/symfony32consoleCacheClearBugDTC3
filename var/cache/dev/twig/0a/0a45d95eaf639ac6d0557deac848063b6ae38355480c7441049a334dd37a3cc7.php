<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9c0cf6bdd7000e3acefc95aa38752eb3c7a7d4449238e35ac4e312c0be5e8e8f extends Twig_Template
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
        $__internal_c34970d717272973e83c86c157e27b1a4da4a0d127491edc1b6f97c322968901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34970d717272973e83c86c157e27b1a4da4a0d127491edc1b6f97c322968901->enter($__internal_c34970d717272973e83c86c157e27b1a4da4a0d127491edc1b6f97c322968901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_22e988802c65c053b678a6f3561e382a3547e81a7b1d549022c1d5985e18c131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e988802c65c053b678a6f3561e382a3547e81a7b1d549022c1d5985e18c131->enter($__internal_22e988802c65c053b678a6f3561e382a3547e81a7b1d549022c1d5985e18c131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c34970d717272973e83c86c157e27b1a4da4a0d127491edc1b6f97c322968901->leave($__internal_c34970d717272973e83c86c157e27b1a4da4a0d127491edc1b6f97c322968901_prof);

        
        $__internal_22e988802c65c053b678a6f3561e382a3547e81a7b1d549022c1d5985e18c131->leave($__internal_22e988802c65c053b678a6f3561e382a3547e81a7b1d549022c1d5985e18c131_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
