<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_b5f790b2b723fb502c244c6f0f1a08bf0a0c4fcb4142097ef422560d57dc350c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f790b2b723fb502c244c6f0f1a08bf0a0c4fcb4142097ef422560d57dc350c->enter($__internal_b5f790b2b723fb502c244c6f0f1a08bf0a0c4fcb4142097ef422560d57dc350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e089c11cd7c35c36c1653c5cc7bca5cd40e79f73da0e3ab3ffe4a3d2d0deb0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e089c11cd7c35c36c1653c5cc7bca5cd40e79f73da0e3ab3ffe4a3d2d0deb0c9->enter($__internal_e089c11cd7c35c36c1653c5cc7bca5cd40e79f73da0e3ab3ffe4a3d2d0deb0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b5f790b2b723fb502c244c6f0f1a08bf0a0c4fcb4142097ef422560d57dc350c->leave($__internal_b5f790b2b723fb502c244c6f0f1a08bf0a0c4fcb4142097ef422560d57dc350c_prof);

        
        $__internal_e089c11cd7c35c36c1653c5cc7bca5cd40e79f73da0e3ab3ffe4a3d2d0deb0c9->leave($__internal_e089c11cd7c35c36c1653c5cc7bca5cd40e79f73da0e3ab3ffe4a3d2d0deb0c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
