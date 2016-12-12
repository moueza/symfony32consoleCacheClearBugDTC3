<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2f0abc36a76879b2101380feaff1e568534bca7fec586d3e6613e4bf840a4f59 extends Twig_Template
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
        $__internal_b5d1443adce2e7165f02db1d85cae51dd5c58f8c3b27227e8fd330f49005b7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d1443adce2e7165f02db1d85cae51dd5c58f8c3b27227e8fd330f49005b7be->enter($__internal_b5d1443adce2e7165f02db1d85cae51dd5c58f8c3b27227e8fd330f49005b7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a88b26f84df3c848c29ed938827ed3078d3212b35e3abf6abb740c29cdc3ee89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88b26f84df3c848c29ed938827ed3078d3212b35e3abf6abb740c29cdc3ee89->enter($__internal_a88b26f84df3c848c29ed938827ed3078d3212b35e3abf6abb740c29cdc3ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b5d1443adce2e7165f02db1d85cae51dd5c58f8c3b27227e8fd330f49005b7be->leave($__internal_b5d1443adce2e7165f02db1d85cae51dd5c58f8c3b27227e8fd330f49005b7be_prof);

        
        $__internal_a88b26f84df3c848c29ed938827ed3078d3212b35e3abf6abb740c29cdc3ee89->leave($__internal_a88b26f84df3c848c29ed938827ed3078d3212b35e3abf6abb740c29cdc3ee89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
