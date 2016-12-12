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
        $__internal_6fbc34074d40a0311ab032be00ece303df7a331b46d0cd56dcd979f68e08e064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbc34074d40a0311ab032be00ece303df7a331b46d0cd56dcd979f68e08e064->enter($__internal_6fbc34074d40a0311ab032be00ece303df7a331b46d0cd56dcd979f68e08e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_575abb3ecf94fec84ad7f9959196be6529ab4cda6461a3513849592230241823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575abb3ecf94fec84ad7f9959196be6529ab4cda6461a3513849592230241823->enter($__internal_575abb3ecf94fec84ad7f9959196be6529ab4cda6461a3513849592230241823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6fbc34074d40a0311ab032be00ece303df7a331b46d0cd56dcd979f68e08e064->leave($__internal_6fbc34074d40a0311ab032be00ece303df7a331b46d0cd56dcd979f68e08e064_prof);

        
        $__internal_575abb3ecf94fec84ad7f9959196be6529ab4cda6461a3513849592230241823->leave($__internal_575abb3ecf94fec84ad7f9959196be6529ab4cda6461a3513849592230241823_prof);

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
