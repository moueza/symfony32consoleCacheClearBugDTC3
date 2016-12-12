<?php

/* @OCUser/Inscription/secu.html.twig */
class __TwigTemplate_4888eded50cb036144e319743c365c8e12632647bca4905b5e8b3665a47a3353 extends Twig_Template
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
        $__internal_501abb407c56970a52cf66e3335d4bf7a14112a2fd4ba4bb203894dc392660ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501abb407c56970a52cf66e3335d4bf7a14112a2fd4ba4bb203894dc392660ee->enter($__internal_501abb407c56970a52cf66e3335d4bf7a14112a2fd4ba4bb203894dc392660ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/secu.html.twig"));

        $__internal_485bca3b65fa0b5dfa5d21032bca047b7894bad5a688d956d0a2fd5ade78e63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485bca3b65fa0b5dfa5d21032bca047b7894bad5a688d956d0a2fd5ade78e63f->enter($__internal_485bca3b65fa0b5dfa5d21032bca047b7894bad5a688d956d0a2fd5ade78e63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/secu.html.twig"));

        // line 1
        echo "<body>
    <h3>Confirmation de l'incription</h3>


    <div class=\"well\">
        Inscription enregistrée


        <!-- \$advert = \$this->getDoctrine()
        
          ->getManager()
        
          ->getRepository('OCPlatformBundle:Advert')
        
          ->find(\$id)
        
        ; -->
        Pseudo  ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["pseudoo"]) ? $context["pseudoo"] : $this->getContext($context, "pseudoo")), "html", null, true);
        echo " Pass : ";
        echo twig_escape_filter($this->env, (isset($context["passwordd"]) ? $context["passwordd"] : $this->getContext($context, "passwordd")), "html", null, true);
        echo "
        <a href='http://moueza.esy.es/m/'>OK</a>
    </div>
</body>";
        
        $__internal_501abb407c56970a52cf66e3335d4bf7a14112a2fd4ba4bb203894dc392660ee->leave($__internal_501abb407c56970a52cf66e3335d4bf7a14112a2fd4ba4bb203894dc392660ee_prof);

        
        $__internal_485bca3b65fa0b5dfa5d21032bca047b7894bad5a688d956d0a2fd5ade78e63f->leave($__internal_485bca3b65fa0b5dfa5d21032bca047b7894bad5a688d956d0a2fd5ade78e63f_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/secu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  25 => 1,);
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
    <h3>Confirmation de l'incription</h3>


    <div class=\"well\">
        Inscription enregistrée


        <!-- \$advert = \$this->getDoctrine()
        
          ->getManager()
        
          ->getRepository('OCPlatformBundle:Advert')
        
          ->find(\$id)
        
        ; -->
        Pseudo  {{pseudoo}} Pass : {{passwordd}}
        <a href='http://moueza.esy.es/m/'>OK</a>
    </div>
</body>", "@OCUser/Inscription/secu.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/secu.html.twig");
    }
}
