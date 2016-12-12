<?php

/* @OCUser/Misc/echeances.html.twig */
class __TwigTemplate_c4dfe60bc39bb62994074c53b50cc4d60887a698b9834e1f85adf2d0edb1d9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<body>
    <h3>Les échéances</h3>


    <div class=\"well\">
        173 jours du 2016/11/21 au 
        2017/5/14 
        <BR> 14 joueurs = 13 joueurs contre qui jouer
        <BR> 173/13~13.307 jours/joueur
        <BR> 2016/11/21 + 13.307 = 2016/12/04
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "@OCUser/Misc/echeances.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Misc/echeances.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Misc/echeances.html.twig");
    }
}
