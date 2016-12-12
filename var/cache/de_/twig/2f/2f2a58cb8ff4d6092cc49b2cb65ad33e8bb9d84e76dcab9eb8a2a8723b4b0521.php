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
        $__internal_a7ee7f7454e2b6598fe0a6ea8b5cf31ec27c4468ce60e5803c29395e668370b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ee7f7454e2b6598fe0a6ea8b5cf31ec27c4468ce60e5803c29395e668370b8->enter($__internal_a7ee7f7454e2b6598fe0a6ea8b5cf31ec27c4468ce60e5803c29395e668370b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b900efb22dfea0d26acece7f9bd520d29cff2cd9d2f2fa0524b872f0d91508be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b900efb22dfea0d26acece7f9bd520d29cff2cd9d2f2fa0524b872f0d91508be->enter($__internal_b900efb22dfea0d26acece7f9bd520d29cff2cd9d2f2fa0524b872f0d91508be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7ee7f7454e2b6598fe0a6ea8b5cf31ec27c4468ce60e5803c29395e668370b8->leave($__internal_a7ee7f7454e2b6598fe0a6ea8b5cf31ec27c4468ce60e5803c29395e668370b8_prof);

        
        $__internal_b900efb22dfea0d26acece7f9bd520d29cff2cd9d2f2fa0524b872f0d91508be->leave($__internal_b900efb22dfea0d26acece7f9bd520d29cff2cd9d2f2fa0524b872f0d91508be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92a9c6bd2b179e0a0ea1038243678a2be6531b98c19322d6d5d2c53d5f6f8a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a9c6bd2b179e0a0ea1038243678a2be6531b98c19322d6d5d2c53d5f6f8a2b->enter($__internal_92a9c6bd2b179e0a0ea1038243678a2be6531b98c19322d6d5d2c53d5f6f8a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0720d58cbb609f906b90e48df85f8ee2bf3dce212a0470e0f7229aafb53a299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0720d58cbb609f906b90e48df85f8ee2bf3dce212a0470e0f7229aafb53a299->enter($__internal_c0720d58cbb609f906b90e48df85f8ee2bf3dce212a0470e0f7229aafb53a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c0720d58cbb609f906b90e48df85f8ee2bf3dce212a0470e0f7229aafb53a299->leave($__internal_c0720d58cbb609f906b90e48df85f8ee2bf3dce212a0470e0f7229aafb53a299_prof);

        
        $__internal_92a9c6bd2b179e0a0ea1038243678a2be6531b98c19322d6d5d2c53d5f6f8a2b->leave($__internal_92a9c6bd2b179e0a0ea1038243678a2be6531b98c19322d6d5d2c53d5f6f8a2b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e17f703772eab97d3db236644f5386507b77266bd4fd3f49c9cac0457386d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e17f703772eab97d3db236644f5386507b77266bd4fd3f49c9cac0457386d0e->enter($__internal_2e17f703772eab97d3db236644f5386507b77266bd4fd3f49c9cac0457386d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3533ca7309daf95a04ec743d6c1c59b291ce0bf80eea58896efe2d94d6076f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3533ca7309daf95a04ec743d6c1c59b291ce0bf80eea58896efe2d94d6076f8->enter($__internal_b3533ca7309daf95a04ec743d6c1c59b291ce0bf80eea58896efe2d94d6076f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3533ca7309daf95a04ec743d6c1c59b291ce0bf80eea58896efe2d94d6076f8->leave($__internal_b3533ca7309daf95a04ec743d6c1c59b291ce0bf80eea58896efe2d94d6076f8_prof);

        
        $__internal_2e17f703772eab97d3db236644f5386507b77266bd4fd3f49c9cac0457386d0e->leave($__internal_2e17f703772eab97d3db236644f5386507b77266bd4fd3f49c9cac0457386d0e_prof);

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
