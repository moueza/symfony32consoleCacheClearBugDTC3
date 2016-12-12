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
        $__internal_ccaf1a0f8280065b4b6f44e6a1fc57bed153db3a97e30d73477febd344892409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccaf1a0f8280065b4b6f44e6a1fc57bed153db3a97e30d73477febd344892409->enter($__internal_ccaf1a0f8280065b4b6f44e6a1fc57bed153db3a97e30d73477febd344892409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2f4194923d1bdc0e7ac9743efdc9d5b5e038e64d42bd3f38ddd4e6b98a489c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4194923d1bdc0e7ac9743efdc9d5b5e038e64d42bd3f38ddd4e6b98a489c3c->enter($__internal_2f4194923d1bdc0e7ac9743efdc9d5b5e038e64d42bd3f38ddd4e6b98a489c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ccaf1a0f8280065b4b6f44e6a1fc57bed153db3a97e30d73477febd344892409->leave($__internal_ccaf1a0f8280065b4b6f44e6a1fc57bed153db3a97e30d73477febd344892409_prof);

        
        $__internal_2f4194923d1bdc0e7ac9743efdc9d5b5e038e64d42bd3f38ddd4e6b98a489c3c->leave($__internal_2f4194923d1bdc0e7ac9743efdc9d5b5e038e64d42bd3f38ddd4e6b98a489c3c_prof);

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
