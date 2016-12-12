<?php

/* default/accueil.html.twig */
class __TwigTemplate_ad1ddf3dafc084f5a00fa19bbf842c48eaf678b5f186cebeeed36a07dd454c2d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
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
        return array (  39 => 9,  36 => 8,  29 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/accueil.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/app/Resources/views/default/accueil.html.twig");
    }
}
