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
        $__internal_87df9363d59ca68678c4169f4bdbb3d15f3c4143399016bd5c8e9042bb1949ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87df9363d59ca68678c4169f4bdbb3d15f3c4143399016bd5c8e9042bb1949ec->enter($__internal_87df9363d59ca68678c4169f4bdbb3d15f3c4143399016bd5c8e9042bb1949ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cec646a74ac1f5c556c301861170b654bb241ff457b149192769c39b8a4ff269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec646a74ac1f5c556c301861170b654bb241ff457b149192769c39b8a4ff269->enter($__internal_cec646a74ac1f5c556c301861170b654bb241ff457b149192769c39b8a4ff269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_87df9363d59ca68678c4169f4bdbb3d15f3c4143399016bd5c8e9042bb1949ec->leave($__internal_87df9363d59ca68678c4169f4bdbb3d15f3c4143399016bd5c8e9042bb1949ec_prof);

        
        $__internal_cec646a74ac1f5c556c301861170b654bb241ff457b149192769c39b8a4ff269->leave($__internal_cec646a74ac1f5c556c301861170b654bb241ff457b149192769c39b8a4ff269_prof);

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
