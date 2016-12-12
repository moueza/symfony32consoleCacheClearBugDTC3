<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_df88de747dba6cf459198fd90e14285d4ee67df5ac1e8a890feff6bb205fa6a0 extends Twig_Template
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
        $__internal_dc9400a34e63f8ff4230a8d3b8b42f6449b7de48a2b44742ec78e649f4f6b042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9400a34e63f8ff4230a8d3b8b42f6449b7de48a2b44742ec78e649f4f6b042->enter($__internal_dc9400a34e63f8ff4230a8d3b8b42f6449b7de48a2b44742ec78e649f4f6b042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f72cacf2293f2526478255144dc346d1f5f06d73597facda96576c8aebf2e23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72cacf2293f2526478255144dc346d1f5f06d73597facda96576c8aebf2e23b->enter($__internal_f72cacf2293f2526478255144dc346d1f5f06d73597facda96576c8aebf2e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dc9400a34e63f8ff4230a8d3b8b42f6449b7de48a2b44742ec78e649f4f6b042->leave($__internal_dc9400a34e63f8ff4230a8d3b8b42f6449b7de48a2b44742ec78e649f4f6b042_prof);

        
        $__internal_f72cacf2293f2526478255144dc346d1f5f06d73597facda96576c8aebf2e23b->leave($__internal_f72cacf2293f2526478255144dc346d1f5f06d73597facda96576c8aebf2e23b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
