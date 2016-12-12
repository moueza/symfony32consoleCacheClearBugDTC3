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
        $__internal_069b128f93e2c9f54f8055c304d75db83c1c094c7f52b77af1e7c5e4b5309b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069b128f93e2c9f54f8055c304d75db83c1c094c7f52b77af1e7c5e4b5309b68->enter($__internal_069b128f93e2c9f54f8055c304d75db83c1c094c7f52b77af1e7c5e4b5309b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_1a82b55fbe5a683daea7195e4446c8bd43c2d2e60f44ed7a07254805937e3b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a82b55fbe5a683daea7195e4446c8bd43c2d2e60f44ed7a07254805937e3b04->enter($__internal_1a82b55fbe5a683daea7195e4446c8bd43c2d2e60f44ed7a07254805937e3b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_069b128f93e2c9f54f8055c304d75db83c1c094c7f52b77af1e7c5e4b5309b68->leave($__internal_069b128f93e2c9f54f8055c304d75db83c1c094c7f52b77af1e7c5e4b5309b68_prof);

        
        $__internal_1a82b55fbe5a683daea7195e4446c8bd43c2d2e60f44ed7a07254805937e3b04->leave($__internal_1a82b55fbe5a683daea7195e4446c8bd43c2d2e60f44ed7a07254805937e3b04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cb26185eb999fcdcb1c6220ed5da41b3571e588d1f903cc985d1e0e234bd1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb26185eb999fcdcb1c6220ed5da41b3571e588d1f903cc985d1e0e234bd1a5->enter($__internal_4cb26185eb999fcdcb1c6220ed5da41b3571e588d1f903cc985d1e0e234bd1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76900785985f9b6c06ef491d6e83ebbdb8a70ed009de3321708ebb8188cd34d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76900785985f9b6c06ef491d6e83ebbdb8a70ed009de3321708ebb8188cd34d6->enter($__internal_76900785985f9b6c06ef491d6e83ebbdb8a70ed009de3321708ebb8188cd34d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_76900785985f9b6c06ef491d6e83ebbdb8a70ed009de3321708ebb8188cd34d6->leave($__internal_76900785985f9b6c06ef491d6e83ebbdb8a70ed009de3321708ebb8188cd34d6_prof);

        
        $__internal_4cb26185eb999fcdcb1c6220ed5da41b3571e588d1f903cc985d1e0e234bd1a5->leave($__internal_4cb26185eb999fcdcb1c6220ed5da41b3571e588d1f903cc985d1e0e234bd1a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_157b39339f00eb9b668225905e02eaabf72721593718771017e72f6739d5617c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157b39339f00eb9b668225905e02eaabf72721593718771017e72f6739d5617c->enter($__internal_157b39339f00eb9b668225905e02eaabf72721593718771017e72f6739d5617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f0c7b3c189cffe8e3a376706b31d972c1763388a1f51a06b1218c36523daba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0c7b3c189cffe8e3a376706b31d972c1763388a1f51a06b1218c36523daba1->enter($__internal_0f0c7b3c189cffe8e3a376706b31d972c1763388a1f51a06b1218c36523daba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_0f0c7b3c189cffe8e3a376706b31d972c1763388a1f51a06b1218c36523daba1->leave($__internal_0f0c7b3c189cffe8e3a376706b31d972c1763388a1f51a06b1218c36523daba1_prof);

        
        $__internal_157b39339f00eb9b668225905e02eaabf72721593718771017e72f6739d5617c->leave($__internal_157b39339f00eb9b668225905e02eaabf72721593718771017e72f6739d5617c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_46a2abb2d73e231b1b38004e7c3557f700fd5dbfba3d59a067ba21089bc3c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a2abb2d73e231b1b38004e7c3557f700fd5dbfba3d59a067ba21089bc3c538->enter($__internal_46a2abb2d73e231b1b38004e7c3557f700fd5dbfba3d59a067ba21089bc3c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1f01e8edb5fc8ccbc4c86783f5ac5358e57b44c8531d5c0484a4274171baba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f01e8edb5fc8ccbc4c86783f5ac5358e57b44c8531d5c0484a4274171baba3->enter($__internal_a1f01e8edb5fc8ccbc4c86783f5ac5358e57b44c8531d5c0484a4274171baba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_a1f01e8edb5fc8ccbc4c86783f5ac5358e57b44c8531d5c0484a4274171baba3->leave($__internal_a1f01e8edb5fc8ccbc4c86783f5ac5358e57b44c8531d5c0484a4274171baba3_prof);

        
        $__internal_46a2abb2d73e231b1b38004e7c3557f700fd5dbfba3d59a067ba21089bc3c538->leave($__internal_46a2abb2d73e231b1b38004e7c3557f700fd5dbfba3d59a067ba21089bc3c538_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a91a26adab81d4cae440cb5021943aa290e9537512ae8bd15faa93410b34bf70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91a26adab81d4cae440cb5021943aa290e9537512ae8bd15faa93410b34bf70->enter($__internal_a91a26adab81d4cae440cb5021943aa290e9537512ae8bd15faa93410b34bf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cd0ab9e447c92d0a63d5b9783a6b931ff2ae9675dd974dabfad7cf90321ae98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd0ab9e447c92d0a63d5b9783a6b931ff2ae9675dd974dabfad7cf90321ae98->enter($__internal_3cd0ab9e447c92d0a63d5b9783a6b931ff2ae9675dd974dabfad7cf90321ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3cd0ab9e447c92d0a63d5b9783a6b931ff2ae9675dd974dabfad7cf90321ae98->leave($__internal_3cd0ab9e447c92d0a63d5b9783a6b931ff2ae9675dd974dabfad7cf90321ae98_prof);

        
        $__internal_a91a26adab81d4cae440cb5021943aa290e9537512ae8bd15faa93410b34bf70->leave($__internal_a91a26adab81d4cae440cb5021943aa290e9537512ae8bd15faa93410b34bf70_prof);

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
