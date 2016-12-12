<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_65fa7cae15fb063bf36c9bd16c41299d4ac1a93cbba32507e49f0ebef6831dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fa7cae15fb063bf36c9bd16c41299d4ac1a93cbba32507e49f0ebef6831dce->enter($__internal_65fa7cae15fb063bf36c9bd16c41299d4ac1a93cbba32507e49f0ebef6831dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5d39234c6e92bff430a3d09f3199d2c33ecead4f6b269b39585fc62e49aa3a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d39234c6e92bff430a3d09f3199d2c33ecead4f6b269b39585fc62e49aa3a00->enter($__internal_5d39234c6e92bff430a3d09f3199d2c33ecead4f6b269b39585fc62e49aa3a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_65fa7cae15fb063bf36c9bd16c41299d4ac1a93cbba32507e49f0ebef6831dce->leave($__internal_65fa7cae15fb063bf36c9bd16c41299d4ac1a93cbba32507e49f0ebef6831dce_prof);

        
        $__internal_5d39234c6e92bff430a3d09f3199d2c33ecead4f6b269b39585fc62e49aa3a00->leave($__internal_5d39234c6e92bff430a3d09f3199d2c33ecead4f6b269b39585fc62e49aa3a00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
