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
        $__internal_76bd87fe77449c5e6a262d70b4f17755bcf93de9774b283f33d7cd82c08fb854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bd87fe77449c5e6a262d70b4f17755bcf93de9774b283f33d7cd82c08fb854->enter($__internal_76bd87fe77449c5e6a262d70b4f17755bcf93de9774b283f33d7cd82c08fb854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_a759de2162feb5b3742457b93d354e6ac0679ea7460d990d6c5e0b2b9b6e5b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a759de2162feb5b3742457b93d354e6ac0679ea7460d990d6c5e0b2b9b6e5b0c->enter($__internal_a759de2162feb5b3742457b93d354e6ac0679ea7460d990d6c5e0b2b9b6e5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_76bd87fe77449c5e6a262d70b4f17755bcf93de9774b283f33d7cd82c08fb854->leave($__internal_76bd87fe77449c5e6a262d70b4f17755bcf93de9774b283f33d7cd82c08fb854_prof);

        
        $__internal_a759de2162feb5b3742457b93d354e6ac0679ea7460d990d6c5e0b2b9b6e5b0c->leave($__internal_a759de2162feb5b3742457b93d354e6ac0679ea7460d990d6c5e0b2b9b6e5b0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07f7eb1a9e88179643e8a080b85f4e85b885f7b2e0e62acdf71af8050027ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07f7eb1a9e88179643e8a080b85f4e85b885f7b2e0e62acdf71af8050027ee4->enter($__internal_c07f7eb1a9e88179643e8a080b85f4e85b885f7b2e0e62acdf71af8050027ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55cee997284273706aed69778b4ed4dfdb05c1f2cc1b108ed99e316cc2f9e008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cee997284273706aed69778b4ed4dfdb05c1f2cc1b108ed99e316cc2f9e008->enter($__internal_55cee997284273706aed69778b4ed4dfdb05c1f2cc1b108ed99e316cc2f9e008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_55cee997284273706aed69778b4ed4dfdb05c1f2cc1b108ed99e316cc2f9e008->leave($__internal_55cee997284273706aed69778b4ed4dfdb05c1f2cc1b108ed99e316cc2f9e008_prof);

        
        $__internal_c07f7eb1a9e88179643e8a080b85f4e85b885f7b2e0e62acdf71af8050027ee4->leave($__internal_c07f7eb1a9e88179643e8a080b85f4e85b885f7b2e0e62acdf71af8050027ee4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fc76ed84a0c62e3a7ed48da110cd28e930b261bcb97c338ce0ce5d7779e04f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc76ed84a0c62e3a7ed48da110cd28e930b261bcb97c338ce0ce5d7779e04f1->enter($__internal_3fc76ed84a0c62e3a7ed48da110cd28e930b261bcb97c338ce0ce5d7779e04f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20eef7c481b18f93ae6dfcd026d0cd725ecfef4a881ca6a36f0fa447454acb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20eef7c481b18f93ae6dfcd026d0cd725ecfef4a881ca6a36f0fa447454acb94->enter($__internal_20eef7c481b18f93ae6dfcd026d0cd725ecfef4a881ca6a36f0fa447454acb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_20eef7c481b18f93ae6dfcd026d0cd725ecfef4a881ca6a36f0fa447454acb94->leave($__internal_20eef7c481b18f93ae6dfcd026d0cd725ecfef4a881ca6a36f0fa447454acb94_prof);

        
        $__internal_3fc76ed84a0c62e3a7ed48da110cd28e930b261bcb97c338ce0ce5d7779e04f1->leave($__internal_3fc76ed84a0c62e3a7ed48da110cd28e930b261bcb97c338ce0ce5d7779e04f1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ec1ebca036fc64c442496e0fabed22095f6f4f15d189878eb3993e98064f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ec1ebca036fc64c442496e0fabed22095f6f4f15d189878eb3993e98064f5c->enter($__internal_24ec1ebca036fc64c442496e0fabed22095f6f4f15d189878eb3993e98064f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bee26dbc33d983e037c7ab8ecc11d31898f63172ad55b59904a3a7552f1437d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee26dbc33d983e037c7ab8ecc11d31898f63172ad55b59904a3a7552f1437d6->enter($__internal_bee26dbc33d983e037c7ab8ecc11d31898f63172ad55b59904a3a7552f1437d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_bee26dbc33d983e037c7ab8ecc11d31898f63172ad55b59904a3a7552f1437d6->leave($__internal_bee26dbc33d983e037c7ab8ecc11d31898f63172ad55b59904a3a7552f1437d6_prof);

        
        $__internal_24ec1ebca036fc64c442496e0fabed22095f6f4f15d189878eb3993e98064f5c->leave($__internal_24ec1ebca036fc64c442496e0fabed22095f6f4f15d189878eb3993e98064f5c_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4db35e9bc4b5419a12b94c97722f9a21fb22d3fbd9c4b449c62d18ccfc00ce35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db35e9bc4b5419a12b94c97722f9a21fb22d3fbd9c4b449c62d18ccfc00ce35->enter($__internal_4db35e9bc4b5419a12b94c97722f9a21fb22d3fbd9c4b449c62d18ccfc00ce35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4640024b6d16e014c9c45bfeb5aefb1a0ff2758c624f0f5b3d41f1ed3ddb9587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4640024b6d16e014c9c45bfeb5aefb1a0ff2758c624f0f5b3d41f1ed3ddb9587->enter($__internal_4640024b6d16e014c9c45bfeb5aefb1a0ff2758c624f0f5b3d41f1ed3ddb9587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4640024b6d16e014c9c45bfeb5aefb1a0ff2758c624f0f5b3d41f1ed3ddb9587->leave($__internal_4640024b6d16e014c9c45bfeb5aefb1a0ff2758c624f0f5b3d41f1ed3ddb9587_prof);

        
        $__internal_4db35e9bc4b5419a12b94c97722f9a21fb22d3fbd9c4b449c62d18ccfc00ce35->leave($__internal_4db35e9bc4b5419a12b94c97722f9a21fb22d3fbd9c4b449c62d18ccfc00ce35_prof);

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
