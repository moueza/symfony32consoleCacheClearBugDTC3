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
        $__internal_881acdf0d45b8bda1485a01a62f24dce57dea30ce017f873b49c900eb4704441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881acdf0d45b8bda1485a01a62f24dce57dea30ce017f873b49c900eb4704441->enter($__internal_881acdf0d45b8bda1485a01a62f24dce57dea30ce017f873b49c900eb4704441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f6194ee0260da8e9ff56d1174845fa0b367d74b0c1d65e11aaee4d9e3cb2f268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6194ee0260da8e9ff56d1174845fa0b367d74b0c1d65e11aaee4d9e3cb2f268->enter($__internal_f6194ee0260da8e9ff56d1174845fa0b367d74b0c1d65e11aaee4d9e3cb2f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_881acdf0d45b8bda1485a01a62f24dce57dea30ce017f873b49c900eb4704441->leave($__internal_881acdf0d45b8bda1485a01a62f24dce57dea30ce017f873b49c900eb4704441_prof);

        
        $__internal_f6194ee0260da8e9ff56d1174845fa0b367d74b0c1d65e11aaee4d9e3cb2f268->leave($__internal_f6194ee0260da8e9ff56d1174845fa0b367d74b0c1d65e11aaee4d9e3cb2f268_prof);

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
