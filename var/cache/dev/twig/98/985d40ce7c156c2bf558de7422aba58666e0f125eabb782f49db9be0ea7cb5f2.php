<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_e1978bb55e07e9886d12abb0bc95f2311e3b8661468ed9b3d2d8d4839801d695 extends Twig_Template
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
        $__internal_81dafa5a11ed8019e013a5c8d19904b15834c69bc5d8f818bb0efc036e6e834a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dafa5a11ed8019e013a5c8d19904b15834c69bc5d8f818bb0efc036e6e834a->enter($__internal_81dafa5a11ed8019e013a5c8d19904b15834c69bc5d8f818bb0efc036e6e834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        $__internal_48f1980dc2c961b9ae4c28d31a4623b2fb6107c0f83cbc8d2775825f75217ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f1980dc2c961b9ae4c28d31a4623b2fb6107c0f83cbc8d2775825f75217ca3->enter($__internal_48f1980dc2c961b9ae4c28d31a4623b2fb6107c0f83cbc8d2775825f75217ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) ? $context["working_dir"] : $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_81dafa5a11ed8019e013a5c8d19904b15834c69bc5d8f818bb0efc036e6e834a->leave($__internal_81dafa5a11ed8019e013a5c8d19904b15834c69bc5d8f818bb0efc036e6e834a_prof);

        
        $__internal_48f1980dc2c961b9ae4c28d31a4623b2fb6107c0f83cbc8d2775825f75217ca3->leave($__internal_48f1980dc2c961b9ae4c28d31a4623b2fb6107c0f83cbc8d2775825f75217ca3_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'coresphere_console.headline.index'|trans }}</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>
        <span class=\"console_env_info\">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
", "CoreSphereConsoleBundle:Console:terminal.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/Console/terminal.html.twig");
    }
}
