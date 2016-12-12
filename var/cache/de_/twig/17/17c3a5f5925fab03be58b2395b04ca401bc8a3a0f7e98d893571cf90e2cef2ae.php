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
        $__internal_ab9160475ecc7659cc41fdbbc16df9d5f39b4f6e7110eb3da28cc1ac19e060eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9160475ecc7659cc41fdbbc16df9d5f39b4f6e7110eb3da28cc1ac19e060eb->enter($__internal_ab9160475ecc7659cc41fdbbc16df9d5f39b4f6e7110eb3da28cc1ac19e060eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $__internal_905499abc3c416c766b371402bf08a1f8e88e9476ca78341a38cbb305b221ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905499abc3c416c766b371402bf08a1f8e88e9476ca78341a38cbb305b221ad9->enter($__internal_905499abc3c416c766b371402bf08a1f8e88e9476ca78341a38cbb305b221ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab9160475ecc7659cc41fdbbc16df9d5f39b4f6e7110eb3da28cc1ac19e060eb->leave($__internal_ab9160475ecc7659cc41fdbbc16df9d5f39b4f6e7110eb3da28cc1ac19e060eb_prof);

        
        $__internal_905499abc3c416c766b371402bf08a1f8e88e9476ca78341a38cbb305b221ad9->leave($__internal_905499abc3c416c766b371402bf08a1f8e88e9476ca78341a38cbb305b221ad9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8bf48dd77812fe7e759c174e314034b4a5e4fc35d2cad50efa63395adf4aae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bf48dd77812fe7e759c174e314034b4a5e4fc35d2cad50efa63395adf4aae9->enter($__internal_f8bf48dd77812fe7e759c174e314034b4a5e4fc35d2cad50efa63395adf4aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_097b3a86e74f0a9ba84fe5c1ca117ac4251a2247a6296b22ddb3cfbd7aea4781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097b3a86e74f0a9ba84fe5c1ca117ac4251a2247a6296b22ddb3cfbd7aea4781->enter($__internal_097b3a86e74f0a9ba84fe5c1ca117ac4251a2247a6296b22ddb3cfbd7aea4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_097b3a86e74f0a9ba84fe5c1ca117ac4251a2247a6296b22ddb3cfbd7aea4781->leave($__internal_097b3a86e74f0a9ba84fe5c1ca117ac4251a2247a6296b22ddb3cfbd7aea4781_prof);

        
        $__internal_f8bf48dd77812fe7e759c174e314034b4a5e4fc35d2cad50efa63395adf4aae9->leave($__internal_f8bf48dd77812fe7e759c174e314034b4a5e4fc35d2cad50efa63395adf4aae9_prof);

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
