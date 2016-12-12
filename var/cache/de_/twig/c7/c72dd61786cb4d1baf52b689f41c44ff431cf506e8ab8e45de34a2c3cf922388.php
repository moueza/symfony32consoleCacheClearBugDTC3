<?php

/* @OCUser/Security/login.html.twig */
class __TwigTemplate_0e2e9d294717ae97953c691894e00b8bfa5132a524622875b649c28ff72bd98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cbc206b6eda8e44c41b9190c7d4484c27e297c8cc899d802df99a1e481b1068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbc206b6eda8e44c41b9190c7d4484c27e297c8cc899d802df99a1e481b1068->enter($__internal_6cbc206b6eda8e44c41b9190c7d4484c27e297c8cc899d802df99a1e481b1068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $__internal_8f632f2d47fd39b429390d65c9473de294bffbdf0a382d0733f506e624002b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f632f2d47fd39b429390d65c9473de294bffbdf0a382d0733f506e624002b85->enter($__internal_8f632f2d47fd39b429390d65c9473de294bffbdf0a382d0733f506e624002b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cbc206b6eda8e44c41b9190c7d4484c27e297c8cc899d802df99a1e481b1068->leave($__internal_6cbc206b6eda8e44c41b9190c7d4484c27e297c8cc899d802df99a1e481b1068_prof);

        
        $__internal_8f632f2d47fd39b429390d65c9473de294bffbdf0a382d0733f506e624002b85->leave($__internal_8f632f2d47fd39b429390d65c9473de294bffbdf0a382d0733f506e624002b85_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_44be4e3cf0c859fff5d3b60fdabfdd6224bee5dee98d7c509de3a3b8ed84ae60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44be4e3cf0c859fff5d3b60fdabfdd6224bee5dee98d7c509de3a3b8ed84ae60->enter($__internal_44be4e3cf0c859fff5d3b60fdabfdd6224bee5dee98d7c509de3a3b8ed84ae60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e78ba6441c319a0aa97c389c7af487d4edfdc60002878538df89d5d53db70276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78ba6441c319a0aa97c389c7af487d4edfdc60002878538df89d5d53db70276->enter($__internal_e78ba6441c319a0aa97c389c7af487d4edfdc60002878538df89d5d53db70276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <!-- username= ";
        echo " -->
    ";
        // line 9
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"pseudo\">Login :</label>
        ";
        // line 13
        echo "        <input type=\"text\" id=\"pseudo\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />


        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 22
        echo "        <br />
        <input type=\"submit\" value=\"Connexion\" />

    </form>


";
        
        $__internal_e78ba6441c319a0aa97c389c7af487d4edfdc60002878538df89d5d53db70276->leave($__internal_e78ba6441c319a0aa97c389c7af487d4edfdc60002878538df89d5d53db70276_prof);

        
        $__internal_44be4e3cf0c859fff5d3b60fdabfdd6224bee5dee98d7c509de3a3b8ed84ae60->leave($__internal_44be4e3cf0c859fff5d3b60fdabfdd6224bee5dee98d7c509de3a3b8ed84ae60_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  70 => 13,  64 => 9,  60 => 7,  54 => 5,  51 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCCoreBundle::layout.html.twig\" %}
{% block body %}
    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}
    <!-- username= {#usernamee#} -->
    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"pseudo\">Login :</label>
        {#<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
        #}
        <input type=\"text\" id=\"pseudo\" name=\"_username\" value=\"{{ last_username }}\" />


        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#  <label for=\"email\">Email :</label>
       <input type=\"text\" id=\"email\" name=\"_email\" />
       #}
        <br />
        <input type=\"submit\" value=\"Connexion\" />

    </form>


{% endblock %}", "@OCUser/Security/login.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Security/login.html.twig");
    }
}
