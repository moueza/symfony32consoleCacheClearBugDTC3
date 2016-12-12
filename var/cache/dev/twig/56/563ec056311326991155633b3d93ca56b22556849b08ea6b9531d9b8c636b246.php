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
        $__internal_e301a933ae0114166ae912e13f08de4e79eb46da96ac7bb2321b1f46cd7d6758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e301a933ae0114166ae912e13f08de4e79eb46da96ac7bb2321b1f46cd7d6758->enter($__internal_e301a933ae0114166ae912e13f08de4e79eb46da96ac7bb2321b1f46cd7d6758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $__internal_fe7a07b5d15cea2319e288b830ac4b94f5d5263eacf3f120d381c172841ac273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7a07b5d15cea2319e288b830ac4b94f5d5263eacf3f120d381c172841ac273->enter($__internal_fe7a07b5d15cea2319e288b830ac4b94f5d5263eacf3f120d381c172841ac273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e301a933ae0114166ae912e13f08de4e79eb46da96ac7bb2321b1f46cd7d6758->leave($__internal_e301a933ae0114166ae912e13f08de4e79eb46da96ac7bb2321b1f46cd7d6758_prof);

        
        $__internal_fe7a07b5d15cea2319e288b830ac4b94f5d5263eacf3f120d381c172841ac273->leave($__internal_fe7a07b5d15cea2319e288b830ac4b94f5d5263eacf3f120d381c172841ac273_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a8c32d6b2f4fb33c49c0fb9e963f087b50124ac23ad8e1e52222275a6204040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c32d6b2f4fb33c49c0fb9e963f087b50124ac23ad8e1e52222275a6204040->enter($__internal_4a8c32d6b2f4fb33c49c0fb9e963f087b50124ac23ad8e1e52222275a6204040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ce7d0c033a97e602a2d7edb45a8454f18838f828cbc4763d2e2ee67eb4d5ddac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7d0c033a97e602a2d7edb45a8454f18838f828cbc4763d2e2ee67eb4d5ddac->enter($__internal_ce7d0c033a97e602a2d7edb45a8454f18838f828cbc4763d2e2ee67eb4d5ddac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ce7d0c033a97e602a2d7edb45a8454f18838f828cbc4763d2e2ee67eb4d5ddac->leave($__internal_ce7d0c033a97e602a2d7edb45a8454f18838f828cbc4763d2e2ee67eb4d5ddac_prof);

        
        $__internal_4a8c32d6b2f4fb33c49c0fb9e963f087b50124ac23ad8e1e52222275a6204040->leave($__internal_4a8c32d6b2f4fb33c49c0fb9e963f087b50124ac23ad8e1e52222275a6204040_prof);

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
