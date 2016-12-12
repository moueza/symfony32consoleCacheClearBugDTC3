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
        $__internal_31f9239fd08c0e2294ec6064f6d779d1a25df53848700e43a3f8c7a352c4f35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f9239fd08c0e2294ec6064f6d779d1a25df53848700e43a3f8c7a352c4f35e->enter($__internal_31f9239fd08c0e2294ec6064f6d779d1a25df53848700e43a3f8c7a352c4f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f7e03e96e536abba502dbf688ceb17cf9dddd3d3058de4248c03ea0445b695a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e03e96e536abba502dbf688ceb17cf9dddd3d3058de4248c03ea0445b695a9->enter($__internal_f7e03e96e536abba502dbf688ceb17cf9dddd3d3058de4248c03ea0445b695a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_31f9239fd08c0e2294ec6064f6d779d1a25df53848700e43a3f8c7a352c4f35e->leave($__internal_31f9239fd08c0e2294ec6064f6d779d1a25df53848700e43a3f8c7a352c4f35e_prof);

        
        $__internal_f7e03e96e536abba502dbf688ceb17cf9dddd3d3058de4248c03ea0445b695a9->leave($__internal_f7e03e96e536abba502dbf688ceb17cf9dddd3d3058de4248c03ea0445b695a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81154374141a24906502d45ad0540893656abc4af7cfe0a1ce5a23592056413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81154374141a24906502d45ad0540893656abc4af7cfe0a1ce5a23592056413->enter($__internal_a81154374141a24906502d45ad0540893656abc4af7cfe0a1ce5a23592056413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22dca4df04bfeae95d65ac2a84a2f79885a6911485d6f0181c31f8ae0ccdc72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dca4df04bfeae95d65ac2a84a2f79885a6911485d6f0181c31f8ae0ccdc72f->enter($__internal_22dca4df04bfeae95d65ac2a84a2f79885a6911485d6f0181c31f8ae0ccdc72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22dca4df04bfeae95d65ac2a84a2f79885a6911485d6f0181c31f8ae0ccdc72f->leave($__internal_22dca4df04bfeae95d65ac2a84a2f79885a6911485d6f0181c31f8ae0ccdc72f_prof);

        
        $__internal_a81154374141a24906502d45ad0540893656abc4af7cfe0a1ce5a23592056413->leave($__internal_a81154374141a24906502d45ad0540893656abc4af7cfe0a1ce5a23592056413_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28668f2081e2eebd4a401f769d1122bc1eac7a80affb017a5c42b7385a16bb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28668f2081e2eebd4a401f769d1122bc1eac7a80affb017a5c42b7385a16bb8c->enter($__internal_28668f2081e2eebd4a401f769d1122bc1eac7a80affb017a5c42b7385a16bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cfae7cba6b43735547c7398e2da5bac9a8d749cba2f5b52340497a2589f2497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfae7cba6b43735547c7398e2da5bac9a8d749cba2f5b52340497a2589f2497->enter($__internal_6cfae7cba6b43735547c7398e2da5bac9a8d749cba2f5b52340497a2589f2497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cfae7cba6b43735547c7398e2da5bac9a8d749cba2f5b52340497a2589f2497->leave($__internal_6cfae7cba6b43735547c7398e2da5bac9a8d749cba2f5b52340497a2589f2497_prof);

        
        $__internal_28668f2081e2eebd4a401f769d1122bc1eac7a80affb017a5c42b7385a16bb8c->leave($__internal_28668f2081e2eebd4a401f769d1122bc1eac7a80affb017a5c42b7385a16bb8c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ae373b77b62c8d1c40613cc66a8ab9192352d784ac6d92da9d3182ab1027440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae373b77b62c8d1c40613cc66a8ab9192352d784ac6d92da9d3182ab1027440->enter($__internal_4ae373b77b62c8d1c40613cc66a8ab9192352d784ac6d92da9d3182ab1027440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52f40860a5d5aa5f6cb20b4f7f40c9e84619c559eea594153d39b8385a9ef883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f40860a5d5aa5f6cb20b4f7f40c9e84619c559eea594153d39b8385a9ef883->enter($__internal_52f40860a5d5aa5f6cb20b4f7f40c9e84619c559eea594153d39b8385a9ef883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52f40860a5d5aa5f6cb20b4f7f40c9e84619c559eea594153d39b8385a9ef883->leave($__internal_52f40860a5d5aa5f6cb20b4f7f40c9e84619c559eea594153d39b8385a9ef883_prof);

        
        $__internal_4ae373b77b62c8d1c40613cc66a8ab9192352d784ac6d92da9d3182ab1027440->leave($__internal_4ae373b77b62c8d1c40613cc66a8ab9192352d784ac6d92da9d3182ab1027440_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ebd0f9dfc196877244232f79984d685b70619ae882e05280ee7ff1c230648b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebd0f9dfc196877244232f79984d685b70619ae882e05280ee7ff1c230648b0->enter($__internal_7ebd0f9dfc196877244232f79984d685b70619ae882e05280ee7ff1c230648b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ffa77b631a85d53b0863e6b09fa1f2d2dd9c7fa5540422d06d226ce767b567c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa77b631a85d53b0863e6b09fa1f2d2dd9c7fa5540422d06d226ce767b567c3->enter($__internal_ffa77b631a85d53b0863e6b09fa1f2d2dd9c7fa5540422d06d226ce767b567c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ffa77b631a85d53b0863e6b09fa1f2d2dd9c7fa5540422d06d226ce767b567c3->leave($__internal_ffa77b631a85d53b0863e6b09fa1f2d2dd9c7fa5540422d06d226ce767b567c3_prof);

        
        $__internal_7ebd0f9dfc196877244232f79984d685b70619ae882e05280ee7ff1c230648b0->leave($__internal_7ebd0f9dfc196877244232f79984d685b70619ae882e05280ee7ff1c230648b0_prof);

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
