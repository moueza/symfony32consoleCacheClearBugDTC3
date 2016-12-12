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
        $__internal_aff434a9d253f2702100b9a4d433395dc0e20187916d8a6446ececf6ffd03f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff434a9d253f2702100b9a4d433395dc0e20187916d8a6446ececf6ffd03f91->enter($__internal_aff434a9d253f2702100b9a4d433395dc0e20187916d8a6446ececf6ffd03f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $__internal_ddf7c34835d94e1fb57a75668f8d99c23112276e52bb176204389bc84b84fad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf7c34835d94e1fb57a75668f8d99c23112276e52bb176204389bc84b84fad0->enter($__internal_ddf7c34835d94e1fb57a75668f8d99c23112276e52bb176204389bc84b84fad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff434a9d253f2702100b9a4d433395dc0e20187916d8a6446ececf6ffd03f91->leave($__internal_aff434a9d253f2702100b9a4d433395dc0e20187916d8a6446ececf6ffd03f91_prof);

        
        $__internal_ddf7c34835d94e1fb57a75668f8d99c23112276e52bb176204389bc84b84fad0->leave($__internal_ddf7c34835d94e1fb57a75668f8d99c23112276e52bb176204389bc84b84fad0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d45938cc22af13322e04f8511324a59a695143c295335c90bc70d2066cc7fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d45938cc22af13322e04f8511324a59a695143c295335c90bc70d2066cc7fe2->enter($__internal_5d45938cc22af13322e04f8511324a59a695143c295335c90bc70d2066cc7fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9641de2f7c3363d7a3d181d64e1d2385a33e86860ba517323419ebceb78851cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9641de2f7c3363d7a3d181d64e1d2385a33e86860ba517323419ebceb78851cd->enter($__internal_9641de2f7c3363d7a3d181d64e1d2385a33e86860ba517323419ebceb78851cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9641de2f7c3363d7a3d181d64e1d2385a33e86860ba517323419ebceb78851cd->leave($__internal_9641de2f7c3363d7a3d181d64e1d2385a33e86860ba517323419ebceb78851cd_prof);

        
        $__internal_5d45938cc22af13322e04f8511324a59a695143c295335c90bc70d2066cc7fe2->leave($__internal_5d45938cc22af13322e04f8511324a59a695143c295335c90bc70d2066cc7fe2_prof);

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
