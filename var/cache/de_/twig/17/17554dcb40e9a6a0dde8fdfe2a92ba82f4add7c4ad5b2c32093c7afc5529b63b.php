<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99d32c8bc8dabb7ef17730fbafe84a0dc5e1ffc15ed455185271c7f201eb9d29 extends Twig_Template
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
        $__internal_9f7de77235760ff89151f8023ad2e2cd6f6cc803f54a6c4907ffc811dd68d1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7de77235760ff89151f8023ad2e2cd6f6cc803f54a6c4907ffc811dd68d1da->enter($__internal_9f7de77235760ff89151f8023ad2e2cd6f6cc803f54a6c4907ffc811dd68d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_50021e8c4021a58c6c6fad33a9aea520dce5e0593ed817c558a66fd142530d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50021e8c4021a58c6c6fad33a9aea520dce5e0593ed817c558a66fd142530d29->enter($__internal_50021e8c4021a58c6c6fad33a9aea520dce5e0593ed817c558a66fd142530d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f7de77235760ff89151f8023ad2e2cd6f6cc803f54a6c4907ffc811dd68d1da->leave($__internal_9f7de77235760ff89151f8023ad2e2cd6f6cc803f54a6c4907ffc811dd68d1da_prof);

        
        $__internal_50021e8c4021a58c6c6fad33a9aea520dce5e0593ed817c558a66fd142530d29->leave($__internal_50021e8c4021a58c6c6fad33a9aea520dce5e0593ed817c558a66fd142530d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
