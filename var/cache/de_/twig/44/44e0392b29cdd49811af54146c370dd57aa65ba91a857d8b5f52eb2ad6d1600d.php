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
        $__internal_0984f0695fb8bdbcfeac279112ce32074de4b9af68f2b26ff8c6fdd474493176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0984f0695fb8bdbcfeac279112ce32074de4b9af68f2b26ff8c6fdd474493176->enter($__internal_0984f0695fb8bdbcfeac279112ce32074de4b9af68f2b26ff8c6fdd474493176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $__internal_86a2b10e67137a774fcdbe8ef90520b681ebf92f3dde6db322d4f59951fe220f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a2b10e67137a774fcdbe8ef90520b681ebf92f3dde6db322d4f59951fe220f->enter($__internal_86a2b10e67137a774fcdbe8ef90520b681ebf92f3dde6db322d4f59951fe220f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Console/console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0984f0695fb8bdbcfeac279112ce32074de4b9af68f2b26ff8c6fdd474493176->leave($__internal_0984f0695fb8bdbcfeac279112ce32074de4b9af68f2b26ff8c6fdd474493176_prof);

        
        $__internal_86a2b10e67137a774fcdbe8ef90520b681ebf92f3dde6db322d4f59951fe220f->leave($__internal_86a2b10e67137a774fcdbe8ef90520b681ebf92f3dde6db322d4f59951fe220f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15a8df5bf8dcf7a26a2f6bcb535535326b7655c933a295453266f5b589224d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a8df5bf8dcf7a26a2f6bcb535535326b7655c933a295453266f5b589224d53->enter($__internal_15a8df5bf8dcf7a26a2f6bcb535535326b7655c933a295453266f5b589224d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5419516556f43d84c5bf19186cee972f1618bc277e778855354ef6a01fb0b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5419516556f43d84c5bf19186cee972f1618bc277e778855354ef6a01fb0b25->enter($__internal_e5419516556f43d84c5bf19186cee972f1618bc277e778855354ef6a01fb0b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_e5419516556f43d84c5bf19186cee972f1618bc277e778855354ef6a01fb0b25->leave($__internal_e5419516556f43d84c5bf19186cee972f1618bc277e778855354ef6a01fb0b25_prof);

        
        $__internal_15a8df5bf8dcf7a26a2f6bcb535535326b7655c933a295453266f5b589224d53->leave($__internal_15a8df5bf8dcf7a26a2f6bcb535535326b7655c933a295453266f5b589224d53_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dfd32230e0bbaf8b99b40954135d9c28844942cfd953167f15c51c736904a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dfd32230e0bbaf8b99b40954135d9c28844942cfd953167f15c51c736904a4d->enter($__internal_9dfd32230e0bbaf8b99b40954135d9c28844942cfd953167f15c51c736904a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a5de5cb76d0b9a59f20cc4385304987b010a3dd65dda9d8cedc811b966d56d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5de5cb76d0b9a59f20cc4385304987b010a3dd65dda9d8cedc811b966d56d1b->enter($__internal_a5de5cb76d0b9a59f20cc4385304987b010a3dd65dda9d8cedc811b966d56d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_a5de5cb76d0b9a59f20cc4385304987b010a3dd65dda9d8cedc811b966d56d1b->leave($__internal_a5de5cb76d0b9a59f20cc4385304987b010a3dd65dda9d8cedc811b966d56d1b_prof);

        
        $__internal_9dfd32230e0bbaf8b99b40954135d9c28844942cfd953167f15c51c736904a4d->leave($__internal_9dfd32230e0bbaf8b99b40954135d9c28844942cfd953167f15c51c736904a4d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_687cb401d03f4926c72ba225d051c88b66eba40be6c3e8ac785e0f2c372909d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687cb401d03f4926c72ba225d051c88b66eba40be6c3e8ac785e0f2c372909d2->enter($__internal_687cb401d03f4926c72ba225d051c88b66eba40be6c3e8ac785e0f2c372909d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c6d40c3b5ff3d6a909866c441f11af18b94ce34100ea8e3d2947e9d2aa4fa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6d40c3b5ff3d6a909866c441f11af18b94ce34100ea8e3d2947e9d2aa4fa09->enter($__internal_2c6d40c3b5ff3d6a909866c441f11af18b94ce34100ea8e3d2947e9d2aa4fa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "@CoreSphereConsole/Console/console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "@CoreSphereConsole/Console/console.html.twig", 12)->display($context);
        
        $__internal_2c6d40c3b5ff3d6a909866c441f11af18b94ce34100ea8e3d2947e9d2aa4fa09->leave($__internal_2c6d40c3b5ff3d6a909866c441f11af18b94ce34100ea8e3d2947e9d2aa4fa09_prof);

        
        $__internal_687cb401d03f4926c72ba225d051c88b66eba40be6c3e8ac785e0f2c372909d2->leave($__internal_687cb401d03f4926c72ba225d051c88b66eba40be6c3e8ac785e0f2c372909d2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08d9558582bfa3b552be7c58541cf0cfcf5980a0e9f9f1b21db08633d0ee8f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d9558582bfa3b552be7c58541cf0cfcf5980a0e9f9f1b21db08633d0ee8f6b->enter($__internal_08d9558582bfa3b552be7c58541cf0cfcf5980a0e9f9f1b21db08633d0ee8f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dda56c616e25465937b146aff55cba4b463292bba0bc57eefd2c7ad72f632a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda56c616e25465937b146aff55cba4b463292bba0bc57eefd2c7ad72f632a64->enter($__internal_dda56c616e25465937b146aff55cba4b463292bba0bc57eefd2c7ad72f632a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dda56c616e25465937b146aff55cba4b463292bba0bc57eefd2c7ad72f632a64->leave($__internal_dda56c616e25465937b146aff55cba4b463292bba0bc57eefd2c7ad72f632a64_prof);

        
        $__internal_08d9558582bfa3b552be7c58541cf0cfcf5980a0e9f9f1b21db08633d0ee8f6b->leave($__internal_08d9558582bfa3b552be7c58541cf0cfcf5980a0e9f9f1b21db08633d0ee8f6b_prof);

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
