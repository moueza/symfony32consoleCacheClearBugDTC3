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
        $__internal_a64e8368a77fa715af6b809778a03d28486a8b5c70f9c8b3d46bf56c4676acb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64e8368a77fa715af6b809778a03d28486a8b5c70f9c8b3d46bf56c4676acb9->enter($__internal_a64e8368a77fa715af6b809778a03d28486a8b5c70f9c8b3d46bf56c4676acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeancesPoub.html.twig"));

        $__internal_8874c28e0b22353ce3ddb89fc440bca5e45a4adec4e3fc2e772a14e7634a95cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8874c28e0b22353ce3ddb89fc440bca5e45a4adec4e3fc2e772a14e7634a95cb->enter($__internal_8874c28e0b22353ce3ddb89fc440bca5e45a4adec4e3fc2e772a14e7634a95cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/echeancesPoub.html.twig"));

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
        
        $__internal_a64e8368a77fa715af6b809778a03d28486a8b5c70f9c8b3d46bf56c4676acb9->leave($__internal_a64e8368a77fa715af6b809778a03d28486a8b5c70f9c8b3d46bf56c4676acb9_prof);

        
        $__internal_8874c28e0b22353ce3ddb89fc440bca5e45a4adec4e3fc2e772a14e7634a95cb->leave($__internal_8874c28e0b22353ce3ddb89fc440bca5e45a4adec4e3fc2e772a14e7634a95cb_prof);

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