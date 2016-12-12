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
        $__internal_73bc9dcdbdf68f9122a98ca6981f7d21337a8999324835c16e421d2d4cfed020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bc9dcdbdf68f9122a98ca6981f7d21337a8999324835c16e421d2d4cfed020->enter($__internal_73bc9dcdbdf68f9122a98ca6981f7d21337a8999324835c16e421d2d4cfed020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_7ea86a0bb9ffab507845de9c7e433a54b0e0f5885cf16b28a9d6d87e464b2339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea86a0bb9ffab507845de9c7e433a54b0e0f5885cf16b28a9d6d87e464b2339->enter($__internal_7ea86a0bb9ffab507845de9c7e433a54b0e0f5885cf16b28a9d6d87e464b2339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73bc9dcdbdf68f9122a98ca6981f7d21337a8999324835c16e421d2d4cfed020->leave($__internal_73bc9dcdbdf68f9122a98ca6981f7d21337a8999324835c16e421d2d4cfed020_prof);

        
        $__internal_7ea86a0bb9ffab507845de9c7e433a54b0e0f5885cf16b28a9d6d87e464b2339->leave($__internal_7ea86a0bb9ffab507845de9c7e433a54b0e0f5885cf16b28a9d6d87e464b2339_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4989037597e5dfc441736ae810523741c40d2d0f0665653c5c1c94db70267385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4989037597e5dfc441736ae810523741c40d2d0f0665653c5c1c94db70267385->enter($__internal_4989037597e5dfc441736ae810523741c40d2d0f0665653c5c1c94db70267385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_831b4076ef077d77f67365a8c53ece52803a80441899e05afd0fbc1cc062373e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831b4076ef077d77f67365a8c53ece52803a80441899e05afd0fbc1cc062373e->enter($__internal_831b4076ef077d77f67365a8c53ece52803a80441899e05afd0fbc1cc062373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_831b4076ef077d77f67365a8c53ece52803a80441899e05afd0fbc1cc062373e->leave($__internal_831b4076ef077d77f67365a8c53ece52803a80441899e05afd0fbc1cc062373e_prof);

        
        $__internal_4989037597e5dfc441736ae810523741c40d2d0f0665653c5c1c94db70267385->leave($__internal_4989037597e5dfc441736ae810523741c40d2d0f0665653c5c1c94db70267385_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_187835f970b3eee05761cc160fddfd84644088d1ebbdccc88a9807c29cc6a0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187835f970b3eee05761cc160fddfd84644088d1ebbdccc88a9807c29cc6a0d7->enter($__internal_187835f970b3eee05761cc160fddfd84644088d1ebbdccc88a9807c29cc6a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f08f61cf635dce83d92eab0170bf4bfa5b668457d33f4cd37b55e453a8c14fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f08f61cf635dce83d92eab0170bf4bfa5b668457d33f4cd37b55e453a8c14fc->enter($__internal_0f08f61cf635dce83d92eab0170bf4bfa5b668457d33f4cd37b55e453a8c14fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
        
        $__internal_0f08f61cf635dce83d92eab0170bf4bfa5b668457d33f4cd37b55e453a8c14fc->leave($__internal_0f08f61cf635dce83d92eab0170bf4bfa5b668457d33f4cd37b55e453a8c14fc_prof);

        
        $__internal_187835f970b3eee05761cc160fddfd84644088d1ebbdccc88a9807c29cc6a0d7->leave($__internal_187835f970b3eee05761cc160fddfd84644088d1ebbdccc88a9807c29cc6a0d7_prof);

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
