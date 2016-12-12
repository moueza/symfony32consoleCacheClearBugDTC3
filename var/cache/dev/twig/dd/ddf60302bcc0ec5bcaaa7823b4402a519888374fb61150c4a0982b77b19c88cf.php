<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_ba278b4216012d7ca738497eed3d4cfc2314fd2c217ce412ef2b8fe1b45affde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fb7860b08bc112a91badca9ba3ac368d7a50ccaebfc329b15ff9b9ce71c0c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb7860b08bc112a91badca9ba3ac368d7a50ccaebfc329b15ff9b9ce71c0c3b->enter($__internal_9fb7860b08bc112a91badca9ba3ac368d7a50ccaebfc329b15ff9b9ce71c0c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_0a6b5bdcd6337db5ea118a410c7f70abfcc64210017dd5f2beaf1ff33f308392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6b5bdcd6337db5ea118a410c7f70abfcc64210017dd5f2beaf1ff33f308392->enter($__internal_0a6b5bdcd6337db5ea118a410c7f70abfcc64210017dd5f2beaf1ff33f308392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_9fb7860b08bc112a91badca9ba3ac368d7a50ccaebfc329b15ff9b9ce71c0c3b->leave($__internal_9fb7860b08bc112a91badca9ba3ac368d7a50ccaebfc329b15ff9b9ce71c0c3b_prof);

        
        $__internal_0a6b5bdcd6337db5ea118a410c7f70abfcc64210017dd5f2beaf1ff33f308392->leave($__internal_0a6b5bdcd6337db5ea118a410c7f70abfcc64210017dd5f2beaf1ff33f308392_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c851412945dd46d25bc593a253d608a0e1cfd24e3324d6b026843b771595f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c851412945dd46d25bc593a253d608a0e1cfd24e3324d6b026843b771595f78->enter($__internal_3c851412945dd46d25bc593a253d608a0e1cfd24e3324d6b026843b771595f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df9f68b6a11521c26de7715c8c234da98540c7a50f9b65bb35cc6aba4d2c5a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9f68b6a11521c26de7715c8c234da98540c7a50f9b65bb35cc6aba4d2c5a9a->enter($__internal_df9f68b6a11521c26de7715c8c234da98540c7a50f9b65bb35cc6aba4d2c5a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_df9f68b6a11521c26de7715c8c234da98540c7a50f9b65bb35cc6aba4d2c5a9a->leave($__internal_df9f68b6a11521c26de7715c8c234da98540c7a50f9b65bb35cc6aba4d2c5a9a_prof);

        
        $__internal_3c851412945dd46d25bc593a253d608a0e1cfd24e3324d6b026843b771595f78->leave($__internal_3c851412945dd46d25bc593a253d608a0e1cfd24e3324d6b026843b771595f78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3c734dc6565e87a15b7b09ba59a71423eec764536df76ed955df5d3552858f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c734dc6565e87a15b7b09ba59a71423eec764536df76ed955df5d3552858f3->enter($__internal_f3c734dc6565e87a15b7b09ba59a71423eec764536df76ed955df5d3552858f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f852cac2e39962c1925af45848f153a4a61b608e5c54fa3abdcd88b7788e251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f852cac2e39962c1925af45848f153a4a61b608e5c54fa3abdcd88b7788e251->enter($__internal_1f852cac2e39962c1925af45848f153a4a61b608e5c54fa3abdcd88b7788e251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_1f852cac2e39962c1925af45848f153a4a61b608e5c54fa3abdcd88b7788e251->leave($__internal_1f852cac2e39962c1925af45848f153a4a61b608e5c54fa3abdcd88b7788e251_prof);

        
        $__internal_f3c734dc6565e87a15b7b09ba59a71423eec764536df76ed955df5d3552858f3->leave($__internal_f3c734dc6565e87a15b7b09ba59a71423eec764536df76ed955df5d3552858f3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4418050e5f437c106141b9e0b8b85fcb6f5b56a5c94a90d09b7c2ee9fc55c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4418050e5f437c106141b9e0b8b85fcb6f5b56a5c94a90d09b7c2ee9fc55c6->enter($__internal_5a4418050e5f437c106141b9e0b8b85fcb6f5b56a5c94a90d09b7c2ee9fc55c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca014b53e7fe3439fc61a90895165729266448a6aa7ec26765144d8c5698e6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca014b53e7fe3439fc61a90895165729266448a6aa7ec26765144d8c5698e6ae->enter($__internal_ca014b53e7fe3439fc61a90895165729266448a6aa7ec26765144d8c5698e6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_ca014b53e7fe3439fc61a90895165729266448a6aa7ec26765144d8c5698e6ae->leave($__internal_ca014b53e7fe3439fc61a90895165729266448a6aa7ec26765144d8c5698e6ae_prof);

        
        $__internal_5a4418050e5f437c106141b9e0b8b85fcb6f5b56a5c94a90d09b7c2ee9fc55c6->leave($__internal_5a4418050e5f437c106141b9e0b8b85fcb6f5b56a5c94a90d09b7c2ee9fc55c6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f758c95dd6b0d5e3707e279e6690ce90a40957d6472a76b1a943a4ef808d8232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f758c95dd6b0d5e3707e279e6690ce90a40957d6472a76b1a943a4ef808d8232->enter($__internal_f758c95dd6b0d5e3707e279e6690ce90a40957d6472a76b1a943a4ef808d8232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1293d1ecea6b316a5fc07ef8c3737918d3693d3d203815753c51ef717bdc3763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1293d1ecea6b316a5fc07ef8c3737918d3693d3d203815753c51ef717bdc3763->enter($__internal_1293d1ecea6b316a5fc07ef8c3737918d3693d3d203815753c51ef717bdc3763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_1293d1ecea6b316a5fc07ef8c3737918d3693d3d203815753c51ef717bdc3763->leave($__internal_1293d1ecea6b316a5fc07ef8c3737918d3693d3d203815753c51ef717bdc3763_prof);

        
        $__internal_f758c95dd6b0d5e3707e279e6690ce90a40957d6472a76b1a943a4ef808d8232->leave($__internal_f758c95dd6b0d5e3707e279e6690ce90a40957d6472a76b1a943a4ef808d8232_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
