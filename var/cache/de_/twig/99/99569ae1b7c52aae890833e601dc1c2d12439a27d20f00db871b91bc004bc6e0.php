<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff0ad328aa4e244eabb162ada989d63b0876b898b964b9e77f9d660fd1f96ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff0ad328aa4e244eabb162ada989d63b0876b898b964b9e77f9d660fd1f96ec->enter($__internal_dff0ad328aa4e244eabb162ada989d63b0876b898b964b9e77f9d660fd1f96ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_348343ffe18c7e747eb4ea7d3cf20cb2b59d42514b5cdce8f60b6ecb3e1810f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348343ffe18c7e747eb4ea7d3cf20cb2b59d42514b5cdce8f60b6ecb3e1810f0->enter($__internal_348343ffe18c7e747eb4ea7d3cf20cb2b59d42514b5cdce8f60b6ecb3e1810f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff0ad328aa4e244eabb162ada989d63b0876b898b964b9e77f9d660fd1f96ec->leave($__internal_dff0ad328aa4e244eabb162ada989d63b0876b898b964b9e77f9d660fd1f96ec_prof);

        
        $__internal_348343ffe18c7e747eb4ea7d3cf20cb2b59d42514b5cdce8f60b6ecb3e1810f0->leave($__internal_348343ffe18c7e747eb4ea7d3cf20cb2b59d42514b5cdce8f60b6ecb3e1810f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7e2baf7d1a42cea7a9c5a4ea94ba165ffe2bd270b63cf2d9dc5da1d08455b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e2baf7d1a42cea7a9c5a4ea94ba165ffe2bd270b63cf2d9dc5da1d08455b0c->enter($__internal_f7e2baf7d1a42cea7a9c5a4ea94ba165ffe2bd270b63cf2d9dc5da1d08455b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5cb4c5ff7721e62d5360cc23fcf298d235ef533f52333cf389cf36f6cd46d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cb4c5ff7721e62d5360cc23fcf298d235ef533f52333cf389cf36f6cd46d1f->enter($__internal_d5cb4c5ff7721e62d5360cc23fcf298d235ef533f52333cf389cf36f6cd46d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d5cb4c5ff7721e62d5360cc23fcf298d235ef533f52333cf389cf36f6cd46d1f->leave($__internal_d5cb4c5ff7721e62d5360cc23fcf298d235ef533f52333cf389cf36f6cd46d1f_prof);

        
        $__internal_f7e2baf7d1a42cea7a9c5a4ea94ba165ffe2bd270b63cf2d9dc5da1d08455b0c->leave($__internal_f7e2baf7d1a42cea7a9c5a4ea94ba165ffe2bd270b63cf2d9dc5da1d08455b0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02cc9605bdff2a99ec480bd69d5e5874cfba129295a4cb9f2001c2980ed62519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cc9605bdff2a99ec480bd69d5e5874cfba129295a4cb9f2001c2980ed62519->enter($__internal_02cc9605bdff2a99ec480bd69d5e5874cfba129295a4cb9f2001c2980ed62519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7aa09708f6973918d81e2ed313ac314e6913d12665ce88126fec4f1b3e37f84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa09708f6973918d81e2ed313ac314e6913d12665ce88126fec4f1b3e37f84e->enter($__internal_7aa09708f6973918d81e2ed313ac314e6913d12665ce88126fec4f1b3e37f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7aa09708f6973918d81e2ed313ac314e6913d12665ce88126fec4f1b3e37f84e->leave($__internal_7aa09708f6973918d81e2ed313ac314e6913d12665ce88126fec4f1b3e37f84e_prof);

        
        $__internal_02cc9605bdff2a99ec480bd69d5e5874cfba129295a4cb9f2001c2980ed62519->leave($__internal_02cc9605bdff2a99ec480bd69d5e5874cfba129295a4cb9f2001c2980ed62519_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
