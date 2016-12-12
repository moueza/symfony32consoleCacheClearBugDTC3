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
        $__internal_1922538a25441f7022014a2511ce47518d09e11a5b2ed2b040ddc4d6cd87bf2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1922538a25441f7022014a2511ce47518d09e11a5b2ed2b040ddc4d6cd87bf2f->enter($__internal_1922538a25441f7022014a2511ce47518d09e11a5b2ed2b040ddc4d6cd87bf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        $__internal_15b4a54eba5e832ab1e3c008ec6ab6bd5607ce7ba301a768113a69d326a875ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b4a54eba5e832ab1e3c008ec6ab6bd5607ce7ba301a768113a69d326a875ce->enter($__internal_15b4a54eba5e832ab1e3c008ec6ab6bd5607ce7ba301a768113a69d326a875ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

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
        
        $__internal_1922538a25441f7022014a2511ce47518d09e11a5b2ed2b040ddc4d6cd87bf2f->leave($__internal_1922538a25441f7022014a2511ce47518d09e11a5b2ed2b040ddc4d6cd87bf2f_prof);

        
        $__internal_15b4a54eba5e832ab1e3c008ec6ab6bd5607ce7ba301a768113a69d326a875ce->leave($__internal_15b4a54eba5e832ab1e3c008ec6ab6bd5607ce7ba301a768113a69d326a875ce_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_665d21edd3db634ababe3766f57f5aed3fa632c55178e0b63554784e607ead52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d21edd3db634ababe3766f57f5aed3fa632c55178e0b63554784e607ead52->enter($__internal_665d21edd3db634ababe3766f57f5aed3fa632c55178e0b63554784e607ead52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64d907a1ce5909813e9f846ace7f6ada78028ff30fa04219ff6bccb6dce9288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d907a1ce5909813e9f846ace7f6ada78028ff30fa04219ff6bccb6dce9288d->enter($__internal_64d907a1ce5909813e9f846ace7f6ada78028ff30fa04219ff6bccb6dce9288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_64d907a1ce5909813e9f846ace7f6ada78028ff30fa04219ff6bccb6dce9288d->leave($__internal_64d907a1ce5909813e9f846ace7f6ada78028ff30fa04219ff6bccb6dce9288d_prof);

        
        $__internal_665d21edd3db634ababe3766f57f5aed3fa632c55178e0b63554784e607ead52->leave($__internal_665d21edd3db634ababe3766f57f5aed3fa632c55178e0b63554784e607ead52_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e4569a1e186d50ff77dcd5bfdbc662e6d0e14919a6a6a99a877ea9dc1022254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4569a1e186d50ff77dcd5bfdbc662e6d0e14919a6a6a99a877ea9dc1022254->enter($__internal_3e4569a1e186d50ff77dcd5bfdbc662e6d0e14919a6a6a99a877ea9dc1022254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6130b5511fbfc8e1c66610edb77b37e22985c55badda0c81cc438c7e109036cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6130b5511fbfc8e1c66610edb77b37e22985c55badda0c81cc438c7e109036cd->enter($__internal_6130b5511fbfc8e1c66610edb77b37e22985c55badda0c81cc438c7e109036cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
            ";
        // line 18
        echo "
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        ";
        
        $__internal_6130b5511fbfc8e1c66610edb77b37e22985c55badda0c81cc438c7e109036cd->leave($__internal_6130b5511fbfc8e1c66610edb77b37e22985c55badda0c81cc438c7e109036cd_prof);

        
        $__internal_3e4569a1e186d50ff77dcd5bfdbc662e6d0e14919a6a6a99a877ea9dc1022254->leave($__internal_3e4569a1e186d50ff77dcd5bfdbc662e6d0e14919a6a6a99a877ea9dc1022254_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_72a3d1d1f38fc9e8d0591fc190a013319d204efd423a4466ae388985921530f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a3d1d1f38fc9e8d0591fc190a013319d204efd423a4466ae388985921530f7->enter($__internal_72a3d1d1f38fc9e8d0591fc190a013319d204efd423a4466ae388985921530f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_780e65bb08e9c2093d4bdd8a275c84c9b1506c7983637bf90f40a00ba45dccd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780e65bb08e9c2093d4bdd8a275c84c9b1506c7983637bf90f40a00ba45dccd6->enter($__internal_780e65bb08e9c2093d4bdd8a275c84c9b1506c7983637bf90f40a00ba45dccd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_780e65bb08e9c2093d4bdd8a275c84c9b1506c7983637bf90f40a00ba45dccd6->leave($__internal_780e65bb08e9c2093d4bdd8a275c84c9b1506c7983637bf90f40a00ba45dccd6_prof);

        
        $__internal_72a3d1d1f38fc9e8d0591fc190a013319d204efd423a4466ae388985921530f7->leave($__internal_72a3d1d1f38fc9e8d0591fc190a013319d204efd423a4466ae388985921530f7_prof);

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
