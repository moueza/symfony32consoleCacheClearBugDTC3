<?php

/* @OCUser/Inscription/inscrit.html.twig */
class __TwigTemplate_c711d7f1302fba65ff1867f6d4757c1d9af32618a50871a6baee5475520915ff extends Twig_Template
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
        $__internal_45e7cde13149764ad0d3080a7d8cca4ff63ed73a427641ad0197ac263d7140bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e7cde13149764ad0d3080a7d8cca4ff63ed73a427641ad0197ac263d7140bc->enter($__internal_45e7cde13149764ad0d3080a7d8cca4ff63ed73a427641ad0197ac263d7140bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrit.html.twig"));

        $__internal_505199d03e9cb450a6c56036ebb651b97b68643a130166c84f048b73111239af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505199d03e9cb450a6c56036ebb651b97b68643a130166c84f048b73111239af->enter($__internal_505199d03e9cb450a6c56036ebb651b97b68643a130166c84f048b73111239af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrit.html.twig"));

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
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inscrit"]) ? $context["inscrit"] : $this->getContext($context, "inscrit")), "email", array()), "html", null, true);
        echo "
        <a href='http://moueza.esy.es/m/'>OK</a>
    </div>
</body>";
        
        $__internal_45e7cde13149764ad0d3080a7d8cca4ff63ed73a427641ad0197ac263d7140bc->leave($__internal_45e7cde13149764ad0d3080a7d8cca4ff63ed73a427641ad0197ac263d7140bc_prof);

        
        $__internal_505199d03e9cb450a6c56036ebb651b97b68643a130166c84f048b73111239af->leave($__internal_505199d03e9cb450a6c56036ebb651b97b68643a130166c84f048b73111239af_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/inscrit.html.twig";
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
        {{ inscrit.username}} {{inscrit.email}}
        <a href='http://moueza.esy.es/m/'>OK</a>
    </div>
</body>", "@OCUser/Inscription/inscrit.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/inscrit.html.twig");
    }
}
