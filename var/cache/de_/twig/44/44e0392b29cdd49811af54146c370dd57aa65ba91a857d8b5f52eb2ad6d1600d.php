<?php

/* @CoreSphereConsole/Console/console.html.twig */
class __TwigTemplate_497b7e56470fc805324dba31920455634b0e27fc819aa0b737ef9d88d865c99b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "@CoreSphereConsole/Console/console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5447dec74060c0654729502b112f52b9e5eff86c2a2f4095632cfac230a08158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5447dec74060c0654729502b112f52b9e5eff86c2a2f4095632cfac230a08158->enter($__internal_5447dec74060c0654729502b112f52b9e5eff86c2a2f4095632cfac230a08158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_7fb208124dc1210e42aaea048b56f9a3e5ad2cb83089efa168e5a8eaf904ca55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb208124dc1210e42aaea048b56f9a3e5ad2cb83089efa168e5a8eaf904ca55->enter($__internal_7fb208124dc1210e42aaea048b56f9a3e5ad2cb83089efa168e5a8eaf904ca55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5447dec74060c0654729502b112f52b9e5eff86c2a2f4095632cfac230a08158->leave($__internal_5447dec74060c0654729502b112f52b9e5eff86c2a2f4095632cfac230a08158_prof);

        
        $__internal_7fb208124dc1210e42aaea048b56f9a3e5ad2cb83089efa168e5a8eaf904ca55->leave($__internal_7fb208124dc1210e42aaea048b56f9a3e5ad2cb83089efa168e5a8eaf904ca55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c924458e3e9b92d05830a560eb043167627bbd07fb16b466d7818a209093c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c924458e3e9b92d05830a560eb043167627bbd07fb16b466d7818a209093c15->enter($__internal_6c924458e3e9b92d05830a560eb043167627bbd07fb16b466d7818a209093c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89df734cccca88ae8e91cccf44b808bb572e911aad5560b50809329eda34e0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89df734cccca88ae8e91cccf44b808bb572e911aad5560b50809329eda34e0c2->enter($__internal_89df734cccca88ae8e91cccf44b808bb572e911aad5560b50809329eda34e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_89df734cccca88ae8e91cccf44b808bb572e911aad5560b50809329eda34e0c2->leave($__internal_89df734cccca88ae8e91cccf44b808bb572e911aad5560b50809329eda34e0c2_prof);

        
        $__internal_6c924458e3e9b92d05830a560eb043167627bbd07fb16b466d7818a209093c15->leave($__internal_6c924458e3e9b92d05830a560eb043167627bbd07fb16b466d7818a209093c15_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6afa4fc8b23edfe5b4e4586e8c99bb9cd390bd953079ccdf7cc833a0485f7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6afa4fc8b23edfe5b4e4586e8c99bb9cd390bd953079ccdf7cc833a0485f7e8->enter($__internal_b6afa4fc8b23edfe5b4e4586e8c99bb9cd390bd953079ccdf7cc833a0485f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a7073f8e780d0b0ed9c785819729a90ed08b34434eaab5a32a516351b59c5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7073f8e780d0b0ed9c785819729a90ed08b34434eaab5a32a516351b59c5ab->enter($__internal_0a7073f8e780d0b0ed9c785819729a90ed08b34434eaab5a32a516351b59c5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_0a7073f8e780d0b0ed9c785819729a90ed08b34434eaab5a32a516351b59c5ab->leave($__internal_0a7073f8e780d0b0ed9c785819729a90ed08b34434eaab5a32a516351b59c5ab_prof);

        
        $__internal_b6afa4fc8b23edfe5b4e4586e8c99bb9cd390bd953079ccdf7cc833a0485f7e8->leave($__internal_b6afa4fc8b23edfe5b4e4586e8c99bb9cd390bd953079ccdf7cc833a0485f7e8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d00155754ebc70b3ae5be986989db3f6fb218053d08b7830ef46249a104ebef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d00155754ebc70b3ae5be986989db3f6fb218053d08b7830ef46249a104ebef->enter($__internal_6d00155754ebc70b3ae5be986989db3f6fb218053d08b7830ef46249a104ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2a7d4389e680c280d86b821957c13235b499b7dac3ea579b9afea0faf423e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a7d4389e680c280d86b821957c13235b499b7dac3ea579b9afea0faf423e86->enter($__internal_f2a7d4389e680c280d86b821957c13235b499b7dac3ea579b9afea0faf423e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_f2a7d4389e680c280d86b821957c13235b499b7dac3ea579b9afea0faf423e86->leave($__internal_f2a7d4389e680c280d86b821957c13235b499b7dac3ea579b9afea0faf423e86_prof);

        
        $__internal_6d00155754ebc70b3ae5be986989db3f6fb218053d08b7830ef46249a104ebef->leave($__internal_6d00155754ebc70b3ae5be986989db3f6fb218053d08b7830ef46249a104ebef_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12aba22d5bae7560e4c1a8e0d3154d46cd0bd96e11fb6c3293f926008159b051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aba22d5bae7560e4c1a8e0d3154d46cd0bd96e11fb6c3293f926008159b051->enter($__internal_12aba22d5bae7560e4c1a8e0d3154d46cd0bd96e11fb6c3293f926008159b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_331129c4a7a8f79c473b5c9b0d4b512ef028f7c8c92e9a7c662ca023c1c41fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331129c4a7a8f79c473b5c9b0d4b512ef028f7c8c92e9a7c662ca023c1c41fb7->enter($__internal_331129c4a7a8f79c473b5c9b0d4b512ef028f7c8c92e9a7c662ca023c1c41fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_331129c4a7a8f79c473b5c9b0d4b512ef028f7c8c92e9a7c662ca023c1c41fb7->leave($__internal_331129c4a7a8f79c473b5c9b0d4b512ef028f7c8c92e9a7c662ca023c1c41fb7_prof);

        
        $__internal_12aba22d5bae7560e4c1a8e0d3154d46cd0bd96e11fb6c3293f926008159b051->leave($__internal_12aba22d5bae7560e4c1a8e0d3154d46cd0bd96e11fb6c3293f926008159b051_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Console/console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "@CoreSphereConsole/Console/console.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
