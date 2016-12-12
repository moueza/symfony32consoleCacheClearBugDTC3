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
        $__internal_ce5293364da3c44fbf2e20916269c69cf6bba031554503c4d6176d2dc2e7f805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5293364da3c44fbf2e20916269c69cf6bba031554503c4d6176d2dc2e7f805->enter($__internal_ce5293364da3c44fbf2e20916269c69cf6bba031554503c4d6176d2dc2e7f805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/secu.html.twig"));

        $__internal_c4117612ae88752a09f3d3979820451d689e638bb8cd11824e4ef80b8bebdabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4117612ae88752a09f3d3979820451d689e638bb8cd11824e4ef80b8bebdabd->enter($__internal_c4117612ae88752a09f3d3979820451d689e638bb8cd11824e4ef80b8bebdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/secu.html.twig"));

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
        
        $__internal_ce5293364da3c44fbf2e20916269c69cf6bba031554503c4d6176d2dc2e7f805->leave($__internal_ce5293364da3c44fbf2e20916269c69cf6bba031554503c4d6176d2dc2e7f805_prof);

        
        $__internal_c4117612ae88752a09f3d3979820451d689e638bb8cd11824e4ef80b8bebdabd->leave($__internal_c4117612ae88752a09f3d3979820451d689e638bb8cd11824e4ef80b8bebdabd_prof);

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
