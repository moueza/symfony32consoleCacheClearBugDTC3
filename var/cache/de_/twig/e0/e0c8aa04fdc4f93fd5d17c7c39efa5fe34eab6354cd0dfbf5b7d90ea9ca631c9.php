<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_60ccab1ae98bc49f6dc172751e57766837a820c9da1545a7405627a9f96c589e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc23ac33a4e18cb3c0427a3713b6f04e3917ae26eb47101497b89d0394a48537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc23ac33a4e18cb3c0427a3713b6f04e3917ae26eb47101497b89d0394a48537->enter($__internal_bc23ac33a4e18cb3c0427a3713b6f04e3917ae26eb47101497b89d0394a48537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7c9c5e0a41afc50e532c6d62a40da001a63c8662ff26a3c9c81b12e0f29a3edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9c5e0a41afc50e532c6d62a40da001a63c8662ff26a3c9c81b12e0f29a3edd->enter($__internal_7c9c5e0a41afc50e532c6d62a40da001a63c8662ff26a3c9c81b12e0f29a3edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bc23ac33a4e18cb3c0427a3713b6f04e3917ae26eb47101497b89d0394a48537->leave($__internal_bc23ac33a4e18cb3c0427a3713b6f04e3917ae26eb47101497b89d0394a48537_prof);

        
        $__internal_7c9c5e0a41afc50e532c6d62a40da001a63c8662ff26a3c9c81b12e0f29a3edd->leave($__internal_7c9c5e0a41afc50e532c6d62a40da001a63c8662ff26a3c9c81b12e0f29a3edd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
