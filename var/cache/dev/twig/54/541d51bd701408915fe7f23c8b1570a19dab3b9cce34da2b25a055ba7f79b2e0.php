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
        $__internal_fe11c8a465f6a25657aa71783ee3767b940a1b893a31b6e55ecec155ff739800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe11c8a465f6a25657aa71783ee3767b940a1b893a31b6e55ecec155ff739800->enter($__internal_fe11c8a465f6a25657aa71783ee3767b940a1b893a31b6e55ecec155ff739800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b3e74daa7d544a1e528d0648e404f0a44cbf47a9875ffbf7f6f6d444f45c1746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e74daa7d544a1e528d0648e404f0a44cbf47a9875ffbf7f6f6d444f45c1746->enter($__internal_b3e74daa7d544a1e528d0648e404f0a44cbf47a9875ffbf7f6f6d444f45c1746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe11c8a465f6a25657aa71783ee3767b940a1b893a31b6e55ecec155ff739800->leave($__internal_fe11c8a465f6a25657aa71783ee3767b940a1b893a31b6e55ecec155ff739800_prof);

        
        $__internal_b3e74daa7d544a1e528d0648e404f0a44cbf47a9875ffbf7f6f6d444f45c1746->leave($__internal_b3e74daa7d544a1e528d0648e404f0a44cbf47a9875ffbf7f6f6d444f45c1746_prof);

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
