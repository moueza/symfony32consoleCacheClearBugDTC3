<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_5d61f0bb61d07f93377d9203106a3fdb7550827491b3d443ee183751159b7e78 extends Twig_Template
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
        $__internal_063aa988806b1f2e05e109fcdbf8499cd6251276c09c7904e7df39cb7162d7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063aa988806b1f2e05e109fcdbf8499cd6251276c09c7904e7df39cb7162d7c1->enter($__internal_063aa988806b1f2e05e109fcdbf8499cd6251276c09c7904e7df39cb7162d7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_979dfc9588bd0ceda269c203ca2b59fe1d58b1629b36e65046173c51faa4aef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979dfc9588bd0ceda269c203ca2b59fe1d58b1629b36e65046173c51faa4aef6->enter($__internal_979dfc9588bd0ceda269c203ca2b59fe1d58b1629b36e65046173c51faa4aef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_063aa988806b1f2e05e109fcdbf8499cd6251276c09c7904e7df39cb7162d7c1->leave($__internal_063aa988806b1f2e05e109fcdbf8499cd6251276c09c7904e7df39cb7162d7c1_prof);

        
        $__internal_979dfc9588bd0ceda269c203ca2b59fe1d58b1629b36e65046173c51faa4aef6->leave($__internal_979dfc9588bd0ceda269c203ca2b59fe1d58b1629b36e65046173c51faa4aef6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
