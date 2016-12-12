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
        $__internal_1abacd052aace4dcf42248c887f712c6c6f19030b651056a70fd0b2bd64d6547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abacd052aace4dcf42248c887f712c6c6f19030b651056a70fd0b2bd64d6547->enter($__internal_1abacd052aace4dcf42248c887f712c6c6f19030b651056a70fd0b2bd64d6547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_258518dd43939b484ba51521fa2380150f8d2e89026f4daec30f7adede7eeea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258518dd43939b484ba51521fa2380150f8d2e89026f4daec30f7adede7eeea3->enter($__internal_258518dd43939b484ba51521fa2380150f8d2e89026f4daec30f7adede7eeea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1abacd052aace4dcf42248c887f712c6c6f19030b651056a70fd0b2bd64d6547->leave($__internal_1abacd052aace4dcf42248c887f712c6c6f19030b651056a70fd0b2bd64d6547_prof);

        
        $__internal_258518dd43939b484ba51521fa2380150f8d2e89026f4daec30f7adede7eeea3->leave($__internal_258518dd43939b484ba51521fa2380150f8d2e89026f4daec30f7adede7eeea3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29c19a11f3337b6eb09a11f0d550de1f4f32318e05e7e83db1e1f44fee225dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c19a11f3337b6eb09a11f0d550de1f4f32318e05e7e83db1e1f44fee225dd8->enter($__internal_29c19a11f3337b6eb09a11f0d550de1f4f32318e05e7e83db1e1f44fee225dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3250d6f428cda318821bdbcb7e580218952ab581c90fcce7ec84d21a6e2efcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3250d6f428cda318821bdbcb7e580218952ab581c90fcce7ec84d21a6e2efcb->enter($__internal_f3250d6f428cda318821bdbcb7e580218952ab581c90fcce7ec84d21a6e2efcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_f3250d6f428cda318821bdbcb7e580218952ab581c90fcce7ec84d21a6e2efcb->leave($__internal_f3250d6f428cda318821bdbcb7e580218952ab581c90fcce7ec84d21a6e2efcb_prof);

        
        $__internal_29c19a11f3337b6eb09a11f0d550de1f4f32318e05e7e83db1e1f44fee225dd8->leave($__internal_29c19a11f3337b6eb09a11f0d550de1f4f32318e05e7e83db1e1f44fee225dd8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8316a5d680974a09e185a830a86836a796948e15bba7f4bd2449d9ee6188b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8316a5d680974a09e185a830a86836a796948e15bba7f4bd2449d9ee6188b31->enter($__internal_f8316a5d680974a09e185a830a86836a796948e15bba7f4bd2449d9ee6188b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75da26050996df5df6dd30eb863aab18336a5c73406be09ef9cee7f2420ad8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75da26050996df5df6dd30eb863aab18336a5c73406be09ef9cee7f2420ad8f0->enter($__internal_75da26050996df5df6dd30eb863aab18336a5c73406be09ef9cee7f2420ad8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_75da26050996df5df6dd30eb863aab18336a5c73406be09ef9cee7f2420ad8f0->leave($__internal_75da26050996df5df6dd30eb863aab18336a5c73406be09ef9cee7f2420ad8f0_prof);

        
        $__internal_f8316a5d680974a09e185a830a86836a796948e15bba7f4bd2449d9ee6188b31->leave($__internal_f8316a5d680974a09e185a830a86836a796948e15bba7f4bd2449d9ee6188b31_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa049a4ff4b99b907bc840aa4763d9792e1107cce55d15fb3dc4761e22255114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa049a4ff4b99b907bc840aa4763d9792e1107cce55d15fb3dc4761e22255114->enter($__internal_aa049a4ff4b99b907bc840aa4763d9792e1107cce55d15fb3dc4761e22255114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6fd6d87393a183f2185b43013e9e7a8c38db78e4354979dbc157199b5be73d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fd6d87393a183f2185b43013e9e7a8c38db78e4354979dbc157199b5be73d1->enter($__internal_a6fd6d87393a183f2185b43013e9e7a8c38db78e4354979dbc157199b5be73d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_a6fd6d87393a183f2185b43013e9e7a8c38db78e4354979dbc157199b5be73d1->leave($__internal_a6fd6d87393a183f2185b43013e9e7a8c38db78e4354979dbc157199b5be73d1_prof);

        
        $__internal_aa049a4ff4b99b907bc840aa4763d9792e1107cce55d15fb3dc4761e22255114->leave($__internal_aa049a4ff4b99b907bc840aa4763d9792e1107cce55d15fb3dc4761e22255114_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e7bb6de3c17746dfe5e0ae1c1f96ba6f30421572deab1ef92407aaffcd4ffc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7bb6de3c17746dfe5e0ae1c1f96ba6f30421572deab1ef92407aaffcd4ffc7->enter($__internal_8e7bb6de3c17746dfe5e0ae1c1f96ba6f30421572deab1ef92407aaffcd4ffc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_05ad807dc07d9455365df8cd1bb06ac40591e3edad2eb6bdda1f4307d4718e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ad807dc07d9455365df8cd1bb06ac40591e3edad2eb6bdda1f4307d4718e3d->enter($__internal_05ad807dc07d9455365df8cd1bb06ac40591e3edad2eb6bdda1f4307d4718e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_05ad807dc07d9455365df8cd1bb06ac40591e3edad2eb6bdda1f4307d4718e3d->leave($__internal_05ad807dc07d9455365df8cd1bb06ac40591e3edad2eb6bdda1f4307d4718e3d_prof);

        
        $__internal_8e7bb6de3c17746dfe5e0ae1c1f96ba6f30421572deab1ef92407aaffcd4ffc7->leave($__internal_8e7bb6de3c17746dfe5e0ae1c1f96ba6f30421572deab1ef92407aaffcd4ffc7_prof);

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
