<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_cec37ac7945d6301123e4e7770b517ea3b905b42befd05c405373e164c8df5d2 extends Twig_Template
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
        $__internal_b36886683283b4e73f97111316ee29aa004415546d0cbc4526eda5fba1a4eaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36886683283b4e73f97111316ee29aa004415546d0cbc4526eda5fba1a4eaef->enter($__internal_b36886683283b4e73f97111316ee29aa004415546d0cbc4526eda5fba1a4eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        $__internal_c9bd0602ad803eb95df9c7f0e4e5cbdf055d5f5b8e9bcc90c92f95be3a975508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bd0602ad803eb95df9c7f0e4e5cbdf055d5f5b8e9bcc90c92f95be3a975508->enter($__internal_c9bd0602ad803eb95df9c7f0e4e5cbdf055d5f5b8e9bcc90c92f95be3a975508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        // line 2
        echo "{\"results\" : [
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 4
            echo "{
    \"command\" : ";
            // line 5
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "input", array())));
            echo ",
    \"output\" : ";
            // line 6
            echo twig_jsonencode_filter($this->getAttribute($context["command"], "output", array()));
            echo ",
    \"environment\": ";
            // line 7
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "environment", array())));
            echo ",
    \"error_code\": ";
            // line 8
            echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getAttribute($context["command"], "error_code", array())));
            echo "
}";
            // line 9
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "] }
";
        
        $__internal_b36886683283b4e73f97111316ee29aa004415546d0cbc4526eda5fba1a4eaef->leave($__internal_b36886683283b4e73f97111316ee29aa004415546d0cbc4526eda5fba1a4eaef_prof);

        
        $__internal_c9bd0602ad803eb95df9c7f0e4e5cbdf055d5f5b8e9bcc90c92f95be3a975508->leave($__internal_c9bd0602ad803eb95df9c7f0e4e5cbdf055d5f5b8e9bcc90c92f95be3a975508_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  45 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% autoescape false %}
{\"results\" : [
{% for command in commands %}
{
    \"command\" : {{ command.input|escape|json_encode }},
    \"output\" : {{ command.output|json_encode }},
    \"environment\": {{ command.environment|escape|json_encode }},
    \"error_code\": {{ command.error_code|escape|json_encode }}
}{{ loop.last ? '' : ',' }}
{% endfor %}
] }
{% endautoescape %}
", "CoreSphereConsoleBundle:Console:result.json.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/var/cache/dev/../../../vendor/coresphere/console-bundle/Resources/views/Console/result.json.twig");
    }
}
