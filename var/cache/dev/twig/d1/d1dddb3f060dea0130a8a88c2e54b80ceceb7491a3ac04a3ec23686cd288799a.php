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
        $__internal_bcf98dade39d31478763beb117de3c7e29c826e0607792e265158a0f81d645f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf98dade39d31478763beb117de3c7e29c826e0607792e265158a0f81d645f5->enter($__internal_bcf98dade39d31478763beb117de3c7e29c826e0607792e265158a0f81d645f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_ea825969386e1d3136cf2d8dbce44512cd5f15d2d1973d76bbc99db6736292cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea825969386e1d3136cf2d8dbce44512cd5f15d2d1973d76bbc99db6736292cd->enter($__internal_ea825969386e1d3136cf2d8dbce44512cd5f15d2d1973d76bbc99db6736292cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_bcf98dade39d31478763beb117de3c7e29c826e0607792e265158a0f81d645f5->leave($__internal_bcf98dade39d31478763beb117de3c7e29c826e0607792e265158a0f81d645f5_prof);

        
        $__internal_ea825969386e1d3136cf2d8dbce44512cd5f15d2d1973d76bbc99db6736292cd->leave($__internal_ea825969386e1d3136cf2d8dbce44512cd5f15d2d1973d76bbc99db6736292cd_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_1acb6d637d0f097cac0841863a44a3a534c081848148a131836d553611fd5601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acb6d637d0f097cac0841863a44a3a534c081848148a131836d553611fd5601->enter($__internal_1acb6d637d0f097cac0841863a44a3a534c081848148a131836d553611fd5601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea27d3836a46a4f5b12dacb4883d61339081f5e305494057d751ccd72f058099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea27d3836a46a4f5b12dacb4883d61339081f5e305494057d751ccd72f058099->enter($__internal_ea27d3836a46a4f5b12dacb4883d61339081f5e305494057d751ccd72f058099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_ea27d3836a46a4f5b12dacb4883d61339081f5e305494057d751ccd72f058099->leave($__internal_ea27d3836a46a4f5b12dacb4883d61339081f5e305494057d751ccd72f058099_prof);

        
        $__internal_1acb6d637d0f097cac0841863a44a3a534c081848148a131836d553611fd5601->leave($__internal_1acb6d637d0f097cac0841863a44a3a534c081848148a131836d553611fd5601_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_88fd61c08eae69ba5197f05ac9995e2577f54b0308b0fba65079dba01c9564ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fd61c08eae69ba5197f05ac9995e2577f54b0308b0fba65079dba01c9564ea->enter($__internal_88fd61c08eae69ba5197f05ac9995e2577f54b0308b0fba65079dba01c9564ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0eef583f0265e1875e7e3204a4942dbdbe6ec2901a7997c9ec37da3a940d52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eef583f0265e1875e7e3204a4942dbdbe6ec2901a7997c9ec37da3a940d52c->enter($__internal_a0eef583f0265e1875e7e3204a4942dbdbe6ec2901a7997c9ec37da3a940d52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        ";
        
        $__internal_a0eef583f0265e1875e7e3204a4942dbdbe6ec2901a7997c9ec37da3a940d52c->leave($__internal_a0eef583f0265e1875e7e3204a4942dbdbe6ec2901a7997c9ec37da3a940d52c_prof);

        
        $__internal_88fd61c08eae69ba5197f05ac9995e2577f54b0308b0fba65079dba01c9564ea->leave($__internal_88fd61c08eae69ba5197f05ac9995e2577f54b0308b0fba65079dba01c9564ea_prof);

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
