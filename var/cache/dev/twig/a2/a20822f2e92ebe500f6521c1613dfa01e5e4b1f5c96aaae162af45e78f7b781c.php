<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_ed7fca6cba23c20fa5092519d7f46231bde7697c37b5a730b782c36374126f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7fca6cba23c20fa5092519d7f46231bde7697c37b5a730b782c36374126f57->enter($__internal_ed7fca6cba23c20fa5092519d7f46231bde7697c37b5a730b782c36374126f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_082a934f62b408d665a0b209e39aeaa9b913775f489dc466d254eefc6a1984f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082a934f62b408d665a0b209e39aeaa9b913775f489dc466d254eefc6a1984f6->enter($__internal_082a934f62b408d665a0b209e39aeaa9b913775f489dc466d254eefc6a1984f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ed7fca6cba23c20fa5092519d7f46231bde7697c37b5a730b782c36374126f57->leave($__internal_ed7fca6cba23c20fa5092519d7f46231bde7697c37b5a730b782c36374126f57_prof);

        
        $__internal_082a934f62b408d665a0b209e39aeaa9b913775f489dc466d254eefc6a1984f6->leave($__internal_082a934f62b408d665a0b209e39aeaa9b913775f489dc466d254eefc6a1984f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
