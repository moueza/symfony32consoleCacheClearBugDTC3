<?php

/* @OCUser/Matchh/matchview.html.twig */
class __TwigTemplate_5881d3f8d2b0fbb29df3f455d9a20152632cfe60600acc27466f9c4d58da38ab extends Twig_Template
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
        // line 1
        echo "
<h3>Confirmation du match</h3>


<div class=\"well\">
    Match enregistré

    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "emailone", array()), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "emailtwo", array()), "html", null, true);
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "beginningDate", array()), "d:m:Y"), "html", null, true);
        echo "
    <BR>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "beginningTime", array()), "H:i:s"), "html", null, true);
        echo "
    <BR>
    ";
        // line 15
        echo " 
    <BR>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score1j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score1j2", array()), "html", null, true);
        echo " 
    ";
        // line 18
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "isScore1tie", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score2j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score2j2", array()), "html", null, true);
        echo " 
    ";
        // line 27
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "isScore2tie", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score3j1", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : null), "score3j2", array()), "html", null, true);
        echo "
    ";
        // line 36
        if ($this->getAttribute((isset($context["match"]) ? $context["match"] : null), "isScore3tie", array())) {
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
        return array (  109 => 41,  105 => 39,  101 => 37,  99 => 36,  93 => 35,  88 => 32,  84 => 30,  80 => 28,  78 => 27,  72 => 26,  67 => 23,  63 => 21,  59 => 19,  57 => 18,  51 => 17,  47 => 15,  42 => 13,  37 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Matchh/matchview.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchview.html.twig");
    }
}
