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
        $__internal_c46511e564033d3399e1d26ceb1b87999498d2733787a8b551cd174274223aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46511e564033d3399e1d26ceb1b87999498d2733787a8b551cd174274223aef->enter($__internal_c46511e564033d3399e1d26ceb1b87999498d2733787a8b551cd174274223aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8f3ef290b395ae572c3e4f2d8849ce25d8bd7e6158af1607f95f0c97c8d36ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3ef290b395ae572c3e4f2d8849ce25d8bd7e6158af1607f95f0c97c8d36ca9->enter($__internal_8f3ef290b395ae572c3e4f2d8849ce25d8bd7e6158af1607f95f0c97c8d36ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c46511e564033d3399e1d26ceb1b87999498d2733787a8b551cd174274223aef->leave($__internal_c46511e564033d3399e1d26ceb1b87999498d2733787a8b551cd174274223aef_prof);

        
        $__internal_8f3ef290b395ae572c3e4f2d8849ce25d8bd7e6158af1607f95f0c97c8d36ca9->leave($__internal_8f3ef290b395ae572c3e4f2d8849ce25d8bd7e6158af1607f95f0c97c8d36ca9_prof);

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
