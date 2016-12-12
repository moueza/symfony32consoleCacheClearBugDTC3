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
        $__internal_f33531774fcb9e270cf519af54396212900e55a35f3077b01b60b107d45d7b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33531774fcb9e270cf519af54396212900e55a35f3077b01b60b107d45d7b64->enter($__internal_f33531774fcb9e270cf519af54396212900e55a35f3077b01b60b107d45d7b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_d320a4d5db1db40ed7d6accbdf01002f6aabb3ae85b3ac4c8c039c5da06b2903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d320a4d5db1db40ed7d6accbdf01002f6aabb3ae85b3ac4c8c039c5da06b2903->enter($__internal_d320a4d5db1db40ed7d6accbdf01002f6aabb3ae85b3ac4c8c039c5da06b2903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33531774fcb9e270cf519af54396212900e55a35f3077b01b60b107d45d7b64->leave($__internal_f33531774fcb9e270cf519af54396212900e55a35f3077b01b60b107d45d7b64_prof);

        
        $__internal_d320a4d5db1db40ed7d6accbdf01002f6aabb3ae85b3ac4c8c039c5da06b2903->leave($__internal_d320a4d5db1db40ed7d6accbdf01002f6aabb3ae85b3ac4c8c039c5da06b2903_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c3a9950979845f3003b3f58c0aacc7947d593487f7639b56d3e5bd7d2a40540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3a9950979845f3003b3f58c0aacc7947d593487f7639b56d3e5bd7d2a40540->enter($__internal_6c3a9950979845f3003b3f58c0aacc7947d593487f7639b56d3e5bd7d2a40540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_232e93fcdd3febca5253fc08f0e8e960ff0f267d1da0f36d9f3fde484f3df338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232e93fcdd3febca5253fc08f0e8e960ff0f267d1da0f36d9f3fde484f3df338->enter($__internal_232e93fcdd3febca5253fc08f0e8e960ff0f267d1da0f36d9f3fde484f3df338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_232e93fcdd3febca5253fc08f0e8e960ff0f267d1da0f36d9f3fde484f3df338->leave($__internal_232e93fcdd3febca5253fc08f0e8e960ff0f267d1da0f36d9f3fde484f3df338_prof);

        
        $__internal_6c3a9950979845f3003b3f58c0aacc7947d593487f7639b56d3e5bd7d2a40540->leave($__internal_6c3a9950979845f3003b3f58c0aacc7947d593487f7639b56d3e5bd7d2a40540_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b06af3d587828c11c81343d6506e17b2b13ba517569464d0a8e664dcfe4c2086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06af3d587828c11c81343d6506e17b2b13ba517569464d0a8e664dcfe4c2086->enter($__internal_b06af3d587828c11c81343d6506e17b2b13ba517569464d0a8e664dcfe4c2086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_057bc73cce72173b2f6f25181338d4c6910d52cfb37760ca71637b61d5fb83f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057bc73cce72173b2f6f25181338d4c6910d52cfb37760ca71637b61d5fb83f4->enter($__internal_057bc73cce72173b2f6f25181338d4c6910d52cfb37760ca71637b61d5fb83f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
        
        $__internal_057bc73cce72173b2f6f25181338d4c6910d52cfb37760ca71637b61d5fb83f4->leave($__internal_057bc73cce72173b2f6f25181338d4c6910d52cfb37760ca71637b61d5fb83f4_prof);

        
        $__internal_b06af3d587828c11c81343d6506e17b2b13ba517569464d0a8e664dcfe4c2086->leave($__internal_b06af3d587828c11c81343d6506e17b2b13ba517569464d0a8e664dcfe4c2086_prof);

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
