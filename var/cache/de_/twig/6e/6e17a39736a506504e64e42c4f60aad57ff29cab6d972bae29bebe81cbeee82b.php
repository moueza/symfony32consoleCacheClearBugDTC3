<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dcbdd85f00ca5e8db7ebe1a8ccb35bf9cb46517304bbd0b1f2693feea2fbb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcbdd85f00ca5e8db7ebe1a8ccb35bf9cb46517304bbd0b1f2693feea2fbb43->enter($__internal_2dcbdd85f00ca5e8db7ebe1a8ccb35bf9cb46517304bbd0b1f2693feea2fbb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_043c0823a42d45a9bd16f8db7f883ecb96ec2b6c22b4dab4aaf27c2095229ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043c0823a42d45a9bd16f8db7f883ecb96ec2b6c22b4dab4aaf27c2095229ed7->enter($__internal_043c0823a42d45a9bd16f8db7f883ecb96ec2b6c22b4dab4aaf27c2095229ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_2dcbdd85f00ca5e8db7ebe1a8ccb35bf9cb46517304bbd0b1f2693feea2fbb43->leave($__internal_2dcbdd85f00ca5e8db7ebe1a8ccb35bf9cb46517304bbd0b1f2693feea2fbb43_prof);

        
        $__internal_043c0823a42d45a9bd16f8db7f883ecb96ec2b6c22b4dab4aaf27c2095229ed7->leave($__internal_043c0823a42d45a9bd16f8db7f883ecb96ec2b6c22b4dab4aaf27c2095229ed7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_560c599975f9fa234423c5ec393112d2f10605c7ffd36a36a3901943ef9cd519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560c599975f9fa234423c5ec393112d2f10605c7ffd36a36a3901943ef9cd519->enter($__internal_560c599975f9fa234423c5ec393112d2f10605c7ffd36a36a3901943ef9cd519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76b4c23668a22edc3293bfb8eedd4df4c1b5f6ee4a945f1195dd846bd1af57c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b4c23668a22edc3293bfb8eedd4df4c1b5f6ee4a945f1195dd846bd1af57c1->enter($__internal_76b4c23668a22edc3293bfb8eedd4df4c1b5f6ee4a945f1195dd846bd1af57c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_76b4c23668a22edc3293bfb8eedd4df4c1b5f6ee4a945f1195dd846bd1af57c1->leave($__internal_76b4c23668a22edc3293bfb8eedd4df4c1b5f6ee4a945f1195dd846bd1af57c1_prof);

        
        $__internal_560c599975f9fa234423c5ec393112d2f10605c7ffd36a36a3901943ef9cd519->leave($__internal_560c599975f9fa234423c5ec393112d2f10605c7ffd36a36a3901943ef9cd519_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_570b47795708ac49314a4f5375e1ef23ef924a34ecd46b9612f3b1e7fdf0f0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570b47795708ac49314a4f5375e1ef23ef924a34ecd46b9612f3b1e7fdf0f0ee->enter($__internal_570b47795708ac49314a4f5375e1ef23ef924a34ecd46b9612f3b1e7fdf0f0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f4d014c05b89c56b9fd731c72c9d817e9d7a5367fbf5dfa12ca17b8fb8a0d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d014c05b89c56b9fd731c72c9d817e9d7a5367fbf5dfa12ca17b8fb8a0d4e->enter($__internal_9f4d014c05b89c56b9fd731c72c9d817e9d7a5367fbf5dfa12ca17b8fb8a0d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f4d014c05b89c56b9fd731c72c9d817e9d7a5367fbf5dfa12ca17b8fb8a0d4e->leave($__internal_9f4d014c05b89c56b9fd731c72c9d817e9d7a5367fbf5dfa12ca17b8fb8a0d4e_prof);

        
        $__internal_570b47795708ac49314a4f5375e1ef23ef924a34ecd46b9612f3b1e7fdf0f0ee->leave($__internal_570b47795708ac49314a4f5375e1ef23ef924a34ecd46b9612f3b1e7fdf0f0ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_258adc387a2b146f47bf608aa9a70a8638e3bbc89ecf2c4c91e8f59a7a004e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258adc387a2b146f47bf608aa9a70a8638e3bbc89ecf2c4c91e8f59a7a004e89->enter($__internal_258adc387a2b146f47bf608aa9a70a8638e3bbc89ecf2c4c91e8f59a7a004e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eb05a6d593698bac113b6cba69a5cc8e8fb16a3602e23c2634bc1a7794396b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb05a6d593698bac113b6cba69a5cc8e8fb16a3602e23c2634bc1a7794396b9->enter($__internal_8eb05a6d593698bac113b6cba69a5cc8e8fb16a3602e23c2634bc1a7794396b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8eb05a6d593698bac113b6cba69a5cc8e8fb16a3602e23c2634bc1a7794396b9->leave($__internal_8eb05a6d593698bac113b6cba69a5cc8e8fb16a3602e23c2634bc1a7794396b9_prof);

        
        $__internal_258adc387a2b146f47bf608aa9a70a8638e3bbc89ecf2c4c91e8f59a7a004e89->leave($__internal_258adc387a2b146f47bf608aa9a70a8638e3bbc89ecf2c4c91e8f59a7a004e89_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37935aa4a2f70c60eb23b68694a6f5fcd0e45990ee6bd60cb636f68961ada877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37935aa4a2f70c60eb23b68694a6f5fcd0e45990ee6bd60cb636f68961ada877->enter($__internal_37935aa4a2f70c60eb23b68694a6f5fcd0e45990ee6bd60cb636f68961ada877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_af4e9d0d29b2b1aee7c9876bcf6c04858549235c27a017d70befab0388e1cb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4e9d0d29b2b1aee7c9876bcf6c04858549235c27a017d70befab0388e1cb35->enter($__internal_af4e9d0d29b2b1aee7c9876bcf6c04858549235c27a017d70befab0388e1cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af4e9d0d29b2b1aee7c9876bcf6c04858549235c27a017d70befab0388e1cb35->leave($__internal_af4e9d0d29b2b1aee7c9876bcf6c04858549235c27a017d70befab0388e1cb35_prof);

        
        $__internal_37935aa4a2f70c60eb23b68694a6f5fcd0e45990ee6bd60cb636f68961ada877->leave($__internal_37935aa4a2f70c60eb23b68694a6f5fcd0e45990ee6bd60cb636f68961ada877_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  64 => 5,  52 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/app/Resources/views/base.html.twig");
    }
}
