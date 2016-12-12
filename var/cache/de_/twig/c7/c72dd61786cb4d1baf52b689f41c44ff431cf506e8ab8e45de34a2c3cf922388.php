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
        $__internal_f442f52cba7f0cd6e362b08ace13c20dfa1307d3fcf508c77e1485ed588ba3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f442f52cba7f0cd6e362b08ace13c20dfa1307d3fcf508c77e1485ed588ba3dd->enter($__internal_f442f52cba7f0cd6e362b08ace13c20dfa1307d3fcf508c77e1485ed588ba3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $__internal_250d5f0f63aecd3b83669b561f74bfb648a971b944c932bc7a58c05de0c94c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250d5f0f63aecd3b83669b561f74bfb648a971b944c932bc7a58c05de0c94c36->enter($__internal_250d5f0f63aecd3b83669b561f74bfb648a971b944c932bc7a58c05de0c94c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f442f52cba7f0cd6e362b08ace13c20dfa1307d3fcf508c77e1485ed588ba3dd->leave($__internal_f442f52cba7f0cd6e362b08ace13c20dfa1307d3fcf508c77e1485ed588ba3dd_prof);

        
        $__internal_250d5f0f63aecd3b83669b561f74bfb648a971b944c932bc7a58c05de0c94c36->leave($__internal_250d5f0f63aecd3b83669b561f74bfb648a971b944c932bc7a58c05de0c94c36_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fcfef86411436f4e4485ab3b8ac9547d85e5dbd55d735db20ce72df7e2d78d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcfef86411436f4e4485ab3b8ac9547d85e5dbd55d735db20ce72df7e2d78d0->enter($__internal_4fcfef86411436f4e4485ab3b8ac9547d85e5dbd55d735db20ce72df7e2d78d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09a66a3558085843ae677d21f1b705b823f1885e5bc6f098fb3e7b63b63351ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a66a3558085843ae677d21f1b705b823f1885e5bc6f098fb3e7b63b63351ca->enter($__internal_09a66a3558085843ae677d21f1b705b823f1885e5bc6f098fb3e7b63b63351ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09a66a3558085843ae677d21f1b705b823f1885e5bc6f098fb3e7b63b63351ca->leave($__internal_09a66a3558085843ae677d21f1b705b823f1885e5bc6f098fb3e7b63b63351ca_prof);

        
        $__internal_4fcfef86411436f4e4485ab3b8ac9547d85e5dbd55d735db20ce72df7e2d78d0->leave($__internal_4fcfef86411436f4e4485ab3b8ac9547d85e5dbd55d735db20ce72df7e2d78d0_prof);

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
