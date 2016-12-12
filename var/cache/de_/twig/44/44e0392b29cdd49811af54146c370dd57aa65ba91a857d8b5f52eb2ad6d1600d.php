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
        $__internal_95f4e3b3d44ab1181728f29e11a197c9deb493d29e0d47a8d7270440fddfe520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f4e3b3d44ab1181728f29e11a197c9deb493d29e0d47a8d7270440fddfe520->enter($__internal_95f4e3b3d44ab1181728f29e11a197c9deb493d29e0d47a8d7270440fddfe520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_1b5f0a84c67dc11a6e45e68f57b100d86888a9cff6bd84dd56c02325edb32506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5f0a84c67dc11a6e45e68f57b100d86888a9cff6bd84dd56c02325edb32506->enter($__internal_1b5f0a84c67dc11a6e45e68f57b100d86888a9cff6bd84dd56c02325edb32506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f4e3b3d44ab1181728f29e11a197c9deb493d29e0d47a8d7270440fddfe520->leave($__internal_95f4e3b3d44ab1181728f29e11a197c9deb493d29e0d47a8d7270440fddfe520_prof);

        
        $__internal_1b5f0a84c67dc11a6e45e68f57b100d86888a9cff6bd84dd56c02325edb32506->leave($__internal_1b5f0a84c67dc11a6e45e68f57b100d86888a9cff6bd84dd56c02325edb32506_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f78fd3dd7731956788863f9b8cb1c1ab359a710e980830b255292bc626a6354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f78fd3dd7731956788863f9b8cb1c1ab359a710e980830b255292bc626a6354->enter($__internal_5f78fd3dd7731956788863f9b8cb1c1ab359a710e980830b255292bc626a6354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1434047e8ba4ba01d652d4e8b8821ccca778aa5aa66740f52aac9e5385f09bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1434047e8ba4ba01d652d4e8b8821ccca778aa5aa66740f52aac9e5385f09bb->enter($__internal_c1434047e8ba4ba01d652d4e8b8821ccca778aa5aa66740f52aac9e5385f09bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_c1434047e8ba4ba01d652d4e8b8821ccca778aa5aa66740f52aac9e5385f09bb->leave($__internal_c1434047e8ba4ba01d652d4e8b8821ccca778aa5aa66740f52aac9e5385f09bb_prof);

        
        $__internal_5f78fd3dd7731956788863f9b8cb1c1ab359a710e980830b255292bc626a6354->leave($__internal_5f78fd3dd7731956788863f9b8cb1c1ab359a710e980830b255292bc626a6354_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97dc0b581f98f336caa825ee8b272211b25d7cabb0cd3af2963902f07eedae09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dc0b581f98f336caa825ee8b272211b25d7cabb0cd3af2963902f07eedae09->enter($__internal_97dc0b581f98f336caa825ee8b272211b25d7cabb0cd3af2963902f07eedae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9cfa7369899fd7c9b2a9e3a51ac3c3919302ec165e14e5a5e4d6ef8e25f77777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfa7369899fd7c9b2a9e3a51ac3c3919302ec165e14e5a5e4d6ef8e25f77777->enter($__internal_9cfa7369899fd7c9b2a9e3a51ac3c3919302ec165e14e5a5e4d6ef8e25f77777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_9cfa7369899fd7c9b2a9e3a51ac3c3919302ec165e14e5a5e4d6ef8e25f77777->leave($__internal_9cfa7369899fd7c9b2a9e3a51ac3c3919302ec165e14e5a5e4d6ef8e25f77777_prof);

        
        $__internal_97dc0b581f98f336caa825ee8b272211b25d7cabb0cd3af2963902f07eedae09->leave($__internal_97dc0b581f98f336caa825ee8b272211b25d7cabb0cd3af2963902f07eedae09_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d178d05fe4287a36f65a29dbb2c655017285975ee6986334f253261b335648c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d178d05fe4287a36f65a29dbb2c655017285975ee6986334f253261b335648c0->enter($__internal_d178d05fe4287a36f65a29dbb2c655017285975ee6986334f253261b335648c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c781344b2e4853303ba9bff9e93a834772ce5bd86ae8eeb9558242f617c23dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c781344b2e4853303ba9bff9e93a834772ce5bd86ae8eeb9558242f617c23dc->enter($__internal_7c781344b2e4853303ba9bff9e93a834772ce5bd86ae8eeb9558242f617c23dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_7c781344b2e4853303ba9bff9e93a834772ce5bd86ae8eeb9558242f617c23dc->leave($__internal_7c781344b2e4853303ba9bff9e93a834772ce5bd86ae8eeb9558242f617c23dc_prof);

        
        $__internal_d178d05fe4287a36f65a29dbb2c655017285975ee6986334f253261b335648c0->leave($__internal_d178d05fe4287a36f65a29dbb2c655017285975ee6986334f253261b335648c0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5beef6c056f2e464fedb8047560c61f01290bea39f8039bcd46714fe7cc9751a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5beef6c056f2e464fedb8047560c61f01290bea39f8039bcd46714fe7cc9751a->enter($__internal_5beef6c056f2e464fedb8047560c61f01290bea39f8039bcd46714fe7cc9751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd0aee5794d3b10aa544f93b858e57db1d7103153e6097484338006de9e23412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0aee5794d3b10aa544f93b858e57db1d7103153e6097484338006de9e23412->enter($__internal_dd0aee5794d3b10aa544f93b858e57db1d7103153e6097484338006de9e23412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dd0aee5794d3b10aa544f93b858e57db1d7103153e6097484338006de9e23412->leave($__internal_dd0aee5794d3b10aa544f93b858e57db1d7103153e6097484338006de9e23412_prof);

        
        $__internal_5beef6c056f2e464fedb8047560c61f01290bea39f8039bcd46714fe7cc9751a->leave($__internal_5beef6c056f2e464fedb8047560c61f01290bea39f8039bcd46714fe7cc9751a_prof);

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
