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
        $__internal_32de211bb2870509dd8bb082b2757260d1df420a0efe05ed1e7c32b51efa77ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32de211bb2870509dd8bb082b2757260d1df420a0efe05ed1e7c32b51efa77ba->enter($__internal_32de211bb2870509dd8bb082b2757260d1df420a0efe05ed1e7c32b51efa77ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

        $__internal_18111ff8c7861622d7ce482961990079f3352057fb45b5ad4c139753a08fdb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18111ff8c7861622d7ce482961990079f3352057fb45b5ad4c139753a08fdb72->enter($__internal_18111ff8c7861622d7ce482961990079f3352057fb45b5ad4c139753a08fdb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:layout.html.twig"));

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
        
        $__internal_32de211bb2870509dd8bb082b2757260d1df420a0efe05ed1e7c32b51efa77ba->leave($__internal_32de211bb2870509dd8bb082b2757260d1df420a0efe05ed1e7c32b51efa77ba_prof);

        
        $__internal_18111ff8c7861622d7ce482961990079f3352057fb45b5ad4c139753a08fdb72->leave($__internal_18111ff8c7861622d7ce482961990079f3352057fb45b5ad4c139753a08fdb72_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_929433e9f4e0e57eff846f93b69e102d46caf7d99cf2da2c74d1d07b91761c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_929433e9f4e0e57eff846f93b69e102d46caf7d99cf2da2c74d1d07b91761c77->enter($__internal_929433e9f4e0e57eff846f93b69e102d46caf7d99cf2da2c74d1d07b91761c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9aac02313d4c1ff14d8445dac8c83bc45b28ad867b84f6b48e27bd74f8fc2464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aac02313d4c1ff14d8445dac8c83bc45b28ad867b84f6b48e27bd74f8fc2464->enter($__internal_9aac02313d4c1ff14d8445dac8c83bc45b28ad867b84f6b48e27bd74f8fc2464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTC 3";
        
        $__internal_9aac02313d4c1ff14d8445dac8c83bc45b28ad867b84f6b48e27bd74f8fc2464->leave($__internal_9aac02313d4c1ff14d8445dac8c83bc45b28ad867b84f6b48e27bd74f8fc2464_prof);

        
        $__internal_929433e9f4e0e57eff846f93b69e102d46caf7d99cf2da2c74d1d07b91761c77->leave($__internal_929433e9f4e0e57eff846f93b69e102d46caf7d99cf2da2c74d1d07b91761c77_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94ebba326f29935126aba4b7c9bb1449280821e6bda6723f21e9bd9dc8380f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ebba326f29935126aba4b7c9bb1449280821e6bda6723f21e9bd9dc8380f31->enter($__internal_94ebba326f29935126aba4b7c9bb1449280821e6bda6723f21e9bd9dc8380f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76fafb96067fcf8ee31c29e0d7b988106c350ad0b21f2be5dac05f6b2196d86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fafb96067fcf8ee31c29e0d7b988106c350ad0b21f2be5dac05f6b2196d86c->enter($__internal_76fafb96067fcf8ee31c29e0d7b988106c350ad0b21f2be5dac05f6b2196d86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
            ";
        // line 18
        echo "
            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        ";
        
        $__internal_76fafb96067fcf8ee31c29e0d7b988106c350ad0b21f2be5dac05f6b2196d86c->leave($__internal_76fafb96067fcf8ee31c29e0d7b988106c350ad0b21f2be5dac05f6b2196d86c_prof);

        
        $__internal_94ebba326f29935126aba4b7c9bb1449280821e6bda6723f21e9bd9dc8380f31->leave($__internal_94ebba326f29935126aba4b7c9bb1449280821e6bda6723f21e9bd9dc8380f31_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_22336c25d8d98c6482d0fe81c769d8faf94c30028f99621b7cdd5584d6dfdb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22336c25d8d98c6482d0fe81c769d8faf94c30028f99621b7cdd5584d6dfdb1c->enter($__internal_22336c25d8d98c6482d0fe81c769d8faf94c30028f99621b7cdd5584d6dfdb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4df229bab62c1b8b82fd625377a8f4ec9ef0d96be74f2cfbb691ddfe087fcdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df229bab62c1b8b82fd625377a8f4ec9ef0d96be74f2cfbb691ddfe087fcdaa->enter($__internal_4df229bab62c1b8b82fd625377a8f4ec9ef0d96be74f2cfbb691ddfe087fcdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "        ";
        
        $__internal_4df229bab62c1b8b82fd625377a8f4ec9ef0d96be74f2cfbb691ddfe087fcdaa->leave($__internal_4df229bab62c1b8b82fd625377a8f4ec9ef0d96be74f2cfbb691ddfe087fcdaa_prof);

        
        $__internal_22336c25d8d98c6482d0fe81c769d8faf94c30028f99621b7cdd5584d6dfdb1c->leave($__internal_22336c25d8d98c6482d0fe81c769d8faf94c30028f99621b7cdd5584d6dfdb1c_prof);

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
