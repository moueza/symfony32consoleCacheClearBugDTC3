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
        $__internal_94aa17b6c81a757988bec58834bed4e93537ab1e04dd8699bf86cf50265fcd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94aa17b6c81a757988bec58834bed4e93537ab1e04dd8699bf86cf50265fcd3d->enter($__internal_94aa17b6c81a757988bec58834bed4e93537ab1e04dd8699bf86cf50265fcd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $__internal_72cfb60c1ab82f8b219778fa5ac4511a703cbb9ee2a6e0a20b07098b22afd6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cfb60c1ab82f8b219778fa5ac4511a703cbb9ee2a6e0a20b07098b22afd6f9->enter($__internal_72cfb60c1ab82f8b219778fa5ac4511a703cbb9ee2a6e0a20b07098b22afd6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94aa17b6c81a757988bec58834bed4e93537ab1e04dd8699bf86cf50265fcd3d->leave($__internal_94aa17b6c81a757988bec58834bed4e93537ab1e04dd8699bf86cf50265fcd3d_prof);

        
        $__internal_72cfb60c1ab82f8b219778fa5ac4511a703cbb9ee2a6e0a20b07098b22afd6f9->leave($__internal_72cfb60c1ab82f8b219778fa5ac4511a703cbb9ee2a6e0a20b07098b22afd6f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b2b58fc49ca578849613de698f7b45722a4811d8c79b3a286b1c72d1f5e671b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2b58fc49ca578849613de698f7b45722a4811d8c79b3a286b1c72d1f5e671b->enter($__internal_1b2b58fc49ca578849613de698f7b45722a4811d8c79b3a286b1c72d1f5e671b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3fda2c97e2edf68a466dde353740baaee763287e6bbae37adab6be3f2d839d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fda2c97e2edf68a466dde353740baaee763287e6bbae37adab6be3f2d839d7c->enter($__internal_3fda2c97e2edf68a466dde353740baaee763287e6bbae37adab6be3f2d839d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3fda2c97e2edf68a466dde353740baaee763287e6bbae37adab6be3f2d839d7c->leave($__internal_3fda2c97e2edf68a466dde353740baaee763287e6bbae37adab6be3f2d839d7c_prof);

        
        $__internal_1b2b58fc49ca578849613de698f7b45722a4811d8c79b3a286b1c72d1f5e671b->leave($__internal_1b2b58fc49ca578849613de698f7b45722a4811d8c79b3a286b1c72d1f5e671b_prof);

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
