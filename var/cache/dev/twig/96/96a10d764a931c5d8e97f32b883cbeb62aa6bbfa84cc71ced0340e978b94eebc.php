<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a203b291527326c7fbf58d4af097aa24c14f5dc0e684414584f92be6c4abc691 extends Twig_Template
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
        $__internal_3a6bb25ab2eb5560146c3bc56dc49d7bbd4c618f5f21fd9bd993d4ec43be1b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6bb25ab2eb5560146c3bc56dc49d7bbd4c618f5f21fd9bd993d4ec43be1b62->enter($__internal_3a6bb25ab2eb5560146c3bc56dc49d7bbd4c618f5f21fd9bd993d4ec43be1b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_86604cf8018e89853df518486807902099d08567a61c009077011c11a7b51d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86604cf8018e89853df518486807902099d08567a61c009077011c11a7b51d59->enter($__internal_86604cf8018e89853df518486807902099d08567a61c009077011c11a7b51d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3a6bb25ab2eb5560146c3bc56dc49d7bbd4c618f5f21fd9bd993d4ec43be1b62->leave($__internal_3a6bb25ab2eb5560146c3bc56dc49d7bbd4c618f5f21fd9bd993d4ec43be1b62_prof);

        
        $__internal_86604cf8018e89853df518486807902099d08567a61c009077011c11a7b51d59->leave($__internal_86604cf8018e89853df518486807902099d08567a61c009077011c11a7b51d59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
