<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9d0643677e54094d23d82b3ea78f8acc0aeccb706212c05826a7854cf29aff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19aaffda7a033c2fe0fddf2ea88e052ba3e42ac28c4a18dbaa0839a4f9f09531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19aaffda7a033c2fe0fddf2ea88e052ba3e42ac28c4a18dbaa0839a4f9f09531->enter($__internal_19aaffda7a033c2fe0fddf2ea88e052ba3e42ac28c4a18dbaa0839a4f9f09531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_252fc0405ba4e0db0683bbefa7a5b95e613629bb04c1178ddb3803e2730eeabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252fc0405ba4e0db0683bbefa7a5b95e613629bb04c1178ddb3803e2730eeabb->enter($__internal_252fc0405ba4e0db0683bbefa7a5b95e613629bb04c1178ddb3803e2730eeabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19aaffda7a033c2fe0fddf2ea88e052ba3e42ac28c4a18dbaa0839a4f9f09531->leave($__internal_19aaffda7a033c2fe0fddf2ea88e052ba3e42ac28c4a18dbaa0839a4f9f09531_prof);

        
        $__internal_252fc0405ba4e0db0683bbefa7a5b95e613629bb04c1178ddb3803e2730eeabb->leave($__internal_252fc0405ba4e0db0683bbefa7a5b95e613629bb04c1178ddb3803e2730eeabb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76069c19b97b66c18e0ccdbd2da928303ea6603d03fac558daec0596b0f1048b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76069c19b97b66c18e0ccdbd2da928303ea6603d03fac558daec0596b0f1048b->enter($__internal_76069c19b97b66c18e0ccdbd2da928303ea6603d03fac558daec0596b0f1048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71dbf4c3c94da3daf21194e089e792056eab05cf773c4785551d2f53c2bcbca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dbf4c3c94da3daf21194e089e792056eab05cf773c4785551d2f53c2bcbca3->enter($__internal_71dbf4c3c94da3daf21194e089e792056eab05cf773c4785551d2f53c2bcbca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71dbf4c3c94da3daf21194e089e792056eab05cf773c4785551d2f53c2bcbca3->leave($__internal_71dbf4c3c94da3daf21194e089e792056eab05cf773c4785551d2f53c2bcbca3_prof);

        
        $__internal_76069c19b97b66c18e0ccdbd2da928303ea6603d03fac558daec0596b0f1048b->leave($__internal_76069c19b97b66c18e0ccdbd2da928303ea6603d03fac558daec0596b0f1048b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e2b6880a4cec32dc29a266aeaaf950489730c6199804c04b9cd97da799a29b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2b6880a4cec32dc29a266aeaaf950489730c6199804c04b9cd97da799a29b2->enter($__internal_2e2b6880a4cec32dc29a266aeaaf950489730c6199804c04b9cd97da799a29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ac8fd2c69cc779eeeb9bfd766dad10c021a30733abcb461e694ee745bc8c12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac8fd2c69cc779eeeb9bfd766dad10c021a30733abcb461e694ee745bc8c12a->enter($__internal_8ac8fd2c69cc779eeeb9bfd766dad10c021a30733abcb461e694ee745bc8c12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8ac8fd2c69cc779eeeb9bfd766dad10c021a30733abcb461e694ee745bc8c12a->leave($__internal_8ac8fd2c69cc779eeeb9bfd766dad10c021a30733abcb461e694ee745bc8c12a_prof);

        
        $__internal_2e2b6880a4cec32dc29a266aeaaf950489730c6199804c04b9cd97da799a29b2->leave($__internal_2e2b6880a4cec32dc29a266aeaaf950489730c6199804c04b9cd97da799a29b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
