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
        $__internal_760a3c94517b67357f724586e46679fbf56d27854f912f66e4a4cc993f97e9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760a3c94517b67357f724586e46679fbf56d27854f912f66e4a4cc993f97e9a4->enter($__internal_760a3c94517b67357f724586e46679fbf56d27854f912f66e4a4cc993f97e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_30caf1b28dbc2aa1a126f58bfe0595586d15aa0b493ba19eab0883d4bf99ae83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30caf1b28dbc2aa1a126f58bfe0595586d15aa0b493ba19eab0883d4bf99ae83->enter($__internal_30caf1b28dbc2aa1a126f58bfe0595586d15aa0b493ba19eab0883d4bf99ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760a3c94517b67357f724586e46679fbf56d27854f912f66e4a4cc993f97e9a4->leave($__internal_760a3c94517b67357f724586e46679fbf56d27854f912f66e4a4cc993f97e9a4_prof);

        
        $__internal_30caf1b28dbc2aa1a126f58bfe0595586d15aa0b493ba19eab0883d4bf99ae83->leave($__internal_30caf1b28dbc2aa1a126f58bfe0595586d15aa0b493ba19eab0883d4bf99ae83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fdcd41f12bc672acd319e6b2b5bb18406a99e98f4e9f26d45f093d35e8e23b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdcd41f12bc672acd319e6b2b5bb18406a99e98f4e9f26d45f093d35e8e23b6->enter($__internal_7fdcd41f12bc672acd319e6b2b5bb18406a99e98f4e9f26d45f093d35e8e23b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59fb14682f019f05f20bd807ae49a8d2d22dbcd53945d87c4a987372795c6540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fb14682f019f05f20bd807ae49a8d2d22dbcd53945d87c4a987372795c6540->enter($__internal_59fb14682f019f05f20bd807ae49a8d2d22dbcd53945d87c4a987372795c6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59fb14682f019f05f20bd807ae49a8d2d22dbcd53945d87c4a987372795c6540->leave($__internal_59fb14682f019f05f20bd807ae49a8d2d22dbcd53945d87c4a987372795c6540_prof);

        
        $__internal_7fdcd41f12bc672acd319e6b2b5bb18406a99e98f4e9f26d45f093d35e8e23b6->leave($__internal_7fdcd41f12bc672acd319e6b2b5bb18406a99e98f4e9f26d45f093d35e8e23b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_614058f8d698995a24edf1350d379ac415cde88574204529ef088f2935977332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614058f8d698995a24edf1350d379ac415cde88574204529ef088f2935977332->enter($__internal_614058f8d698995a24edf1350d379ac415cde88574204529ef088f2935977332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0cc98efd81eac4a88bcdbdecc582cfd9fdd920df8ff3be2a5a845b19d248065f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc98efd81eac4a88bcdbdecc582cfd9fdd920df8ff3be2a5a845b19d248065f->enter($__internal_0cc98efd81eac4a88bcdbdecc582cfd9fdd920df8ff3be2a5a845b19d248065f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cc98efd81eac4a88bcdbdecc582cfd9fdd920df8ff3be2a5a845b19d248065f->leave($__internal_0cc98efd81eac4a88bcdbdecc582cfd9fdd920df8ff3be2a5a845b19d248065f_prof);

        
        $__internal_614058f8d698995a24edf1350d379ac415cde88574204529ef088f2935977332->leave($__internal_614058f8d698995a24edf1350d379ac415cde88574204529ef088f2935977332_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a894ceb8bb4ba2ad52837ef386a7f1f7cecb30820bef839e3515760f504c442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a894ceb8bb4ba2ad52837ef386a7f1f7cecb30820bef839e3515760f504c442->enter($__internal_5a894ceb8bb4ba2ad52837ef386a7f1f7cecb30820bef839e3515760f504c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cebfdb0dbe50d31d89acf87e44a9b5b7f8c3a38d85b70c13ab54b62be02ad573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebfdb0dbe50d31d89acf87e44a9b5b7f8c3a38d85b70c13ab54b62be02ad573->enter($__internal_cebfdb0dbe50d31d89acf87e44a9b5b7f8c3a38d85b70c13ab54b62be02ad573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cebfdb0dbe50d31d89acf87e44a9b5b7f8c3a38d85b70c13ab54b62be02ad573->leave($__internal_cebfdb0dbe50d31d89acf87e44a9b5b7f8c3a38d85b70c13ab54b62be02ad573_prof);

        
        $__internal_5a894ceb8bb4ba2ad52837ef386a7f1f7cecb30820bef839e3515760f504c442->leave($__internal_5a894ceb8bb4ba2ad52837ef386a7f1f7cecb30820bef839e3515760f504c442_prof);

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
