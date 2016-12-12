<?php

/* @OCUser/Inscription/echeancesPoub.html.twig */
class __TwigTemplate_7f2306ca2919ecde0a3aa901dea9e5fba735e4b3dc2eb0fd43d7fa6e8b223131 extends Twig_Template
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
        echo "<body>
    <h3>Les échéances</h3>


    <div class=\"well\">
        diff=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["diff"]) ? $context["diff"] : null), "html", null, true);
        echo "
        <BR>     daysEps=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["daysEpsDay"]) ? $context["daysEpsDay"] : null), "html", null, true);
        echo "
        <BR>      Dates= 

        ";
        // line 13
        echo "
        <BR>     dateNth=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["dateNth"]) ? $context["dateNth"] : null), "html", null, true);
        echo "
  <BR> echeancesNbinscritsmoinsun=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["echeancesNbinscritsmoinsun"]) ? $context["echeancesNbinscritsmoinsun"] : null), "html", null, true);
        echo "
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrits"]) ? $context["inscrits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["inscrit"]) {
            // line 17
            echo "         ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscrit"], "username", array()), "html", null, true);
            echo "
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
  
 <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/echeancesPoub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  36 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Inscription/echeancesPoub.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/echeancesPoub.html.twig");
    }
}
