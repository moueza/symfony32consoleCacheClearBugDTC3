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
        $__internal_694e35d5129291487bc568561cd12aa2f4c8cf373d2180c12b473b6da45a24c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694e35d5129291487bc568561cd12aa2f4c8cf373d2180c12b473b6da45a24c8->enter($__internal_694e35d5129291487bc568561cd12aa2f4c8cf373d2180c12b473b6da45a24c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_973fd68ee3d3371a45cd4948aca0f95232102d7bc52cf12261c5a5b3096a614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973fd68ee3d3371a45cd4948aca0f95232102d7bc52cf12261c5a5b3096a614e->enter($__internal_973fd68ee3d3371a45cd4948aca0f95232102d7bc52cf12261c5a5b3096a614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694e35d5129291487bc568561cd12aa2f4c8cf373d2180c12b473b6da45a24c8->leave($__internal_694e35d5129291487bc568561cd12aa2f4c8cf373d2180c12b473b6da45a24c8_prof);

        
        $__internal_973fd68ee3d3371a45cd4948aca0f95232102d7bc52cf12261c5a5b3096a614e->leave($__internal_973fd68ee3d3371a45cd4948aca0f95232102d7bc52cf12261c5a5b3096a614e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c155b74b6c0e76d8b03f9b6bffb0c3513ade2555153c8fc30b1542cb7799f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c155b74b6c0e76d8b03f9b6bffb0c3513ade2555153c8fc30b1542cb7799f46->enter($__internal_0c155b74b6c0e76d8b03f9b6bffb0c3513ade2555153c8fc30b1542cb7799f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f78ad536587ac78387a10ab4047da6dfee7f856e0f9adb4e0b019064902767b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f78ad536587ac78387a10ab4047da6dfee7f856e0f9adb4e0b019064902767b->enter($__internal_0f78ad536587ac78387a10ab4047da6dfee7f856e0f9adb4e0b019064902767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_0f78ad536587ac78387a10ab4047da6dfee7f856e0f9adb4e0b019064902767b->leave($__internal_0f78ad536587ac78387a10ab4047da6dfee7f856e0f9adb4e0b019064902767b_prof);

        
        $__internal_0c155b74b6c0e76d8b03f9b6bffb0c3513ade2555153c8fc30b1542cb7799f46->leave($__internal_0c155b74b6c0e76d8b03f9b6bffb0c3513ade2555153c8fc30b1542cb7799f46_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_608f9fc52b959aabcadc7627d0ecf260fb0bd014157ac330eadd463d26b09929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608f9fc52b959aabcadc7627d0ecf260fb0bd014157ac330eadd463d26b09929->enter($__internal_608f9fc52b959aabcadc7627d0ecf260fb0bd014157ac330eadd463d26b09929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09962ec7949b6bb7899f72fa2defc73d5f39b32a02429d622248dbea0fd6f1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09962ec7949b6bb7899f72fa2defc73d5f39b32a02429d622248dbea0fd6f1ac->enter($__internal_09962ec7949b6bb7899f72fa2defc73d5f39b32a02429d622248dbea0fd6f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_09962ec7949b6bb7899f72fa2defc73d5f39b32a02429d622248dbea0fd6f1ac->leave($__internal_09962ec7949b6bb7899f72fa2defc73d5f39b32a02429d622248dbea0fd6f1ac_prof);

        
        $__internal_608f9fc52b959aabcadc7627d0ecf260fb0bd014157ac330eadd463d26b09929->leave($__internal_608f9fc52b959aabcadc7627d0ecf260fb0bd014157ac330eadd463d26b09929_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eb23e4db7f0673c63fa8bac6ce5d9039efa47570cf1a54de37b2f2e8f853432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb23e4db7f0673c63fa8bac6ce5d9039efa47570cf1a54de37b2f2e8f853432->enter($__internal_6eb23e4db7f0673c63fa8bac6ce5d9039efa47570cf1a54de37b2f2e8f853432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9235777d90ab4f793d0b4c0392d7e77811213c5faddc7a0b22efeabffb3f4c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9235777d90ab4f793d0b4c0392d7e77811213c5faddc7a0b22efeabffb3f4c1d->enter($__internal_9235777d90ab4f793d0b4c0392d7e77811213c5faddc7a0b22efeabffb3f4c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_9235777d90ab4f793d0b4c0392d7e77811213c5faddc7a0b22efeabffb3f4c1d->leave($__internal_9235777d90ab4f793d0b4c0392d7e77811213c5faddc7a0b22efeabffb3f4c1d_prof);

        
        $__internal_6eb23e4db7f0673c63fa8bac6ce5d9039efa47570cf1a54de37b2f2e8f853432->leave($__internal_6eb23e4db7f0673c63fa8bac6ce5d9039efa47570cf1a54de37b2f2e8f853432_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b133b5b90da7b729aa3840426f195e2f8e338278624efbc75dfd12a5e3aed4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b133b5b90da7b729aa3840426f195e2f8e338278624efbc75dfd12a5e3aed4e9->enter($__internal_b133b5b90da7b729aa3840426f195e2f8e338278624efbc75dfd12a5e3aed4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb1fc212976a16a653e646796b34042457e7c9363039334a0f70d8299802f535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1fc212976a16a653e646796b34042457e7c9363039334a0f70d8299802f535->enter($__internal_bb1fc212976a16a653e646796b34042457e7c9363039334a0f70d8299802f535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bb1fc212976a16a653e646796b34042457e7c9363039334a0f70d8299802f535->leave($__internal_bb1fc212976a16a653e646796b34042457e7c9363039334a0f70d8299802f535_prof);

        
        $__internal_b133b5b90da7b729aa3840426f195e2f8e338278624efbc75dfd12a5e3aed4e9->leave($__internal_b133b5b90da7b729aa3840426f195e2f8e338278624efbc75dfd12a5e3aed4e9_prof);

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
