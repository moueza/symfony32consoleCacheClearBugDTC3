<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_588bb6a30449c941a41f4127eec6406c6b4be885f777c399c8141edd40999476 extends Twig_Template
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
        $__internal_7482429a75cffb7dffacd9f97b992c5db6e36a1a46e01d049eee91f457ec5de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7482429a75cffb7dffacd9f97b992c5db6e36a1a46e01d049eee91f457ec5de8->enter($__internal_7482429a75cffb7dffacd9f97b992c5db6e36a1a46e01d049eee91f457ec5de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_0e717e19bd293d8e63226a760f59b32c5aa215f070c5739c7e9534a6327e978c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e717e19bd293d8e63226a760f59b32c5aa215f070c5739c7e9534a6327e978c->enter($__internal_0e717e19bd293d8e63226a760f59b32c5aa215f070c5739c7e9534a6327e978c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7482429a75cffb7dffacd9f97b992c5db6e36a1a46e01d049eee91f457ec5de8->leave($__internal_7482429a75cffb7dffacd9f97b992c5db6e36a1a46e01d049eee91f457ec5de8_prof);

        
        $__internal_0e717e19bd293d8e63226a760f59b32c5aa215f070c5739c7e9534a6327e978c->leave($__internal_0e717e19bd293d8e63226a760f59b32c5aa215f070c5739c7e9534a6327e978c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
