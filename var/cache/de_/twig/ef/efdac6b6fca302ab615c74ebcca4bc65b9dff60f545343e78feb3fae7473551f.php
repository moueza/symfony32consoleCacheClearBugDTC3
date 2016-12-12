<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e15f514d4c9801978aee1706ff032ca081e62d1a7ea90dcd5ac8a7de0799426a extends Twig_Template
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
        $__internal_b46e919696ad4e7094ce4c5a60cd6377ef0b490a66d422ab8f89e8ba2b1479b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46e919696ad4e7094ce4c5a60cd6377ef0b490a66d422ab8f89e8ba2b1479b1->enter($__internal_b46e919696ad4e7094ce4c5a60cd6377ef0b490a66d422ab8f89e8ba2b1479b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_45bd20f3acd43ba8bf441d6ce3453995beb12eb268b8a6999a14a6a695e94649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bd20f3acd43ba8bf441d6ce3453995beb12eb268b8a6999a14a6a695e94649->enter($__internal_45bd20f3acd43ba8bf441d6ce3453995beb12eb268b8a6999a14a6a695e94649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b46e919696ad4e7094ce4c5a60cd6377ef0b490a66d422ab8f89e8ba2b1479b1->leave($__internal_b46e919696ad4e7094ce4c5a60cd6377ef0b490a66d422ab8f89e8ba2b1479b1_prof);

        
        $__internal_45bd20f3acd43ba8bf441d6ce3453995beb12eb268b8a6999a14a6a695e94649->leave($__internal_45bd20f3acd43ba8bf441d6ce3453995beb12eb268b8a6999a14a6a695e94649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
