<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b5dc5a4086d0bd5a883a791f2bb2c564c1c9a8ce99041ca6478472090a147fe9 extends Twig_Template
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
        $__internal_38b24ff08eeab14e4df2e0466add7a0d9cc1bd4d9dc8a307f5361f026a4bb362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b24ff08eeab14e4df2e0466add7a0d9cc1bd4d9dc8a307f5361f026a4bb362->enter($__internal_38b24ff08eeab14e4df2e0466add7a0d9cc1bd4d9dc8a307f5361f026a4bb362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d7509e7f26c68bde247cbc21a34aded4f61ca97a41faa2c3f31cfa4dd357d0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7509e7f26c68bde247cbc21a34aded4f61ca97a41faa2c3f31cfa4dd357d0f7->enter($__internal_d7509e7f26c68bde247cbc21a34aded4f61ca97a41faa2c3f31cfa4dd357d0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_38b24ff08eeab14e4df2e0466add7a0d9cc1bd4d9dc8a307f5361f026a4bb362->leave($__internal_38b24ff08eeab14e4df2e0466add7a0d9cc1bd4d9dc8a307f5361f026a4bb362_prof);

        
        $__internal_d7509e7f26c68bde247cbc21a34aded4f61ca97a41faa2c3f31cfa4dd357d0f7->leave($__internal_d7509e7f26c68bde247cbc21a34aded4f61ca97a41faa2c3f31cfa4dd357d0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
