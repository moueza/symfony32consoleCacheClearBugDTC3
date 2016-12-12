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
        $__internal_52dc93735db70cbca58fca755c283a2e370c5901a4d4eea9cca066279179afcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dc93735db70cbca58fca755c283a2e370c5901a4d4eea9cca066279179afcc->enter($__internal_52dc93735db70cbca58fca755c283a2e370c5901a4d4eea9cca066279179afcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1a796d4137bddffdea0237ceaff15e1899657c7b752e380b8d8ffaf9333d1592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a796d4137bddffdea0237ceaff15e1899657c7b752e380b8d8ffaf9333d1592->enter($__internal_1a796d4137bddffdea0237ceaff15e1899657c7b752e380b8d8ffaf9333d1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_52dc93735db70cbca58fca755c283a2e370c5901a4d4eea9cca066279179afcc->leave($__internal_52dc93735db70cbca58fca755c283a2e370c5901a4d4eea9cca066279179afcc_prof);

        
        $__internal_1a796d4137bddffdea0237ceaff15e1899657c7b752e380b8d8ffaf9333d1592->leave($__internal_1a796d4137bddffdea0237ceaff15e1899657c7b752e380b8d8ffaf9333d1592_prof);

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
