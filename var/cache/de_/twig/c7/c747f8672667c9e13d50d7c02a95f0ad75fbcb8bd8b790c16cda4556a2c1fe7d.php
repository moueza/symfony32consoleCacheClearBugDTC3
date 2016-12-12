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
        $__internal_fec003d5aa895156be649eed7de1da475261aff8e11f9305d2f1454c9cb44686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec003d5aa895156be649eed7de1da475261aff8e11f9305d2f1454c9cb44686->enter($__internal_fec003d5aa895156be649eed7de1da475261aff8e11f9305d2f1454c9cb44686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription2.html.twig"));

        $__internal_b24f7a15c656dc59c925388cda7ae7ae5429553532b1f982a0d92c80a76e453f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24f7a15c656dc59c925388cda7ae7ae5429553532b1f982a0d92c80a76e453f->enter($__internal_b24f7a15c656dc59c925388cda7ae7ae5429553532b1f982a0d92c80a76e453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec003d5aa895156be649eed7de1da475261aff8e11f9305d2f1454c9cb44686->leave($__internal_fec003d5aa895156be649eed7de1da475261aff8e11f9305d2f1454c9cb44686_prof);

        
        $__internal_b24f7a15c656dc59c925388cda7ae7ae5429553532b1f982a0d92c80a76e453f->leave($__internal_b24f7a15c656dc59c925388cda7ae7ae5429553532b1f982a0d92c80a76e453f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0753aef6023d1798a0418df0f26575b203209728d133fbf505a14d15f02285c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0753aef6023d1798a0418df0f26575b203209728d133fbf505a14d15f02285c4->enter($__internal_0753aef6023d1798a0418df0f26575b203209728d133fbf505a14d15f02285c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dc29528ac582853933472da666e2abdd34c2e165489671c86157c880c7f5711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc29528ac582853933472da666e2abdd34c2e165489671c86157c880c7f5711->enter($__internal_6dc29528ac582853933472da666e2abdd34c2e165489671c86157c880c7f5711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6dc29528ac582853933472da666e2abdd34c2e165489671c86157c880c7f5711->leave($__internal_6dc29528ac582853933472da666e2abdd34c2e165489671c86157c880c7f5711_prof);

        
        $__internal_0753aef6023d1798a0418df0f26575b203209728d133fbf505a14d15f02285c4->leave($__internal_0753aef6023d1798a0418df0f26575b203209728d133fbf505a14d15f02285c4_prof);

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
