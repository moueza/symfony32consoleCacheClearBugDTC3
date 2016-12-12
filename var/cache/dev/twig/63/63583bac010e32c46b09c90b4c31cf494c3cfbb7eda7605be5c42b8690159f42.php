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
        $__internal_ce72bad58ac2a0c0f9f5755e198d658447295cc056112faeb380a1457189c8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce72bad58ac2a0c0f9f5755e198d658447295cc056112faeb380a1457189c8b1->enter($__internal_ce72bad58ac2a0c0f9f5755e198d658447295cc056112faeb380a1457189c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        $__internal_11ccaa76d247dc342d4ea055b9147ed8df1b6983db3d4e266ea06e771e11d756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ccaa76d247dc342d4ea055b9147ed8df1b6983db3d4e266ea06e771e11d756->enter($__internal_11ccaa76d247dc342d4ea055b9147ed8df1b6983db3d4e266ea06e771e11d756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

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
        
        $__internal_ce72bad58ac2a0c0f9f5755e198d658447295cc056112faeb380a1457189c8b1->leave($__internal_ce72bad58ac2a0c0f9f5755e198d658447295cc056112faeb380a1457189c8b1_prof);

        
        $__internal_11ccaa76d247dc342d4ea055b9147ed8df1b6983db3d4e266ea06e771e11d756->leave($__internal_11ccaa76d247dc342d4ea055b9147ed8df1b6983db3d4e266ea06e771e11d756_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcfbd33581157dfd136a10459bdb78baae5f28fc24d7bda3e82df97c7e79d065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfbd33581157dfd136a10459bdb78baae5f28fc24d7bda3e82df97c7e79d065->enter($__internal_dcfbd33581157dfd136a10459bdb78baae5f28fc24d7bda3e82df97c7e79d065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ef62cdea2126f3f1e4b6f6fee0a316e3aee0f01f924521a3266f361453611cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef62cdea2126f3f1e4b6f6fee0a316e3aee0f01f924521a3266f361453611cc->enter($__internal_8ef62cdea2126f3f1e4b6f6fee0a316e3aee0f01f924521a3266f361453611cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_8ef62cdea2126f3f1e4b6f6fee0a316e3aee0f01f924521a3266f361453611cc->leave($__internal_8ef62cdea2126f3f1e4b6f6fee0a316e3aee0f01f924521a3266f361453611cc_prof);

        
        $__internal_dcfbd33581157dfd136a10459bdb78baae5f28fc24d7bda3e82df97c7e79d065->leave($__internal_dcfbd33581157dfd136a10459bdb78baae5f28fc24d7bda3e82df97c7e79d065_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a97e9b145743411f4abc442b1f7cab12711836f012d5c0a223abaf8bfa4403c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a97e9b145743411f4abc442b1f7cab12711836f012d5c0a223abaf8bfa4403c->enter($__internal_6a97e9b145743411f4abc442b1f7cab12711836f012d5c0a223abaf8bfa4403c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b856aff82580a4dc4f122e94d0f90ee30b7aaaeb4bffc15cc7f68886047181e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b856aff82580a4dc4f122e94d0f90ee30b7aaaeb4bffc15cc7f68886047181e->enter($__internal_1b856aff82580a4dc4f122e94d0f90ee30b7aaaeb4bffc15cc7f68886047181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
            ";
        // line 18
        echo "
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        ";
        
        $__internal_1b856aff82580a4dc4f122e94d0f90ee30b7aaaeb4bffc15cc7f68886047181e->leave($__internal_1b856aff82580a4dc4f122e94d0f90ee30b7aaaeb4bffc15cc7f68886047181e_prof);

        
        $__internal_6a97e9b145743411f4abc442b1f7cab12711836f012d5c0a223abaf8bfa4403c->leave($__internal_6a97e9b145743411f4abc442b1f7cab12711836f012d5c0a223abaf8bfa4403c_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a3f6e1697afd6c3d9e60ba256e380522de854a7e7f12fde49c4b0a0f52b1ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3f6e1697afd6c3d9e60ba256e380522de854a7e7f12fde49c4b0a0f52b1ae3->enter($__internal_8a3f6e1697afd6c3d9e60ba256e380522de854a7e7f12fde49c4b0a0f52b1ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db2b2f281828b422c6a86b144ee12339280362d54683b642ca4e7414f1974288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2b2f281828b422c6a86b144ee12339280362d54683b642ca4e7414f1974288->enter($__internal_db2b2f281828b422c6a86b144ee12339280362d54683b642ca4e7414f1974288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_db2b2f281828b422c6a86b144ee12339280362d54683b642ca4e7414f1974288->leave($__internal_db2b2f281828b422c6a86b144ee12339280362d54683b642ca4e7414f1974288_prof);

        
        $__internal_8a3f6e1697afd6c3d9e60ba256e380522de854a7e7f12fde49c4b0a0f52b1ae3->leave($__internal_8a3f6e1697afd6c3d9e60ba256e380522de854a7e7f12fde49c4b0a0f52b1ae3_prof);

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
