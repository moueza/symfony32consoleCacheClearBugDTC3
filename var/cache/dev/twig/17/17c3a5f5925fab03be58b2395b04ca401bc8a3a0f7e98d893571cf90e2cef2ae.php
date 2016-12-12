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
        $__internal_aed0aaa30d21540dddc317474bba30258a0bebf3d27328bfb8a43d99d24fc91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed0aaa30d21540dddc317474bba30258a0bebf3d27328bfb8a43d99d24fc91d->enter($__internal_aed0aaa30d21540dddc317474bba30258a0bebf3d27328bfb8a43d99d24fc91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $__internal_d5d8c03f72deee000794ac3bb528ae16daf286e4f7e285a9f81f9809edc6614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d8c03f72deee000794ac3bb528ae16daf286e4f7e285a9f81f9809edc6614e->enter($__internal_d5d8c03f72deee000794ac3bb528ae16daf286e4f7e285a9f81f9809edc6614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed0aaa30d21540dddc317474bba30258a0bebf3d27328bfb8a43d99d24fc91d->leave($__internal_aed0aaa30d21540dddc317474bba30258a0bebf3d27328bfb8a43d99d24fc91d_prof);

        
        $__internal_d5d8c03f72deee000794ac3bb528ae16daf286e4f7e285a9f81f9809edc6614e->leave($__internal_d5d8c03f72deee000794ac3bb528ae16daf286e4f7e285a9f81f9809edc6614e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07584f8574429513148b2a33421e31ce6d85fdc5f57adeed8ebbfc397c21535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07584f8574429513148b2a33421e31ce6d85fdc5f57adeed8ebbfc397c21535->enter($__internal_d07584f8574429513148b2a33421e31ce6d85fdc5f57adeed8ebbfc397c21535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9268eb7981d75244e937af32d8a658a7abf240d6ffe78b791b9d2b5b80909dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9268eb7981d75244e937af32d8a658a7abf240d6ffe78b791b9d2b5b80909dc->enter($__internal_a9268eb7981d75244e937af32d8a658a7abf240d6ffe78b791b9d2b5b80909dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9268eb7981d75244e937af32d8a658a7abf240d6ffe78b791b9d2b5b80909dc->leave($__internal_a9268eb7981d75244e937af32d8a658a7abf240d6ffe78b791b9d2b5b80909dc_prof);

        
        $__internal_d07584f8574429513148b2a33421e31ce6d85fdc5f57adeed8ebbfc397c21535->leave($__internal_d07584f8574429513148b2a33421e31ce6d85fdc5f57adeed8ebbfc397c21535_prof);

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
