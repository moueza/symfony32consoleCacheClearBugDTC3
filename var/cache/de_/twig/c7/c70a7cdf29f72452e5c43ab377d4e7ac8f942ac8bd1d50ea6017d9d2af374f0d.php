<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6531444ead0163edc5b0ce7b67b2b7164e092a598d5885e2092e2e990aa6f808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5a7e4abb5a501dcc696d64086fd7094a688239c1773bb760dd125b32c1eb9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a7e4abb5a501dcc696d64086fd7094a688239c1773bb760dd125b32c1eb9a3->enter($__internal_a5a7e4abb5a501dcc696d64086fd7094a688239c1773bb760dd125b32c1eb9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e8ee3d0f2ebc08f3964abe6a4eacc9911bb1ec653134317fc5ff26b23aa275c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ee3d0f2ebc08f3964abe6a4eacc9911bb1ec653134317fc5ff26b23aa275c7->enter($__internal_e8ee3d0f2ebc08f3964abe6a4eacc9911bb1ec653134317fc5ff26b23aa275c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a7e4abb5a501dcc696d64086fd7094a688239c1773bb760dd125b32c1eb9a3->leave($__internal_a5a7e4abb5a501dcc696d64086fd7094a688239c1773bb760dd125b32c1eb9a3_prof);

        
        $__internal_e8ee3d0f2ebc08f3964abe6a4eacc9911bb1ec653134317fc5ff26b23aa275c7->leave($__internal_e8ee3d0f2ebc08f3964abe6a4eacc9911bb1ec653134317fc5ff26b23aa275c7_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_21fdc31ffb5ceb1e21cfebbe86599485b6806c8539c3ef8fee2ec003b80d613a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fdc31ffb5ceb1e21cfebbe86599485b6806c8539c3ef8fee2ec003b80d613a->enter($__internal_21fdc31ffb5ceb1e21cfebbe86599485b6806c8539c3ef8fee2ec003b80d613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a58ab1cf0660e1a66eb80871cbb7d36191fa2db7dd1d69397e92b3bae0e0e763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58ab1cf0660e1a66eb80871cbb7d36191fa2db7dd1d69397e92b3bae0e0e763->enter($__internal_a58ab1cf0660e1a66eb80871cbb7d36191fa2db7dd1d69397e92b3bae0e0e763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a58ab1cf0660e1a66eb80871cbb7d36191fa2db7dd1d69397e92b3bae0e0e763->leave($__internal_a58ab1cf0660e1a66eb80871cbb7d36191fa2db7dd1d69397e92b3bae0e0e763_prof);

        
        $__internal_21fdc31ffb5ceb1e21cfebbe86599485b6806c8539c3ef8fee2ec003b80d613a->leave($__internal_21fdc31ffb5ceb1e21cfebbe86599485b6806c8539c3ef8fee2ec003b80d613a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35a5055b77d37e39c30bb524d65fe0f17b1014f18a6cd0dc67355077a7b565e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a5055b77d37e39c30bb524d65fe0f17b1014f18a6cd0dc67355077a7b565e4->enter($__internal_35a5055b77d37e39c30bb524d65fe0f17b1014f18a6cd0dc67355077a7b565e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_991ac6fb6afdba11cf8df10ef5ab01b58c4e7e5a8e097b530abf4ef5a5cbf105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991ac6fb6afdba11cf8df10ef5ab01b58c4e7e5a8e097b530abf4ef5a5cbf105->enter($__internal_991ac6fb6afdba11cf8df10ef5ab01b58c4e7e5a8e097b530abf4ef5a5cbf105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_991ac6fb6afdba11cf8df10ef5ab01b58c4e7e5a8e097b530abf4ef5a5cbf105->leave($__internal_991ac6fb6afdba11cf8df10ef5ab01b58c4e7e5a8e097b530abf4ef5a5cbf105_prof);

        
        $__internal_35a5055b77d37e39c30bb524d65fe0f17b1014f18a6cd0dc67355077a7b565e4->leave($__internal_35a5055b77d37e39c30bb524d65fe0f17b1014f18a6cd0dc67355077a7b565e4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
