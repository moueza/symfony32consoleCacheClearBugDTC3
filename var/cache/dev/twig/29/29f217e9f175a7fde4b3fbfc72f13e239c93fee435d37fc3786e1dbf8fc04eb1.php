<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f545595115687d7ed2aa66cb0ce4caa35974271ff400b6f173f5a4bbdacda6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a658ca07c4512cca127587cbc12a0d30259d245e2e22f3c8d85b06113db888b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a658ca07c4512cca127587cbc12a0d30259d245e2e22f3c8d85b06113db888b->enter($__internal_0a658ca07c4512cca127587cbc12a0d30259d245e2e22f3c8d85b06113db888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d316a83522216e94773d7cbeb6463e74c35c4744e8d6a0fd477a3070e2a89d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d316a83522216e94773d7cbeb6463e74c35c4744e8d6a0fd477a3070e2a89d24->enter($__internal_d316a83522216e94773d7cbeb6463e74c35c4744e8d6a0fd477a3070e2a89d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a658ca07c4512cca127587cbc12a0d30259d245e2e22f3c8d85b06113db888b->leave($__internal_0a658ca07c4512cca127587cbc12a0d30259d245e2e22f3c8d85b06113db888b_prof);

        
        $__internal_d316a83522216e94773d7cbeb6463e74c35c4744e8d6a0fd477a3070e2a89d24->leave($__internal_d316a83522216e94773d7cbeb6463e74c35c4744e8d6a0fd477a3070e2a89d24_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e06cd3270845e15d84d3a8ee605aab3629de7b983872aebc54102ad34fb719e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e06cd3270845e15d84d3a8ee605aab3629de7b983872aebc54102ad34fb719e->enter($__internal_6e06cd3270845e15d84d3a8ee605aab3629de7b983872aebc54102ad34fb719e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e821e7e3380f30d7389ed908495435d5483beab34726e079a35b4370b51c2560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e821e7e3380f30d7389ed908495435d5483beab34726e079a35b4370b51c2560->enter($__internal_e821e7e3380f30d7389ed908495435d5483beab34726e079a35b4370b51c2560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e821e7e3380f30d7389ed908495435d5483beab34726e079a35b4370b51c2560->leave($__internal_e821e7e3380f30d7389ed908495435d5483beab34726e079a35b4370b51c2560_prof);

        
        $__internal_6e06cd3270845e15d84d3a8ee605aab3629de7b983872aebc54102ad34fb719e->leave($__internal_6e06cd3270845e15d84d3a8ee605aab3629de7b983872aebc54102ad34fb719e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
