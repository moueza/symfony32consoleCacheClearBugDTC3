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
        $__internal_9bb7f8d4ee8e988e351f0418bfd04ab9ca75ef6df4c7c692e912aba57a77eb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb7f8d4ee8e988e351f0418bfd04ab9ca75ef6df4c7c692e912aba57a77eb9f->enter($__internal_9bb7f8d4ee8e988e351f0418bfd04ab9ca75ef6df4c7c692e912aba57a77eb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_26ab9ef603e92dd8297de6c42d7ed26eb0ece1ff97be779f40b6e7ab3578e33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ab9ef603e92dd8297de6c42d7ed26eb0ece1ff97be779f40b6e7ab3578e33e->enter($__internal_26ab9ef603e92dd8297de6c42d7ed26eb0ece1ff97be779f40b6e7ab3578e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb7f8d4ee8e988e351f0418bfd04ab9ca75ef6df4c7c692e912aba57a77eb9f->leave($__internal_9bb7f8d4ee8e988e351f0418bfd04ab9ca75ef6df4c7c692e912aba57a77eb9f_prof);

        
        $__internal_26ab9ef603e92dd8297de6c42d7ed26eb0ece1ff97be779f40b6e7ab3578e33e->leave($__internal_26ab9ef603e92dd8297de6c42d7ed26eb0ece1ff97be779f40b6e7ab3578e33e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d310a86faabaa2371195abbf625f52a89ac9160a46826bf80963dacac4284c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d310a86faabaa2371195abbf625f52a89ac9160a46826bf80963dacac4284c21->enter($__internal_d310a86faabaa2371195abbf625f52a89ac9160a46826bf80963dacac4284c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bed83f47232a6900721788d47cad580c3907c51ab58165ed5082ad9309f090f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed83f47232a6900721788d47cad580c3907c51ab58165ed5082ad9309f090f5->enter($__internal_bed83f47232a6900721788d47cad580c3907c51ab58165ed5082ad9309f090f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bed83f47232a6900721788d47cad580c3907c51ab58165ed5082ad9309f090f5->leave($__internal_bed83f47232a6900721788d47cad580c3907c51ab58165ed5082ad9309f090f5_prof);

        
        $__internal_d310a86faabaa2371195abbf625f52a89ac9160a46826bf80963dacac4284c21->leave($__internal_d310a86faabaa2371195abbf625f52a89ac9160a46826bf80963dacac4284c21_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7e06e552aaf958dd766fdf089e25f3e458567963fd6027aab2278f45fb8c287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e06e552aaf958dd766fdf089e25f3e458567963fd6027aab2278f45fb8c287->enter($__internal_d7e06e552aaf958dd766fdf089e25f3e458567963fd6027aab2278f45fb8c287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13535faa6a3887a7ecd6eb432fdf3af3140a11ec51f757ac24140f4dd50888d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13535faa6a3887a7ecd6eb432fdf3af3140a11ec51f757ac24140f4dd50888d4->enter($__internal_13535faa6a3887a7ecd6eb432fdf3af3140a11ec51f757ac24140f4dd50888d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_13535faa6a3887a7ecd6eb432fdf3af3140a11ec51f757ac24140f4dd50888d4->leave($__internal_13535faa6a3887a7ecd6eb432fdf3af3140a11ec51f757ac24140f4dd50888d4_prof);

        
        $__internal_d7e06e552aaf958dd766fdf089e25f3e458567963fd6027aab2278f45fb8c287->leave($__internal_d7e06e552aaf958dd766fdf089e25f3e458567963fd6027aab2278f45fb8c287_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdd903063fa03ffc8fec452645c995d36a25cc833f04d6c240ac709f1e026b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd903063fa03ffc8fec452645c995d36a25cc833f04d6c240ac709f1e026b21->enter($__internal_bdd903063fa03ffc8fec452645c995d36a25cc833f04d6c240ac709f1e026b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0b2b21499479d066c090f489005be3aa9fafa3a2dc1fa51ccde5913a11393c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2b21499479d066c090f489005be3aa9fafa3a2dc1fa51ccde5913a11393c07->enter($__internal_0b2b21499479d066c090f489005be3aa9fafa3a2dc1fa51ccde5913a11393c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0b2b21499479d066c090f489005be3aa9fafa3a2dc1fa51ccde5913a11393c07->leave($__internal_0b2b21499479d066c090f489005be3aa9fafa3a2dc1fa51ccde5913a11393c07_prof);

        
        $__internal_bdd903063fa03ffc8fec452645c995d36a25cc833f04d6c240ac709f1e026b21->leave($__internal_bdd903063fa03ffc8fec452645c995d36a25cc833f04d6c240ac709f1e026b21_prof);

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
