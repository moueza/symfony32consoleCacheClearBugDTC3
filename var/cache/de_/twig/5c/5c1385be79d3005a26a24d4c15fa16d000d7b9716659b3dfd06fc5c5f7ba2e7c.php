<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_171717644e7a301d325108976286d53aebb33aec152d92a608afbffc7a177153 extends Twig_Template
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
        $__internal_7757b6188873134593d7cdad94446c1893bd359c8be46ee90b3ea5aff0413ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7757b6188873134593d7cdad94446c1893bd359c8be46ee90b3ea5aff0413ae7->enter($__internal_7757b6188873134593d7cdad94446c1893bd359c8be46ee90b3ea5aff0413ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_38ba562e487110da87718c93e773a3d239ed11b9a6bedcff2325a2d9b19a80fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ba562e487110da87718c93e773a3d239ed11b9a6bedcff2325a2d9b19a80fa->enter($__internal_38ba562e487110da87718c93e773a3d239ed11b9a6bedcff2325a2d9b19a80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7757b6188873134593d7cdad94446c1893bd359c8be46ee90b3ea5aff0413ae7->leave($__internal_7757b6188873134593d7cdad94446c1893bd359c8be46ee90b3ea5aff0413ae7_prof);

        
        $__internal_38ba562e487110da87718c93e773a3d239ed11b9a6bedcff2325a2d9b19a80fa->leave($__internal_38ba562e487110da87718c93e773a3d239ed11b9a6bedcff2325a2d9b19a80fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
