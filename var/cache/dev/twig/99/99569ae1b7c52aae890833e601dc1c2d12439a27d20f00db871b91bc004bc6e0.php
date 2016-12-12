<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33e28e5b77ee9c8f16a8b11b817a297db77119f85629d2461a0758a3c2f0071e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e28e5b77ee9c8f16a8b11b817a297db77119f85629d2461a0758a3c2f0071e->enter($__internal_33e28e5b77ee9c8f16a8b11b817a297db77119f85629d2461a0758a3c2f0071e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_86400c1ac072fa348a62134c672cc9aea4de25534eab1332c6d2fe41b60c988b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86400c1ac072fa348a62134c672cc9aea4de25534eab1332c6d2fe41b60c988b->enter($__internal_86400c1ac072fa348a62134c672cc9aea4de25534eab1332c6d2fe41b60c988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e28e5b77ee9c8f16a8b11b817a297db77119f85629d2461a0758a3c2f0071e->leave($__internal_33e28e5b77ee9c8f16a8b11b817a297db77119f85629d2461a0758a3c2f0071e_prof);

        
        $__internal_86400c1ac072fa348a62134c672cc9aea4de25534eab1332c6d2fe41b60c988b->leave($__internal_86400c1ac072fa348a62134c672cc9aea4de25534eab1332c6d2fe41b60c988b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc9b80a111912b9975d727d725b31fcbebf12df58b81a7eb53d9a7167b0d642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc9b80a111912b9975d727d725b31fcbebf12df58b81a7eb53d9a7167b0d642->enter($__internal_1cc9b80a111912b9975d727d725b31fcbebf12df58b81a7eb53d9a7167b0d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b25f15218f0e404db883569b08e270d90f6db29f2cc68fd672dafc82361e6708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25f15218f0e404db883569b08e270d90f6db29f2cc68fd672dafc82361e6708->enter($__internal_b25f15218f0e404db883569b08e270d90f6db29f2cc68fd672dafc82361e6708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b25f15218f0e404db883569b08e270d90f6db29f2cc68fd672dafc82361e6708->leave($__internal_b25f15218f0e404db883569b08e270d90f6db29f2cc68fd672dafc82361e6708_prof);

        
        $__internal_1cc9b80a111912b9975d727d725b31fcbebf12df58b81a7eb53d9a7167b0d642->leave($__internal_1cc9b80a111912b9975d727d725b31fcbebf12df58b81a7eb53d9a7167b0d642_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e4d5cc578cb39b713db0ac54136f97bf0a1e9b47c0b58bc81bec4b267fab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e4d5cc578cb39b713db0ac54136f97bf0a1e9b47c0b58bc81bec4b267fab0d->enter($__internal_67e4d5cc578cb39b713db0ac54136f97bf0a1e9b47c0b58bc81bec4b267fab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27029d1f833adc7b53107a6ba88a830c3d2bf6497d79c06d38b4ceb9dcbf6098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27029d1f833adc7b53107a6ba88a830c3d2bf6497d79c06d38b4ceb9dcbf6098->enter($__internal_27029d1f833adc7b53107a6ba88a830c3d2bf6497d79c06d38b4ceb9dcbf6098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_27029d1f833adc7b53107a6ba88a830c3d2bf6497d79c06d38b4ceb9dcbf6098->leave($__internal_27029d1f833adc7b53107a6ba88a830c3d2bf6497d79c06d38b4ceb9dcbf6098_prof);

        
        $__internal_67e4d5cc578cb39b713db0ac54136f97bf0a1e9b47c0b58bc81bec4b267fab0d->leave($__internal_67e4d5cc578cb39b713db0ac54136f97bf0a1e9b47c0b58bc81bec4b267fab0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
