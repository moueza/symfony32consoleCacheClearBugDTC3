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
        $__internal_dc55f57876c883ab931c81a7267d04fec453f6f4dd024cb3256e782b5aeb975f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc55f57876c883ab931c81a7267d04fec453f6f4dd024cb3256e782b5aeb975f->enter($__internal_dc55f57876c883ab931c81a7267d04fec453f6f4dd024cb3256e782b5aeb975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_2b948d86686b87fcf11442f40e347f6e78dd1d37e119d5c42a99093718d67331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b948d86686b87fcf11442f40e347f6e78dd1d37e119d5c42a99093718d67331->enter($__internal_2b948d86686b87fcf11442f40e347f6e78dd1d37e119d5c42a99093718d67331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc55f57876c883ab931c81a7267d04fec453f6f4dd024cb3256e782b5aeb975f->leave($__internal_dc55f57876c883ab931c81a7267d04fec453f6f4dd024cb3256e782b5aeb975f_prof);

        
        $__internal_2b948d86686b87fcf11442f40e347f6e78dd1d37e119d5c42a99093718d67331->leave($__internal_2b948d86686b87fcf11442f40e347f6e78dd1d37e119d5c42a99093718d67331_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c903484f356109c1eb47cf5c09fd38f93b8e2d70db877646bb414ce595b6afc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c903484f356109c1eb47cf5c09fd38f93b8e2d70db877646bb414ce595b6afc6->enter($__internal_c903484f356109c1eb47cf5c09fd38f93b8e2d70db877646bb414ce595b6afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6108e40aed8414ae26d540819ccea4c4835c7d0d6795012663fca1b8e04fb6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6108e40aed8414ae26d540819ccea4c4835c7d0d6795012663fca1b8e04fb6ff->enter($__internal_6108e40aed8414ae26d540819ccea4c4835c7d0d6795012663fca1b8e04fb6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_6108e40aed8414ae26d540819ccea4c4835c7d0d6795012663fca1b8e04fb6ff->leave($__internal_6108e40aed8414ae26d540819ccea4c4835c7d0d6795012663fca1b8e04fb6ff_prof);

        
        $__internal_c903484f356109c1eb47cf5c09fd38f93b8e2d70db877646bb414ce595b6afc6->leave($__internal_c903484f356109c1eb47cf5c09fd38f93b8e2d70db877646bb414ce595b6afc6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d35456625ae6685d6b9c8cd83f78f4a709fdb610e04a8f31b6e2467bc24e2089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35456625ae6685d6b9c8cd83f78f4a709fdb610e04a8f31b6e2467bc24e2089->enter($__internal_d35456625ae6685d6b9c8cd83f78f4a709fdb610e04a8f31b6e2467bc24e2089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7b142c495c45b4058e868c5f42d952de06d7ba1aa55468a53360597cd39eba46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b142c495c45b4058e868c5f42d952de06d7ba1aa55468a53360597cd39eba46->enter($__internal_7b142c495c45b4058e868c5f42d952de06d7ba1aa55468a53360597cd39eba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7b142c495c45b4058e868c5f42d952de06d7ba1aa55468a53360597cd39eba46->leave($__internal_7b142c495c45b4058e868c5f42d952de06d7ba1aa55468a53360597cd39eba46_prof);

        
        $__internal_d35456625ae6685d6b9c8cd83f78f4a709fdb610e04a8f31b6e2467bc24e2089->leave($__internal_d35456625ae6685d6b9c8cd83f78f4a709fdb610e04a8f31b6e2467bc24e2089_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a9cda68266f932013cc53bc3e28de8999788b1b7d9d7633edb7f1f138966375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9cda68266f932013cc53bc3e28de8999788b1b7d9d7633edb7f1f138966375->enter($__internal_1a9cda68266f932013cc53bc3e28de8999788b1b7d9d7633edb7f1f138966375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4e8cce7ceeb440084ecea6ef8f6ea87497177ffc5280908d237dd37b7294344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e8cce7ceeb440084ecea6ef8f6ea87497177ffc5280908d237dd37b7294344->enter($__internal_e4e8cce7ceeb440084ecea6ef8f6ea87497177ffc5280908d237dd37b7294344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_e4e8cce7ceeb440084ecea6ef8f6ea87497177ffc5280908d237dd37b7294344->leave($__internal_e4e8cce7ceeb440084ecea6ef8f6ea87497177ffc5280908d237dd37b7294344_prof);

        
        $__internal_1a9cda68266f932013cc53bc3e28de8999788b1b7d9d7633edb7f1f138966375->leave($__internal_1a9cda68266f932013cc53bc3e28de8999788b1b7d9d7633edb7f1f138966375_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5ba7d42f948b7ac8e031098adfa39133c1935415464a882617c4d29d5dbdae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ba7d42f948b7ac8e031098adfa39133c1935415464a882617c4d29d5dbdae6->enter($__internal_e5ba7d42f948b7ac8e031098adfa39133c1935415464a882617c4d29d5dbdae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_580805e8f02d45469958a241e78e84326d4beb0cc7b70f7731bc367855effa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580805e8f02d45469958a241e78e84326d4beb0cc7b70f7731bc367855effa7b->enter($__internal_580805e8f02d45469958a241e78e84326d4beb0cc7b70f7731bc367855effa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_580805e8f02d45469958a241e78e84326d4beb0cc7b70f7731bc367855effa7b->leave($__internal_580805e8f02d45469958a241e78e84326d4beb0cc7b70f7731bc367855effa7b_prof);

        
        $__internal_e5ba7d42f948b7ac8e031098adfa39133c1935415464a882617c4d29d5dbdae6->leave($__internal_e5ba7d42f948b7ac8e031098adfa39133c1935415464a882617c4d29d5dbdae6_prof);

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
