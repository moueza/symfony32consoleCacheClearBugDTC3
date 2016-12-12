<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_dc6c134dbcd5f256d914fe323d5b27195e997782e74fdf40d12efa5c5c2e1092 extends Twig_Template
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
        $__internal_93f6d57d2e2cf0c5073e0cc823b0489cbafd0623ba3267fadd71d60158f55dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f6d57d2e2cf0c5073e0cc823b0489cbafd0623ba3267fadd71d60158f55dc7->enter($__internal_93f6d57d2e2cf0c5073e0cc823b0489cbafd0623ba3267fadd71d60158f55dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_aa3963347c5513e8cf00b82cbbe854537fa010e95ae07b9bb521255f38c344e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3963347c5513e8cf00b82cbbe854537fa010e95ae07b9bb521255f38c344e5->enter($__internal_aa3963347c5513e8cf00b82cbbe854537fa010e95ae07b9bb521255f38c344e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_93f6d57d2e2cf0c5073e0cc823b0489cbafd0623ba3267fadd71d60158f55dc7->leave($__internal_93f6d57d2e2cf0c5073e0cc823b0489cbafd0623ba3267fadd71d60158f55dc7_prof);

        
        $__internal_aa3963347c5513e8cf00b82cbbe854537fa010e95ae07b9bb521255f38c344e5->leave($__internal_aa3963347c5513e8cf00b82cbbe854537fa010e95ae07b9bb521255f38c344e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
