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
        $__internal_0683bda0775038bd34f8151f74d3061d2441937af5689fbdca147403b084a826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0683bda0775038bd34f8151f74d3061d2441937af5689fbdca147403b084a826->enter($__internal_0683bda0775038bd34f8151f74d3061d2441937af5689fbdca147403b084a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $__internal_e246a130dcfd7a3801fa1d4973254d991f2a1f247a8e35fa9ae6448ff99ef439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e246a130dcfd7a3801fa1d4973254d991f2a1f247a8e35fa9ae6448ff99ef439->enter($__internal_e246a130dcfd7a3801fa1d4973254d991f2a1f247a8e35fa9ae6448ff99ef439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0683bda0775038bd34f8151f74d3061d2441937af5689fbdca147403b084a826->leave($__internal_0683bda0775038bd34f8151f74d3061d2441937af5689fbdca147403b084a826_prof);

        
        $__internal_e246a130dcfd7a3801fa1d4973254d991f2a1f247a8e35fa9ae6448ff99ef439->leave($__internal_e246a130dcfd7a3801fa1d4973254d991f2a1f247a8e35fa9ae6448ff99ef439_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7d58827d1055c78e19e52f73855e36f70a958bcf061739f6c477a1304f23491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d58827d1055c78e19e52f73855e36f70a958bcf061739f6c477a1304f23491->enter($__internal_c7d58827d1055c78e19e52f73855e36f70a958bcf061739f6c477a1304f23491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e4c7ca77e12c330fc7fd4ea9f214c45c5b8ee19a5465f53bab2f957726c1382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4c7ca77e12c330fc7fd4ea9f214c45c5b8ee19a5465f53bab2f957726c1382->enter($__internal_0e4c7ca77e12c330fc7fd4ea9f214c45c5b8ee19a5465f53bab2f957726c1382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_0e4c7ca77e12c330fc7fd4ea9f214c45c5b8ee19a5465f53bab2f957726c1382->leave($__internal_0e4c7ca77e12c330fc7fd4ea9f214c45c5b8ee19a5465f53bab2f957726c1382_prof);

        
        $__internal_c7d58827d1055c78e19e52f73855e36f70a958bcf061739f6c477a1304f23491->leave($__internal_c7d58827d1055c78e19e52f73855e36f70a958bcf061739f6c477a1304f23491_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b94df865dd81725f953455216491430ebea2de4f39346161e372f37a25c1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b94df865dd81725f953455216491430ebea2de4f39346161e372f37a25c1b5->enter($__internal_86b94df865dd81725f953455216491430ebea2de4f39346161e372f37a25c1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_369a324813cc94772bf1aa52212d6047d92aeb214fea96220eb2253f8dfd2d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369a324813cc94772bf1aa52212d6047d92aeb214fea96220eb2253f8dfd2d26->enter($__internal_369a324813cc94772bf1aa52212d6047d92aeb214fea96220eb2253f8dfd2d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    Bienvenue pour notre 3ème édition du DTC : le championnat allant du 21/11/2016 au 14/5/2017.

    <BR>Championnat ouvert à tous : d’OVS ou autre
    <BR>GRATUIT
    <BR>Récompense : juste le prestige!


";
        
        $__internal_369a324813cc94772bf1aa52212d6047d92aeb214fea96220eb2253f8dfd2d26->leave($__internal_369a324813cc94772bf1aa52212d6047d92aeb214fea96220eb2253f8dfd2d26_prof);

        
        $__internal_86b94df865dd81725f953455216491430ebea2de4f39346161e372f37a25c1b5->leave($__internal_86b94df865dd81725f953455216491430ebea2de4f39346161e372f37a25c1b5_prof);

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
