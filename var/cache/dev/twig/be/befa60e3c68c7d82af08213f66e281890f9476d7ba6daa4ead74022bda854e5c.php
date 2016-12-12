<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e98ecef0f5459f92258f7e10e9f1ce9976b373c113d13dac66deb3f655cdc29b extends Twig_Template
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
        $__internal_7242f8d8a785033c02f452aa9e646f633c754ede7ab284e8892ba441dccfdd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7242f8d8a785033c02f452aa9e646f633c754ede7ab284e8892ba441dccfdd20->enter($__internal_7242f8d8a785033c02f452aa9e646f633c754ede7ab284e8892ba441dccfdd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_059e02d7e779d8264efa4ac9078a9d99d13570def0f0b5033fbd8274767e2531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059e02d7e779d8264efa4ac9078a9d99d13570def0f0b5033fbd8274767e2531->enter($__internal_059e02d7e779d8264efa4ac9078a9d99d13570def0f0b5033fbd8274767e2531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7242f8d8a785033c02f452aa9e646f633c754ede7ab284e8892ba441dccfdd20->leave($__internal_7242f8d8a785033c02f452aa9e646f633c754ede7ab284e8892ba441dccfdd20_prof);

        
        $__internal_059e02d7e779d8264efa4ac9078a9d99d13570def0f0b5033fbd8274767e2531->leave($__internal_059e02d7e779d8264efa4ac9078a9d99d13570def0f0b5033fbd8274767e2531_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
