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
        $__internal_9cfc97a5fe7c44da84dbebc967b2502db6698f01281a6a5e25435336890e6077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfc97a5fe7c44da84dbebc967b2502db6698f01281a6a5e25435336890e6077->enter($__internal_9cfc97a5fe7c44da84dbebc967b2502db6698f01281a6a5e25435336890e6077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_990ef727802c122a3aa2b452a0ddb7e5356539df33da919054ff12c5ffee3764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990ef727802c122a3aa2b452a0ddb7e5356539df33da919054ff12c5ffee3764->enter($__internal_990ef727802c122a3aa2b452a0ddb7e5356539df33da919054ff12c5ffee3764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfc97a5fe7c44da84dbebc967b2502db6698f01281a6a5e25435336890e6077->leave($__internal_9cfc97a5fe7c44da84dbebc967b2502db6698f01281a6a5e25435336890e6077_prof);

        
        $__internal_990ef727802c122a3aa2b452a0ddb7e5356539df33da919054ff12c5ffee3764->leave($__internal_990ef727802c122a3aa2b452a0ddb7e5356539df33da919054ff12c5ffee3764_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af98218845945a54b4b6ddd19375ce453caa733a5a5a8c36182dc02be2e5db58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af98218845945a54b4b6ddd19375ce453caa733a5a5a8c36182dc02be2e5db58->enter($__internal_af98218845945a54b4b6ddd19375ce453caa733a5a5a8c36182dc02be2e5db58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edf9116ccb3306244572eb6a50783c2eb2eea4ed399c0501863d5fd83c0a2adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf9116ccb3306244572eb6a50783c2eb2eea4ed399c0501863d5fd83c0a2adb->enter($__internal_edf9116ccb3306244572eb6a50783c2eb2eea4ed399c0501863d5fd83c0a2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_edf9116ccb3306244572eb6a50783c2eb2eea4ed399c0501863d5fd83c0a2adb->leave($__internal_edf9116ccb3306244572eb6a50783c2eb2eea4ed399c0501863d5fd83c0a2adb_prof);

        
        $__internal_af98218845945a54b4b6ddd19375ce453caa733a5a5a8c36182dc02be2e5db58->leave($__internal_af98218845945a54b4b6ddd19375ce453caa733a5a5a8c36182dc02be2e5db58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_066111ec6cf4496b4e9d28015cfb41919aa5f45764ebbfa1b70da5fec3dd2669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066111ec6cf4496b4e9d28015cfb41919aa5f45764ebbfa1b70da5fec3dd2669->enter($__internal_066111ec6cf4496b4e9d28015cfb41919aa5f45764ebbfa1b70da5fec3dd2669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f76bd58bb857944b3514b1a7541641f5d4a3b9516088c1462403aa3f82415fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f76bd58bb857944b3514b1a7541641f5d4a3b9516088c1462403aa3f82415fe->enter($__internal_5f76bd58bb857944b3514b1a7541641f5d4a3b9516088c1462403aa3f82415fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5f76bd58bb857944b3514b1a7541641f5d4a3b9516088c1462403aa3f82415fe->leave($__internal_5f76bd58bb857944b3514b1a7541641f5d4a3b9516088c1462403aa3f82415fe_prof);

        
        $__internal_066111ec6cf4496b4e9d28015cfb41919aa5f45764ebbfa1b70da5fec3dd2669->leave($__internal_066111ec6cf4496b4e9d28015cfb41919aa5f45764ebbfa1b70da5fec3dd2669_prof);

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
