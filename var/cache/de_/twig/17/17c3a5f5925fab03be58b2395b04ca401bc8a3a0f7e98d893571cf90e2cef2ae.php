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
        $__internal_0af231c32a5c4313e77a96c4694129f3abcbc8fd4699153c4662185b0fdd325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af231c32a5c4313e77a96c4694129f3abcbc8fd4699153c4662185b0fdd325d->enter($__internal_0af231c32a5c4313e77a96c4694129f3abcbc8fd4699153c4662185b0fdd325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $__internal_97b4d5be1e8e2830e81883183b6d391b42ff8fc40b48bd15c289979b3faa2349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b4d5be1e8e2830e81883183b6d391b42ff8fc40b48bd15c289979b3faa2349->enter($__internal_97b4d5be1e8e2830e81883183b6d391b42ff8fc40b48bd15c289979b3faa2349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af231c32a5c4313e77a96c4694129f3abcbc8fd4699153c4662185b0fdd325d->leave($__internal_0af231c32a5c4313e77a96c4694129f3abcbc8fd4699153c4662185b0fdd325d_prof);

        
        $__internal_97b4d5be1e8e2830e81883183b6d391b42ff8fc40b48bd15c289979b3faa2349->leave($__internal_97b4d5be1e8e2830e81883183b6d391b42ff8fc40b48bd15c289979b3faa2349_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ba538ef1736c5308ae6c186c045cebf2b150e5596833037a9fab86ac15a63f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba538ef1736c5308ae6c186c045cebf2b150e5596833037a9fab86ac15a63f1->enter($__internal_2ba538ef1736c5308ae6c186c045cebf2b150e5596833037a9fab86ac15a63f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_050f0367f5b3e7802c083caefba7c3091565ac139efa877afea131cd67fbcfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050f0367f5b3e7802c083caefba7c3091565ac139efa877afea131cd67fbcfb7->enter($__internal_050f0367f5b3e7802c083caefba7c3091565ac139efa877afea131cd67fbcfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_050f0367f5b3e7802c083caefba7c3091565ac139efa877afea131cd67fbcfb7->leave($__internal_050f0367f5b3e7802c083caefba7c3091565ac139efa877afea131cd67fbcfb7_prof);

        
        $__internal_2ba538ef1736c5308ae6c186c045cebf2b150e5596833037a9fab86ac15a63f1->leave($__internal_2ba538ef1736c5308ae6c186c045cebf2b150e5596833037a9fab86ac15a63f1_prof);

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
