<?php

/* @OCUser/Inscription/echeances.html.twig */
class __TwigTemplate_bea36e737d1c28dfa7c89e9f7cbd6812fb8bfaba9207549c49cfe97d9d7272cc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
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
        return array (  31 => 8,  28 => 7,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Inscription/echeances.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/echeances.html.twig");
    }
}
