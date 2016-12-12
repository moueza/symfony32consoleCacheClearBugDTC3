<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_afcae0ef42212a3dd8815d3b107b9f4a6b9650aa9f9ef9bdab575e999cf0ce0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcae0ef42212a3dd8815d3b107b9f4a6b9650aa9f9ef9bdab575e999cf0ce0c->enter($__internal_afcae0ef42212a3dd8815d3b107b9f4a6b9650aa9f9ef9bdab575e999cf0ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_76c5b9a4cf3d49badfc594eddecd83eed40517566f861552ad28285af049fb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c5b9a4cf3d49badfc594eddecd83eed40517566f861552ad28285af049fb09->enter($__internal_76c5b9a4cf3d49badfc594eddecd83eed40517566f861552ad28285af049fb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_afcae0ef42212a3dd8815d3b107b9f4a6b9650aa9f9ef9bdab575e999cf0ce0c->leave($__internal_afcae0ef42212a3dd8815d3b107b9f4a6b9650aa9f9ef9bdab575e999cf0ce0c_prof);

        
        $__internal_76c5b9a4cf3d49badfc594eddecd83eed40517566f861552ad28285af049fb09->leave($__internal_76c5b9a4cf3d49badfc594eddecd83eed40517566f861552ad28285af049fb09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
