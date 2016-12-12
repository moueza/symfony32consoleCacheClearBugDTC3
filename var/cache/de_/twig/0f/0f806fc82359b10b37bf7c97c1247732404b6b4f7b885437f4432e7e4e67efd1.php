<?php

/* @OCUser/Matchh/matchview.html.twig */
class __TwigTemplate_9b84ca3e96a23fa83ddc2aecfd7a428f9647556247ee88469389742b55090faa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d60de8be0afc601c15b6ebb7f3788fab65f62e2c7f005a365c51d70ea64b0bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60de8be0afc601c15b6ebb7f3788fab65f62e2c7f005a365c51d70ea64b0bb4->enter($__internal_d60de8be0afc601c15b6ebb7f3788fab65f62e2c7f005a365c51d70ea64b0bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchview.html.twig"));

        $__internal_5067328f1204441d1a0ea413e887881ec610d26560c94d1c83e3a430f2afe3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5067328f1204441d1a0ea413e887881ec610d26560c94d1c83e3a430f2afe3e2->enter($__internal_5067328f1204441d1a0ea413e887881ec610d26560c94d1c83e3a430f2afe3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchview.html.twig"));

        // line 1
        echo "
<h3>Confirmation du match</h3>


<div class=\"well\">
    Match enregistré

    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "emailone", array()), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "emailtwo", array()), "html", null, true);
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "beginningDate", array()), "d:m:Y"), "html", null, true);
        echo "
    <BR>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "beginningTime", array()), "H:i:s"), "html", null, true);
        echo "
    <BR>
    ";
        // line 15
        echo " 
    <BR>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score1j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score1j2", array()), "html", null, true);
        echo " 
    ";
        // line 18
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "isScore1tie", array())) {
            // line 19
            echo "        Tie
    ";
        } else {
            // line 21
            echo "        Non tie
    ";
        }
        // line 23
        echo "
    <BR>

    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score2j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score2j2", array()), "html", null, true);
        echo " 
    ";
        // line 27
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "isScore2tie", array())) {
            // line 28
            echo "        Tie
    ";
        } else {
            // line 30
            echo "        Non tie
    ";
        }
        // line 32
        echo "
    <BR>

    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score3j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "score3j2", array()), "html", null, true);
        echo "
    ";
        // line 36
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "isScore3tie", array())) {
            // line 37
            echo "        Tie
    ";
        } else {
            // line 39
            echo "        Non tie
    ";
        }
        // line 41
        echo "    <BR>

    <a href='http://moueza.esy.es/m/'>OK</a>
</div>
";
        
        $__internal_d60de8be0afc601c15b6ebb7f3788fab65f62e2c7f005a365c51d70ea64b0bb4->leave($__internal_d60de8be0afc601c15b6ebb7f3788fab65f62e2c7f005a365c51d70ea64b0bb4_prof);

        
        $__internal_5067328f1204441d1a0ea413e887881ec610d26560c94d1c83e3a430f2afe3e2->leave($__internal_5067328f1204441d1a0ea413e887881ec610d26560c94d1c83e3a430f2afe3e2_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Matchh/matchview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  111 => 39,  107 => 37,  105 => 36,  99 => 35,  94 => 32,  90 => 30,  86 => 28,  84 => 27,  78 => 26,  73 => 23,  69 => 21,  65 => 19,  63 => 18,  57 => 17,  53 => 15,  48 => 13,  43 => 11,  38 => 9,  34 => 8,  25 => 1,);
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
<h3>Confirmation du match</h3>


<div class=\"well\">
    Match enregistré

    {{match.emailone}}
    {{match.emailtwo}}

    {{match.beginningDate|date('d:m:Y')}}
    <BR>
    {{match.beginningTime|date('H:i:s')}}
    <BR>
    {#match.joueur1}}  VS  {{match.joueur2#} 
    <BR>
    {{match.score1j1}}  {{match.score1j2}} 
    {% if match.isScore1tie%}
        Tie
    {% else %}
        Non tie
    {% endif %}

    <BR>

    {{match.score2j1}}  {{match.score2j2}} 
    {% if match.isScore2tie %}
        Tie
    {% else %}
        Non tie
    {% endif %}

    <BR>

    {{ match.score3j1}}  {{match.score3j2}}
    {% if match.isScore3tie %}
        Tie
    {% else %}
        Non tie
    {% endif %}
    <BR>

    <a href='http://moueza.esy.es/m/'>OK</a>
</div>
", "@OCUser/Matchh/matchview.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchview.html.twig");
    }
}
