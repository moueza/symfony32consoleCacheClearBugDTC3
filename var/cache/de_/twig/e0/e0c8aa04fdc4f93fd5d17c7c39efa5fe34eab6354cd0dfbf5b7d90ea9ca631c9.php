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
        $__internal_c9e68757e82c581b1e04be3439e6d5a4b76eddbecb833cefac16879c38d10d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e68757e82c581b1e04be3439e6d5a4b76eddbecb833cefac16879c38d10d02->enter($__internal_c9e68757e82c581b1e04be3439e6d5a4b76eddbecb833cefac16879c38d10d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9d2335e3e9a301bb7212710aaacc9c0fddf7ed3e5d3db23f45f33ca0f451d1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2335e3e9a301bb7212710aaacc9c0fddf7ed3e5d3db23f45f33ca0f451d1a2->enter($__internal_9d2335e3e9a301bb7212710aaacc9c0fddf7ed3e5d3db23f45f33ca0f451d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c9e68757e82c581b1e04be3439e6d5a4b76eddbecb833cefac16879c38d10d02->leave($__internal_c9e68757e82c581b1e04be3439e6d5a4b76eddbecb833cefac16879c38d10d02_prof);

        
        $__internal_9d2335e3e9a301bb7212710aaacc9c0fddf7ed3e5d3db23f45f33ca0f451d1a2->leave($__internal_9d2335e3e9a301bb7212710aaacc9c0fddf7ed3e5d3db23f45f33ca0f451d1a2_prof);

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
