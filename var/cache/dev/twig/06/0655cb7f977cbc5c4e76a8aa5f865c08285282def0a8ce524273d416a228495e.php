<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_6f244ee1ce13043c5efe79664af21c875661516eebf4e48bae9a7bc76bc33a45 extends Twig_Template
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
        $__internal_3c9a9ae4bf56da8f939aac4700363c1f717a963bb527b6ab83e164c0bc8acfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9a9ae4bf56da8f939aac4700363c1f717a963bb527b6ab83e164c0bc8acfa5->enter($__internal_3c9a9ae4bf56da8f939aac4700363c1f717a963bb527b6ab83e164c0bc8acfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_76f9c6b3db919fc80dbaf8f27a9be5f69d772c2744e9349e8fee42b4facac2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f9c6b3db919fc80dbaf8f27a9be5f69d772c2744e9349e8fee42b4facac2b2->enter($__internal_76f9c6b3db919fc80dbaf8f27a9be5f69d772c2744e9349e8fee42b4facac2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9a9ae4bf56da8f939aac4700363c1f717a963bb527b6ab83e164c0bc8acfa5->leave($__internal_3c9a9ae4bf56da8f939aac4700363c1f717a963bb527b6ab83e164c0bc8acfa5_prof);

        
        $__internal_76f9c6b3db919fc80dbaf8f27a9be5f69d772c2744e9349e8fee42b4facac2b2->leave($__internal_76f9c6b3db919fc80dbaf8f27a9be5f69d772c2744e9349e8fee42b4facac2b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e1e2b4ae22d383188daa1484f287d4fe8fc41899f69b4951f48bad1c8aa4f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1e2b4ae22d383188daa1484f287d4fe8fc41899f69b4951f48bad1c8aa4f6c->enter($__internal_5e1e2b4ae22d383188daa1484f287d4fe8fc41899f69b4951f48bad1c8aa4f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d758a5c9e72affb657251a91980965a53427274e291e66e56f26a70f31693d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d758a5c9e72affb657251a91980965a53427274e291e66e56f26a70f31693d45->enter($__internal_d758a5c9e72affb657251a91980965a53427274e291e66e56f26a70f31693d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_d758a5c9e72affb657251a91980965a53427274e291e66e56f26a70f31693d45->leave($__internal_d758a5c9e72affb657251a91980965a53427274e291e66e56f26a70f31693d45_prof);

        
        $__internal_5e1e2b4ae22d383188daa1484f287d4fe8fc41899f69b4951f48bad1c8aa4f6c->leave($__internal_5e1e2b4ae22d383188daa1484f287d4fe8fc41899f69b4951f48bad1c8aa4f6c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4010226752ae2b48c77cddc32a7e6121f4c22af2227656724e4bd255b3b3206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4010226752ae2b48c77cddc32a7e6121f4c22af2227656724e4bd255b3b3206->enter($__internal_b4010226752ae2b48c77cddc32a7e6121f4c22af2227656724e4bd255b3b3206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c7bc9c7c5e240c017e2413f8067c28fff2cbb8b78fc2a78b9739c31da94b186a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bc9c7c5e240c017e2413f8067c28fff2cbb8b78fc2a78b9739c31da94b186a->enter($__internal_c7bc9c7c5e240c017e2413f8067c28fff2cbb8b78fc2a78b9739c31da94b186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_c7bc9c7c5e240c017e2413f8067c28fff2cbb8b78fc2a78b9739c31da94b186a->leave($__internal_c7bc9c7c5e240c017e2413f8067c28fff2cbb8b78fc2a78b9739c31da94b186a_prof);

        
        $__internal_b4010226752ae2b48c77cddc32a7e6121f4c22af2227656724e4bd255b3b3206->leave($__internal_b4010226752ae2b48c77cddc32a7e6121f4c22af2227656724e4bd255b3b3206_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8935598189d2d0872a63272209623c9ca5579a425c0d25d8a92bf26412ef1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8935598189d2d0872a63272209623c9ca5579a425c0d25d8a92bf26412ef1f8->enter($__internal_a8935598189d2d0872a63272209623c9ca5579a425c0d25d8a92bf26412ef1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffbffd33528aa763ec7e19a7400df772f78ed9229b0a04500f9f854c2763f602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbffd33528aa763ec7e19a7400df772f78ed9229b0a04500f9f854c2763f602->enter($__internal_ffbffd33528aa763ec7e19a7400df772f78ed9229b0a04500f9f854c2763f602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_ffbffd33528aa763ec7e19a7400df772f78ed9229b0a04500f9f854c2763f602->leave($__internal_ffbffd33528aa763ec7e19a7400df772f78ed9229b0a04500f9f854c2763f602_prof);

        
        $__internal_a8935598189d2d0872a63272209623c9ca5579a425c0d25d8a92bf26412ef1f8->leave($__internal_a8935598189d2d0872a63272209623c9ca5579a425c0d25d8a92bf26412ef1f8_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c08b8c25bd3a416272017579b2bbe4cf2dd51eee9ff776967284b03a56fcc063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08b8c25bd3a416272017579b2bbe4cf2dd51eee9ff776967284b03a56fcc063->enter($__internal_c08b8c25bd3a416272017579b2bbe4cf2dd51eee9ff776967284b03a56fcc063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9898853bc9bb967fde2aaaf826f405ec1a3e99711d7ddf6af801e685d1b2efe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9898853bc9bb967fde2aaaf826f405ec1a3e99711d7ddf6af801e685d1b2efe7->enter($__internal_9898853bc9bb967fde2aaaf826f405ec1a3e99711d7ddf6af801e685d1b2efe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9898853bc9bb967fde2aaaf826f405ec1a3e99711d7ddf6af801e685d1b2efe7->leave($__internal_9898853bc9bb967fde2aaaf826f405ec1a3e99711d7ddf6af801e685d1b2efe7_prof);

        
        $__internal_c08b8c25bd3a416272017579b2bbe4cf2dd51eee9ff776967284b03a56fcc063->leave($__internal_c08b8c25bd3a416272017579b2bbe4cf2dd51eee9ff776967284b03a56fcc063_prof);

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
", "CoreSphereConsoleBundle:Console:console.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
