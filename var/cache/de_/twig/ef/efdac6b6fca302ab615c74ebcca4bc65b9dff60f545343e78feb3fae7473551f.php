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
        $__internal_0a691b9ab7837464e117c3bc2600d846466cb1982d63a7923448948b2bebc39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a691b9ab7837464e117c3bc2600d846466cb1982d63a7923448948b2bebc39f->enter($__internal_0a691b9ab7837464e117c3bc2600d846466cb1982d63a7923448948b2bebc39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_343acbafdabe33fdb479a47bbd6b351d1965ed08821a2e11db24074e8c711eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343acbafdabe33fdb479a47bbd6b351d1965ed08821a2e11db24074e8c711eb4->enter($__internal_343acbafdabe33fdb479a47bbd6b351d1965ed08821a2e11db24074e8c711eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a691b9ab7837464e117c3bc2600d846466cb1982d63a7923448948b2bebc39f->leave($__internal_0a691b9ab7837464e117c3bc2600d846466cb1982d63a7923448948b2bebc39f_prof);

        
        $__internal_343acbafdabe33fdb479a47bbd6b351d1965ed08821a2e11db24074e8c711eb4->leave($__internal_343acbafdabe33fdb479a47bbd6b351d1965ed08821a2e11db24074e8c711eb4_prof);

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
