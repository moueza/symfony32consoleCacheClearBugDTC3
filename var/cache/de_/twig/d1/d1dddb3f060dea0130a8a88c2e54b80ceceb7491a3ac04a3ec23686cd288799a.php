<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_1111eb5e8f03a67aba40cb115c0d9d686f59904e31e2b35b53d7b2eb073c73f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f49f67d1c0d877706789afeffd1e3d59bd2fdf6d49448ab342d773a82ee8b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f49f67d1c0d877706789afeffd1e3d59bd2fdf6d49448ab342d773a82ee8b21->enter($__internal_1f49f67d1c0d877706789afeffd1e3d59bd2fdf6d49448ab342d773a82ee8b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_89c117b7f88a1871263ea074f6c0b7e88fb609d99bfdcf1a4815d3285c949c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c117b7f88a1871263ea074f6c0b7e88fb609d99bfdcf1a4815d3285c949c35->enter($__internal_89c117b7f88a1871263ea074f6c0b7e88fb609d99bfdcf1a4815d3285c949c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    </head>

    <body>


        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "

    </body>

</html>";
        
        $__internal_1f49f67d1c0d877706789afeffd1e3d59bd2fdf6d49448ab342d773a82ee8b21->leave($__internal_1f49f67d1c0d877706789afeffd1e3d59bd2fdf6d49448ab342d773a82ee8b21_prof);

        
        $__internal_89c117b7f88a1871263ea074f6c0b7e88fb609d99bfdcf1a4815d3285c949c35->leave($__internal_89c117b7f88a1871263ea074f6c0b7e88fb609d99bfdcf1a4815d3285c949c35_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9f4567003453e1f931583c251e912c3223e65610a4d3c1300735f95c03d62ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f4567003453e1f931583c251e912c3223e65610a4d3c1300735f95c03d62ba->enter($__internal_f9f4567003453e1f931583c251e912c3223e65610a4d3c1300735f95c03d62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cad504cb4e08cf201c949682414056c610409c5dc3edb00a67923b77fc49653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad504cb4e08cf201c949682414056c610409c5dc3edb00a67923b77fc49653c->enter($__internal_cad504cb4e08cf201c949682414056c610409c5dc3edb00a67923b77fc49653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_cad504cb4e08cf201c949682414056c610409c5dc3edb00a67923b77fc49653c->leave($__internal_cad504cb4e08cf201c949682414056c610409c5dc3edb00a67923b77fc49653c_prof);

        
        $__internal_f9f4567003453e1f931583c251e912c3223e65610a4d3c1300735f95c03d62ba->leave($__internal_f9f4567003453e1f931583c251e912c3223e65610a4d3c1300735f95c03d62ba_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_452f2645c352a025fac5924faebe064e14aa365b15afe33181f6756514b17ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452f2645c352a025fac5924faebe064e14aa365b15afe33181f6756514b17ec4->enter($__internal_452f2645c352a025fac5924faebe064e14aa365b15afe33181f6756514b17ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_950fbca9cbff41b6eb790c9786f85bdfd237c7fade9ba1c2f1c333ad76b36122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950fbca9cbff41b6eb790c9786f85bdfd237c7fade9ba1c2f1c333ad76b36122->enter($__internal_950fbca9cbff41b6eb790c9786f85bdfd237c7fade9ba1c2f1c333ad76b36122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        ";
        
        $__internal_950fbca9cbff41b6eb790c9786f85bdfd237c7fade9ba1c2f1c333ad76b36122->leave($__internal_950fbca9cbff41b6eb790c9786f85bdfd237c7fade9ba1c2f1c333ad76b36122_prof);

        
        $__internal_452f2645c352a025fac5924faebe064e14aa365b15afe33181f6756514b17ec4->leave($__internal_452f2645c352a025fac5924faebe064e14aa365b15afe33181f6756514b17ec4_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  82 => 17,  64 => 10,  50 => 20,  48 => 17,  38 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">

        <title>{% block title %}DTC 3{% endblock %}</title>

    </head>

    <body>


        {% block body %}

        {% endblock %}


    </body>

</html>", "OCCoreBundle::layout.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
