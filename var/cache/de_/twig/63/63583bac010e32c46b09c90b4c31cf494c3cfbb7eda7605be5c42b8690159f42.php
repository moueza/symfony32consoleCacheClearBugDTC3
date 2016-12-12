<?php

/* OCPlatformBundle:Default:layout.html.twig */
class __TwigTemplate_20eacddacdbad92bf67a2d6ce3d119a1dfb7354d7853aecc78870e4e1da22dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7104f2fe2608153bdd5432e2ac2321c1940af04abf8a36de62e7387f2ddba493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7104f2fe2608153bdd5432e2ac2321c1940af04abf8a36de62e7387f2ddba493->enter($__internal_7104f2fe2608153bdd5432e2ac2321c1940af04abf8a36de62e7387f2ddba493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        $__internal_f39f04541fbd83b102bb4212bc3933d77f7995b6874ee0486c28b0cd8101c0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39f04541fbd83b102bb4212bc3933d77f7995b6874ee0486c28b0cd8101c0f8->enter($__internal_f39f04541fbd83b102bb4212bc3933d77f7995b6874ee0486c28b0cd8101c0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    </head>

    <body>

        <div id=\"menu\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu"));
        echo "
        </div>

        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
        <div class=\"well\">
            <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
        </div>

    </body>

</html>";
        
        $__internal_7104f2fe2608153bdd5432e2ac2321c1940af04abf8a36de62e7387f2ddba493->leave($__internal_7104f2fe2608153bdd5432e2ac2321c1940af04abf8a36de62e7387f2ddba493_prof);

        
        $__internal_f39f04541fbd83b102bb4212bc3933d77f7995b6874ee0486c28b0cd8101c0f8->leave($__internal_f39f04541fbd83b102bb4212bc3933d77f7995b6874ee0486c28b0cd8101c0f8_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_7215b5593a17545475554e99d152b8439c9ef7de3aa5fba886555f9de19127b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7215b5593a17545475554e99d152b8439c9ef7de3aa5fba886555f9de19127b4->enter($__internal_7215b5593a17545475554e99d152b8439c9ef7de3aa5fba886555f9de19127b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7510d015432c2dfec07f212a4a827128ceadc6a2381ecb20f88ce7798f535494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7510d015432c2dfec07f212a4a827128ceadc6a2381ecb20f88ce7798f535494->enter($__internal_7510d015432c2dfec07f212a4a827128ceadc6a2381ecb20f88ce7798f535494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_7510d015432c2dfec07f212a4a827128ceadc6a2381ecb20f88ce7798f535494->leave($__internal_7510d015432c2dfec07f212a4a827128ceadc6a2381ecb20f88ce7798f535494_prof);

        
        $__internal_7215b5593a17545475554e99d152b8439c9ef7de3aa5fba886555f9de19127b4->leave($__internal_7215b5593a17545475554e99d152b8439c9ef7de3aa5fba886555f9de19127b4_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e26f6dcb790d07f28d688a03579c6bedb9ddfbbb507c7b5f6867a8a3658bb2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26f6dcb790d07f28d688a03579c6bedb9ddfbbb507c7b5f6867a8a3658bb2e3->enter($__internal_e26f6dcb790d07f28d688a03579c6bedb9ddfbbb507c7b5f6867a8a3658bb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12e728061a0a8a1decf930398082931aaf2e656a9bb141b1016fffdfbc7b1592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e728061a0a8a1decf930398082931aaf2e656a9bb141b1016fffdfbc7b1592->enter($__internal_12e728061a0a8a1decf930398082931aaf2e656a9bb141b1016fffdfbc7b1592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
            ";
        // line 18
        echo "
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        ";
        
        $__internal_12e728061a0a8a1decf930398082931aaf2e656a9bb141b1016fffdfbc7b1592->leave($__internal_12e728061a0a8a1decf930398082931aaf2e656a9bb141b1016fffdfbc7b1592_prof);

        
        $__internal_e26f6dcb790d07f28d688a03579c6bedb9ddfbbb507c7b5f6867a8a3658bb2e3->leave($__internal_e26f6dcb790d07f28d688a03579c6bedb9ddfbbb507c7b5f6867a8a3658bb2e3_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_a95c66b254f236de33ebf98568c93b96695a7ecd0a16700da89358a95f92f0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95c66b254f236de33ebf98568c93b96695a7ecd0a16700da89358a95f92f0f8->enter($__internal_a95c66b254f236de33ebf98568c93b96695a7ecd0a16700da89358a95f92f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97436f9a5b8be6ca94e7128d141f9d8a66ed4c39747af42b6b4f28ffb3a6a200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97436f9a5b8be6ca94e7128d141f9d8a66ed4c39747af42b6b4f28ffb3a6a200->enter($__internal_97436f9a5b8be6ca94e7128d141f9d8a66ed4c39747af42b6b4f28ffb3a6a200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_97436f9a5b8be6ca94e7128d141f9d8a66ed4c39747af42b6b4f28ffb3a6a200->leave($__internal_97436f9a5b8be6ca94e7128d141f9d8a66ed4c39747af42b6b4f28ffb3a6a200_prof);

        
        $__internal_a95c66b254f236de33ebf98568c93b96695a7ecd0a16700da89358a95f92f0f8->leave($__internal_a95c66b254f236de33ebf98568c93b96695a7ecd0a16700da89358a95f92f0f8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  125 => 31,  112 => 18,  109 => 16,  100 => 15,  82 => 12,  65 => 33,  63 => 31,  57 => 28,  49 => 22,  47 => 15,  41 => 12,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <title>{% block title %}DTC 3{% endblock %}</title>


        {% block stylesheets %}

            {# On charge le CSS de bootstrap depuis le site directement #}

            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        {% endblock %}

    </head>

    <body>

        <div id=\"menu\">
            {{ render(controller(\"OCPlatformBundle:Advert:menu\")) }}
        </div>

        {% block body %}
        {% endblock %}

        <div class=\"well\">
            <BR>  <a href='http://moueza.esy.es/m/'>Home DTC3</a>
        </div>

    </body>

</html>", "OCPlatformBundle:Default:layout.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/PlatformBundle/Resources/views/Default/layout.html.twig");
    }
}
