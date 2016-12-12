<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_6c595a1b210bfd7fb40596a9b37e8f2ded2f4b03098dbae6a7649257eee0dbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c595a1b210bfd7fb40596a9b37e8f2ded2f4b03098dbae6a7649257eee0dbf7->enter($__internal_6c595a1b210bfd7fb40596a9b37e8f2ded2f4b03098dbae6a7649257eee0dbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_63a0d76972eedcf01f9f6f517a43e7feb4e3f44345d038f0803cc30a4b9d63bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a0d76972eedcf01f9f6f517a43e7feb4e3f44345d038f0803cc30a4b9d63bf->enter($__internal_63a0d76972eedcf01f9f6f517a43e7feb4e3f44345d038f0803cc30a4b9d63bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6c595a1b210bfd7fb40596a9b37e8f2ded2f4b03098dbae6a7649257eee0dbf7->leave($__internal_6c595a1b210bfd7fb40596a9b37e8f2ded2f4b03098dbae6a7649257eee0dbf7_prof);

        
        $__internal_63a0d76972eedcf01f9f6f517a43e7feb4e3f44345d038f0803cc30a4b9d63bf->leave($__internal_63a0d76972eedcf01f9f6f517a43e7feb4e3f44345d038f0803cc30a4b9d63bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
