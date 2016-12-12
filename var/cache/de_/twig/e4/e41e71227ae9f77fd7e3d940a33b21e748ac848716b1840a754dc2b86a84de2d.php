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
        $__internal_8b8e7582df7781b1c6c52e4b29c965c02faaa373dd5e7d2436085aef3383ce14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e7582df7781b1c6c52e4b29c965c02faaa373dd5e7d2436085aef3383ce14->enter($__internal_8b8e7582df7781b1c6c52e4b29c965c02faaa373dd5e7d2436085aef3383ce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform2personnalized.html.twig"));

        $__internal_a715518886b1e6626590b38fb645858110510d00ff81377843c9395b8d522648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a715518886b1e6626590b38fb645858110510d00ff81377843c9395b8d522648->enter($__internal_a715518886b1e6626590b38fb645858110510d00ff81377843c9395b8d522648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform2personnalized.html.twig"));

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
        
        $__internal_8b8e7582df7781b1c6c52e4b29c965c02faaa373dd5e7d2436085aef3383ce14->leave($__internal_8b8e7582df7781b1c6c52e4b29c965c02faaa373dd5e7d2436085aef3383ce14_prof);

        
        $__internal_a715518886b1e6626590b38fb645858110510d00ff81377843c9395b8d522648->leave($__internal_a715518886b1e6626590b38fb645858110510d00ff81377843c9395b8d522648_prof);

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
