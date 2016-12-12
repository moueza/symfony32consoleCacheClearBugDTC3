<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2c70f5867f4a2ec11a2f91265194e1fc4329fd81c9dd20b502f6c6c2fb7add72 extends Twig_Template
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
        $__internal_897eafabff3c47d9e0f456fd5e4a30767e392c341e6396a899980a6c7b76ac72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897eafabff3c47d9e0f456fd5e4a30767e392c341e6396a899980a6c7b76ac72->enter($__internal_897eafabff3c47d9e0f456fd5e4a30767e392c341e6396a899980a6c7b76ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_748ba486b6601d6c9ccedd90051984f348378bc9969a124a7536b754ed37c098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748ba486b6601d6c9ccedd90051984f348378bc9969a124a7536b754ed37c098->enter($__internal_748ba486b6601d6c9ccedd90051984f348378bc9969a124a7536b754ed37c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_897eafabff3c47d9e0f456fd5e4a30767e392c341e6396a899980a6c7b76ac72->leave($__internal_897eafabff3c47d9e0f456fd5e4a30767e392c341e6396a899980a6c7b76ac72_prof);

        
        $__internal_748ba486b6601d6c9ccedd90051984f348378bc9969a124a7536b754ed37c098->leave($__internal_748ba486b6601d6c9ccedd90051984f348378bc9969a124a7536b754ed37c098_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23f3dc5c7a8f504339f5f9f3bbe76fd853c7a1f00e29d4daaa0c0a6aa59d22bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f3dc5c7a8f504339f5f9f3bbe76fd853c7a1f00e29d4daaa0c0a6aa59d22bb->enter($__internal_23f3dc5c7a8f504339f5f9f3bbe76fd853c7a1f00e29d4daaa0c0a6aa59d22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f91093036f97b8828aea82e61d9902df8d138ba539070122849840e4d4f04bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91093036f97b8828aea82e61d9902df8d138ba539070122849840e4d4f04bd1->enter($__internal_f91093036f97b8828aea82e61d9902df8d138ba539070122849840e4d4f04bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f91093036f97b8828aea82e61d9902df8d138ba539070122849840e4d4f04bd1->leave($__internal_f91093036f97b8828aea82e61d9902df8d138ba539070122849840e4d4f04bd1_prof);

        
        $__internal_23f3dc5c7a8f504339f5f9f3bbe76fd853c7a1f00e29d4daaa0c0a6aa59d22bb->leave($__internal_23f3dc5c7a8f504339f5f9f3bbe76fd853c7a1f00e29d4daaa0c0a6aa59d22bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_546072cd8100d1963b98277b23e7cebdb1f37852b0bd10f36710c54ff8413135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546072cd8100d1963b98277b23e7cebdb1f37852b0bd10f36710c54ff8413135->enter($__internal_546072cd8100d1963b98277b23e7cebdb1f37852b0bd10f36710c54ff8413135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21f3d04db0a1c73809f2992463f824781dac655704e80493b94f716adc5766b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f3d04db0a1c73809f2992463f824781dac655704e80493b94f716adc5766b4->enter($__internal_21f3d04db0a1c73809f2992463f824781dac655704e80493b94f716adc5766b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21f3d04db0a1c73809f2992463f824781dac655704e80493b94f716adc5766b4->leave($__internal_21f3d04db0a1c73809f2992463f824781dac655704e80493b94f716adc5766b4_prof);

        
        $__internal_546072cd8100d1963b98277b23e7cebdb1f37852b0bd10f36710c54ff8413135->leave($__internal_546072cd8100d1963b98277b23e7cebdb1f37852b0bd10f36710c54ff8413135_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cf1a654a1a70dc5d2425b60a85df30dc4b5ea5961f9785613e6f759ecae71ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf1a654a1a70dc5d2425b60a85df30dc4b5ea5961f9785613e6f759ecae71ec->enter($__internal_1cf1a654a1a70dc5d2425b60a85df30dc4b5ea5961f9785613e6f759ecae71ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d698d8d9f5a2488ed8a1681aac8cad51efeff36af8d679ee0a4250a4f350602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d698d8d9f5a2488ed8a1681aac8cad51efeff36af8d679ee0a4250a4f350602->enter($__internal_4d698d8d9f5a2488ed8a1681aac8cad51efeff36af8d679ee0a4250a4f350602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d698d8d9f5a2488ed8a1681aac8cad51efeff36af8d679ee0a4250a4f350602->leave($__internal_4d698d8d9f5a2488ed8a1681aac8cad51efeff36af8d679ee0a4250a4f350602_prof);

        
        $__internal_1cf1a654a1a70dc5d2425b60a85df30dc4b5ea5961f9785613e6f759ecae71ec->leave($__internal_1cf1a654a1a70dc5d2425b60a85df30dc4b5ea5961f9785613e6f759ecae71ec_prof);

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
