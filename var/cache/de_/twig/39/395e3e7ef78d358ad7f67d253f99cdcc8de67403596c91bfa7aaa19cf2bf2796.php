<?php

/* @OCUser/Inscription/echeancesPoub.html.twig */
class __TwigTemplate_0e8221ebdb8d3405bb8cdaa9259084b2c07858eed0f8c4cbe1460763bbddc09e extends Twig_Template
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
        $__internal_81e6d5c551dbaf417f7e0f5637ad53950621ed563a8cf9c46eee42b33ec756d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e6d5c551dbaf417f7e0f5637ad53950621ed563a8cf9c46eee42b33ec756d4->enter($__internal_81e6d5c551dbaf417f7e0f5637ad53950621ed563a8cf9c46eee42b33ec756d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeancesPoub.html.twig"));

        $__internal_9d4810580a5be05e4e2abca230eef0adb4dcfffdfa2e8cdaffc19ec220bf1b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4810580a5be05e4e2abca230eef0adb4dcfffdfa2e8cdaffc19ec220bf1b0d->enter($__internal_9d4810580a5be05e4e2abca230eef0adb4dcfffdfa2e8cdaffc19ec220bf1b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeancesPoub.html.twig"));

        // line 1
        echo "<body>
    <h3>Les échéances</h3>


    <div class=\"well\">
        diff=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["diff"]) ? $context["diff"] : $this->getContext($context, "diff")), "html", null, true);
        echo "
        <BR>     daysEps=";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["daysEpsDay"]) ? $context["daysEpsDay"] : $this->getContext($context, "daysEpsDay")), "html", null, true);
        echo "
        <BR>      Dates= 

        ";
        // line 13
        echo "
        <BR>     dateNth=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["dateNth"]) ? $context["dateNth"] : $this->getContext($context, "dateNth")), "html", null, true);
        echo "
  <BR> echeancesNbinscritsmoinsun=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["echeancesNbinscritsmoinsun"]) ? $context["echeancesNbinscritsmoinsun"] : $this->getContext($context, "echeancesNbinscritsmoinsun")), "html", null, true);
        echo "
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscrits"]) ? $context["inscrits"] : $this->getContext($context, "inscrits")));
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
        
        $__internal_81e6d5c551dbaf417f7e0f5637ad53950621ed563a8cf9c46eee42b33ec756d4->leave($__internal_81e6d5c551dbaf417f7e0f5637ad53950621ed563a8cf9c46eee42b33ec756d4_prof);

        
        $__internal_9d4810580a5be05e4e2abca230eef0adb4dcfffdfa2e8cdaffc19ec220bf1b0d->leave($__internal_9d4810580a5be05e4e2abca230eef0adb4dcfffdfa2e8cdaffc19ec220bf1b0d_prof);

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
        return array (  66 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  42 => 13,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
    <h3>Les échéances</h3>


    <div class=\"well\">
        diff={{diff}}
        <BR>     daysEps={{daysEpsDay}}
        <BR>      Dates= 

        {# {% for date in datesPERIOD %}
         {{date}}
         {% endfor %}#}

        <BR>     dateNth={{dateNth}}
  <BR> echeancesNbinscritsmoinsun={{echeancesNbinscritsmoinsun}}
     {% for inscrit in inscrits %}
         {{inscrit.username}}
         {% endfor %}  
  
 <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>
</body>", "@OCUser/Inscription/echeancesPoub.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/echeancesPoub.html.twig");
    }
}
