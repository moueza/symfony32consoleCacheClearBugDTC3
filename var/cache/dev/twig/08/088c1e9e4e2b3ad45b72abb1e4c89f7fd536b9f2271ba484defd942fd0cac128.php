<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_13a36e8b69a475d43e92fc575a88dc734809892f2d342d4ca70e120e0b61e457 extends Twig_Template
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
        $__internal_cbd20f8a9fc94ff7e7df3be794da76c6dccd9280b76d449779251f7c4b655bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd20f8a9fc94ff7e7df3be794da76c6dccd9280b76d449779251f7c4b655bd9->enter($__internal_cbd20f8a9fc94ff7e7df3be794da76c6dccd9280b76d449779251f7c4b655bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_e366589c7cf8d8c4966b18c629bdc3f62058d53cc8892f11012b65882b3dde18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e366589c7cf8d8c4966b18c629bdc3f62058d53cc8892f11012b65882b3dde18->enter($__internal_e366589c7cf8d8c4966b18c629bdc3f62058d53cc8892f11012b65882b3dde18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbd20f8a9fc94ff7e7df3be794da76c6dccd9280b76d449779251f7c4b655bd9->leave($__internal_cbd20f8a9fc94ff7e7df3be794da76c6dccd9280b76d449779251f7c4b655bd9_prof);

        
        $__internal_e366589c7cf8d8c4966b18c629bdc3f62058d53cc8892f11012b65882b3dde18->leave($__internal_e366589c7cf8d8c4966b18c629bdc3f62058d53cc8892f11012b65882b3dde18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd25bc891b62179f2524bb82a5513b3b72cb55ef7f771b4561c70ec027853f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd25bc891b62179f2524bb82a5513b3b72cb55ef7f771b4561c70ec027853f58->enter($__internal_bd25bc891b62179f2524bb82a5513b3b72cb55ef7f771b4561c70ec027853f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6edd6c2cd9f8e6811ebf166b7d75ae94e1cb22306123a1c2454d5d4a9b2d0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6edd6c2cd9f8e6811ebf166b7d75ae94e1cb22306123a1c2454d5d4a9b2d0a6->enter($__internal_c6edd6c2cd9f8e6811ebf166b7d75ae94e1cb22306123a1c2454d5d4a9b2d0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c6edd6c2cd9f8e6811ebf166b7d75ae94e1cb22306123a1c2454d5d4a9b2d0a6->leave($__internal_c6edd6c2cd9f8e6811ebf166b7d75ae94e1cb22306123a1c2454d5d4a9b2d0a6_prof);

        
        $__internal_bd25bc891b62179f2524bb82a5513b3b72cb55ef7f771b4561c70ec027853f58->leave($__internal_bd25bc891b62179f2524bb82a5513b3b72cb55ef7f771b4561c70ec027853f58_prof);

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
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/var/cache/dev/../../../vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
