<?php

/* @OCUser/Inscription/inscription2.html.twig */
class __TwigTemplate_7b49a060cfdfcf07a786fbfe29abcfe03d4d3446b98e149ed3ec4511297e3b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCUser/Inscription/inscription2.html.twig", 1);
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
        $__internal_c8a40644c4dfbeeace28dab944377eae18d781c10bf59f8e4914ee1cf9fed035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a40644c4dfbeeace28dab944377eae18d781c10bf59f8e4914ee1cf9fed035->enter($__internal_c8a40644c4dfbeeace28dab944377eae18d781c10bf59f8e4914ee1cf9fed035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription2.html.twig"));

        $__internal_1220ab4028f72e0f4f0a65a82c758b6925f376945c501707bca702a933c04e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1220ab4028f72e0f4f0a65a82c758b6925f376945c501707bca702a933c04e2c->enter($__internal_1220ab4028f72e0f4f0a65a82c758b6925f376945c501707bca702a933c04e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a40644c4dfbeeace28dab944377eae18d781c10bf59f8e4914ee1cf9fed035->leave($__internal_c8a40644c4dfbeeace28dab944377eae18d781c10bf59f8e4914ee1cf9fed035_prof);

        
        $__internal_1220ab4028f72e0f4f0a65a82c758b6925f376945c501707bca702a933c04e2c->leave($__internal_1220ab4028f72e0f4f0a65a82c758b6925f376945c501707bca702a933c04e2c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_01cf704f74c3b78a13556417c7842b63c1ecc8a0adcf1eefdd1aeb6779ed9e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cf704f74c3b78a13556417c7842b63c1ecc8a0adcf1eefdd1aeb6779ed9e83->enter($__internal_01cf704f74c3b78a13556417c7842b63c1ecc8a0adcf1eefdd1aeb6779ed9e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3faffd30bc89276dc5b39d7b230d8138b6de68fb0f3465573ce5dd84386553ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3faffd30bc89276dc5b39d7b230d8138b6de68fb0f3465573ce5dd84386553ac->enter($__internal_3faffd30bc89276dc5b39d7b230d8138b6de68fb0f3465573ce5dd84386553ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo " 
    ";
        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    <!-- username= ";
        echo " -->
    ";
        // line 10
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <label for=\"email\">Email :</label>
        <input type=\"text\" id=\"email\" name=\"_email\" />

        <br />
        <input type=\"submit\" value=\"Connexion\" />

    </form>


";
        
        $__internal_3faffd30bc89276dc5b39d7b230d8138b6de68fb0f3465573ce5dd84386553ac->leave($__internal_3faffd30bc89276dc5b39d7b230d8138b6de68fb0f3465573ce5dd84386553ac_prof);

        
        $__internal_01cf704f74c3b78a13556417c7842b63c1ecc8a0adcf1eefdd1aeb6779ed9e83->leave($__internal_01cf704f74c3b78a13556417c7842b63c1ecc8a0adcf1eefdd1aeb6779ed9e83_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/inscription2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  66 => 10,  62 => 8,  56 => 6,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    {# https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/securite-et-gestion-des-utilisateurs-1   #} 
    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}
    <!-- username= {#usernamee#} -->
    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <label for=\"email\">Email :</label>
        <input type=\"text\" id=\"email\" name=\"_email\" />

        <br />
        <input type=\"submit\" value=\"Connexion\" />

    </form>


{% endblock %}", "@OCUser/Inscription/inscription2.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/inscription2.html.twig");
    }
}
