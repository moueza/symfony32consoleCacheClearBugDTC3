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
        $__internal_6fff44b309cfb27f1d5c7e7e0f15059f400603ae9fa280a43c71a0874992049b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fff44b309cfb27f1d5c7e7e0f15059f400603ae9fa280a43c71a0874992049b->enter($__internal_6fff44b309cfb27f1d5c7e7e0f15059f400603ae9fa280a43c71a0874992049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d2c2d0f961722a372bbf09c18104d2fb61d2baa3df5229948ad683caaf902b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c2d0f961722a372bbf09c18104d2fb61d2baa3df5229948ad683caaf902b6f->enter($__internal_d2c2d0f961722a372bbf09c18104d2fb61d2baa3df5229948ad683caaf902b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fff44b309cfb27f1d5c7e7e0f15059f400603ae9fa280a43c71a0874992049b->leave($__internal_6fff44b309cfb27f1d5c7e7e0f15059f400603ae9fa280a43c71a0874992049b_prof);

        
        $__internal_d2c2d0f961722a372bbf09c18104d2fb61d2baa3df5229948ad683caaf902b6f->leave($__internal_d2c2d0f961722a372bbf09c18104d2fb61d2baa3df5229948ad683caaf902b6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f20f48d8ee2c6a1a217b8ccd0692822abe4c724a519e76ac48bab3dd180135f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20f48d8ee2c6a1a217b8ccd0692822abe4c724a519e76ac48bab3dd180135f5->enter($__internal_f20f48d8ee2c6a1a217b8ccd0692822abe4c724a519e76ac48bab3dd180135f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89bb0a6d6f58e8db4ae6c635c343e1bc6d225c67d1a6b27f751caf3d6d4822cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bb0a6d6f58e8db4ae6c635c343e1bc6d225c67d1a6b27f751caf3d6d4822cc->enter($__internal_89bb0a6d6f58e8db4ae6c635c343e1bc6d225c67d1a6b27f751caf3d6d4822cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_89bb0a6d6f58e8db4ae6c635c343e1bc6d225c67d1a6b27f751caf3d6d4822cc->leave($__internal_89bb0a6d6f58e8db4ae6c635c343e1bc6d225c67d1a6b27f751caf3d6d4822cc_prof);

        
        $__internal_f20f48d8ee2c6a1a217b8ccd0692822abe4c724a519e76ac48bab3dd180135f5->leave($__internal_f20f48d8ee2c6a1a217b8ccd0692822abe4c724a519e76ac48bab3dd180135f5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d4d42b0741605e073ef1298bd60c4c7a81234c54603029b3d2ddb49057d229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d4d42b0741605e073ef1298bd60c4c7a81234c54603029b3d2ddb49057d229->enter($__internal_d3d4d42b0741605e073ef1298bd60c4c7a81234c54603029b3d2ddb49057d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28f380b8a063e020607b0eefdd3a8be2006531404b3e88d9a825b1d489254f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f380b8a063e020607b0eefdd3a8be2006531404b3e88d9a825b1d489254f65->enter($__internal_28f380b8a063e020607b0eefdd3a8be2006531404b3e88d9a825b1d489254f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28f380b8a063e020607b0eefdd3a8be2006531404b3e88d9a825b1d489254f65->leave($__internal_28f380b8a063e020607b0eefdd3a8be2006531404b3e88d9a825b1d489254f65_prof);

        
        $__internal_d3d4d42b0741605e073ef1298bd60c4c7a81234c54603029b3d2ddb49057d229->leave($__internal_d3d4d42b0741605e073ef1298bd60c4c7a81234c54603029b3d2ddb49057d229_prof);

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
