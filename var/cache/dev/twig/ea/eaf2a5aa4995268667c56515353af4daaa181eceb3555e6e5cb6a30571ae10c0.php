<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f7a7f5c3d084a85870299d1d0534d6d420b0e8a6250878ad1c7011288b7e851 extends Twig_Template
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
        $__internal_3a52b26d94538f39c54291b969b901c980ce9ce38913c8f72e6b9c5381a2caf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a52b26d94538f39c54291b969b901c980ce9ce38913c8f72e6b9c5381a2caf2->enter($__internal_3a52b26d94538f39c54291b969b901c980ce9ce38913c8f72e6b9c5381a2caf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_717b2d8e61076a68584c583a7af6f0f74cb7130096f2bb57d61a31eb218e5ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717b2d8e61076a68584c583a7af6f0f74cb7130096f2bb57d61a31eb218e5ae5->enter($__internal_717b2d8e61076a68584c583a7af6f0f74cb7130096f2bb57d61a31eb218e5ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a52b26d94538f39c54291b969b901c980ce9ce38913c8f72e6b9c5381a2caf2->leave($__internal_3a52b26d94538f39c54291b969b901c980ce9ce38913c8f72e6b9c5381a2caf2_prof);

        
        $__internal_717b2d8e61076a68584c583a7af6f0f74cb7130096f2bb57d61a31eb218e5ae5->leave($__internal_717b2d8e61076a68584c583a7af6f0f74cb7130096f2bb57d61a31eb218e5ae5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6af944ebdc369b543d7f50815f601e12ff8980f0fa669de08c11bdee6012f34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af944ebdc369b543d7f50815f601e12ff8980f0fa669de08c11bdee6012f34b->enter($__internal_6af944ebdc369b543d7f50815f601e12ff8980f0fa669de08c11bdee6012f34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b9c92f24e259f3ed2c158169df440538d3ed83808d6206de8998b63a9606984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9c92f24e259f3ed2c158169df440538d3ed83808d6206de8998b63a9606984->enter($__internal_7b9c92f24e259f3ed2c158169df440538d3ed83808d6206de8998b63a9606984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b9c92f24e259f3ed2c158169df440538d3ed83808d6206de8998b63a9606984->leave($__internal_7b9c92f24e259f3ed2c158169df440538d3ed83808d6206de8998b63a9606984_prof);

        
        $__internal_6af944ebdc369b543d7f50815f601e12ff8980f0fa669de08c11bdee6012f34b->leave($__internal_6af944ebdc369b543d7f50815f601e12ff8980f0fa669de08c11bdee6012f34b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23fe559dbc5205fb12d02f95ec23b9b070ac2b8b87a97cdca912640b72d5b537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fe559dbc5205fb12d02f95ec23b9b070ac2b8b87a97cdca912640b72d5b537->enter($__internal_23fe559dbc5205fb12d02f95ec23b9b070ac2b8b87a97cdca912640b72d5b537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5dd29e415821bc11dcda3c3eca9811f936c2e94c4ab979bbe70a375210e152da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd29e415821bc11dcda3c3eca9811f936c2e94c4ab979bbe70a375210e152da->enter($__internal_5dd29e415821bc11dcda3c3eca9811f936c2e94c4ab979bbe70a375210e152da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5dd29e415821bc11dcda3c3eca9811f936c2e94c4ab979bbe70a375210e152da->leave($__internal_5dd29e415821bc11dcda3c3eca9811f936c2e94c4ab979bbe70a375210e152da_prof);

        
        $__internal_23fe559dbc5205fb12d02f95ec23b9b070ac2b8b87a97cdca912640b72d5b537->leave($__internal_23fe559dbc5205fb12d02f95ec23b9b070ac2b8b87a97cdca912640b72d5b537_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5737ac25815eae922e04bc14534604ef7490b20da1d9fe2cc90daf68fb3679d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5737ac25815eae922e04bc14534604ef7490b20da1d9fe2cc90daf68fb3679d9->enter($__internal_5737ac25815eae922e04bc14534604ef7490b20da1d9fe2cc90daf68fb3679d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfd779f3d7fa8d2e2fd082d9b3eb01b9f0a85e7e37509b872da640afac700a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd779f3d7fa8d2e2fd082d9b3eb01b9f0a85e7e37509b872da640afac700a5f->enter($__internal_cfd779f3d7fa8d2e2fd082d9b3eb01b9f0a85e7e37509b872da640afac700a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cfd779f3d7fa8d2e2fd082d9b3eb01b9f0a85e7e37509b872da640afac700a5f->leave($__internal_cfd779f3d7fa8d2e2fd082d9b3eb01b9f0a85e7e37509b872da640afac700a5f_prof);

        
        $__internal_5737ac25815eae922e04bc14534604ef7490b20da1d9fe2cc90daf68fb3679d9->leave($__internal_5737ac25815eae922e04bc14534604ef7490b20da1d9fe2cc90daf68fb3679d9_prof);

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
