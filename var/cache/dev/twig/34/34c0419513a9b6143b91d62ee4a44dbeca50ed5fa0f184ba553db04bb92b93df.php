<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_8a9d0e26519fc043667e91b649520b3a3b9a0b8a28dcd997e93722e41ec8cd6d extends Twig_Template
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
        $__internal_a59c80468363a1738d4c09bf2487738832cd9cc4b10660bf8647ee544b9d9c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59c80468363a1738d4c09bf2487738832cd9cc4b10660bf8647ee544b9d9c07->enter($__internal_a59c80468363a1738d4c09bf2487738832cd9cc4b10660bf8647ee544b9d9c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_0f5e16adbcfe297619bd0355ec0c0abba9232f358cd791735b449bde66f662cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5e16adbcfe297619bd0355ec0c0abba9232f358cd791735b449bde66f662cb->enter($__internal_0f5e16adbcfe297619bd0355ec0c0abba9232f358cd791735b449bde66f662cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_a59c80468363a1738d4c09bf2487738832cd9cc4b10660bf8647ee544b9d9c07->leave($__internal_a59c80468363a1738d4c09bf2487738832cd9cc4b10660bf8647ee544b9d9c07_prof);

        
        $__internal_0f5e16adbcfe297619bd0355ec0c0abba9232f358cd791735b449bde66f662cb->leave($__internal_0f5e16adbcfe297619bd0355ec0c0abba9232f358cd791735b449bde66f662cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7198877065265e03e11ede503e4d9ba5cd3ef71cb010891a7c58313f9e0328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7198877065265e03e11ede503e4d9ba5cd3ef71cb010891a7c58313f9e0328->enter($__internal_4b7198877065265e03e11ede503e4d9ba5cd3ef71cb010891a7c58313f9e0328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8c1e7efcb699ba1b47a4b35f57f792834e3ac74cb12d6468fd5051557f6df20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c1e7efcb699ba1b47a4b35f57f792834e3ac74cb12d6468fd5051557f6df20->enter($__internal_e8c1e7efcb699ba1b47a4b35f57f792834e3ac74cb12d6468fd5051557f6df20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_e8c1e7efcb699ba1b47a4b35f57f792834e3ac74cb12d6468fd5051557f6df20->leave($__internal_e8c1e7efcb699ba1b47a4b35f57f792834e3ac74cb12d6468fd5051557f6df20_prof);

        
        $__internal_4b7198877065265e03e11ede503e4d9ba5cd3ef71cb010891a7c58313f9e0328->leave($__internal_4b7198877065265e03e11ede503e4d9ba5cd3ef71cb010891a7c58313f9e0328_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8e484e1d9b20a8b38a1fe6edd195ac70d777e2dd47306a56d4a60aec72c7683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e484e1d9b20a8b38a1fe6edd195ac70d777e2dd47306a56d4a60aec72c7683->enter($__internal_b8e484e1d9b20a8b38a1fe6edd195ac70d777e2dd47306a56d4a60aec72c7683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be7460cae7d19bb4ba25d8c658a4b07a338b49bfc7a987f590441dbfbe715adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7460cae7d19bb4ba25d8c658a4b07a338b49bfc7a987f590441dbfbe715adc->enter($__internal_be7460cae7d19bb4ba25d8c658a4b07a338b49bfc7a987f590441dbfbe715adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_be7460cae7d19bb4ba25d8c658a4b07a338b49bfc7a987f590441dbfbe715adc->leave($__internal_be7460cae7d19bb4ba25d8c658a4b07a338b49bfc7a987f590441dbfbe715adc_prof);

        
        $__internal_b8e484e1d9b20a8b38a1fe6edd195ac70d777e2dd47306a56d4a60aec72c7683->leave($__internal_b8e484e1d9b20a8b38a1fe6edd195ac70d777e2dd47306a56d4a60aec72c7683_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b0a86a35a2e73712b0d8ea195e771dfbb225d3e620767c7a1e8627b378c004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b0a86a35a2e73712b0d8ea195e771dfbb225d3e620767c7a1e8627b378c004->enter($__internal_d1b0a86a35a2e73712b0d8ea195e771dfbb225d3e620767c7a1e8627b378c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0154a89cd92deeaff468fbb5532df623252d3f1c45e107870268308d047a80f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0154a89cd92deeaff468fbb5532df623252d3f1c45e107870268308d047a80f7->enter($__internal_0154a89cd92deeaff468fbb5532df623252d3f1c45e107870268308d047a80f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_0154a89cd92deeaff468fbb5532df623252d3f1c45e107870268308d047a80f7->leave($__internal_0154a89cd92deeaff468fbb5532df623252d3f1c45e107870268308d047a80f7_prof);

        
        $__internal_d1b0a86a35a2e73712b0d8ea195e771dfbb225d3e620767c7a1e8627b378c004->leave($__internal_d1b0a86a35a2e73712b0d8ea195e771dfbb225d3e620767c7a1e8627b378c004_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_539592ac7a76640f4ffe1b1c2266fecaeec65f4d52dbf56dc52c4cf6352e82e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539592ac7a76640f4ffe1b1c2266fecaeec65f4d52dbf56dc52c4cf6352e82e1->enter($__internal_539592ac7a76640f4ffe1b1c2266fecaeec65f4d52dbf56dc52c4cf6352e82e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b6fd44f0bc166daa68865c9a6c98d5a5d52743209f63974d9d4f97e94f4ed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6fd44f0bc166daa68865c9a6c98d5a5d52743209f63974d9d4f97e94f4ed7a->enter($__internal_8b6fd44f0bc166daa68865c9a6c98d5a5d52743209f63974d9d4f97e94f4ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8b6fd44f0bc166daa68865c9a6c98d5a5d52743209f63974d9d4f97e94f4ed7a->leave($__internal_8b6fd44f0bc166daa68865c9a6c98d5a5d52743209f63974d9d4f97e94f4ed7a_prof);

        
        $__internal_539592ac7a76640f4ffe1b1c2266fecaeec65f4d52dbf56dc52c4cf6352e82e1->leave($__internal_539592ac7a76640f4ffe1b1c2266fecaeec65f4d52dbf56dc52c4cf6352e82e1_prof);

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
