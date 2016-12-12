<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_c0fdeff78586f1884a6dd6c6352f2f33f0a4da822221ff2c195cc444dcecfa8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fdeff78586f1884a6dd6c6352f2f33f0a4da822221ff2c195cc444dcecfa8d->enter($__internal_c0fdeff78586f1884a6dd6c6352f2f33f0a4da822221ff2c195cc444dcecfa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9b438742582e1fbd4cdd4cf5095540c364bee4435419428b84b12bdd16f182b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b438742582e1fbd4cdd4cf5095540c364bee4435419428b84b12bdd16f182b7->enter($__internal_9b438742582e1fbd4cdd4cf5095540c364bee4435419428b84b12bdd16f182b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c0fdeff78586f1884a6dd6c6352f2f33f0a4da822221ff2c195cc444dcecfa8d->leave($__internal_c0fdeff78586f1884a6dd6c6352f2f33f0a4da822221ff2c195cc444dcecfa8d_prof);

        
        $__internal_9b438742582e1fbd4cdd4cf5095540c364bee4435419428b84b12bdd16f182b7->leave($__internal_9b438742582e1fbd4cdd4cf5095540c364bee4435419428b84b12bdd16f182b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
