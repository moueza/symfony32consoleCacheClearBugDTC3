<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_50333fa2fe930178b2ad0eea0ad69a7cc10f32105ca7478dbbd7009c9149de15 extends Twig_Template
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
        $__internal_c10216c3c83bf859e75869bf55db2708552453f50947a6a8cd675789bc421975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10216c3c83bf859e75869bf55db2708552453f50947a6a8cd675789bc421975->enter($__internal_c10216c3c83bf859e75869bf55db2708552453f50947a6a8cd675789bc421975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_f314e4aef16791bee23fd78b4d1cc9c5d3f810488289a8be04ad0741394905af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f314e4aef16791bee23fd78b4d1cc9c5d3f810488289a8be04ad0741394905af->enter($__internal_f314e4aef16791bee23fd78b4d1cc9c5d3f810488289a8be04ad0741394905af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_c10216c3c83bf859e75869bf55db2708552453f50947a6a8cd675789bc421975->leave($__internal_c10216c3c83bf859e75869bf55db2708552453f50947a6a8cd675789bc421975_prof);

        
        $__internal_f314e4aef16791bee23fd78b4d1cc9c5d3f810488289a8be04ad0741394905af->leave($__internal_f314e4aef16791bee23fd78b4d1cc9c5d3f810488289a8be04ad0741394905af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c9010117a908de52cbcc0b3fd64500ce4e5b61336b4ae196238699f68609d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9010117a908de52cbcc0b3fd64500ce4e5b61336b4ae196238699f68609d2b->enter($__internal_7c9010117a908de52cbcc0b3fd64500ce4e5b61336b4ae196238699f68609d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_778382701c23d66692d196fc310a1b364befb9f7559a77030cdaad1ac7659a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778382701c23d66692d196fc310a1b364befb9f7559a77030cdaad1ac7659a0f->enter($__internal_778382701c23d66692d196fc310a1b364befb9f7559a77030cdaad1ac7659a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_778382701c23d66692d196fc310a1b364befb9f7559a77030cdaad1ac7659a0f->leave($__internal_778382701c23d66692d196fc310a1b364befb9f7559a77030cdaad1ac7659a0f_prof);

        
        $__internal_7c9010117a908de52cbcc0b3fd64500ce4e5b61336b4ae196238699f68609d2b->leave($__internal_7c9010117a908de52cbcc0b3fd64500ce4e5b61336b4ae196238699f68609d2b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_613d4899ed6398ea8cfd7510f621491450904f856e6589de7296f7994fc6e98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613d4899ed6398ea8cfd7510f621491450904f856e6589de7296f7994fc6e98f->enter($__internal_613d4899ed6398ea8cfd7510f621491450904f856e6589de7296f7994fc6e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97c370fb74f61bc744b6a8850158bc36eb335c8667cc53919977c064475b1e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c370fb74f61bc744b6a8850158bc36eb335c8667cc53919977c064475b1e39->enter($__internal_97c370fb74f61bc744b6a8850158bc36eb335c8667cc53919977c064475b1e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_97c370fb74f61bc744b6a8850158bc36eb335c8667cc53919977c064475b1e39->leave($__internal_97c370fb74f61bc744b6a8850158bc36eb335c8667cc53919977c064475b1e39_prof);

        
        $__internal_613d4899ed6398ea8cfd7510f621491450904f856e6589de7296f7994fc6e98f->leave($__internal_613d4899ed6398ea8cfd7510f621491450904f856e6589de7296f7994fc6e98f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_38cb591fd6c2de2828652397fa2c3f4717d743426937238f001f7f52be0b7516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cb591fd6c2de2828652397fa2c3f4717d743426937238f001f7f52be0b7516->enter($__internal_38cb591fd6c2de2828652397fa2c3f4717d743426937238f001f7f52be0b7516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73d3f43787bf0885c6bed259652303c9f97b576718b17ad764ba79527ca1666a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d3f43787bf0885c6bed259652303c9f97b576718b17ad764ba79527ca1666a->enter($__internal_73d3f43787bf0885c6bed259652303c9f97b576718b17ad764ba79527ca1666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_73d3f43787bf0885c6bed259652303c9f97b576718b17ad764ba79527ca1666a->leave($__internal_73d3f43787bf0885c6bed259652303c9f97b576718b17ad764ba79527ca1666a_prof);

        
        $__internal_38cb591fd6c2de2828652397fa2c3f4717d743426937238f001f7f52be0b7516->leave($__internal_38cb591fd6c2de2828652397fa2c3f4717d743426937238f001f7f52be0b7516_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_660f8987eaaaf2be9796bcc35442e4bc09adb5c9ab2e28d43e9f3ad2721700f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660f8987eaaaf2be9796bcc35442e4bc09adb5c9ab2e28d43e9f3ad2721700f3->enter($__internal_660f8987eaaaf2be9796bcc35442e4bc09adb5c9ab2e28d43e9f3ad2721700f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8da9a0bc04f3ddd7f3986bc4f949c03ed46c6abdd76ab6d950199e394afadf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8da9a0bc04f3ddd7f3986bc4f949c03ed46c6abdd76ab6d950199e394afadf1->enter($__internal_e8da9a0bc04f3ddd7f3986bc4f949c03ed46c6abdd76ab6d950199e394afadf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8da9a0bc04f3ddd7f3986bc4f949c03ed46c6abdd76ab6d950199e394afadf1->leave($__internal_e8da9a0bc04f3ddd7f3986bc4f949c03ed46c6abdd76ab6d950199e394afadf1_prof);

        
        $__internal_660f8987eaaaf2be9796bcc35442e4bc09adb5c9ab2e28d43e9f3ad2721700f3->leave($__internal_660f8987eaaaf2be9796bcc35442e4bc09adb5c9ab2e28d43e9f3ad2721700f3_prof);

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
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/var/cache/dev/../../../vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
