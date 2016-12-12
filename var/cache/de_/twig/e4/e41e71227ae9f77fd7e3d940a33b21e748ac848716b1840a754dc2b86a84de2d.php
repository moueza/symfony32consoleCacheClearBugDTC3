<?php

/* @OCUser/Matchh/matchform2personnalized.html.twig */
class __TwigTemplate_5b53ceb24c2333a1c1eca209356c62a5fd5604d8f764bf23e0e15e0d79e4ce73 extends Twig_Template
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
        $__internal_13bcc76e5189e093a48cc749902c2805e1593f3234f053ad85ef975c7571e5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bcc76e5189e093a48cc749902c2805e1593f3234f053ad85ef975c7571e5b1->enter($__internal_13bcc76e5189e093a48cc749902c2805e1593f3234f053ad85ef975c7571e5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform2personnalized.html.twig"));

        $__internal_4ffd3c97f1151b5a54420c6844ab0eb2c289e526f76b532598656ffa35baf30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffd3c97f1151b5a54420c6844ab0eb2c289e526f76b532598656ffa35baf30a->enter($__internal_4ffd3c97f1151b5a54420c6844ab0eb2c289e526f76b532598656ffa35baf30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform2personnalized.html.twig"));

        // line 1
        echo "
<h3>Saisie d'un match</h3>


<div class=\"well\">



    <!-- \$advert = \$this->getDoctrine()
    
      ->getManager()
    
      ->getRepository('OCPlatformBundle:Advert')
    
      ->find(\$id)
    
    ; -->
    ";
        // line 19
        echo " 

    <div class=\"well\">

        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    </div>

    <a href='http://moueza.esy.es/m/'>OK</a>
</div>
";
        
        $__internal_13bcc76e5189e093a48cc749902c2805e1593f3234f053ad85ef975c7571e5b1->leave($__internal_13bcc76e5189e093a48cc749902c2805e1593f3234f053ad85ef975c7571e5b1_prof);

        
        $__internal_4ffd3c97f1151b5a54420c6844ab0eb2c289e526f76b532598656ffa35baf30a->leave($__internal_4ffd3c97f1151b5a54420c6844ab0eb2c289e526f76b532598656ffa35baf30a_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Matchh/matchform2personnalized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  44 => 19,  25 => 1,);
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
<h3>Saisie d'un match</h3>


<div class=\"well\">



    <!-- \$advert = \$this->getDoctrine()
    
      ->getManager()
    
      ->getRepository('OCPlatformBundle:Advert')
    
      ->find(\$id)
    
    ; -->
    {#  {{ match.joueur1}}   {{ match.score1J1}}  {{ match.score1J2}} {{isScore1Tie}}       {{ match.score2J1}}  {{ match.score2J2}}  {{isScore1Tie}}        {{ match.score3J1}}  {{ match.score3J2}}  {{ match.joueur2}}  {{isScore1Tie}}
   #} 

    <div class=\"well\">

        {{ form(form) }}

    </div>

    <a href='http://moueza.esy.es/m/'>OK</a>
</div>
", "@OCUser/Matchh/matchform2personnalized.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchform2personnalized.html.twig");
    }
}
