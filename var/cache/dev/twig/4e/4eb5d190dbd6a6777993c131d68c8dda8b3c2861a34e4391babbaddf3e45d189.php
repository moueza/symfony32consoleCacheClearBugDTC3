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
        $__internal_708fce0a37ab785f71a113633af34898c9513da325994353fa8f74ebb67c0c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708fce0a37ab785f71a113633af34898c9513da325994353fa8f74ebb67c0c0f->enter($__internal_708fce0a37ab785f71a113633af34898c9513da325994353fa8f74ebb67c0c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d39959672ae0a063634373b9c6b10fcfe29817452407e82faa4bc099e35b6cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39959672ae0a063634373b9c6b10fcfe29817452407e82faa4bc099e35b6cab->enter($__internal_d39959672ae0a063634373b9c6b10fcfe29817452407e82faa4bc099e35b6cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_708fce0a37ab785f71a113633af34898c9513da325994353fa8f74ebb67c0c0f->leave($__internal_708fce0a37ab785f71a113633af34898c9513da325994353fa8f74ebb67c0c0f_prof);

        
        $__internal_d39959672ae0a063634373b9c6b10fcfe29817452407e82faa4bc099e35b6cab->leave($__internal_d39959672ae0a063634373b9c6b10fcfe29817452407e82faa4bc099e35b6cab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_006a446881cde9b25cda82374ef16aea8305fc2480ab9d0fe49027382eb578a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006a446881cde9b25cda82374ef16aea8305fc2480ab9d0fe49027382eb578a3->enter($__internal_006a446881cde9b25cda82374ef16aea8305fc2480ab9d0fe49027382eb578a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_249a9275417add76e693da7aee06bef9fabffd803725e0c6f3d37a827d23f6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249a9275417add76e693da7aee06bef9fabffd803725e0c6f3d37a827d23f6a4->enter($__internal_249a9275417add76e693da7aee06bef9fabffd803725e0c6f3d37a827d23f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_249a9275417add76e693da7aee06bef9fabffd803725e0c6f3d37a827d23f6a4->leave($__internal_249a9275417add76e693da7aee06bef9fabffd803725e0c6f3d37a827d23f6a4_prof);

        
        $__internal_006a446881cde9b25cda82374ef16aea8305fc2480ab9d0fe49027382eb578a3->leave($__internal_006a446881cde9b25cda82374ef16aea8305fc2480ab9d0fe49027382eb578a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1e1155afe20e06b7c46191ab10533a91113383739657734762253388779cb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e1155afe20e06b7c46191ab10533a91113383739657734762253388779cb99->enter($__internal_c1e1155afe20e06b7c46191ab10533a91113383739657734762253388779cb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ed0387eb43cee61816602c65968c36bf4a1ca681f4445bd1798bc000e913c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed0387eb43cee61816602c65968c36bf4a1ca681f4445bd1798bc000e913c94->enter($__internal_6ed0387eb43cee61816602c65968c36bf4a1ca681f4445bd1798bc000e913c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ed0387eb43cee61816602c65968c36bf4a1ca681f4445bd1798bc000e913c94->leave($__internal_6ed0387eb43cee61816602c65968c36bf4a1ca681f4445bd1798bc000e913c94_prof);

        
        $__internal_c1e1155afe20e06b7c46191ab10533a91113383739657734762253388779cb99->leave($__internal_c1e1155afe20e06b7c46191ab10533a91113383739657734762253388779cb99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b708d93c59ed6b83e894b0e4ffec5bf24b233ed7c850ba37ee62c371d3b8531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b708d93c59ed6b83e894b0e4ffec5bf24b233ed7c850ba37ee62c371d3b8531->enter($__internal_4b708d93c59ed6b83e894b0e4ffec5bf24b233ed7c850ba37ee62c371d3b8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa223db0495d590d852e348c72a2a81329468697a8e66c575d60fb85d704b063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa223db0495d590d852e348c72a2a81329468697a8e66c575d60fb85d704b063->enter($__internal_fa223db0495d590d852e348c72a2a81329468697a8e66c575d60fb85d704b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa223db0495d590d852e348c72a2a81329468697a8e66c575d60fb85d704b063->leave($__internal_fa223db0495d590d852e348c72a2a81329468697a8e66c575d60fb85d704b063_prof);

        
        $__internal_4b708d93c59ed6b83e894b0e4ffec5bf24b233ed7c850ba37ee62c371d3b8531->leave($__internal_4b708d93c59ed6b83e894b0e4ffec5bf24b233ed7c850ba37ee62c371d3b8531_prof);

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
