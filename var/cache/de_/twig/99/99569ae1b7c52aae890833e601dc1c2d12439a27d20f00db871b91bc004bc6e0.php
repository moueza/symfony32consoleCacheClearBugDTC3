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
        $__internal_3bc192c39d1f4e1d82c93f6f0adda1bbdccc34ef65ac611c1313b3fa0687a3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc192c39d1f4e1d82c93f6f0adda1bbdccc34ef65ac611c1313b3fa0687a3b0->enter($__internal_3bc192c39d1f4e1d82c93f6f0adda1bbdccc34ef65ac611c1313b3fa0687a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b59f34db0a512dd196b756f42fc172ac78d449d75cdaaab765d83c4ef0565445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59f34db0a512dd196b756f42fc172ac78d449d75cdaaab765d83c4ef0565445->enter($__internal_b59f34db0a512dd196b756f42fc172ac78d449d75cdaaab765d83c4ef0565445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc192c39d1f4e1d82c93f6f0adda1bbdccc34ef65ac611c1313b3fa0687a3b0->leave($__internal_3bc192c39d1f4e1d82c93f6f0adda1bbdccc34ef65ac611c1313b3fa0687a3b0_prof);

        
        $__internal_b59f34db0a512dd196b756f42fc172ac78d449d75cdaaab765d83c4ef0565445->leave($__internal_b59f34db0a512dd196b756f42fc172ac78d449d75cdaaab765d83c4ef0565445_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7abf63fad390f0f4172cbd7df90eef07eccae8f934cfcf8786cdf2eb7f1bd77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abf63fad390f0f4172cbd7df90eef07eccae8f934cfcf8786cdf2eb7f1bd77d->enter($__internal_7abf63fad390f0f4172cbd7df90eef07eccae8f934cfcf8786cdf2eb7f1bd77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3315bd78d1f7849ed707debd983218f81abf21c868dc8ea14ab0a052672b2b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3315bd78d1f7849ed707debd983218f81abf21c868dc8ea14ab0a052672b2b9d->enter($__internal_3315bd78d1f7849ed707debd983218f81abf21c868dc8ea14ab0a052672b2b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3315bd78d1f7849ed707debd983218f81abf21c868dc8ea14ab0a052672b2b9d->leave($__internal_3315bd78d1f7849ed707debd983218f81abf21c868dc8ea14ab0a052672b2b9d_prof);

        
        $__internal_7abf63fad390f0f4172cbd7df90eef07eccae8f934cfcf8786cdf2eb7f1bd77d->leave($__internal_7abf63fad390f0f4172cbd7df90eef07eccae8f934cfcf8786cdf2eb7f1bd77d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef1463a83f1e77a2a2ed91d95b3cea0ad82cc40315a37bc13d2abe7110e2b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef1463a83f1e77a2a2ed91d95b3cea0ad82cc40315a37bc13d2abe7110e2b28->enter($__internal_fef1463a83f1e77a2a2ed91d95b3cea0ad82cc40315a37bc13d2abe7110e2b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a5c63638a2aa55247d7f72dca26e94de78b92edcf43a8fc085cef2b5e54fa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5c63638a2aa55247d7f72dca26e94de78b92edcf43a8fc085cef2b5e54fa11->enter($__internal_1a5c63638a2aa55247d7f72dca26e94de78b92edcf43a8fc085cef2b5e54fa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a5c63638a2aa55247d7f72dca26e94de78b92edcf43a8fc085cef2b5e54fa11->leave($__internal_1a5c63638a2aa55247d7f72dca26e94de78b92edcf43a8fc085cef2b5e54fa11_prof);

        
        $__internal_fef1463a83f1e77a2a2ed91d95b3cea0ad82cc40315a37bc13d2abe7110e2b28->leave($__internal_fef1463a83f1e77a2a2ed91d95b3cea0ad82cc40315a37bc13d2abe7110e2b28_prof);

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
