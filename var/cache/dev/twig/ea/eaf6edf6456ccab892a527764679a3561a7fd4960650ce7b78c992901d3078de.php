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
        $__internal_d673631d91e2d68db9eb06e74194fbfed6ae00bac05465936cfd7d54fe155e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d673631d91e2d68db9eb06e74194fbfed6ae00bac05465936cfd7d54fe155e8d->enter($__internal_d673631d91e2d68db9eb06e74194fbfed6ae00bac05465936cfd7d54fe155e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_364d41fe09a90e6089cabb0796bc202cd5b5ba1ddabc60594347cf8798d68021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364d41fe09a90e6089cabb0796bc202cd5b5ba1ddabc60594347cf8798d68021->enter($__internal_364d41fe09a90e6089cabb0796bc202cd5b5ba1ddabc60594347cf8798d68021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d673631d91e2d68db9eb06e74194fbfed6ae00bac05465936cfd7d54fe155e8d->leave($__internal_d673631d91e2d68db9eb06e74194fbfed6ae00bac05465936cfd7d54fe155e8d_prof);

        
        $__internal_364d41fe09a90e6089cabb0796bc202cd5b5ba1ddabc60594347cf8798d68021->leave($__internal_364d41fe09a90e6089cabb0796bc202cd5b5ba1ddabc60594347cf8798d68021_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97d1616a274086f1ef83fde46ef4f3010e626b8937f9f892ed450c56fa51bba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d1616a274086f1ef83fde46ef4f3010e626b8937f9f892ed450c56fa51bba8->enter($__internal_97d1616a274086f1ef83fde46ef4f3010e626b8937f9f892ed450c56fa51bba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bed3a97e6c326f1943cdd49c76ccd698c2ec2fa52f906d674cf181cb79a9670c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed3a97e6c326f1943cdd49c76ccd698c2ec2fa52f906d674cf181cb79a9670c->enter($__internal_bed3a97e6c326f1943cdd49c76ccd698c2ec2fa52f906d674cf181cb79a9670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bed3a97e6c326f1943cdd49c76ccd698c2ec2fa52f906d674cf181cb79a9670c->leave($__internal_bed3a97e6c326f1943cdd49c76ccd698c2ec2fa52f906d674cf181cb79a9670c_prof);

        
        $__internal_97d1616a274086f1ef83fde46ef4f3010e626b8937f9f892ed450c56fa51bba8->leave($__internal_97d1616a274086f1ef83fde46ef4f3010e626b8937f9f892ed450c56fa51bba8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_357eba04602b19db8ff916b08267d2b1ab6e4fc228b5f7ce53b01ec97632e5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357eba04602b19db8ff916b08267d2b1ab6e4fc228b5f7ce53b01ec97632e5a6->enter($__internal_357eba04602b19db8ff916b08267d2b1ab6e4fc228b5f7ce53b01ec97632e5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_308d703335d1c227856c4399da554dc11ea70d65e37b5adaebe8e4901ff668b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308d703335d1c227856c4399da554dc11ea70d65e37b5adaebe8e4901ff668b2->enter($__internal_308d703335d1c227856c4399da554dc11ea70d65e37b5adaebe8e4901ff668b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_308d703335d1c227856c4399da554dc11ea70d65e37b5adaebe8e4901ff668b2->leave($__internal_308d703335d1c227856c4399da554dc11ea70d65e37b5adaebe8e4901ff668b2_prof);

        
        $__internal_357eba04602b19db8ff916b08267d2b1ab6e4fc228b5f7ce53b01ec97632e5a6->leave($__internal_357eba04602b19db8ff916b08267d2b1ab6e4fc228b5f7ce53b01ec97632e5a6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_beabf936394c9b895e0717348e35cf96d89c3e96b8a5f639b4b922bad7c17099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beabf936394c9b895e0717348e35cf96d89c3e96b8a5f639b4b922bad7c17099->enter($__internal_beabf936394c9b895e0717348e35cf96d89c3e96b8a5f639b4b922bad7c17099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_450603e8904ceed75e7595c856907a3ca2e1b5bb466665cfdf8f0ac604ee615d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450603e8904ceed75e7595c856907a3ca2e1b5bb466665cfdf8f0ac604ee615d->enter($__internal_450603e8904ceed75e7595c856907a3ca2e1b5bb466665cfdf8f0ac604ee615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_450603e8904ceed75e7595c856907a3ca2e1b5bb466665cfdf8f0ac604ee615d->leave($__internal_450603e8904ceed75e7595c856907a3ca2e1b5bb466665cfdf8f0ac604ee615d_prof);

        
        $__internal_beabf936394c9b895e0717348e35cf96d89c3e96b8a5f639b4b922bad7c17099->leave($__internal_beabf936394c9b895e0717348e35cf96d89c3e96b8a5f639b4b922bad7c17099_prof);

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
