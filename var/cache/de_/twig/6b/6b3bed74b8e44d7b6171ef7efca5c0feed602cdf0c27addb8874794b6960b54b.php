<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_cf9581aa86eec52dba10373b1433911c1560c0ccbd1e257c7d27183edb822756 extends Twig_Template
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
        $__internal_235f3135045d56b5130f8e6ac7f7b79e6e33dc1106909caa2e6ef4ac018bb297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235f3135045d56b5130f8e6ac7f7b79e6e33dc1106909caa2e6ef4ac018bb297->enter($__internal_235f3135045d56b5130f8e6ac7f7b79e6e33dc1106909caa2e6ef4ac018bb297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_12210d675f4493e2cac471c522a5eea8a289b22e7dc1f820cd92b58e209fc8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12210d675f4493e2cac471c522a5eea8a289b22e7dc1f820cd92b58e209fc8bb->enter($__internal_12210d675f4493e2cac471c522a5eea8a289b22e7dc1f820cd92b58e209fc8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_235f3135045d56b5130f8e6ac7f7b79e6e33dc1106909caa2e6ef4ac018bb297->leave($__internal_235f3135045d56b5130f8e6ac7f7b79e6e33dc1106909caa2e6ef4ac018bb297_prof);

        
        $__internal_12210d675f4493e2cac471c522a5eea8a289b22e7dc1f820cd92b58e209fc8bb->leave($__internal_12210d675f4493e2cac471c522a5eea8a289b22e7dc1f820cd92b58e209fc8bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
