<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_81bb0efe876f580e09a3caab76159d08e5e337e1bab93b48187c95961e94c17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17744470dee51db80893e3102c240d2ce5fe8a1b7dc6da2d8fd02eec2f00332e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17744470dee51db80893e3102c240d2ce5fe8a1b7dc6da2d8fd02eec2f00332e->enter($__internal_17744470dee51db80893e3102c240d2ce5fe8a1b7dc6da2d8fd02eec2f00332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4b818b6f80ed0067a0f11e759b6f857dd3c74f0fe32cce398fb8451d13320c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b818b6f80ed0067a0f11e759b6f857dd3c74f0fe32cce398fb8451d13320c81->enter($__internal_4b818b6f80ed0067a0f11e759b6f857dd3c74f0fe32cce398fb8451d13320c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17744470dee51db80893e3102c240d2ce5fe8a1b7dc6da2d8fd02eec2f00332e->leave($__internal_17744470dee51db80893e3102c240d2ce5fe8a1b7dc6da2d8fd02eec2f00332e_prof);

        
        $__internal_4b818b6f80ed0067a0f11e759b6f857dd3c74f0fe32cce398fb8451d13320c81->leave($__internal_4b818b6f80ed0067a0f11e759b6f857dd3c74f0fe32cce398fb8451d13320c81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f538f2b55b4ff2d6f876f526821d7bb1db15fe730945449dfe81c10815db0416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f538f2b55b4ff2d6f876f526821d7bb1db15fe730945449dfe81c10815db0416->enter($__internal_f538f2b55b4ff2d6f876f526821d7bb1db15fe730945449dfe81c10815db0416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e83fedf2fa74722fb540ce5f6a797eb760cd4a8898d2328697d2258e75347a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e83fedf2fa74722fb540ce5f6a797eb760cd4a8898d2328697d2258e75347a6->enter($__internal_6e83fedf2fa74722fb540ce5f6a797eb760cd4a8898d2328697d2258e75347a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6e83fedf2fa74722fb540ce5f6a797eb760cd4a8898d2328697d2258e75347a6->leave($__internal_6e83fedf2fa74722fb540ce5f6a797eb760cd4a8898d2328697d2258e75347a6_prof);

        
        $__internal_f538f2b55b4ff2d6f876f526821d7bb1db15fe730945449dfe81c10815db0416->leave($__internal_f538f2b55b4ff2d6f876f526821d7bb1db15fe730945449dfe81c10815db0416_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
