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
        $__internal_1d032b56ff5241f5f379f68545ac1681f60b938efedc043862ae913e3579b30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d032b56ff5241f5f379f68545ac1681f60b938efedc043862ae913e3579b30d->enter($__internal_1d032b56ff5241f5f379f68545ac1681f60b938efedc043862ae913e3579b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c3a4316349035fcd80e1bcb6ff69e5d179a47dc83032575cec38dc714bbacc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a4316349035fcd80e1bcb6ff69e5d179a47dc83032575cec38dc714bbacc59->enter($__internal_c3a4316349035fcd80e1bcb6ff69e5d179a47dc83032575cec38dc714bbacc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1d032b56ff5241f5f379f68545ac1681f60b938efedc043862ae913e3579b30d->leave($__internal_1d032b56ff5241f5f379f68545ac1681f60b938efedc043862ae913e3579b30d_prof);

        
        $__internal_c3a4316349035fcd80e1bcb6ff69e5d179a47dc83032575cec38dc714bbacc59->leave($__internal_c3a4316349035fcd80e1bcb6ff69e5d179a47dc83032575cec38dc714bbacc59_prof);

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
