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
        $__internal_0e7a54598f619f9fd968c8f8e06f7a1d74e66f0c06b0f0c96830e1b63960713f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7a54598f619f9fd968c8f8e06f7a1d74e66f0c06b0f0c96830e1b63960713f->enter($__internal_0e7a54598f619f9fd968c8f8e06f7a1d74e66f0c06b0f0c96830e1b63960713f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_50175eed981e9d4666aa7e88d0689e4095fb56683c216afe7232053bcf81ae4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50175eed981e9d4666aa7e88d0689e4095fb56683c216afe7232053bcf81ae4a->enter($__internal_50175eed981e9d4666aa7e88d0689e4095fb56683c216afe7232053bcf81ae4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7a54598f619f9fd968c8f8e06f7a1d74e66f0c06b0f0c96830e1b63960713f->leave($__internal_0e7a54598f619f9fd968c8f8e06f7a1d74e66f0c06b0f0c96830e1b63960713f_prof);

        
        $__internal_50175eed981e9d4666aa7e88d0689e4095fb56683c216afe7232053bcf81ae4a->leave($__internal_50175eed981e9d4666aa7e88d0689e4095fb56683c216afe7232053bcf81ae4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f22e323577ff52677bc94a2ed25a1d3b272c93dce4391220ab8518fb3cb94a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22e323577ff52677bc94a2ed25a1d3b272c93dce4391220ab8518fb3cb94a61->enter($__internal_f22e323577ff52677bc94a2ed25a1d3b272c93dce4391220ab8518fb3cb94a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64b80b920eea40c1638fa32520fbf663812698bf0f6c4ec29e8fae8b7271d72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b80b920eea40c1638fa32520fbf663812698bf0f6c4ec29e8fae8b7271d72d->enter($__internal_64b80b920eea40c1638fa32520fbf663812698bf0f6c4ec29e8fae8b7271d72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_64b80b920eea40c1638fa32520fbf663812698bf0f6c4ec29e8fae8b7271d72d->leave($__internal_64b80b920eea40c1638fa32520fbf663812698bf0f6c4ec29e8fae8b7271d72d_prof);

        
        $__internal_f22e323577ff52677bc94a2ed25a1d3b272c93dce4391220ab8518fb3cb94a61->leave($__internal_f22e323577ff52677bc94a2ed25a1d3b272c93dce4391220ab8518fb3cb94a61_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac8624ad3c2ad6879bedd3d98d9ef0f5616c1f9c7bec03b5255ea80b1f702adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8624ad3c2ad6879bedd3d98d9ef0f5616c1f9c7bec03b5255ea80b1f702adf->enter($__internal_ac8624ad3c2ad6879bedd3d98d9ef0f5616c1f9c7bec03b5255ea80b1f702adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e376ea335ef8061de5854a4ec432b007e1c231e8d3debab109b52055f7ed4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e376ea335ef8061de5854a4ec432b007e1c231e8d3debab109b52055f7ed4ac->enter($__internal_5e376ea335ef8061de5854a4ec432b007e1c231e8d3debab109b52055f7ed4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5e376ea335ef8061de5854a4ec432b007e1c231e8d3debab109b52055f7ed4ac->leave($__internal_5e376ea335ef8061de5854a4ec432b007e1c231e8d3debab109b52055f7ed4ac_prof);

        
        $__internal_ac8624ad3c2ad6879bedd3d98d9ef0f5616c1f9c7bec03b5255ea80b1f702adf->leave($__internal_ac8624ad3c2ad6879bedd3d98d9ef0f5616c1f9c7bec03b5255ea80b1f702adf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a405388b234a798358aedb06d484de4116fd9ca9dc552bc847584d034ee9b0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a405388b234a798358aedb06d484de4116fd9ca9dc552bc847584d034ee9b0bd->enter($__internal_a405388b234a798358aedb06d484de4116fd9ca9dc552bc847584d034ee9b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_036f62935bf94d833ee2ae4c12838c092a58df928e0f0fa5fcf44733de3a6b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036f62935bf94d833ee2ae4c12838c092a58df928e0f0fa5fcf44733de3a6b07->enter($__internal_036f62935bf94d833ee2ae4c12838c092a58df928e0f0fa5fcf44733de3a6b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_036f62935bf94d833ee2ae4c12838c092a58df928e0f0fa5fcf44733de3a6b07->leave($__internal_036f62935bf94d833ee2ae4c12838c092a58df928e0f0fa5fcf44733de3a6b07_prof);

        
        $__internal_a405388b234a798358aedb06d484de4116fd9ca9dc552bc847584d034ee9b0bd->leave($__internal_a405388b234a798358aedb06d484de4116fd9ca9dc552bc847584d034ee9b0bd_prof);

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
