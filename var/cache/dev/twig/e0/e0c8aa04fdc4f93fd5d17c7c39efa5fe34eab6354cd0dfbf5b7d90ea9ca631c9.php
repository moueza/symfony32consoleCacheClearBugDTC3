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
        $__internal_51be07c8272940c331bd71a86f112ba0919222edcc83a0f556e7a0f6d07cdcbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51be07c8272940c331bd71a86f112ba0919222edcc83a0f556e7a0f6d07cdcbb->enter($__internal_51be07c8272940c331bd71a86f112ba0919222edcc83a0f556e7a0f6d07cdcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_21c708fc000b322e6324df69b868e30bbd22138f893f1e1f65163261a2de02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c708fc000b322e6324df69b868e30bbd22138f893f1e1f65163261a2de02de->enter($__internal_21c708fc000b322e6324df69b868e30bbd22138f893f1e1f65163261a2de02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_51be07c8272940c331bd71a86f112ba0919222edcc83a0f556e7a0f6d07cdcbb->leave($__internal_51be07c8272940c331bd71a86f112ba0919222edcc83a0f556e7a0f6d07cdcbb_prof);

        
        $__internal_21c708fc000b322e6324df69b868e30bbd22138f893f1e1f65163261a2de02de->leave($__internal_21c708fc000b322e6324df69b868e30bbd22138f893f1e1f65163261a2de02de_prof);

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
