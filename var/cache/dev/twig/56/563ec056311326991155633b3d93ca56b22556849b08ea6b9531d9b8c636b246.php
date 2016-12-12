<?php

/* @CoreSphereConsole/Toolbar/toolbar.html.twig */
class __TwigTemplate_37253cc8c6e4719552371acbb9a21e872b8f6da73cc30fd3445aa517f690726d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d797b742c4e1d3e49c3b415130fcc9e2b0d0ab227ebe9a1fb165d510792f1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d797b742c4e1d3e49c3b415130fcc9e2b0d0ab227ebe9a1fb165d510792f1b6->enter($__internal_4d797b742c4e1d3e49c3b415130fcc9e2b0d0ab227ebe9a1fb165d510792f1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $__internal_22829a821b96bc9ee4089cba9c990ca5def67ce7c2f6dbf4f2af391a05bfb13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22829a821b96bc9ee4089cba9c990ca5def67ce7c2f6dbf4f2af391a05bfb13f->enter($__internal_22829a821b96bc9ee4089cba9c990ca5def67ce7c2f6dbf4f2af391a05bfb13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d797b742c4e1d3e49c3b415130fcc9e2b0d0ab227ebe9a1fb165d510792f1b6->leave($__internal_4d797b742c4e1d3e49c3b415130fcc9e2b0d0ab227ebe9a1fb165d510792f1b6_prof);

        
        $__internal_22829a821b96bc9ee4089cba9c990ca5def67ce7c2f6dbf4f2af391a05bfb13f->leave($__internal_22829a821b96bc9ee4089cba9c990ca5def67ce7c2f6dbf4f2af391a05bfb13f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78bba0201f9c6ad137e92ec8aa88d1178a70bd9c805424fa1c298b8f06abba88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bba0201f9c6ad137e92ec8aa88d1178a70bd9c805424fa1c298b8f06abba88->enter($__internal_78bba0201f9c6ad137e92ec8aa88d1178a70bd9c805424fa1c298b8f06abba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc342575d7e47f15a4401999c2a61d58ea74babf84debd778dc0ef7fa5d1d939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc342575d7e47f15a4401999c2a61d58ea74babf84debd778dc0ef7fa5d1d939->enter($__internal_dc342575d7e47f15a4401999c2a61d58ea74babf84debd778dc0ef7fa5d1d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_dc342575d7e47f15a4401999c2a61d58ea74babf84debd778dc0ef7fa5d1d939->leave($__internal_dc342575d7e47f15a4401999c2a61d58ea74babf84debd778dc0ef7fa5d1d939_prof);

        
        $__internal_78bba0201f9c6ad137e92ec8aa88d1178a70bd9c805424fa1c298b8f06abba88->leave($__internal_78bba0201f9c6ad137e92ec8aa88d1178a70bd9c805424fa1c298b8f06abba88_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Toolbar/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "@CoreSphereConsole/Toolbar/toolbar.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
