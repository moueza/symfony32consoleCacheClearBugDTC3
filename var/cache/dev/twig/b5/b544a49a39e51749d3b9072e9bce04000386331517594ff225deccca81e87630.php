<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e20d8ce519e8bf0c39f8c22f3d6c41460b27b0fecffb7ba99bd382a49e57191d extends Twig_Template
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
        $__internal_960021eb4a09e8bda0b8363374ebe15c056628de1a763ee02e536c9219f08216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960021eb4a09e8bda0b8363374ebe15c056628de1a763ee02e536c9219f08216->enter($__internal_960021eb4a09e8bda0b8363374ebe15c056628de1a763ee02e536c9219f08216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b60b82ec99a104c788ef4f846530cd3ec0cd80cf4331946677ec646ea58a9caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60b82ec99a104c788ef4f846530cd3ec0cd80cf4331946677ec646ea58a9caa->enter($__internal_b60b82ec99a104c788ef4f846530cd3ec0cd80cf4331946677ec646ea58a9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_960021eb4a09e8bda0b8363374ebe15c056628de1a763ee02e536c9219f08216->leave($__internal_960021eb4a09e8bda0b8363374ebe15c056628de1a763ee02e536c9219f08216_prof);

        
        $__internal_b60b82ec99a104c788ef4f846530cd3ec0cd80cf4331946677ec646ea58a9caa->leave($__internal_b60b82ec99a104c788ef4f846530cd3ec0cd80cf4331946677ec646ea58a9caa_prof);

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
