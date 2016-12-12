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
        $__internal_c987c165744e53ef14285818165a36aae5058058d663dba3412f210c136c4ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c987c165744e53ef14285818165a36aae5058058d663dba3412f210c136c4ca3->enter($__internal_c987c165744e53ef14285818165a36aae5058058d663dba3412f210c136c4ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b59c597d6ec439fb4aaa63a13f1505c151a690a7a4a334bf4b7c34e2a30937b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59c597d6ec439fb4aaa63a13f1505c151a690a7a4a334bf4b7c34e2a30937b4->enter($__internal_b59c597d6ec439fb4aaa63a13f1505c151a690a7a4a334bf4b7c34e2a30937b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c987c165744e53ef14285818165a36aae5058058d663dba3412f210c136c4ca3->leave($__internal_c987c165744e53ef14285818165a36aae5058058d663dba3412f210c136c4ca3_prof);

        
        $__internal_b59c597d6ec439fb4aaa63a13f1505c151a690a7a4a334bf4b7c34e2a30937b4->leave($__internal_b59c597d6ec439fb4aaa63a13f1505c151a690a7a4a334bf4b7c34e2a30937b4_prof);

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
