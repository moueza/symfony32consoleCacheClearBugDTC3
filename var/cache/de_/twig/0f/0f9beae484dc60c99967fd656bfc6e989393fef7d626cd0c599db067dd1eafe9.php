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
        $__internal_36c9e77a92ea9c088476cdbee1786ec31d3c420ca273bedb83dd115c74cb0019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c9e77a92ea9c088476cdbee1786ec31d3c420ca273bedb83dd115c74cb0019->enter($__internal_36c9e77a92ea9c088476cdbee1786ec31d3c420ca273bedb83dd115c74cb0019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d57d048c98b52d886d2d60c7944174e361064cb792079df6bf8dd8e97569304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57d048c98b52d886d2d60c7944174e361064cb792079df6bf8dd8e97569304a->enter($__internal_d57d048c98b52d886d2d60c7944174e361064cb792079df6bf8dd8e97569304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36c9e77a92ea9c088476cdbee1786ec31d3c420ca273bedb83dd115c74cb0019->leave($__internal_36c9e77a92ea9c088476cdbee1786ec31d3c420ca273bedb83dd115c74cb0019_prof);

        
        $__internal_d57d048c98b52d886d2d60c7944174e361064cb792079df6bf8dd8e97569304a->leave($__internal_d57d048c98b52d886d2d60c7944174e361064cb792079df6bf8dd8e97569304a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74e6ccfc52f5320d173dd3a088b2814368a98cd0041d4600497185c59734470f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e6ccfc52f5320d173dd3a088b2814368a98cd0041d4600497185c59734470f->enter($__internal_74e6ccfc52f5320d173dd3a088b2814368a98cd0041d4600497185c59734470f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d59c12a7a346cd567b0311c5b9c6808522ddb7744797a167788ec44405420c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d59c12a7a346cd567b0311c5b9c6808522ddb7744797a167788ec44405420c1->enter($__internal_7d59c12a7a346cd567b0311c5b9c6808522ddb7744797a167788ec44405420c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d59c12a7a346cd567b0311c5b9c6808522ddb7744797a167788ec44405420c1->leave($__internal_7d59c12a7a346cd567b0311c5b9c6808522ddb7744797a167788ec44405420c1_prof);

        
        $__internal_74e6ccfc52f5320d173dd3a088b2814368a98cd0041d4600497185c59734470f->leave($__internal_74e6ccfc52f5320d173dd3a088b2814368a98cd0041d4600497185c59734470f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35d99e0e89c92d0273f9f32d6f7c22602400af0774af84e53dd2f2b7dc11558d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d99e0e89c92d0273f9f32d6f7c22602400af0774af84e53dd2f2b7dc11558d->enter($__internal_35d99e0e89c92d0273f9f32d6f7c22602400af0774af84e53dd2f2b7dc11558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bc0f7d64f541d9fe7eb51a4c51895aaa30674dc1ca4deae088cb868ca9a20bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0f7d64f541d9fe7eb51a4c51895aaa30674dc1ca4deae088cb868ca9a20bf6->enter($__internal_bc0f7d64f541d9fe7eb51a4c51895aaa30674dc1ca4deae088cb868ca9a20bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc0f7d64f541d9fe7eb51a4c51895aaa30674dc1ca4deae088cb868ca9a20bf6->leave($__internal_bc0f7d64f541d9fe7eb51a4c51895aaa30674dc1ca4deae088cb868ca9a20bf6_prof);

        
        $__internal_35d99e0e89c92d0273f9f32d6f7c22602400af0774af84e53dd2f2b7dc11558d->leave($__internal_35d99e0e89c92d0273f9f32d6f7c22602400af0774af84e53dd2f2b7dc11558d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07eb7a4635873610f43cd64fdab8374d256ed3ef0450a9e42a4287ded09c1c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07eb7a4635873610f43cd64fdab8374d256ed3ef0450a9e42a4287ded09c1c8d->enter($__internal_07eb7a4635873610f43cd64fdab8374d256ed3ef0450a9e42a4287ded09c1c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e888d540b5366931eb29ee280b247e4c89a36d923c12757e12ac6b5f97c9b497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e888d540b5366931eb29ee280b247e4c89a36d923c12757e12ac6b5f97c9b497->enter($__internal_e888d540b5366931eb29ee280b247e4c89a36d923c12757e12ac6b5f97c9b497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e888d540b5366931eb29ee280b247e4c89a36d923c12757e12ac6b5f97c9b497->leave($__internal_e888d540b5366931eb29ee280b247e4c89a36d923c12757e12ac6b5f97c9b497_prof);

        
        $__internal_07eb7a4635873610f43cd64fdab8374d256ed3ef0450a9e42a4287ded09c1c8d->leave($__internal_07eb7a4635873610f43cd64fdab8374d256ed3ef0450a9e42a4287ded09c1c8d_prof);

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
