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
        $__internal_428c3f52859ffc81bfb7f21d9a62bf2cbad8d06222989cad6052e2e59004095e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428c3f52859ffc81bfb7f21d9a62bf2cbad8d06222989cad6052e2e59004095e->enter($__internal_428c3f52859ffc81bfb7f21d9a62bf2cbad8d06222989cad6052e2e59004095e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_ec6cdff4486ccd91a6bee592ac81fa1e205b8d32281528a2b17cf32795466033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6cdff4486ccd91a6bee592ac81fa1e205b8d32281528a2b17cf32795466033->enter($__internal_ec6cdff4486ccd91a6bee592ac81fa1e205b8d32281528a2b17cf32795466033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428c3f52859ffc81bfb7f21d9a62bf2cbad8d06222989cad6052e2e59004095e->leave($__internal_428c3f52859ffc81bfb7f21d9a62bf2cbad8d06222989cad6052e2e59004095e_prof);

        
        $__internal_ec6cdff4486ccd91a6bee592ac81fa1e205b8d32281528a2b17cf32795466033->leave($__internal_ec6cdff4486ccd91a6bee592ac81fa1e205b8d32281528a2b17cf32795466033_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28b48491cf9732fdc7cd011122f0f2ae57bdc4005db313fdf094a229c6ab37ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b48491cf9732fdc7cd011122f0f2ae57bdc4005db313fdf094a229c6ab37ee->enter($__internal_28b48491cf9732fdc7cd011122f0f2ae57bdc4005db313fdf094a229c6ab37ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec6a29c49af298089176515f178ae1639e7d3480a12296dd5d5a67f5f2b20a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6a29c49af298089176515f178ae1639e7d3480a12296dd5d5a67f5f2b20a28->enter($__internal_ec6a29c49af298089176515f178ae1639e7d3480a12296dd5d5a67f5f2b20a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_ec6a29c49af298089176515f178ae1639e7d3480a12296dd5d5a67f5f2b20a28->leave($__internal_ec6a29c49af298089176515f178ae1639e7d3480a12296dd5d5a67f5f2b20a28_prof);

        
        $__internal_28b48491cf9732fdc7cd011122f0f2ae57bdc4005db313fdf094a229c6ab37ee->leave($__internal_28b48491cf9732fdc7cd011122f0f2ae57bdc4005db313fdf094a229c6ab37ee_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb4afeb1c3539904422b9242627efcbda5643d8b03fac7d88e0b6e1b2291cf34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4afeb1c3539904422b9242627efcbda5643d8b03fac7d88e0b6e1b2291cf34->enter($__internal_cb4afeb1c3539904422b9242627efcbda5643d8b03fac7d88e0b6e1b2291cf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52e807c7bfb0a042afb4cba3e8107da6e56e3a290e3feb9d00b841edb2375b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e807c7bfb0a042afb4cba3e8107da6e56e3a290e3feb9d00b841edb2375b63->enter($__internal_52e807c7bfb0a042afb4cba3e8107da6e56e3a290e3feb9d00b841edb2375b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
        
        $__internal_52e807c7bfb0a042afb4cba3e8107da6e56e3a290e3feb9d00b841edb2375b63->leave($__internal_52e807c7bfb0a042afb4cba3e8107da6e56e3a290e3feb9d00b841edb2375b63_prof);

        
        $__internal_cb4afeb1c3539904422b9242627efcbda5643d8b03fac7d88e0b6e1b2291cf34->leave($__internal_cb4afeb1c3539904422b9242627efcbda5643d8b03fac7d88e0b6e1b2291cf34_prof);

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
