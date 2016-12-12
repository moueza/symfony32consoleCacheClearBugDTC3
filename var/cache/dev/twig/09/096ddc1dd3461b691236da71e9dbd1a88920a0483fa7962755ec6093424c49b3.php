<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_35559e23a2a8137c2affca3a547cf70ac2fae06a66e9b4a770cf9caeeebaa7d9 extends Twig_Template
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
        $__internal_96769385352a7fc67a97272f70278332f5d6db6cb594ca8cd245fba92e6069d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96769385352a7fc67a97272f70278332f5d6db6cb594ca8cd245fba92e6069d0->enter($__internal_96769385352a7fc67a97272f70278332f5d6db6cb594ca8cd245fba92e6069d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7fe83de7aa91f2dddf0632393017d229fcfd7d76f8357a00f922c69913f24521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe83de7aa91f2dddf0632393017d229fcfd7d76f8357a00f922c69913f24521->enter($__internal_7fe83de7aa91f2dddf0632393017d229fcfd7d76f8357a00f922c69913f24521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_96769385352a7fc67a97272f70278332f5d6db6cb594ca8cd245fba92e6069d0->leave($__internal_96769385352a7fc67a97272f70278332f5d6db6cb594ca8cd245fba92e6069d0_prof);

        
        $__internal_7fe83de7aa91f2dddf0632393017d229fcfd7d76f8357a00f922c69913f24521->leave($__internal_7fe83de7aa91f2dddf0632393017d229fcfd7d76f8357a00f922c69913f24521_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
