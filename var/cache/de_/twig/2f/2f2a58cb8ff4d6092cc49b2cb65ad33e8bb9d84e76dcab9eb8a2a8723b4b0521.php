<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9bec2cb366f3c3c697d0661247e618e3b9cae099356c3bf454e5436a1a4b84a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4011328dc2b2c71f92d70b94733c186cf34d2a1357c6b7f7f2cb448d766780b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4011328dc2b2c71f92d70b94733c186cf34d2a1357c6b7f7f2cb448d766780b->enter($__internal_b4011328dc2b2c71f92d70b94733c186cf34d2a1357c6b7f7f2cb448d766780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e2db5188ced820da4174206ad0a628a5d0cfd3873e86c418bd9f6f55dc2772de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2db5188ced820da4174206ad0a628a5d0cfd3873e86c418bd9f6f55dc2772de->enter($__internal_e2db5188ced820da4174206ad0a628a5d0cfd3873e86c418bd9f6f55dc2772de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4011328dc2b2c71f92d70b94733c186cf34d2a1357c6b7f7f2cb448d766780b->leave($__internal_b4011328dc2b2c71f92d70b94733c186cf34d2a1357c6b7f7f2cb448d766780b_prof);

        
        $__internal_e2db5188ced820da4174206ad0a628a5d0cfd3873e86c418bd9f6f55dc2772de->leave($__internal_e2db5188ced820da4174206ad0a628a5d0cfd3873e86c418bd9f6f55dc2772de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0cb3bf4abcaa0bc216156621bd32ae2c11a382ee14aeb31a2832a2aae14e120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cb3bf4abcaa0bc216156621bd32ae2c11a382ee14aeb31a2832a2aae14e120->enter($__internal_b0cb3bf4abcaa0bc216156621bd32ae2c11a382ee14aeb31a2832a2aae14e120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_384af8f8af8f3728f31cbf564eb7839762fa6c5865acfe15323f00fbe23fcf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384af8f8af8f3728f31cbf564eb7839762fa6c5865acfe15323f00fbe23fcf9a->enter($__internal_384af8f8af8f3728f31cbf564eb7839762fa6c5865acfe15323f00fbe23fcf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_384af8f8af8f3728f31cbf564eb7839762fa6c5865acfe15323f00fbe23fcf9a->leave($__internal_384af8f8af8f3728f31cbf564eb7839762fa6c5865acfe15323f00fbe23fcf9a_prof);

        
        $__internal_b0cb3bf4abcaa0bc216156621bd32ae2c11a382ee14aeb31a2832a2aae14e120->leave($__internal_b0cb3bf4abcaa0bc216156621bd32ae2c11a382ee14aeb31a2832a2aae14e120_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_534630e8acc9419768a997da7c6d8aa4c90271e08aaed3c68d989558034afea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534630e8acc9419768a997da7c6d8aa4c90271e08aaed3c68d989558034afea0->enter($__internal_534630e8acc9419768a997da7c6d8aa4c90271e08aaed3c68d989558034afea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d3d55a8f27c477091168b2c63721c0d82b4015e60132229f1b19207b999678d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3d55a8f27c477091168b2c63721c0d82b4015e60132229f1b19207b999678d->enter($__internal_0d3d55a8f27c477091168b2c63721c0d82b4015e60132229f1b19207b999678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0d3d55a8f27c477091168b2c63721c0d82b4015e60132229f1b19207b999678d->leave($__internal_0d3d55a8f27c477091168b2c63721c0d82b4015e60132229f1b19207b999678d_prof);

        
        $__internal_534630e8acc9419768a997da7c6d8aa4c90271e08aaed3c68d989558034afea0->leave($__internal_534630e8acc9419768a997da7c6d8aa4c90271e08aaed3c68d989558034afea0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
