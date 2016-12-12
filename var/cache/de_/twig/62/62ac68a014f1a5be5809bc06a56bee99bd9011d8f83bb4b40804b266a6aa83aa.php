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
        $__internal_b707bee963a5a3d3f641007e7c540180ec561cbaea3edd9fc9fb646196e11329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b707bee963a5a3d3f641007e7c540180ec561cbaea3edd9fc9fb646196e11329->enter($__internal_b707bee963a5a3d3f641007e7c540180ec561cbaea3edd9fc9fb646196e11329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_269a6021175dd84de2747ea881648b31f2bbf39edc0afad1fb9050a3d7643d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269a6021175dd84de2747ea881648b31f2bbf39edc0afad1fb9050a3d7643d2d->enter($__internal_269a6021175dd84de2747ea881648b31f2bbf39edc0afad1fb9050a3d7643d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b707bee963a5a3d3f641007e7c540180ec561cbaea3edd9fc9fb646196e11329->leave($__internal_b707bee963a5a3d3f641007e7c540180ec561cbaea3edd9fc9fb646196e11329_prof);

        
        $__internal_269a6021175dd84de2747ea881648b31f2bbf39edc0afad1fb9050a3d7643d2d->leave($__internal_269a6021175dd84de2747ea881648b31f2bbf39edc0afad1fb9050a3d7643d2d_prof);

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
