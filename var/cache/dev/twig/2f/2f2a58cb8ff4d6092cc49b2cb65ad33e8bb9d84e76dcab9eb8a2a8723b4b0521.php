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
        $__internal_831788cf16eafee34432c94de1e1fadbdc120787d49dc59a1cd2f3e0374482a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831788cf16eafee34432c94de1e1fadbdc120787d49dc59a1cd2f3e0374482a1->enter($__internal_831788cf16eafee34432c94de1e1fadbdc120787d49dc59a1cd2f3e0374482a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2214d87ae381753b15eed18d0cf6240707f9c2237741018a962e12a423bf126c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2214d87ae381753b15eed18d0cf6240707f9c2237741018a962e12a423bf126c->enter($__internal_2214d87ae381753b15eed18d0cf6240707f9c2237741018a962e12a423bf126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831788cf16eafee34432c94de1e1fadbdc120787d49dc59a1cd2f3e0374482a1->leave($__internal_831788cf16eafee34432c94de1e1fadbdc120787d49dc59a1cd2f3e0374482a1_prof);

        
        $__internal_2214d87ae381753b15eed18d0cf6240707f9c2237741018a962e12a423bf126c->leave($__internal_2214d87ae381753b15eed18d0cf6240707f9c2237741018a962e12a423bf126c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f489bdafa60e849f89f1dceb3f0361f092297a91351e5be05853bf70689b4c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f489bdafa60e849f89f1dceb3f0361f092297a91351e5be05853bf70689b4c55->enter($__internal_f489bdafa60e849f89f1dceb3f0361f092297a91351e5be05853bf70689b4c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_551b2276799b42354931b7de6f634142905e8adf3f90962d171b24ed93034a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551b2276799b42354931b7de6f634142905e8adf3f90962d171b24ed93034a70->enter($__internal_551b2276799b42354931b7de6f634142905e8adf3f90962d171b24ed93034a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_551b2276799b42354931b7de6f634142905e8adf3f90962d171b24ed93034a70->leave($__internal_551b2276799b42354931b7de6f634142905e8adf3f90962d171b24ed93034a70_prof);

        
        $__internal_f489bdafa60e849f89f1dceb3f0361f092297a91351e5be05853bf70689b4c55->leave($__internal_f489bdafa60e849f89f1dceb3f0361f092297a91351e5be05853bf70689b4c55_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a7f2823a9563e63d722a8e46b1434a279d2f8f2e4b49eccfcc2bff1f2120ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a7f2823a9563e63d722a8e46b1434a279d2f8f2e4b49eccfcc2bff1f2120ad->enter($__internal_07a7f2823a9563e63d722a8e46b1434a279d2f8f2e4b49eccfcc2bff1f2120ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82e9b6084652009dbe3d693622cf57b703856a31f2f0d166f44f166f61b5ade2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e9b6084652009dbe3d693622cf57b703856a31f2f0d166f44f166f61b5ade2->enter($__internal_82e9b6084652009dbe3d693622cf57b703856a31f2f0d166f44f166f61b5ade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82e9b6084652009dbe3d693622cf57b703856a31f2f0d166f44f166f61b5ade2->leave($__internal_82e9b6084652009dbe3d693622cf57b703856a31f2f0d166f44f166f61b5ade2_prof);

        
        $__internal_07a7f2823a9563e63d722a8e46b1434a279d2f8f2e4b49eccfcc2bff1f2120ad->leave($__internal_07a7f2823a9563e63d722a8e46b1434a279d2f8f2e4b49eccfcc2bff1f2120ad_prof);

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
