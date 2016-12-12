<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d45ba71e1181cc56aa6d2216ff56684684e7152f60fc5ed878fe668c059e12c4 extends Twig_Template
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
        $__internal_d942d6c50d2a6a6b6000a27754838d4d67f2f7e6fce4efdb23ea76f33946b121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d942d6c50d2a6a6b6000a27754838d4d67f2f7e6fce4efdb23ea76f33946b121->enter($__internal_d942d6c50d2a6a6b6000a27754838d4d67f2f7e6fce4efdb23ea76f33946b121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a9583dbab885f0b55915f404ab02b7aa1df05714811107f341ffab599ed83ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9583dbab885f0b55915f404ab02b7aa1df05714811107f341ffab599ed83ae5->enter($__internal_a9583dbab885f0b55915f404ab02b7aa1df05714811107f341ffab599ed83ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d942d6c50d2a6a6b6000a27754838d4d67f2f7e6fce4efdb23ea76f33946b121->leave($__internal_d942d6c50d2a6a6b6000a27754838d4d67f2f7e6fce4efdb23ea76f33946b121_prof);

        
        $__internal_a9583dbab885f0b55915f404ab02b7aa1df05714811107f341ffab599ed83ae5->leave($__internal_a9583dbab885f0b55915f404ab02b7aa1df05714811107f341ffab599ed83ae5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
