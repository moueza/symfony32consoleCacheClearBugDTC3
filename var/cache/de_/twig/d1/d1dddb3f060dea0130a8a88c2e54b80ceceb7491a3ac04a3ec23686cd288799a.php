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
        $__internal_22f3c2c5c606cdb8fe4661d8628043439b6e6189d2642f7ef44cde1220327954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f3c2c5c606cdb8fe4661d8628043439b6e6189d2642f7ef44cde1220327954->enter($__internal_22f3c2c5c606cdb8fe4661d8628043439b6e6189d2642f7ef44cde1220327954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_240fc6d416492021adb5ba2a22fbbeaf5ba942d1e67e2244c175243c1308d061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240fc6d416492021adb5ba2a22fbbeaf5ba942d1e67e2244c175243c1308d061->enter($__internal_240fc6d416492021adb5ba2a22fbbeaf5ba942d1e67e2244c175243c1308d061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_22f3c2c5c606cdb8fe4661d8628043439b6e6189d2642f7ef44cde1220327954->leave($__internal_22f3c2c5c606cdb8fe4661d8628043439b6e6189d2642f7ef44cde1220327954_prof);

        
        $__internal_240fc6d416492021adb5ba2a22fbbeaf5ba942d1e67e2244c175243c1308d061->leave($__internal_240fc6d416492021adb5ba2a22fbbeaf5ba942d1e67e2244c175243c1308d061_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_240a5317975dfeb4ab1c04a9a5219ef3a797405f9bdd999defc52279d4a553e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240a5317975dfeb4ab1c04a9a5219ef3a797405f9bdd999defc52279d4a553e5->enter($__internal_240a5317975dfeb4ab1c04a9a5219ef3a797405f9bdd999defc52279d4a553e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_addcac5af1ba5b855277fd0282b05e1b8c7bf7b63d965a65855d584b45138ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addcac5af1ba5b855277fd0282b05e1b8c7bf7b63d965a65855d584b45138ae8->enter($__internal_addcac5af1ba5b855277fd0282b05e1b8c7bf7b63d965a65855d584b45138ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_addcac5af1ba5b855277fd0282b05e1b8c7bf7b63d965a65855d584b45138ae8->leave($__internal_addcac5af1ba5b855277fd0282b05e1b8c7bf7b63d965a65855d584b45138ae8_prof);

        
        $__internal_240a5317975dfeb4ab1c04a9a5219ef3a797405f9bdd999defc52279d4a553e5->leave($__internal_240a5317975dfeb4ab1c04a9a5219ef3a797405f9bdd999defc52279d4a553e5_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc52abe95d428695733bc3dce7077733db247ec8a47605ccf6ab7b85de47461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc52abe95d428695733bc3dce7077733db247ec8a47605ccf6ab7b85de47461->enter($__internal_ddc52abe95d428695733bc3dce7077733db247ec8a47605ccf6ab7b85de47461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_861dbed60a3aa96616111c061a6a452dffa1ab1089a247468680cc046aabe017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861dbed60a3aa96616111c061a6a452dffa1ab1089a247468680cc046aabe017->enter($__internal_861dbed60a3aa96616111c061a6a452dffa1ab1089a247468680cc046aabe017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        ";
        
        $__internal_861dbed60a3aa96616111c061a6a452dffa1ab1089a247468680cc046aabe017->leave($__internal_861dbed60a3aa96616111c061a6a452dffa1ab1089a247468680cc046aabe017_prof);

        
        $__internal_ddc52abe95d428695733bc3dce7077733db247ec8a47605ccf6ab7b85de47461->leave($__internal_ddc52abe95d428695733bc3dce7077733db247ec8a47605ccf6ab7b85de47461_prof);

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
