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
        $__internal_e308f2d64e06811538c6713f96cd530b38b2351fbc8e6d1cc3d535b76a05847e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e308f2d64e06811538c6713f96cd530b38b2351fbc8e6d1cc3d535b76a05847e->enter($__internal_e308f2d64e06811538c6713f96cd530b38b2351fbc8e6d1cc3d535b76a05847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_28b6b6c44c590c7c195ba3312a241f797492fdb51c5e8018a135d6a86e3921f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b6b6c44c590c7c195ba3312a241f797492fdb51c5e8018a135d6a86e3921f8->enter($__internal_28b6b6c44c590c7c195ba3312a241f797492fdb51c5e8018a135d6a86e3921f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e308f2d64e06811538c6713f96cd530b38b2351fbc8e6d1cc3d535b76a05847e->leave($__internal_e308f2d64e06811538c6713f96cd530b38b2351fbc8e6d1cc3d535b76a05847e_prof);

        
        $__internal_28b6b6c44c590c7c195ba3312a241f797492fdb51c5e8018a135d6a86e3921f8->leave($__internal_28b6b6c44c590c7c195ba3312a241f797492fdb51c5e8018a135d6a86e3921f8_prof);

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
