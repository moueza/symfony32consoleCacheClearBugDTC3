<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ef84d3195d2a5f6aba53778766672e1729d8959932e2202d89d6d755f4f1e389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef84d3195d2a5f6aba53778766672e1729d8959932e2202d89d6d755f4f1e389->enter($__internal_ef84d3195d2a5f6aba53778766672e1729d8959932e2202d89d6d755f4f1e389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_974498716530d27bba20331245c325396099ad688a7ac9f0dd5b88d57c6e6702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974498716530d27bba20331245c325396099ad688a7ac9f0dd5b88d57c6e6702->enter($__internal_974498716530d27bba20331245c325396099ad688a7ac9f0dd5b88d57c6e6702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef84d3195d2a5f6aba53778766672e1729d8959932e2202d89d6d755f4f1e389->leave($__internal_ef84d3195d2a5f6aba53778766672e1729d8959932e2202d89d6d755f4f1e389_prof);

        
        $__internal_974498716530d27bba20331245c325396099ad688a7ac9f0dd5b88d57c6e6702->leave($__internal_974498716530d27bba20331245c325396099ad688a7ac9f0dd5b88d57c6e6702_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d9d402a003e01b810a40b9c6d203d0312c4d13d0cf3103ed5d76a525d1a080b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9d402a003e01b810a40b9c6d203d0312c4d13d0cf3103ed5d76a525d1a080b->enter($__internal_5d9d402a003e01b810a40b9c6d203d0312c4d13d0cf3103ed5d76a525d1a080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_058a1adf5e0b7f3ee37f2b57bbade1aadcedfc4344da69e436b4436de48b493b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058a1adf5e0b7f3ee37f2b57bbade1aadcedfc4344da69e436b4436de48b493b->enter($__internal_058a1adf5e0b7f3ee37f2b57bbade1aadcedfc4344da69e436b4436de48b493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_058a1adf5e0b7f3ee37f2b57bbade1aadcedfc4344da69e436b4436de48b493b->leave($__internal_058a1adf5e0b7f3ee37f2b57bbade1aadcedfc4344da69e436b4436de48b493b_prof);

        
        $__internal_5d9d402a003e01b810a40b9c6d203d0312c4d13d0cf3103ed5d76a525d1a080b->leave($__internal_5d9d402a003e01b810a40b9c6d203d0312c4d13d0cf3103ed5d76a525d1a080b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acdfdb1cde6d6ee9c91823f575be04122b3f26a7999311be63f098bb95011122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdfdb1cde6d6ee9c91823f575be04122b3f26a7999311be63f098bb95011122->enter($__internal_acdfdb1cde6d6ee9c91823f575be04122b3f26a7999311be63f098bb95011122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e001373dd8e7125ad75dd76f5a875e9d48bb1f2effaa33960eba291d8b52307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e001373dd8e7125ad75dd76f5a875e9d48bb1f2effaa33960eba291d8b52307->enter($__internal_8e001373dd8e7125ad75dd76f5a875e9d48bb1f2effaa33960eba291d8b52307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e001373dd8e7125ad75dd76f5a875e9d48bb1f2effaa33960eba291d8b52307->leave($__internal_8e001373dd8e7125ad75dd76f5a875e9d48bb1f2effaa33960eba291d8b52307_prof);

        
        $__internal_acdfdb1cde6d6ee9c91823f575be04122b3f26a7999311be63f098bb95011122->leave($__internal_acdfdb1cde6d6ee9c91823f575be04122b3f26a7999311be63f098bb95011122_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa933ca7f87ef01af4084a8572b4def1793d05d5dc6c60d7cde7c3f480d1720c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa933ca7f87ef01af4084a8572b4def1793d05d5dc6c60d7cde7c3f480d1720c->enter($__internal_fa933ca7f87ef01af4084a8572b4def1793d05d5dc6c60d7cde7c3f480d1720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08233e46bc7382f0dfc4c7ea2b5a333957305b85a1e12a0c8ba2a494b7113b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08233e46bc7382f0dfc4c7ea2b5a333957305b85a1e12a0c8ba2a494b7113b32->enter($__internal_08233e46bc7382f0dfc4c7ea2b5a333957305b85a1e12a0c8ba2a494b7113b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08233e46bc7382f0dfc4c7ea2b5a333957305b85a1e12a0c8ba2a494b7113b32->leave($__internal_08233e46bc7382f0dfc4c7ea2b5a333957305b85a1e12a0c8ba2a494b7113b32_prof);

        
        $__internal_fa933ca7f87ef01af4084a8572b4def1793d05d5dc6c60d7cde7c3f480d1720c->leave($__internal_fa933ca7f87ef01af4084a8572b4def1793d05d5dc6c60d7cde7c3f480d1720c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
