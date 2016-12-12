<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_8499d02d9dd120b32c2b437788ff9fc8390a449996156c83507e1d900de30f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
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
        $__internal_16d47cd4201ed7f8e29fe98a609808a2c24bf41683ae07550eb5221c5d1b85af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d47cd4201ed7f8e29fe98a609808a2c24bf41683ae07550eb5221c5d1b85af->enter($__internal_16d47cd4201ed7f8e29fe98a609808a2c24bf41683ae07550eb5221c5d1b85af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_c8cb6826e84c4c05a3e3099c93d911f80d5d4c1dc78d0c6fb4817c5ab31f2634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cb6826e84c4c05a3e3099c93d911f80d5d4c1dc78d0c6fb4817c5ab31f2634->enter($__internal_c8cb6826e84c4c05a3e3099c93d911f80d5d4c1dc78d0c6fb4817c5ab31f2634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d47cd4201ed7f8e29fe98a609808a2c24bf41683ae07550eb5221c5d1b85af->leave($__internal_16d47cd4201ed7f8e29fe98a609808a2c24bf41683ae07550eb5221c5d1b85af_prof);

        
        $__internal_c8cb6826e84c4c05a3e3099c93d911f80d5d4c1dc78d0c6fb4817c5ab31f2634->leave($__internal_c8cb6826e84c4c05a3e3099c93d911f80d5d4c1dc78d0c6fb4817c5ab31f2634_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e50667ae653e2e11967f8621f6377911297528c7e0a6660d5cfae61df1b4b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e50667ae653e2e11967f8621f6377911297528c7e0a6660d5cfae61df1b4b14->enter($__internal_8e50667ae653e2e11967f8621f6377911297528c7e0a6660d5cfae61df1b4b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658e4cf6b809bcbfc5c9d274bf4b502b1632c297ea63a868856de3fb9a7d8441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658e4cf6b809bcbfc5c9d274bf4b502b1632c297ea63a868856de3fb9a7d8441->enter($__internal_658e4cf6b809bcbfc5c9d274bf4b502b1632c297ea63a868856de3fb9a7d8441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_658e4cf6b809bcbfc5c9d274bf4b502b1632c297ea63a868856de3fb9a7d8441->leave($__internal_658e4cf6b809bcbfc5c9d274bf4b502b1632c297ea63a868856de3fb9a7d8441_prof);

        
        $__internal_8e50667ae653e2e11967f8621f6377911297528c7e0a6660d5cfae61df1b4b14->leave($__internal_8e50667ae653e2e11967f8621f6377911297528c7e0a6660d5cfae61df1b4b14_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_befeb433af53f9e70dae18ef3a2bcc38a0e64c5e7d5e75616c47c1b13724ff72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befeb433af53f9e70dae18ef3a2bcc38a0e64c5e7d5e75616c47c1b13724ff72->enter($__internal_befeb433af53f9e70dae18ef3a2bcc38a0e64c5e7d5e75616c47c1b13724ff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d05cba7da029e76294efc2f84e735ef9ec5f9b217313e9d01c2c6f8ab7bc069c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05cba7da029e76294efc2f84e735ef9ec5f9b217313e9d01c2c6f8ab7bc069c->enter($__internal_d05cba7da029e76294efc2f84e735ef9ec5f9b217313e9d01c2c6f8ab7bc069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_d05cba7da029e76294efc2f84e735ef9ec5f9b217313e9d01c2c6f8ab7bc069c->leave($__internal_d05cba7da029e76294efc2f84e735ef9ec5f9b217313e9d01c2c6f8ab7bc069c_prof);

        
        $__internal_befeb433af53f9e70dae18ef3a2bcc38a0e64c5e7d5e75616c47c1b13724ff72->leave($__internal_befeb433af53f9e70dae18ef3a2bcc38a0e64c5e7d5e75616c47c1b13724ff72_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ded92056cfda1d36524460204210eeb18365b0377359f0a582095a6b951abe40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded92056cfda1d36524460204210eeb18365b0377359f0a582095a6b951abe40->enter($__internal_ded92056cfda1d36524460204210eeb18365b0377359f0a582095a6b951abe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7f19e4fc78e6cbe6353961c2cb35eabe4710624ce0b0def0a44ec63f2fa58df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f19e4fc78e6cbe6353961c2cb35eabe4710624ce0b0def0a44ec63f2fa58df->enter($__internal_c7f19e4fc78e6cbe6353961c2cb35eabe4710624ce0b0def0a44ec63f2fa58df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_c7f19e4fc78e6cbe6353961c2cb35eabe4710624ce0b0def0a44ec63f2fa58df->leave($__internal_c7f19e4fc78e6cbe6353961c2cb35eabe4710624ce0b0def0a44ec63f2fa58df_prof);

        
        $__internal_ded92056cfda1d36524460204210eeb18365b0377359f0a582095a6b951abe40->leave($__internal_ded92056cfda1d36524460204210eeb18365b0377359f0a582095a6b951abe40_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_469d5a33d7e10e8726983a2955ac73c87653f2ab2936135fc28b977033b16b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469d5a33d7e10e8726983a2955ac73c87653f2ab2936135fc28b977033b16b1c->enter($__internal_469d5a33d7e10e8726983a2955ac73c87653f2ab2936135fc28b977033b16b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f60be81f0602cf5792b47cf818f9106b3d53473a6cada43d1d21433a65b009e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f60be81f0602cf5792b47cf818f9106b3d53473a6cada43d1d21433a65b009e->enter($__internal_5f60be81f0602cf5792b47cf818f9106b3d53473a6cada43d1d21433a65b009e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5f60be81f0602cf5792b47cf818f9106b3d53473a6cada43d1d21433a65b009e->leave($__internal_5f60be81f0602cf5792b47cf818f9106b3d53473a6cada43d1d21433a65b009e_prof);

        
        $__internal_469d5a33d7e10e8726983a2955ac73c87653f2ab2936135fc28b977033b16b1c->leave($__internal_469d5a33d7e10e8726983a2955ac73c87653f2ab2936135fc28b977033b16b1c_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
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
", "CoreSphereConsoleBundle:Console:console.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/var/cache/dev/../../../vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
