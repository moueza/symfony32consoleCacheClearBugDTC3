<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd909c747434b4b23bb77dfa24ae8c39cb2a68f375fbcbb52d5977072b82312d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9f21e02bad1286318f3f88d137c16b241576bfbd42ccc54c192fc7d47d11cd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f21e02bad1286318f3f88d137c16b241576bfbd42ccc54c192fc7d47d11cd84->enter($__internal_9f21e02bad1286318f3f88d137c16b241576bfbd42ccc54c192fc7d47d11cd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d9c56615f47be5090a3f9dcae196701e3aa8ef37a43cd22994142a9a6f9d0b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c56615f47be5090a3f9dcae196701e3aa8ef37a43cd22994142a9a6f9d0b20->enter($__internal_d9c56615f47be5090a3f9dcae196701e3aa8ef37a43cd22994142a9a6f9d0b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f21e02bad1286318f3f88d137c16b241576bfbd42ccc54c192fc7d47d11cd84->leave($__internal_9f21e02bad1286318f3f88d137c16b241576bfbd42ccc54c192fc7d47d11cd84_prof);

        
        $__internal_d9c56615f47be5090a3f9dcae196701e3aa8ef37a43cd22994142a9a6f9d0b20->leave($__internal_d9c56615f47be5090a3f9dcae196701e3aa8ef37a43cd22994142a9a6f9d0b20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4017518f89934fed39bd7cfd8d542887c3a665c39a736cd51f57408fbc4828cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4017518f89934fed39bd7cfd8d542887c3a665c39a736cd51f57408fbc4828cb->enter($__internal_4017518f89934fed39bd7cfd8d542887c3a665c39a736cd51f57408fbc4828cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_455bb1122764207f07b9f5496d71c21432c09a8c876dac632bcd8cca4c6c8f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455bb1122764207f07b9f5496d71c21432c09a8c876dac632bcd8cca4c6c8f50->enter($__internal_455bb1122764207f07b9f5496d71c21432c09a8c876dac632bcd8cca4c6c8f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_455bb1122764207f07b9f5496d71c21432c09a8c876dac632bcd8cca4c6c8f50->leave($__internal_455bb1122764207f07b9f5496d71c21432c09a8c876dac632bcd8cca4c6c8f50_prof);

        
        $__internal_4017518f89934fed39bd7cfd8d542887c3a665c39a736cd51f57408fbc4828cb->leave($__internal_4017518f89934fed39bd7cfd8d542887c3a665c39a736cd51f57408fbc4828cb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_30bb363fec59ced0f0cfc274003ebf1cbdad0aa959b43f18a5f50837cd41260a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bb363fec59ced0f0cfc274003ebf1cbdad0aa959b43f18a5f50837cd41260a->enter($__internal_30bb363fec59ced0f0cfc274003ebf1cbdad0aa959b43f18a5f50837cd41260a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_478c8a953380057bdeebd23d9b073f30044373c7d9e38cdffe3d82e52afac83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c8a953380057bdeebd23d9b073f30044373c7d9e38cdffe3d82e52afac83a->enter($__internal_478c8a953380057bdeebd23d9b073f30044373c7d9e38cdffe3d82e52afac83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_478c8a953380057bdeebd23d9b073f30044373c7d9e38cdffe3d82e52afac83a->leave($__internal_478c8a953380057bdeebd23d9b073f30044373c7d9e38cdffe3d82e52afac83a_prof);

        
        $__internal_30bb363fec59ced0f0cfc274003ebf1cbdad0aa959b43f18a5f50837cd41260a->leave($__internal_30bb363fec59ced0f0cfc274003ebf1cbdad0aa959b43f18a5f50837cd41260a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_534d210a447bca2dd00995d89ce2218c00c45a8e5ab173f6a5cb11ec8b64868b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534d210a447bca2dd00995d89ce2218c00c45a8e5ab173f6a5cb11ec8b64868b->enter($__internal_534d210a447bca2dd00995d89ce2218c00c45a8e5ab173f6a5cb11ec8b64868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29f1ebefc1eeedf5b69d7559f003a2ecc5a5d7d79c0772890b306567a125c1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f1ebefc1eeedf5b69d7559f003a2ecc5a5d7d79c0772890b306567a125c1c8->enter($__internal_29f1ebefc1eeedf5b69d7559f003a2ecc5a5d7d79c0772890b306567a125c1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_29f1ebefc1eeedf5b69d7559f003a2ecc5a5d7d79c0772890b306567a125c1c8->leave($__internal_29f1ebefc1eeedf5b69d7559f003a2ecc5a5d7d79c0772890b306567a125c1c8_prof);

        
        $__internal_534d210a447bca2dd00995d89ce2218c00c45a8e5ab173f6a5cb11ec8b64868b->leave($__internal_534d210a447bca2dd00995d89ce2218c00c45a8e5ab173f6a5cb11ec8b64868b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
