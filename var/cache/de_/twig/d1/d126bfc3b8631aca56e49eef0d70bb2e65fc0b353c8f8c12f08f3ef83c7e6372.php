<?php

/* default/accueil.html.twig */
class __TwigTemplate_524f631dfaa67838f1f88f9d84c2e2ba5bf31686866547e9ff67c86861238626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout2.html.twig", "default/accueil.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0def81bf934f9420a2108cafd750c22168638b9e225035b53cd1963ced970f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0def81bf934f9420a2108cafd750c22168638b9e225035b53cd1963ced970f63->enter($__internal_0def81bf934f9420a2108cafd750c22168638b9e225035b53cd1963ced970f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_047e9677cfcca989ee6e8b347dbbbf7afc9ffb4492328ef93c0d8a7e10723321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047e9677cfcca989ee6e8b347dbbbf7afc9ffb4492328ef93c0d8a7e10723321->enter($__internal_047e9677cfcca989ee6e8b347dbbbf7afc9ffb4492328ef93c0d8a7e10723321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0def81bf934f9420a2108cafd750c22168638b9e225035b53cd1963ced970f63->leave($__internal_0def81bf934f9420a2108cafd750c22168638b9e225035b53cd1963ced970f63_prof);

        
        $__internal_047e9677cfcca989ee6e8b347dbbbf7afc9ffb4492328ef93c0d8a7e10723321->leave($__internal_047e9677cfcca989ee6e8b347dbbbf7afc9ffb4492328ef93c0d8a7e10723321_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e86f7a61ebdf1023bd987dd161cc3a73c9acde32601165028b4992b8b1fab6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86f7a61ebdf1023bd987dd161cc3a73c9acde32601165028b4992b8b1fab6d3->enter($__internal_e86f7a61ebdf1023bd987dd161cc3a73c9acde32601165028b4992b8b1fab6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b609b5a9d29b03fab63495a2c65f204832504c928bd7ade8a8e0b5d0585bee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b609b5a9d29b03fab63495a2c65f204832504c928bd7ade8a8e0b5d0585bee6->enter($__internal_4b609b5a9d29b03fab63495a2c65f204832504c928bd7ade8a8e0b5d0585bee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_4b609b5a9d29b03fab63495a2c65f204832504c928bd7ade8a8e0b5d0585bee6->leave($__internal_4b609b5a9d29b03fab63495a2c65f204832504c928bd7ade8a8e0b5d0585bee6_prof);

        
        $__internal_e86f7a61ebdf1023bd987dd161cc3a73c9acde32601165028b4992b8b1fab6d3->leave($__internal_e86f7a61ebdf1023bd987dd161cc3a73c9acde32601165028b4992b8b1fab6d3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6439e33a105aeebacffedf3a7ad10d8976bd0b4431b817ab938149713601147b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6439e33a105aeebacffedf3a7ad10d8976bd0b4431b817ab938149713601147b->enter($__internal_6439e33a105aeebacffedf3a7ad10d8976bd0b4431b817ab938149713601147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d18a8776f9a8d84f3b2805a503928cb26d3f4c0bcb8a95d667ef1393a19f3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d18a8776f9a8d84f3b2805a503928cb26d3f4c0bcb8a95d667ef1393a19f3b3->enter($__internal_4d18a8776f9a8d84f3b2805a503928cb26d3f4c0bcb8a95d667ef1393a19f3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
        
        $__internal_4d18a8776f9a8d84f3b2805a503928cb26d3f4c0bcb8a95d667ef1393a19f3b3->leave($__internal_4d18a8776f9a8d84f3b2805a503928cb26d3f4c0bcb8a95d667ef1393a19f3b3_prof);

        
        $__internal_6439e33a105aeebacffedf3a7ad10d8976bd0b4431b817ab938149713601147b->leave($__internal_6439e33a105aeebacffedf3a7ad10d8976bd0b4431b817ab938149713601147b_prof);

    }

    public function getTemplateName()
    {
        return "default/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  60 => 8,  41 => 5,  11 => 2,);
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
{% extends \"OCPlatformBundle::layout2.html.twig\" %}


{% block title %}{{ parent() }} - Index{% endblock %}


{% block body %}


    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


{% endblock %}", "default/accueil.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/app/Resources/views/default/accueil.html.twig");
    }
}
