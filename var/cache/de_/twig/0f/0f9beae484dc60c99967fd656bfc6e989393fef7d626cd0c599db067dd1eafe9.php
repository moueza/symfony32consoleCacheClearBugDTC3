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
        $__internal_5a65854c8e9f814c853f9efa5ee40a80b65e4dd9e90bbe67824c19e72cd82498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a65854c8e9f814c853f9efa5ee40a80b65e4dd9e90bbe67824c19e72cd82498->enter($__internal_5a65854c8e9f814c853f9efa5ee40a80b65e4dd9e90bbe67824c19e72cd82498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cceea186fbf64ccb6e5795d6d93e90fae471947e242c9415773c3368be73c763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cceea186fbf64ccb6e5795d6d93e90fae471947e242c9415773c3368be73c763->enter($__internal_cceea186fbf64ccb6e5795d6d93e90fae471947e242c9415773c3368be73c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a65854c8e9f814c853f9efa5ee40a80b65e4dd9e90bbe67824c19e72cd82498->leave($__internal_5a65854c8e9f814c853f9efa5ee40a80b65e4dd9e90bbe67824c19e72cd82498_prof);

        
        $__internal_cceea186fbf64ccb6e5795d6d93e90fae471947e242c9415773c3368be73c763->leave($__internal_cceea186fbf64ccb6e5795d6d93e90fae471947e242c9415773c3368be73c763_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7992d9ea33f2949f7b041def8a1827814a4a5a144d89b94291c64a56b87cf311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7992d9ea33f2949f7b041def8a1827814a4a5a144d89b94291c64a56b87cf311->enter($__internal_7992d9ea33f2949f7b041def8a1827814a4a5a144d89b94291c64a56b87cf311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf311c4e30a372a996e463a97d55e9468bcb2e90b883911f596976e66b2168f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf311c4e30a372a996e463a97d55e9468bcb2e90b883911f596976e66b2168f4->enter($__internal_cf311c4e30a372a996e463a97d55e9468bcb2e90b883911f596976e66b2168f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf311c4e30a372a996e463a97d55e9468bcb2e90b883911f596976e66b2168f4->leave($__internal_cf311c4e30a372a996e463a97d55e9468bcb2e90b883911f596976e66b2168f4_prof);

        
        $__internal_7992d9ea33f2949f7b041def8a1827814a4a5a144d89b94291c64a56b87cf311->leave($__internal_7992d9ea33f2949f7b041def8a1827814a4a5a144d89b94291c64a56b87cf311_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32dcdb2f248a3fa22e68c3d3f79a5fbceb757aac7e03b5d30a4f5723819287f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32dcdb2f248a3fa22e68c3d3f79a5fbceb757aac7e03b5d30a4f5723819287f8->enter($__internal_32dcdb2f248a3fa22e68c3d3f79a5fbceb757aac7e03b5d30a4f5723819287f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59710d66d80ce0fd0ef7ad546e5911bc2a086e3614363e6daeb596bac42aea7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59710d66d80ce0fd0ef7ad546e5911bc2a086e3614363e6daeb596bac42aea7c->enter($__internal_59710d66d80ce0fd0ef7ad546e5911bc2a086e3614363e6daeb596bac42aea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_59710d66d80ce0fd0ef7ad546e5911bc2a086e3614363e6daeb596bac42aea7c->leave($__internal_59710d66d80ce0fd0ef7ad546e5911bc2a086e3614363e6daeb596bac42aea7c_prof);

        
        $__internal_32dcdb2f248a3fa22e68c3d3f79a5fbceb757aac7e03b5d30a4f5723819287f8->leave($__internal_32dcdb2f248a3fa22e68c3d3f79a5fbceb757aac7e03b5d30a4f5723819287f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c6fc4233188d008d3f9446ffed78ffb6ea924c15e06d335b806a585e757df97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6fc4233188d008d3f9446ffed78ffb6ea924c15e06d335b806a585e757df97->enter($__internal_8c6fc4233188d008d3f9446ffed78ffb6ea924c15e06d335b806a585e757df97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e01d3e85699adda51b476f098d795f83af6168bcac8d79c1836e6a091aacfcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01d3e85699adda51b476f098d795f83af6168bcac8d79c1836e6a091aacfcc2->enter($__internal_e01d3e85699adda51b476f098d795f83af6168bcac8d79c1836e6a091aacfcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e01d3e85699adda51b476f098d795f83af6168bcac8d79c1836e6a091aacfcc2->leave($__internal_e01d3e85699adda51b476f098d795f83af6168bcac8d79c1836e6a091aacfcc2_prof);

        
        $__internal_8c6fc4233188d008d3f9446ffed78ffb6ea924c15e06d335b806a585e757df97->leave($__internal_8c6fc4233188d008d3f9446ffed78ffb6ea924c15e06d335b806a585e757df97_prof);

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
