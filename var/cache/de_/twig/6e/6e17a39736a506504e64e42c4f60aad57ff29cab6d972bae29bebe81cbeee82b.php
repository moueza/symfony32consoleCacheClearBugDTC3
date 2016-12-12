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
        $__internal_14bc16838f97bd0859743e7d093c247e2eafe8caf26ee1ac12937ca74d8ef50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bc16838f97bd0859743e7d093c247e2eafe8caf26ee1ac12937ca74d8ef50a->enter($__internal_14bc16838f97bd0859743e7d093c247e2eafe8caf26ee1ac12937ca74d8ef50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_081cfea1aa41b69a1c8c00c284eaaf5a799876a3d22457d4d1c12e544e207fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081cfea1aa41b69a1c8c00c284eaaf5a799876a3d22457d4d1c12e544e207fed->enter($__internal_081cfea1aa41b69a1c8c00c284eaaf5a799876a3d22457d4d1c12e544e207fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_14bc16838f97bd0859743e7d093c247e2eafe8caf26ee1ac12937ca74d8ef50a->leave($__internal_14bc16838f97bd0859743e7d093c247e2eafe8caf26ee1ac12937ca74d8ef50a_prof);

        
        $__internal_081cfea1aa41b69a1c8c00c284eaaf5a799876a3d22457d4d1c12e544e207fed->leave($__internal_081cfea1aa41b69a1c8c00c284eaaf5a799876a3d22457d4d1c12e544e207fed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_180e475f5993524f155811080103f22c1e176b65288f2cb5944771aba8da9f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180e475f5993524f155811080103f22c1e176b65288f2cb5944771aba8da9f1a->enter($__internal_180e475f5993524f155811080103f22c1e176b65288f2cb5944771aba8da9f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66c815dde41a7fb8aca442370cc2f61719333c59d0c3ea9791d8ce186e7430ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c815dde41a7fb8aca442370cc2f61719333c59d0c3ea9791d8ce186e7430ce->enter($__internal_66c815dde41a7fb8aca442370cc2f61719333c59d0c3ea9791d8ce186e7430ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_66c815dde41a7fb8aca442370cc2f61719333c59d0c3ea9791d8ce186e7430ce->leave($__internal_66c815dde41a7fb8aca442370cc2f61719333c59d0c3ea9791d8ce186e7430ce_prof);

        
        $__internal_180e475f5993524f155811080103f22c1e176b65288f2cb5944771aba8da9f1a->leave($__internal_180e475f5993524f155811080103f22c1e176b65288f2cb5944771aba8da9f1a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70f6cf67efeb5ec9f09d92b191a14706827b9d68db0363e69267f02cba7d109b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f6cf67efeb5ec9f09d92b191a14706827b9d68db0363e69267f02cba7d109b->enter($__internal_70f6cf67efeb5ec9f09d92b191a14706827b9d68db0363e69267f02cba7d109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62c7b9884be2352fea376c29729ff2fde74e544cc6fa48c870878da4ff5bca89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c7b9884be2352fea376c29729ff2fde74e544cc6fa48c870878da4ff5bca89->enter($__internal_62c7b9884be2352fea376c29729ff2fde74e544cc6fa48c870878da4ff5bca89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62c7b9884be2352fea376c29729ff2fde74e544cc6fa48c870878da4ff5bca89->leave($__internal_62c7b9884be2352fea376c29729ff2fde74e544cc6fa48c870878da4ff5bca89_prof);

        
        $__internal_70f6cf67efeb5ec9f09d92b191a14706827b9d68db0363e69267f02cba7d109b->leave($__internal_70f6cf67efeb5ec9f09d92b191a14706827b9d68db0363e69267f02cba7d109b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0692c57b6a63e253a20704d7a8bc58f5b6d2dd1a0636b8509663e40ba2982a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0692c57b6a63e253a20704d7a8bc58f5b6d2dd1a0636b8509663e40ba2982a5->enter($__internal_f0692c57b6a63e253a20704d7a8bc58f5b6d2dd1a0636b8509663e40ba2982a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b5681b3b8deeb70b336f729f38e35567fddd72616647c703ed079a0308ed4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b5681b3b8deeb70b336f729f38e35567fddd72616647c703ed079a0308ed4b->enter($__internal_90b5681b3b8deeb70b336f729f38e35567fddd72616647c703ed079a0308ed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90b5681b3b8deeb70b336f729f38e35567fddd72616647c703ed079a0308ed4b->leave($__internal_90b5681b3b8deeb70b336f729f38e35567fddd72616647c703ed079a0308ed4b_prof);

        
        $__internal_f0692c57b6a63e253a20704d7a8bc58f5b6d2dd1a0636b8509663e40ba2982a5->leave($__internal_f0692c57b6a63e253a20704d7a8bc58f5b6d2dd1a0636b8509663e40ba2982a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4fa487f5e2fcc2d1bfa56708fe0c2c040f2e8c548df9d58561cc41925f519e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fa487f5e2fcc2d1bfa56708fe0c2c040f2e8c548df9d58561cc41925f519e0->enter($__internal_a4fa487f5e2fcc2d1bfa56708fe0c2c040f2e8c548df9d58561cc41925f519e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_40568a681d22e70995ea1d91e4838e078a9e1940b40a61c50d41442c20ff593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40568a681d22e70995ea1d91e4838e078a9e1940b40a61c50d41442c20ff593c->enter($__internal_40568a681d22e70995ea1d91e4838e078a9e1940b40a61c50d41442c20ff593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40568a681d22e70995ea1d91e4838e078a9e1940b40a61c50d41442c20ff593c->leave($__internal_40568a681d22e70995ea1d91e4838e078a9e1940b40a61c50d41442c20ff593c_prof);

        
        $__internal_a4fa487f5e2fcc2d1bfa56708fe0c2c040f2e8c548df9d58561cc41925f519e0->leave($__internal_a4fa487f5e2fcc2d1bfa56708fe0c2c040f2e8c548df9d58561cc41925f519e0_prof);

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
