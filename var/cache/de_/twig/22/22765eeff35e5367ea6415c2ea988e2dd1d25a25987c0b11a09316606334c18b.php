<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_45039f9e330ea16397da8fc6bb6a2ad23c2c80b965f67fafb4f73c1b2fe0b189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45039f9e330ea16397da8fc6bb6a2ad23c2c80b965f67fafb4f73c1b2fe0b189->enter($__internal_45039f9e330ea16397da8fc6bb6a2ad23c2c80b965f67fafb4f73c1b2fe0b189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_500a81a8ca596eebbfc8a36eaaece4f33a616a51d1ba2ae4c7c0e01888afaec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500a81a8ca596eebbfc8a36eaaece4f33a616a51d1ba2ae4c7c0e01888afaec2->enter($__internal_500a81a8ca596eebbfc8a36eaaece4f33a616a51d1ba2ae4c7c0e01888afaec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_45039f9e330ea16397da8fc6bb6a2ad23c2c80b965f67fafb4f73c1b2fe0b189->leave($__internal_45039f9e330ea16397da8fc6bb6a2ad23c2c80b965f67fafb4f73c1b2fe0b189_prof);

        
        $__internal_500a81a8ca596eebbfc8a36eaaece4f33a616a51d1ba2ae4c7c0e01888afaec2->leave($__internal_500a81a8ca596eebbfc8a36eaaece4f33a616a51d1ba2ae4c7c0e01888afaec2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
