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
        $__internal_13a481e5494802a76807f20fc957b84618233ea5badbbb21e5a90b96ca7c2b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a481e5494802a76807f20fc957b84618233ea5badbbb21e5a90b96ca7c2b13->enter($__internal_13a481e5494802a76807f20fc957b84618233ea5badbbb21e5a90b96ca7c2b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e666661761964e0114dfc0003d7631c5ba88aeefed12e27171d7ea64df146df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e666661761964e0114dfc0003d7631c5ba88aeefed12e27171d7ea64df146df1->enter($__internal_e666661761964e0114dfc0003d7631c5ba88aeefed12e27171d7ea64df146df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_13a481e5494802a76807f20fc957b84618233ea5badbbb21e5a90b96ca7c2b13->leave($__internal_13a481e5494802a76807f20fc957b84618233ea5badbbb21e5a90b96ca7c2b13_prof);

        
        $__internal_e666661761964e0114dfc0003d7631c5ba88aeefed12e27171d7ea64df146df1->leave($__internal_e666661761964e0114dfc0003d7631c5ba88aeefed12e27171d7ea64df146df1_prof);

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
