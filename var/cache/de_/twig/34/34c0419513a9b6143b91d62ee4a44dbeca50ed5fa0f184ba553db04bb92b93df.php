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
        $__internal_f839ba5ee1e98614f464d8fbdd747ef0367b8a3a0d7d92f381e7e176cb2b69d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f839ba5ee1e98614f464d8fbdd747ef0367b8a3a0d7d92f381e7e176cb2b69d7->enter($__internal_f839ba5ee1e98614f464d8fbdd747ef0367b8a3a0d7d92f381e7e176cb2b69d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_3ba402b5cdc26539577b6ca0b562a1aad3ccc44640c81c28348625e1ccf598ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba402b5cdc26539577b6ca0b562a1aad3ccc44640c81c28348625e1ccf598ac->enter($__internal_3ba402b5cdc26539577b6ca0b562a1aad3ccc44640c81c28348625e1ccf598ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_f839ba5ee1e98614f464d8fbdd747ef0367b8a3a0d7d92f381e7e176cb2b69d7->leave($__internal_f839ba5ee1e98614f464d8fbdd747ef0367b8a3a0d7d92f381e7e176cb2b69d7_prof);

        
        $__internal_3ba402b5cdc26539577b6ca0b562a1aad3ccc44640c81c28348625e1ccf598ac->leave($__internal_3ba402b5cdc26539577b6ca0b562a1aad3ccc44640c81c28348625e1ccf598ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cafa4b2d2efba96b889b61bbefafbb724fdd350899832e0a2d15fcd62edfb38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cafa4b2d2efba96b889b61bbefafbb724fdd350899832e0a2d15fcd62edfb38->enter($__internal_5cafa4b2d2efba96b889b61bbefafbb724fdd350899832e0a2d15fcd62edfb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7363dc42fa6f78cad31508e9d764b223b5cd8151b85821e8adc7752bc9745220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7363dc42fa6f78cad31508e9d764b223b5cd8151b85821e8adc7752bc9745220->enter($__internal_7363dc42fa6f78cad31508e9d764b223b5cd8151b85821e8adc7752bc9745220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_7363dc42fa6f78cad31508e9d764b223b5cd8151b85821e8adc7752bc9745220->leave($__internal_7363dc42fa6f78cad31508e9d764b223b5cd8151b85821e8adc7752bc9745220_prof);

        
        $__internal_5cafa4b2d2efba96b889b61bbefafbb724fdd350899832e0a2d15fcd62edfb38->leave($__internal_5cafa4b2d2efba96b889b61bbefafbb724fdd350899832e0a2d15fcd62edfb38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_398a54970a955ebd4301b3afcece04821edd998de143468034ffd217812f8bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a54970a955ebd4301b3afcece04821edd998de143468034ffd217812f8bac->enter($__internal_398a54970a955ebd4301b3afcece04821edd998de143468034ffd217812f8bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6e85eb0019562b43a976804c8989ccea90fa93380f4143f533f21ef4b2f18d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e85eb0019562b43a976804c8989ccea90fa93380f4143f533f21ef4b2f18d4c->enter($__internal_6e85eb0019562b43a976804c8989ccea90fa93380f4143f533f21ef4b2f18d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_6e85eb0019562b43a976804c8989ccea90fa93380f4143f533f21ef4b2f18d4c->leave($__internal_6e85eb0019562b43a976804c8989ccea90fa93380f4143f533f21ef4b2f18d4c_prof);

        
        $__internal_398a54970a955ebd4301b3afcece04821edd998de143468034ffd217812f8bac->leave($__internal_398a54970a955ebd4301b3afcece04821edd998de143468034ffd217812f8bac_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_958ffecec7d8120ab650eb6195a0a3cf36f5b504665701c3e1c7d1c7f2442bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958ffecec7d8120ab650eb6195a0a3cf36f5b504665701c3e1c7d1c7f2442bf1->enter($__internal_958ffecec7d8120ab650eb6195a0a3cf36f5b504665701c3e1c7d1c7f2442bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be0861726807f748eb5381dce41f0c958b9a2c02593de6341591a193369970d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0861726807f748eb5381dce41f0c958b9a2c02593de6341591a193369970d8->enter($__internal_be0861726807f748eb5381dce41f0c958b9a2c02593de6341591a193369970d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_be0861726807f748eb5381dce41f0c958b9a2c02593de6341591a193369970d8->leave($__internal_be0861726807f748eb5381dce41f0c958b9a2c02593de6341591a193369970d8_prof);

        
        $__internal_958ffecec7d8120ab650eb6195a0a3cf36f5b504665701c3e1c7d1c7f2442bf1->leave($__internal_958ffecec7d8120ab650eb6195a0a3cf36f5b504665701c3e1c7d1c7f2442bf1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f85ae4df2db8093583b1e8fe01ecd56a33c03fe7ddcbee4d6ddfc081ef81e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f85ae4df2db8093583b1e8fe01ecd56a33c03fe7ddcbee4d6ddfc081ef81e59->enter($__internal_9f85ae4df2db8093583b1e8fe01ecd56a33c03fe7ddcbee4d6ddfc081ef81e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69b73378b1fa6c5cdd4c3f1be84ef61923ed54ff263d2d3c3a9699dd3236af5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b73378b1fa6c5cdd4c3f1be84ef61923ed54ff263d2d3c3a9699dd3236af5c->enter($__internal_69b73378b1fa6c5cdd4c3f1be84ef61923ed54ff263d2d3c3a9699dd3236af5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_69b73378b1fa6c5cdd4c3f1be84ef61923ed54ff263d2d3c3a9699dd3236af5c->leave($__internal_69b73378b1fa6c5cdd4c3f1be84ef61923ed54ff263d2d3c3a9699dd3236af5c_prof);

        
        $__internal_9f85ae4df2db8093583b1e8fe01ecd56a33c03fe7ddcbee4d6ddfc081ef81e59->leave($__internal_9f85ae4df2db8093583b1e8fe01ecd56a33c03fe7ddcbee4d6ddfc081ef81e59_prof);

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
