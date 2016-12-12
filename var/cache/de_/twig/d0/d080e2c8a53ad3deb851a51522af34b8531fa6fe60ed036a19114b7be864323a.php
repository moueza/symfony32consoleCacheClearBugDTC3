<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4161e32a13cfd14fa09e8d001f5b5d9e65f7e9bde1f12b2e4b5b56412a9680a6 extends Twig_Template
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
        $__internal_1ef60c6aa2b7542f92f791f4ac93a88c5c9492e610a32136859fd375a1d0a660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef60c6aa2b7542f92f791f4ac93a88c5c9492e610a32136859fd375a1d0a660->enter($__internal_1ef60c6aa2b7542f92f791f4ac93a88c5c9492e610a32136859fd375a1d0a660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_c690d1bf127cc83a2e0a8870d5ce7e188ac1f7a041b19b8968484dc1d501f199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c690d1bf127cc83a2e0a8870d5ce7e188ac1f7a041b19b8968484dc1d501f199->enter($__internal_c690d1bf127cc83a2e0a8870d5ce7e188ac1f7a041b19b8968484dc1d501f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1ef60c6aa2b7542f92f791f4ac93a88c5c9492e610a32136859fd375a1d0a660->leave($__internal_1ef60c6aa2b7542f92f791f4ac93a88c5c9492e610a32136859fd375a1d0a660_prof);

        
        $__internal_c690d1bf127cc83a2e0a8870d5ce7e188ac1f7a041b19b8968484dc1d501f199->leave($__internal_c690d1bf127cc83a2e0a8870d5ce7e188ac1f7a041b19b8968484dc1d501f199_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
