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
        $__internal_84144b1201b14fa34c934a4fed59a77459de453b4c66459a5b0be436e8c1fddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84144b1201b14fa34c934a4fed59a77459de453b4c66459a5b0be436e8c1fddb->enter($__internal_84144b1201b14fa34c934a4fed59a77459de453b4c66459a5b0be436e8c1fddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81e8725e70f5ce5706ac5b4c69608df338d950084e4d4b48cff56c5fc295c8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e8725e70f5ce5706ac5b4c69608df338d950084e4d4b48cff56c5fc295c8fe->enter($__internal_81e8725e70f5ce5706ac5b4c69608df338d950084e4d4b48cff56c5fc295c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84144b1201b14fa34c934a4fed59a77459de453b4c66459a5b0be436e8c1fddb->leave($__internal_84144b1201b14fa34c934a4fed59a77459de453b4c66459a5b0be436e8c1fddb_prof);

        
        $__internal_81e8725e70f5ce5706ac5b4c69608df338d950084e4d4b48cff56c5fc295c8fe->leave($__internal_81e8725e70f5ce5706ac5b4c69608df338d950084e4d4b48cff56c5fc295c8fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_537cf39b8507e39beaefc543bd1689f5fa6f0902114d2841b1b2ed0ad6550f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537cf39b8507e39beaefc543bd1689f5fa6f0902114d2841b1b2ed0ad6550f8b->enter($__internal_537cf39b8507e39beaefc543bd1689f5fa6f0902114d2841b1b2ed0ad6550f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b478480619ea943be5981104ef0e14392ea37193feafa1d5323fd75b57298488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b478480619ea943be5981104ef0e14392ea37193feafa1d5323fd75b57298488->enter($__internal_b478480619ea943be5981104ef0e14392ea37193feafa1d5323fd75b57298488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b478480619ea943be5981104ef0e14392ea37193feafa1d5323fd75b57298488->leave($__internal_b478480619ea943be5981104ef0e14392ea37193feafa1d5323fd75b57298488_prof);

        
        $__internal_537cf39b8507e39beaefc543bd1689f5fa6f0902114d2841b1b2ed0ad6550f8b->leave($__internal_537cf39b8507e39beaefc543bd1689f5fa6f0902114d2841b1b2ed0ad6550f8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4dc6cc848ad86bc08bd2b707c64e7e049125b622cc76c3299ad776f230dceb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc6cc848ad86bc08bd2b707c64e7e049125b622cc76c3299ad776f230dceb7e->enter($__internal_4dc6cc848ad86bc08bd2b707c64e7e049125b622cc76c3299ad776f230dceb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f636892c70bf7753cb94e17eb68bcef4b2a7d55ce663f8398d1f6438a02fe6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f636892c70bf7753cb94e17eb68bcef4b2a7d55ce663f8398d1f6438a02fe6eb->enter($__internal_f636892c70bf7753cb94e17eb68bcef4b2a7d55ce663f8398d1f6438a02fe6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f636892c70bf7753cb94e17eb68bcef4b2a7d55ce663f8398d1f6438a02fe6eb->leave($__internal_f636892c70bf7753cb94e17eb68bcef4b2a7d55ce663f8398d1f6438a02fe6eb_prof);

        
        $__internal_4dc6cc848ad86bc08bd2b707c64e7e049125b622cc76c3299ad776f230dceb7e->leave($__internal_4dc6cc848ad86bc08bd2b707c64e7e049125b622cc76c3299ad776f230dceb7e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b733e03ecac3e4162dea0e1c60fcdf4a80070222b44c066b2a671437ae79e51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b733e03ecac3e4162dea0e1c60fcdf4a80070222b44c066b2a671437ae79e51b->enter($__internal_b733e03ecac3e4162dea0e1c60fcdf4a80070222b44c066b2a671437ae79e51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d37acb023627a425ffb9c2bc6b437e645decbb18ee6feade6f4239b73325df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37acb023627a425ffb9c2bc6b437e645decbb18ee6feade6f4239b73325df01->enter($__internal_d37acb023627a425ffb9c2bc6b437e645decbb18ee6feade6f4239b73325df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d37acb023627a425ffb9c2bc6b437e645decbb18ee6feade6f4239b73325df01->leave($__internal_d37acb023627a425ffb9c2bc6b437e645decbb18ee6feade6f4239b73325df01_prof);

        
        $__internal_b733e03ecac3e4162dea0e1c60fcdf4a80070222b44c066b2a671437ae79e51b->leave($__internal_b733e03ecac3e4162dea0e1c60fcdf4a80070222b44c066b2a671437ae79e51b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1824a4463cf828b751db9081de8a595fd3d47faf66c918997319db5b5418f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1824a4463cf828b751db9081de8a595fd3d47faf66c918997319db5b5418f5a->enter($__internal_b1824a4463cf828b751db9081de8a595fd3d47faf66c918997319db5b5418f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3198219cc80f9ab646892ad1e38416610b3d4d14aa9b3d92de496f5dd49e53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3198219cc80f9ab646892ad1e38416610b3d4d14aa9b3d92de496f5dd49e53b->enter($__internal_c3198219cc80f9ab646892ad1e38416610b3d4d14aa9b3d92de496f5dd49e53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3198219cc80f9ab646892ad1e38416610b3d4d14aa9b3d92de496f5dd49e53b->leave($__internal_c3198219cc80f9ab646892ad1e38416610b3d4d14aa9b3d92de496f5dd49e53b_prof);

        
        $__internal_b1824a4463cf828b751db9081de8a595fd3d47faf66c918997319db5b5418f5a->leave($__internal_b1824a4463cf828b751db9081de8a595fd3d47faf66c918997319db5b5418f5a_prof);

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
