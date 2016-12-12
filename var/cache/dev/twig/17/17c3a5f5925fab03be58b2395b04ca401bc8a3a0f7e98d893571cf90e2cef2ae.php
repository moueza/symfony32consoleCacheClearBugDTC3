<?php

/* @OCUser/Inscription/echeances.html.twig */
class __TwigTemplate_7523fc1c48fa90bc9e536f06acbb66b3564f11fbf4f8a10aafc57c9af67c8a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle:Default:layout.html.twig", "@OCUser/Inscription/echeances.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_078d9ee5c4ed48e7563ae85f73f0c39ea12ded4e6a51e449820f283ca927b34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078d9ee5c4ed48e7563ae85f73f0c39ea12ded4e6a51e449820f283ca927b34c->enter($__internal_078d9ee5c4ed48e7563ae85f73f0c39ea12ded4e6a51e449820f283ca927b34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $__internal_4efcc31373bea9732a91ce5532267ad19a2f0546f679b42eed6ef40e35ce4687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efcc31373bea9732a91ce5532267ad19a2f0546f679b42eed6ef40e35ce4687->enter($__internal_4efcc31373bea9732a91ce5532267ad19a2f0546f679b42eed6ef40e35ce4687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078d9ee5c4ed48e7563ae85f73f0c39ea12ded4e6a51e449820f283ca927b34c->leave($__internal_078d9ee5c4ed48e7563ae85f73f0c39ea12ded4e6a51e449820f283ca927b34c_prof);

        
        $__internal_4efcc31373bea9732a91ce5532267ad19a2f0546f679b42eed6ef40e35ce4687->leave($__internal_4efcc31373bea9732a91ce5532267ad19a2f0546f679b42eed6ef40e35ce4687_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dd21430cf1b084fe4890c4f75efb775d6aefbab06975c3e2739d344cfaca844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd21430cf1b084fe4890c4f75efb775d6aefbab06975c3e2739d344cfaca844->enter($__internal_0dd21430cf1b084fe4890c4f75efb775d6aefbab06975c3e2739d344cfaca844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a2590aa617662ef1e473016810a539dc937c0a37f0ef5f7e9d9cd5cc527be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a2590aa617662ef1e473016810a539dc937c0a37f0ef5f7e9d9cd5cc527be1->enter($__internal_71a2590aa617662ef1e473016810a539dc937c0a37f0ef5f7e9d9cd5cc527be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <h1>Les échéances</h1>


    <div class=\"well\">
        <h2>Obligatoires</h2>
        <p>Les échéances obligatoire L, L étant une lettre obligatoire, sont les dates au bout desquelles les matchs doivent être joués, 
            <b>sous peine d'être éliminé</b>.
            <BR>L'échéance L demande à ce que L matchs aient été joués avant cette date comprise, L ième lettre de l'alphabet
            <BR>Donc, par exemple, échéance B veut dire que 2 matchs doivent être joués.</p>

        <p>Échéance obligatoire A = 25/12/2016</p>
    </div>


    <div class=\"well\">
        <h2>Facultatives</h2>
        <p>Les échéances facultatives N, n étant un nombre, sont les dates au bout desquelles les matchs doivent être joués, pour jouer le plus <b>régulièrement</b> possible
            <BR>L'échéance n demande à ce que n matchs aient été joués avant cette date comprise.
            <BR>Donc, par exemple, échéance 3 veut dire que 3 matchs doivent être joués.</p>

        <p>À 17, 153 jours à partir du 11/12/2016, pour plus que 15 matchs, 10.2 jours par match</p>

        <p>Échéance facultative 1 = 11/12/2016
            <BR>Échéance facultative 2 = 21/12/2016</p>

    </div>



";
        
        $__internal_71a2590aa617662ef1e473016810a539dc937c0a37f0ef5f7e9d9cd5cc527be1->leave($__internal_71a2590aa617662ef1e473016810a539dc937c0a37f0ef5f7e9d9cd5cc527be1_prof);

        
        $__internal_0dd21430cf1b084fe4890c4f75efb775d6aefbab06975c3e2739d344cfaca844->leave($__internal_0dd21430cf1b084fe4890c4f75efb775d6aefbab06975c3e2739d344cfaca844_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/echeances.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 7,  11 => 2,);
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
{% extends \"OCPlatformBundle:Default:layout.html.twig\" %}




{% block body %}


    <h1>Les échéances</h1>


    <div class=\"well\">
        <h2>Obligatoires</h2>
        <p>Les échéances obligatoire L, L étant une lettre obligatoire, sont les dates au bout desquelles les matchs doivent être joués, 
            <b>sous peine d'être éliminé</b>.
            <BR>L'échéance L demande à ce que L matchs aient été joués avant cette date comprise, L ième lettre de l'alphabet
            <BR>Donc, par exemple, échéance B veut dire que 2 matchs doivent être joués.</p>

        <p>Échéance obligatoire A = 25/12/2016</p>
    </div>


    <div class=\"well\">
        <h2>Facultatives</h2>
        <p>Les échéances facultatives N, n étant un nombre, sont les dates au bout desquelles les matchs doivent être joués, pour jouer le plus <b>régulièrement</b> possible
            <BR>L'échéance n demande à ce que n matchs aient été joués avant cette date comprise.
            <BR>Donc, par exemple, échéance 3 veut dire que 3 matchs doivent être joués.</p>

        <p>À 17, 153 jours à partir du 11/12/2016, pour plus que 15 matchs, 10.2 jours par match</p>

        <p>Échéance facultative 1 = 11/12/2016
            <BR>Échéance facultative 2 = 21/12/2016</p>

    </div>



{% endblock %}


", "@OCUser/Inscription/echeances.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/echeances.html.twig");
    }
}
