<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46d18cff96c07bfb3204bad703c39391c754019a7d6a6410c992d13cbab6329e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d18cff96c07bfb3204bad703c39391c754019a7d6a6410c992d13cbab6329e->enter($__internal_46d18cff96c07bfb3204bad703c39391c754019a7d6a6410c992d13cbab6329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d46ec02f2b134c8e6a3ca6dc72b295db21420103579e377524a514b42368f2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46ec02f2b134c8e6a3ca6dc72b295db21420103579e377524a514b42368f2e2->enter($__internal_d46ec02f2b134c8e6a3ca6dc72b295db21420103579e377524a514b42368f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d18cff96c07bfb3204bad703c39391c754019a7d6a6410c992d13cbab6329e->leave($__internal_46d18cff96c07bfb3204bad703c39391c754019a7d6a6410c992d13cbab6329e_prof);

        
        $__internal_d46ec02f2b134c8e6a3ca6dc72b295db21420103579e377524a514b42368f2e2->leave($__internal_d46ec02f2b134c8e6a3ca6dc72b295db21420103579e377524a514b42368f2e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a990ac935bc527d1a691ff72e13b4412c88231f5e6f7d2fe7278822c2067fa47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a990ac935bc527d1a691ff72e13b4412c88231f5e6f7d2fe7278822c2067fa47->enter($__internal_a990ac935bc527d1a691ff72e13b4412c88231f5e6f7d2fe7278822c2067fa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a7173ae44eaf8fb6d4d5c708b3ae11605e6356ea8339c5166aaa288f9ac0f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7173ae44eaf8fb6d4d5c708b3ae11605e6356ea8339c5166aaa288f9ac0f62->enter($__internal_3a7173ae44eaf8fb6d4d5c708b3ae11605e6356ea8339c5166aaa288f9ac0f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3a7173ae44eaf8fb6d4d5c708b3ae11605e6356ea8339c5166aaa288f9ac0f62->leave($__internal_3a7173ae44eaf8fb6d4d5c708b3ae11605e6356ea8339c5166aaa288f9ac0f62_prof);

        
        $__internal_a990ac935bc527d1a691ff72e13b4412c88231f5e6f7d2fe7278822c2067fa47->leave($__internal_a990ac935bc527d1a691ff72e13b4412c88231f5e6f7d2fe7278822c2067fa47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95044ac2e7f93a34e2ac8227996acf57c0600d6f6d34cfe404954c2b76bc3a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95044ac2e7f93a34e2ac8227996acf57c0600d6f6d34cfe404954c2b76bc3a0c->enter($__internal_95044ac2e7f93a34e2ac8227996acf57c0600d6f6d34cfe404954c2b76bc3a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cacd010465de25a4920d7e156d6101de0e16d3a37b22e6257755344812e8f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cacd010465de25a4920d7e156d6101de0e16d3a37b22e6257755344812e8f1f->enter($__internal_8cacd010465de25a4920d7e156d6101de0e16d3a37b22e6257755344812e8f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8cacd010465de25a4920d7e156d6101de0e16d3a37b22e6257755344812e8f1f->leave($__internal_8cacd010465de25a4920d7e156d6101de0e16d3a37b22e6257755344812e8f1f_prof);

        
        $__internal_95044ac2e7f93a34e2ac8227996acf57c0600d6f6d34cfe404954c2b76bc3a0c->leave($__internal_95044ac2e7f93a34e2ac8227996acf57c0600d6f6d34cfe404954c2b76bc3a0c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f930100f06048df4912f1ac56cf8da48bd410c4c7b066808e9aa40f6e4ce0cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f930100f06048df4912f1ac56cf8da48bd410c4c7b066808e9aa40f6e4ce0cf5->enter($__internal_f930100f06048df4912f1ac56cf8da48bd410c4c7b066808e9aa40f6e4ce0cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff072f029d111475be4ca2a8aa005eda95072a0660fe7fc2dca22395b74e6448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff072f029d111475be4ca2a8aa005eda95072a0660fe7fc2dca22395b74e6448->enter($__internal_ff072f029d111475be4ca2a8aa005eda95072a0660fe7fc2dca22395b74e6448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ff072f029d111475be4ca2a8aa005eda95072a0660fe7fc2dca22395b74e6448->leave($__internal_ff072f029d111475be4ca2a8aa005eda95072a0660fe7fc2dca22395b74e6448_prof);

        
        $__internal_f930100f06048df4912f1ac56cf8da48bd410c4c7b066808e9aa40f6e4ce0cf5->leave($__internal_f930100f06048df4912f1ac56cf8da48bd410c4c7b066808e9aa40f6e4ce0cf5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
