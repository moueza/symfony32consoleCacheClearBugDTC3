<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c4b5bf6104575fc359f4744bc8f6682c7479277b941d7bdc926b068192fd660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4b5bf6104575fc359f4744bc8f6682c7479277b941d7bdc926b068192fd660->enter($__internal_8c4b5bf6104575fc359f4744bc8f6682c7479277b941d7bdc926b068192fd660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_74c528c6961796fc7b1a072064033276cd1c08463e852f4b0f781b439e834eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c528c6961796fc7b1a072064033276cd1c08463e852f4b0f781b439e834eed->enter($__internal_74c528c6961796fc7b1a072064033276cd1c08463e852f4b0f781b439e834eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_8c4b5bf6104575fc359f4744bc8f6682c7479277b941d7bdc926b068192fd660->leave($__internal_8c4b5bf6104575fc359f4744bc8f6682c7479277b941d7bdc926b068192fd660_prof);

        
        $__internal_74c528c6961796fc7b1a072064033276cd1c08463e852f4b0f781b439e834eed->leave($__internal_74c528c6961796fc7b1a072064033276cd1c08463e852f4b0f781b439e834eed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dfce458d37139ad0fda191af4432bd250c5ada9871590e2682e942a0167e27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfce458d37139ad0fda191af4432bd250c5ada9871590e2682e942a0167e27c->enter($__internal_8dfce458d37139ad0fda191af4432bd250c5ada9871590e2682e942a0167e27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c962a38ba4fdd0e0beb5f93416f517c2220b90e8a5a3e9b26e810cc3e821bd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c962a38ba4fdd0e0beb5f93416f517c2220b90e8a5a3e9b26e810cc3e821bd3d->enter($__internal_c962a38ba4fdd0e0beb5f93416f517c2220b90e8a5a3e9b26e810cc3e821bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c962a38ba4fdd0e0beb5f93416f517c2220b90e8a5a3e9b26e810cc3e821bd3d->leave($__internal_c962a38ba4fdd0e0beb5f93416f517c2220b90e8a5a3e9b26e810cc3e821bd3d_prof);

        
        $__internal_8dfce458d37139ad0fda191af4432bd250c5ada9871590e2682e942a0167e27c->leave($__internal_8dfce458d37139ad0fda191af4432bd250c5ada9871590e2682e942a0167e27c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5785c913e89b82d33ee563b7bbed99bfd71f15228764377a0b74777a9c9af26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5785c913e89b82d33ee563b7bbed99bfd71f15228764377a0b74777a9c9af26b->enter($__internal_5785c913e89b82d33ee563b7bbed99bfd71f15228764377a0b74777a9c9af26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae7f628558b364da722ba08dd5fb4cbe3a6ebd1ed56b19748012f6c8a41296e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7f628558b364da722ba08dd5fb4cbe3a6ebd1ed56b19748012f6c8a41296e0->enter($__internal_ae7f628558b364da722ba08dd5fb4cbe3a6ebd1ed56b19748012f6c8a41296e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae7f628558b364da722ba08dd5fb4cbe3a6ebd1ed56b19748012f6c8a41296e0->leave($__internal_ae7f628558b364da722ba08dd5fb4cbe3a6ebd1ed56b19748012f6c8a41296e0_prof);

        
        $__internal_5785c913e89b82d33ee563b7bbed99bfd71f15228764377a0b74777a9c9af26b->leave($__internal_5785c913e89b82d33ee563b7bbed99bfd71f15228764377a0b74777a9c9af26b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9e7b2d7dcc29c84489afb692e4997906ce86f6019c32ab636da9bbc219a053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9e7b2d7dcc29c84489afb692e4997906ce86f6019c32ab636da9bbc219a053->enter($__internal_fe9e7b2d7dcc29c84489afb692e4997906ce86f6019c32ab636da9bbc219a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60523cc7d831b86dc7a24957f9bef6b1650c5e44b1aeea4f7aab03359d9e989a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60523cc7d831b86dc7a24957f9bef6b1650c5e44b1aeea4f7aab03359d9e989a->enter($__internal_60523cc7d831b86dc7a24957f9bef6b1650c5e44b1aeea4f7aab03359d9e989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60523cc7d831b86dc7a24957f9bef6b1650c5e44b1aeea4f7aab03359d9e989a->leave($__internal_60523cc7d831b86dc7a24957f9bef6b1650c5e44b1aeea4f7aab03359d9e989a_prof);

        
        $__internal_fe9e7b2d7dcc29c84489afb692e4997906ce86f6019c32ab636da9bbc219a053->leave($__internal_fe9e7b2d7dcc29c84489afb692e4997906ce86f6019c32ab636da9bbc219a053_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bc5f22b237784d32cc8bbfb006dd8ebf8e0566dcd7fe84b1bd800a58065230f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc5f22b237784d32cc8bbfb006dd8ebf8e0566dcd7fe84b1bd800a58065230f->enter($__internal_8bc5f22b237784d32cc8bbfb006dd8ebf8e0566dcd7fe84b1bd800a58065230f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4a27061e3125accb3222e0c1edd882b0467d0798662b9f8cd239b0d3477e56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a27061e3125accb3222e0c1edd882b0467d0798662b9f8cd239b0d3477e56f->enter($__internal_c4a27061e3125accb3222e0c1edd882b0467d0798662b9f8cd239b0d3477e56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c4a27061e3125accb3222e0c1edd882b0467d0798662b9f8cd239b0d3477e56f->leave($__internal_c4a27061e3125accb3222e0c1edd882b0467d0798662b9f8cd239b0d3477e56f_prof);

        
        $__internal_8bc5f22b237784d32cc8bbfb006dd8ebf8e0566dcd7fe84b1bd800a58065230f->leave($__internal_8bc5f22b237784d32cc8bbfb006dd8ebf8e0566dcd7fe84b1bd800a58065230f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  64 => 5,  52 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/app/Resources/views/base.html.twig");
    }
}
