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
        $__internal_0ecaebfb076ad75f3631b38cc54fbfa34d21ad0ad3ebd8923d193ee6b7c3d31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecaebfb076ad75f3631b38cc54fbfa34d21ad0ad3ebd8923d193ee6b7c3d31c->enter($__internal_0ecaebfb076ad75f3631b38cc54fbfa34d21ad0ad3ebd8923d193ee6b7c3d31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a4e8869fdd0a21cbae68fb9cb5c5d3479b807b1013b0022e492c27ad86740206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e8869fdd0a21cbae68fb9cb5c5d3479b807b1013b0022e492c27ad86740206->enter($__internal_a4e8869fdd0a21cbae68fb9cb5c5d3479b807b1013b0022e492c27ad86740206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecaebfb076ad75f3631b38cc54fbfa34d21ad0ad3ebd8923d193ee6b7c3d31c->leave($__internal_0ecaebfb076ad75f3631b38cc54fbfa34d21ad0ad3ebd8923d193ee6b7c3d31c_prof);

        
        $__internal_a4e8869fdd0a21cbae68fb9cb5c5d3479b807b1013b0022e492c27ad86740206->leave($__internal_a4e8869fdd0a21cbae68fb9cb5c5d3479b807b1013b0022e492c27ad86740206_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01f7356885315d4dd250b16b579d50293a00349efc4c3d22043711596dd97062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f7356885315d4dd250b16b579d50293a00349efc4c3d22043711596dd97062->enter($__internal_01f7356885315d4dd250b16b579d50293a00349efc4c3d22043711596dd97062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8fc5bb27549dd6d1d8b13e44bc4b7a72e00336d566f93a35746b68a752d47318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc5bb27549dd6d1d8b13e44bc4b7a72e00336d566f93a35746b68a752d47318->enter($__internal_8fc5bb27549dd6d1d8b13e44bc4b7a72e00336d566f93a35746b68a752d47318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8fc5bb27549dd6d1d8b13e44bc4b7a72e00336d566f93a35746b68a752d47318->leave($__internal_8fc5bb27549dd6d1d8b13e44bc4b7a72e00336d566f93a35746b68a752d47318_prof);

        
        $__internal_01f7356885315d4dd250b16b579d50293a00349efc4c3d22043711596dd97062->leave($__internal_01f7356885315d4dd250b16b579d50293a00349efc4c3d22043711596dd97062_prof);

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
