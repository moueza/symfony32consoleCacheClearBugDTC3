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
        $__internal_c82b0e8fb945183e3a67de217c9122e0420967627ac24a16baec4630bf2133b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82b0e8fb945183e3a67de217c9122e0420967627ac24a16baec4630bf2133b4->enter($__internal_c82b0e8fb945183e3a67de217c9122e0420967627ac24a16baec4630bf2133b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrit.html.twig"));

        $__internal_1effd3d85700405d0f4448c6b1a4561c926771d705910ae8fbb196164f736db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1effd3d85700405d0f4448c6b1a4561c926771d705910ae8fbb196164f736db0->enter($__internal_1effd3d85700405d0f4448c6b1a4561c926771d705910ae8fbb196164f736db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrit.html.twig"));

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
        
        $__internal_c82b0e8fb945183e3a67de217c9122e0420967627ac24a16baec4630bf2133b4->leave($__internal_c82b0e8fb945183e3a67de217c9122e0420967627ac24a16baec4630bf2133b4_prof);

        
        $__internal_1effd3d85700405d0f4448c6b1a4561c926771d705910ae8fbb196164f736db0->leave($__internal_1effd3d85700405d0f4448c6b1a4561c926771d705910ae8fbb196164f736db0_prof);

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
