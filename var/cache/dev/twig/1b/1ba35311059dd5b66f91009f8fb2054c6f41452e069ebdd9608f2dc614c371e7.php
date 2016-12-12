<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_a37938769c4945801c4e3995a952213dbe38028b6f7fdddf7beec0624f2118e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
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
        $__internal_46a305affe282e8e1ccee24818053d7e6d16d574e35b8c2773894731eb476ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a305affe282e8e1ccee24818053d7e6d16d574e35b8c2773894731eb476ec9->enter($__internal_46a305affe282e8e1ccee24818053d7e6d16d574e35b8c2773894731eb476ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_d72b2b24d89644a14e6cf2c49b4dd4229710931bed0e1018d5576fef0d9c4f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72b2b24d89644a14e6cf2c49b4dd4229710931bed0e1018d5576fef0d9c4f8c->enter($__internal_d72b2b24d89644a14e6cf2c49b4dd4229710931bed0e1018d5576fef0d9c4f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a305affe282e8e1ccee24818053d7e6d16d574e35b8c2773894731eb476ec9->leave($__internal_46a305affe282e8e1ccee24818053d7e6d16d574e35b8c2773894731eb476ec9_prof);

        
        $__internal_d72b2b24d89644a14e6cf2c49b4dd4229710931bed0e1018d5576fef0d9c4f8c->leave($__internal_d72b2b24d89644a14e6cf2c49b4dd4229710931bed0e1018d5576fef0d9c4f8c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59ff5dddb99b5fd04c621a6d9477c6931742d262edd2c16fb4dbf558bffd3d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ff5dddb99b5fd04c621a6d9477c6931742d262edd2c16fb4dbf558bffd3d2a->enter($__internal_59ff5dddb99b5fd04c621a6d9477c6931742d262edd2c16fb4dbf558bffd3d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b41b6bf0d0ff3940e4c3752f4260cf28033b792506955589ea74464cf13005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b41b6bf0d0ff3940e4c3752f4260cf28033b792506955589ea74464cf13005c->enter($__internal_3b41b6bf0d0ff3940e4c3752f4260cf28033b792506955589ea74464cf13005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_3b41b6bf0d0ff3940e4c3752f4260cf28033b792506955589ea74464cf13005c->leave($__internal_3b41b6bf0d0ff3940e4c3752f4260cf28033b792506955589ea74464cf13005c_prof);

        
        $__internal_59ff5dddb99b5fd04c621a6d9477c6931742d262edd2c16fb4dbf558bffd3d2a->leave($__internal_59ff5dddb99b5fd04c621a6d9477c6931742d262edd2c16fb4dbf558bffd3d2a_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
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
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
