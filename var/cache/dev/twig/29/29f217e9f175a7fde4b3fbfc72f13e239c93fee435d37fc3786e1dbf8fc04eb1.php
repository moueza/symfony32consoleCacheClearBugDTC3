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
        $__internal_252d019d8576870046c906cab3c1d6b5d58fa1c242720c5bc950db3f9d3a6cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252d019d8576870046c906cab3c1d6b5d58fa1c242720c5bc950db3f9d3a6cb6->enter($__internal_252d019d8576870046c906cab3c1d6b5d58fa1c242720c5bc950db3f9d3a6cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_90346205cfcf0ba94c74ea46271dd4d8fce899f07495e7523a021ecce3633d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90346205cfcf0ba94c74ea46271dd4d8fce899f07495e7523a021ecce3633d38->enter($__internal_90346205cfcf0ba94c74ea46271dd4d8fce899f07495e7523a021ecce3633d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_252d019d8576870046c906cab3c1d6b5d58fa1c242720c5bc950db3f9d3a6cb6->leave($__internal_252d019d8576870046c906cab3c1d6b5d58fa1c242720c5bc950db3f9d3a6cb6_prof);

        
        $__internal_90346205cfcf0ba94c74ea46271dd4d8fce899f07495e7523a021ecce3633d38->leave($__internal_90346205cfcf0ba94c74ea46271dd4d8fce899f07495e7523a021ecce3633d38_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_62dae21f90fb6763aaed1fc62083eacea93ce786cebed80491ae13bf4576b472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62dae21f90fb6763aaed1fc62083eacea93ce786cebed80491ae13bf4576b472->enter($__internal_62dae21f90fb6763aaed1fc62083eacea93ce786cebed80491ae13bf4576b472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7507dcf9a289527f2b29f7ae1a1ce560612eb8ac1bf8ba1dc8edef0ccc33242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7507dcf9a289527f2b29f7ae1a1ce560612eb8ac1bf8ba1dc8edef0ccc33242e->enter($__internal_7507dcf9a289527f2b29f7ae1a1ce560612eb8ac1bf8ba1dc8edef0ccc33242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7507dcf9a289527f2b29f7ae1a1ce560612eb8ac1bf8ba1dc8edef0ccc33242e->leave($__internal_7507dcf9a289527f2b29f7ae1a1ce560612eb8ac1bf8ba1dc8edef0ccc33242e_prof);

        
        $__internal_62dae21f90fb6763aaed1fc62083eacea93ce786cebed80491ae13bf4576b472->leave($__internal_62dae21f90fb6763aaed1fc62083eacea93ce786cebed80491ae13bf4576b472_prof);

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
