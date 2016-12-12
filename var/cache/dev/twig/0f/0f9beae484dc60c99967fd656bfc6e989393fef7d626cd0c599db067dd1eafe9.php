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
        $__internal_ccf4c50c5cfff5119420e3554e55d370895b26b1e3a3156d97e1d7c04bc69600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf4c50c5cfff5119420e3554e55d370895b26b1e3a3156d97e1d7c04bc69600->enter($__internal_ccf4c50c5cfff5119420e3554e55d370895b26b1e3a3156d97e1d7c04bc69600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_76227f251ecefd11a6ee2a7c3dbf6be134284e8051a2be8576ab2b9ccff889d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76227f251ecefd11a6ee2a7c3dbf6be134284e8051a2be8576ab2b9ccff889d7->enter($__internal_76227f251ecefd11a6ee2a7c3dbf6be134284e8051a2be8576ab2b9ccff889d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf4c50c5cfff5119420e3554e55d370895b26b1e3a3156d97e1d7c04bc69600->leave($__internal_ccf4c50c5cfff5119420e3554e55d370895b26b1e3a3156d97e1d7c04bc69600_prof);

        
        $__internal_76227f251ecefd11a6ee2a7c3dbf6be134284e8051a2be8576ab2b9ccff889d7->leave($__internal_76227f251ecefd11a6ee2a7c3dbf6be134284e8051a2be8576ab2b9ccff889d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d1372d9b7235ad1868405935a613ea1e3d7e87bbdf7fa8e3d6015f713f25674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1372d9b7235ad1868405935a613ea1e3d7e87bbdf7fa8e3d6015f713f25674->enter($__internal_2d1372d9b7235ad1868405935a613ea1e3d7e87bbdf7fa8e3d6015f713f25674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2743417dc61656e443fe0e1319d8c26942df55c1c7a8d27efea8cc0e193dd5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2743417dc61656e443fe0e1319d8c26942df55c1c7a8d27efea8cc0e193dd5fd->enter($__internal_2743417dc61656e443fe0e1319d8c26942df55c1c7a8d27efea8cc0e193dd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2743417dc61656e443fe0e1319d8c26942df55c1c7a8d27efea8cc0e193dd5fd->leave($__internal_2743417dc61656e443fe0e1319d8c26942df55c1c7a8d27efea8cc0e193dd5fd_prof);

        
        $__internal_2d1372d9b7235ad1868405935a613ea1e3d7e87bbdf7fa8e3d6015f713f25674->leave($__internal_2d1372d9b7235ad1868405935a613ea1e3d7e87bbdf7fa8e3d6015f713f25674_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_202df4a47b09564d4eff8fdc01c22bf5384982bf6a676321fb56c1398e49c2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202df4a47b09564d4eff8fdc01c22bf5384982bf6a676321fb56c1398e49c2ac->enter($__internal_202df4a47b09564d4eff8fdc01c22bf5384982bf6a676321fb56c1398e49c2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f2b0f2bb99fc2c10684b535fb196456b9702bb82fcfc7ede18039b164d6b938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2b0f2bb99fc2c10684b535fb196456b9702bb82fcfc7ede18039b164d6b938->enter($__internal_4f2b0f2bb99fc2c10684b535fb196456b9702bb82fcfc7ede18039b164d6b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f2b0f2bb99fc2c10684b535fb196456b9702bb82fcfc7ede18039b164d6b938->leave($__internal_4f2b0f2bb99fc2c10684b535fb196456b9702bb82fcfc7ede18039b164d6b938_prof);

        
        $__internal_202df4a47b09564d4eff8fdc01c22bf5384982bf6a676321fb56c1398e49c2ac->leave($__internal_202df4a47b09564d4eff8fdc01c22bf5384982bf6a676321fb56c1398e49c2ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_783a22a08bc36ec273bd14dbea46ea120ed0eab52d49c8f8d1856d1e5f1ca515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783a22a08bc36ec273bd14dbea46ea120ed0eab52d49c8f8d1856d1e5f1ca515->enter($__internal_783a22a08bc36ec273bd14dbea46ea120ed0eab52d49c8f8d1856d1e5f1ca515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45a2c52da76720796516c1595d3e340c3dece5648f24a1e05ae1328cd108fa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a2c52da76720796516c1595d3e340c3dece5648f24a1e05ae1328cd108fa3c->enter($__internal_45a2c52da76720796516c1595d3e340c3dece5648f24a1e05ae1328cd108fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45a2c52da76720796516c1595d3e340c3dece5648f24a1e05ae1328cd108fa3c->leave($__internal_45a2c52da76720796516c1595d3e340c3dece5648f24a1e05ae1328cd108fa3c_prof);

        
        $__internal_783a22a08bc36ec273bd14dbea46ea120ed0eab52d49c8f8d1856d1e5f1ca515->leave($__internal_783a22a08bc36ec273bd14dbea46ea120ed0eab52d49c8f8d1856d1e5f1ca515_prof);

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
