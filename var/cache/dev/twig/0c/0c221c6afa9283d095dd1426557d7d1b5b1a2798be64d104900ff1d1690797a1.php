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
        $__internal_7b24ccc0cc1aa1866cf8ee5dcdebfe663a29be0d25e541e0c720d0912d0db693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b24ccc0cc1aa1866cf8ee5dcdebfe663a29be0d25e541e0c720d0912d0db693->enter($__internal_7b24ccc0cc1aa1866cf8ee5dcdebfe663a29be0d25e541e0c720d0912d0db693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_238021070b667d0af8271728eda1942b01b668072804bb4e57f7293095cb324d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238021070b667d0af8271728eda1942b01b668072804bb4e57f7293095cb324d->enter($__internal_238021070b667d0af8271728eda1942b01b668072804bb4e57f7293095cb324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_7b24ccc0cc1aa1866cf8ee5dcdebfe663a29be0d25e541e0c720d0912d0db693->leave($__internal_7b24ccc0cc1aa1866cf8ee5dcdebfe663a29be0d25e541e0c720d0912d0db693_prof);

        
        $__internal_238021070b667d0af8271728eda1942b01b668072804bb4e57f7293095cb324d->leave($__internal_238021070b667d0af8271728eda1942b01b668072804bb4e57f7293095cb324d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae88167f25cfd5b248dde007a17fd3ae10d1e02cb4fb0e47bf45a74e6e9f2290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae88167f25cfd5b248dde007a17fd3ae10d1e02cb4fb0e47bf45a74e6e9f2290->enter($__internal_ae88167f25cfd5b248dde007a17fd3ae10d1e02cb4fb0e47bf45a74e6e9f2290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab95888ec702e9f22d6c8f8d6eb00902ca77397a5a8660a72dd3e5136d513412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab95888ec702e9f22d6c8f8d6eb00902ca77397a5a8660a72dd3e5136d513412->enter($__internal_ab95888ec702e9f22d6c8f8d6eb00902ca77397a5a8660a72dd3e5136d513412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_ab95888ec702e9f22d6c8f8d6eb00902ca77397a5a8660a72dd3e5136d513412->leave($__internal_ab95888ec702e9f22d6c8f8d6eb00902ca77397a5a8660a72dd3e5136d513412_prof);

        
        $__internal_ae88167f25cfd5b248dde007a17fd3ae10d1e02cb4fb0e47bf45a74e6e9f2290->leave($__internal_ae88167f25cfd5b248dde007a17fd3ae10d1e02cb4fb0e47bf45a74e6e9f2290_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a260067c9bd673d61514a9a809ce821f91a614b123de0ba2369888a424359764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a260067c9bd673d61514a9a809ce821f91a614b123de0ba2369888a424359764->enter($__internal_a260067c9bd673d61514a9a809ce821f91a614b123de0ba2369888a424359764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2073b4cd337604bd377129f56696665fe6399f27d0eede44f8a97213d79ebc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2073b4cd337604bd377129f56696665fe6399f27d0eede44f8a97213d79ebc09->enter($__internal_2073b4cd337604bd377129f56696665fe6399f27d0eede44f8a97213d79ebc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_2073b4cd337604bd377129f56696665fe6399f27d0eede44f8a97213d79ebc09->leave($__internal_2073b4cd337604bd377129f56696665fe6399f27d0eede44f8a97213d79ebc09_prof);

        
        $__internal_a260067c9bd673d61514a9a809ce821f91a614b123de0ba2369888a424359764->leave($__internal_a260067c9bd673d61514a9a809ce821f91a614b123de0ba2369888a424359764_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_46359d9b41fc81cb031d286f3c827be38124b4d5e9a659d2531852faba8e90e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46359d9b41fc81cb031d286f3c827be38124b4d5e9a659d2531852faba8e90e6->enter($__internal_46359d9b41fc81cb031d286f3c827be38124b4d5e9a659d2531852faba8e90e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc332796b426f6b9415f4864b8446046eae87f3e9c7bce9f839b67d7ea35b955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc332796b426f6b9415f4864b8446046eae87f3e9c7bce9f839b67d7ea35b955->enter($__internal_dc332796b426f6b9415f4864b8446046eae87f3e9c7bce9f839b67d7ea35b955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_dc332796b426f6b9415f4864b8446046eae87f3e9c7bce9f839b67d7ea35b955->leave($__internal_dc332796b426f6b9415f4864b8446046eae87f3e9c7bce9f839b67d7ea35b955_prof);

        
        $__internal_46359d9b41fc81cb031d286f3c827be38124b4d5e9a659d2531852faba8e90e6->leave($__internal_46359d9b41fc81cb031d286f3c827be38124b4d5e9a659d2531852faba8e90e6_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_928d40d1106942a984b2b41e0188389e9bb13c877d54d88c7ab45bb06ce94fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928d40d1106942a984b2b41e0188389e9bb13c877d54d88c7ab45bb06ce94fc4->enter($__internal_928d40d1106942a984b2b41e0188389e9bb13c877d54d88c7ab45bb06ce94fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_670f7394c4df70dd13435a31f297d22f6f0868323b321527681afb062c3a2637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670f7394c4df70dd13435a31f297d22f6f0868323b321527681afb062c3a2637->enter($__internal_670f7394c4df70dd13435a31f297d22f6f0868323b321527681afb062c3a2637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_670f7394c4df70dd13435a31f297d22f6f0868323b321527681afb062c3a2637->leave($__internal_670f7394c4df70dd13435a31f297d22f6f0868323b321527681afb062c3a2637_prof);

        
        $__internal_928d40d1106942a984b2b41e0188389e9bb13c877d54d88c7ab45bb06ce94fc4->leave($__internal_928d40d1106942a984b2b41e0188389e9bb13c877d54d88c7ab45bb06ce94fc4_prof);

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
