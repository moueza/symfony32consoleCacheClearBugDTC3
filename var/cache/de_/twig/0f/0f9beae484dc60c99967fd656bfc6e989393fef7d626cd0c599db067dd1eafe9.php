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
        $__internal_5c009c320b406f3bd8ed1600c1bf72dff9c123d830d2c3920c024e41dde96864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c009c320b406f3bd8ed1600c1bf72dff9c123d830d2c3920c024e41dde96864->enter($__internal_5c009c320b406f3bd8ed1600c1bf72dff9c123d830d2c3920c024e41dde96864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5d3945d7c553d681d48abffbcf9038fa2b6c7279c75872a2e453eea64c5b1d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3945d7c553d681d48abffbcf9038fa2b6c7279c75872a2e453eea64c5b1d7a->enter($__internal_5d3945d7c553d681d48abffbcf9038fa2b6c7279c75872a2e453eea64c5b1d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c009c320b406f3bd8ed1600c1bf72dff9c123d830d2c3920c024e41dde96864->leave($__internal_5c009c320b406f3bd8ed1600c1bf72dff9c123d830d2c3920c024e41dde96864_prof);

        
        $__internal_5d3945d7c553d681d48abffbcf9038fa2b6c7279c75872a2e453eea64c5b1d7a->leave($__internal_5d3945d7c553d681d48abffbcf9038fa2b6c7279c75872a2e453eea64c5b1d7a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2e0c8ebcbfced87f32f65b3a1d23ca3e7ebed760f3a8227f7544d2a85a41e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e0c8ebcbfced87f32f65b3a1d23ca3e7ebed760f3a8227f7544d2a85a41e4a->enter($__internal_b2e0c8ebcbfced87f32f65b3a1d23ca3e7ebed760f3a8227f7544d2a85a41e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd43e9f6543c69a849cfa068b0c65717063e214b431f781280eb3686b75798ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd43e9f6543c69a849cfa068b0c65717063e214b431f781280eb3686b75798ed->enter($__internal_fd43e9f6543c69a849cfa068b0c65717063e214b431f781280eb3686b75798ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd43e9f6543c69a849cfa068b0c65717063e214b431f781280eb3686b75798ed->leave($__internal_fd43e9f6543c69a849cfa068b0c65717063e214b431f781280eb3686b75798ed_prof);

        
        $__internal_b2e0c8ebcbfced87f32f65b3a1d23ca3e7ebed760f3a8227f7544d2a85a41e4a->leave($__internal_b2e0c8ebcbfced87f32f65b3a1d23ca3e7ebed760f3a8227f7544d2a85a41e4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07af68ee7bf6179dbdf7b55757aebcab4f47cf2ea72605be30534abc680e8180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07af68ee7bf6179dbdf7b55757aebcab4f47cf2ea72605be30534abc680e8180->enter($__internal_07af68ee7bf6179dbdf7b55757aebcab4f47cf2ea72605be30534abc680e8180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bcffaa411be0786677daa9841334e5f8d72ab541deab5ea60f85cc763108f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcffaa411be0786677daa9841334e5f8d72ab541deab5ea60f85cc763108f31->enter($__internal_8bcffaa411be0786677daa9841334e5f8d72ab541deab5ea60f85cc763108f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8bcffaa411be0786677daa9841334e5f8d72ab541deab5ea60f85cc763108f31->leave($__internal_8bcffaa411be0786677daa9841334e5f8d72ab541deab5ea60f85cc763108f31_prof);

        
        $__internal_07af68ee7bf6179dbdf7b55757aebcab4f47cf2ea72605be30534abc680e8180->leave($__internal_07af68ee7bf6179dbdf7b55757aebcab4f47cf2ea72605be30534abc680e8180_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcbb988fd4c3d75592df239891d726fb497d1100753a37d19230bccc892ab072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbb988fd4c3d75592df239891d726fb497d1100753a37d19230bccc892ab072->enter($__internal_bcbb988fd4c3d75592df239891d726fb497d1100753a37d19230bccc892ab072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce4017c59bf7098dff27b96add5ebf96bda3178e7c2ac3737163ba7c8d386978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4017c59bf7098dff27b96add5ebf96bda3178e7c2ac3737163ba7c8d386978->enter($__internal_ce4017c59bf7098dff27b96add5ebf96bda3178e7c2ac3737163ba7c8d386978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce4017c59bf7098dff27b96add5ebf96bda3178e7c2ac3737163ba7c8d386978->leave($__internal_ce4017c59bf7098dff27b96add5ebf96bda3178e7c2ac3737163ba7c8d386978_prof);

        
        $__internal_bcbb988fd4c3d75592df239891d726fb497d1100753a37d19230bccc892ab072->leave($__internal_bcbb988fd4c3d75592df239891d726fb497d1100753a37d19230bccc892ab072_prof);

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
