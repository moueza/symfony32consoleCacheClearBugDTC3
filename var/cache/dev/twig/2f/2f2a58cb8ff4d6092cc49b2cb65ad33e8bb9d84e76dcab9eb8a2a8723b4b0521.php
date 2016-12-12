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
        $__internal_153bcd8b8848ad51d74446053efad2b81700906a3d8de31e8ad5ba7326bedac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153bcd8b8848ad51d74446053efad2b81700906a3d8de31e8ad5ba7326bedac1->enter($__internal_153bcd8b8848ad51d74446053efad2b81700906a3d8de31e8ad5ba7326bedac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_49fb750bc23a76599175b576f21676abb2eb43cc6628eaf5186eb187e3045b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fb750bc23a76599175b576f21676abb2eb43cc6628eaf5186eb187e3045b30->enter($__internal_49fb750bc23a76599175b576f21676abb2eb43cc6628eaf5186eb187e3045b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153bcd8b8848ad51d74446053efad2b81700906a3d8de31e8ad5ba7326bedac1->leave($__internal_153bcd8b8848ad51d74446053efad2b81700906a3d8de31e8ad5ba7326bedac1_prof);

        
        $__internal_49fb750bc23a76599175b576f21676abb2eb43cc6628eaf5186eb187e3045b30->leave($__internal_49fb750bc23a76599175b576f21676abb2eb43cc6628eaf5186eb187e3045b30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbd1a6a6b8504fc1bad3269d9500b2c6ef60ce58f1f40fe69500655fc2d18487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd1a6a6b8504fc1bad3269d9500b2c6ef60ce58f1f40fe69500655fc2d18487->enter($__internal_dbd1a6a6b8504fc1bad3269d9500b2c6ef60ce58f1f40fe69500655fc2d18487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04b427b40eb4614bd018bed5357fb0436b2774825e4b6115277c0b00ce4beda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b427b40eb4614bd018bed5357fb0436b2774825e4b6115277c0b00ce4beda6->enter($__internal_04b427b40eb4614bd018bed5357fb0436b2774825e4b6115277c0b00ce4beda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_04b427b40eb4614bd018bed5357fb0436b2774825e4b6115277c0b00ce4beda6->leave($__internal_04b427b40eb4614bd018bed5357fb0436b2774825e4b6115277c0b00ce4beda6_prof);

        
        $__internal_dbd1a6a6b8504fc1bad3269d9500b2c6ef60ce58f1f40fe69500655fc2d18487->leave($__internal_dbd1a6a6b8504fc1bad3269d9500b2c6ef60ce58f1f40fe69500655fc2d18487_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6596749702121e213ccddc2cf4a218d5ddd9e3450a42b42c039785f09d3a12ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6596749702121e213ccddc2cf4a218d5ddd9e3450a42b42c039785f09d3a12ea->enter($__internal_6596749702121e213ccddc2cf4a218d5ddd9e3450a42b42c039785f09d3a12ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45d73e74631531cecd976d116cfff23802cc1b6f7f225c28745b586834f7c032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d73e74631531cecd976d116cfff23802cc1b6f7f225c28745b586834f7c032->enter($__internal_45d73e74631531cecd976d116cfff23802cc1b6f7f225c28745b586834f7c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45d73e74631531cecd976d116cfff23802cc1b6f7f225c28745b586834f7c032->leave($__internal_45d73e74631531cecd976d116cfff23802cc1b6f7f225c28745b586834f7c032_prof);

        
        $__internal_6596749702121e213ccddc2cf4a218d5ddd9e3450a42b42c039785f09d3a12ea->leave($__internal_6596749702121e213ccddc2cf4a218d5ddd9e3450a42b42c039785f09d3a12ea_prof);

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
