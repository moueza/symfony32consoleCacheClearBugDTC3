<?php

/* OCPlatformBundle:Default:layout.html.twig */
class __TwigTemplate_20eacddacdbad92bf67a2d6ce3d119a1dfb7354d7853aecc78870e4e1da22dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445bca8de4d714516eeebb180f363484647cc7b28d3e92a9d949f5ea2301fda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445bca8de4d714516eeebb180f363484647cc7b28d3e92a9d949f5ea2301fda3->enter($__internal_445bca8de4d714516eeebb180f363484647cc7b28d3e92a9d949f5ea2301fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        $__internal_78a1e588d7dbc9f552d708212635081142a529e06444866192a9f505514dda82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a1e588d7dbc9f552d708212635081142a529e06444866192a9f505514dda82->enter($__internal_78a1e588d7dbc9f552d708212635081142a529e06444866192a9f505514dda82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    </head>

    <body>

        <div id=\"menu\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu"));
        echo "
        </div>

        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
        <div class=\"well\">
            <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
        </div>

    </body>

</html>";
        
        $__internal_445bca8de4d714516eeebb180f363484647cc7b28d3e92a9d949f5ea2301fda3->leave($__internal_445bca8de4d714516eeebb180f363484647cc7b28d3e92a9d949f5ea2301fda3_prof);

        
        $__internal_78a1e588d7dbc9f552d708212635081142a529e06444866192a9f505514dda82->leave($__internal_78a1e588d7dbc9f552d708212635081142a529e06444866192a9f505514dda82_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2917793027fda78662c495164dfcc47deef981993cf37e6af9fdf38afb8f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2917793027fda78662c495164dfcc47deef981993cf37e6af9fdf38afb8f7d->enter($__internal_3e2917793027fda78662c495164dfcc47deef981993cf37e6af9fdf38afb8f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f925723fbc8bf5b7a061ad2a640190ac05b2704b1cea05f2f2583e2dbb33068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f925723fbc8bf5b7a061ad2a640190ac05b2704b1cea05f2f2583e2dbb33068->enter($__internal_1f925723fbc8bf5b7a061ad2a640190ac05b2704b1cea05f2f2583e2dbb33068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_1f925723fbc8bf5b7a061ad2a640190ac05b2704b1cea05f2f2583e2dbb33068->leave($__internal_1f925723fbc8bf5b7a061ad2a640190ac05b2704b1cea05f2f2583e2dbb33068_prof);

        
        $__internal_3e2917793027fda78662c495164dfcc47deef981993cf37e6af9fdf38afb8f7d->leave($__internal_3e2917793027fda78662c495164dfcc47deef981993cf37e6af9fdf38afb8f7d_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd4128ec40703ada3e8056c0a7cfd654f5ae05e05994b865154711231dff8623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4128ec40703ada3e8056c0a7cfd654f5ae05e05994b865154711231dff8623->enter($__internal_dd4128ec40703ada3e8056c0a7cfd654f5ae05e05994b865154711231dff8623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b413d0cbb13f34eadb1c1322c0d43d29db80aed7c19c9b59d0f2c46196a37e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b413d0cbb13f34eadb1c1322c0d43d29db80aed7c19c9b59d0f2c46196a37e0d->enter($__internal_b413d0cbb13f34eadb1c1322c0d43d29db80aed7c19c9b59d0f2c46196a37e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
            ";
        // line 18
        echo "
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        ";
        
        $__internal_b413d0cbb13f34eadb1c1322c0d43d29db80aed7c19c9b59d0f2c46196a37e0d->leave($__internal_b413d0cbb13f34eadb1c1322c0d43d29db80aed7c19c9b59d0f2c46196a37e0d_prof);

        
        $__internal_dd4128ec40703ada3e8056c0a7cfd654f5ae05e05994b865154711231dff8623->leave($__internal_dd4128ec40703ada3e8056c0a7cfd654f5ae05e05994b865154711231dff8623_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f561d8ddaddaccc0df7d5107972f9c3b364e66a68dfe9a2a6c9c6d28f9db17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f561d8ddaddaccc0df7d5107972f9c3b364e66a68dfe9a2a6c9c6d28f9db17->enter($__internal_d3f561d8ddaddaccc0df7d5107972f9c3b364e66a68dfe9a2a6c9c6d28f9db17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c7eea026db47b740eec24db35b84b5fe03ebbcea065c30f5d88eb965ebdb0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7eea026db47b740eec24db35b84b5fe03ebbcea065c30f5d88eb965ebdb0d6->enter($__internal_3c7eea026db47b740eec24db35b84b5fe03ebbcea065c30f5d88eb965ebdb0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_3c7eea026db47b740eec24db35b84b5fe03ebbcea065c30f5d88eb965ebdb0d6->leave($__internal_3c7eea026db47b740eec24db35b84b5fe03ebbcea065c30f5d88eb965ebdb0d6_prof);

        
        $__internal_d3f561d8ddaddaccc0df7d5107972f9c3b364e66a68dfe9a2a6c9c6d28f9db17->leave($__internal_d3f561d8ddaddaccc0df7d5107972f9c3b364e66a68dfe9a2a6c9c6d28f9db17_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  125 => 31,  112 => 18,  109 => 16,  100 => 15,  82 => 12,  65 => 33,  63 => 31,  57 => 28,  49 => 22,  47 => 15,  41 => 12,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>{% block title %}DTC 3{% endblock %}</title>


        {% block stylesheets %}

            {# On charge le CSS de bootstrap depuis le site directement #}

            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        {% endblock %}

    </head>

    <body>

        <div id=\"menu\">
            {{ render(controller(\"OCPlatformBundle:Advert:menu\")) }}
        </div>

        {% block body %}
        {% endblock %}

        <div class=\"well\">
            <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
        </div>

    </body>

</html>", "OCPlatformBundle:Default:layout.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/PlatformBundle/Resources/views/Default/layout.html.twig");
    }
}
