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
        $__internal_fbbe59a4a82e76e507e02b5ebb15fa1955f937c2f6da44b452d25e14a06827f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbe59a4a82e76e507e02b5ebb15fa1955f937c2f6da44b452d25e14a06827f1->enter($__internal_fbbe59a4a82e76e507e02b5ebb15fa1955f937c2f6da44b452d25e14a06827f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e485e516c7b2cb0ab4f0e1bb6b6262fef2378690f9cddbf62e43c08be7ffea5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e485e516c7b2cb0ab4f0e1bb6b6262fef2378690f9cddbf62e43c08be7ffea5c->enter($__internal_e485e516c7b2cb0ab4f0e1bb6b6262fef2378690f9cddbf62e43c08be7ffea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fbbe59a4a82e76e507e02b5ebb15fa1955f937c2f6da44b452d25e14a06827f1->leave($__internal_fbbe59a4a82e76e507e02b5ebb15fa1955f937c2f6da44b452d25e14a06827f1_prof);

        
        $__internal_e485e516c7b2cb0ab4f0e1bb6b6262fef2378690f9cddbf62e43c08be7ffea5c->leave($__internal_e485e516c7b2cb0ab4f0e1bb6b6262fef2378690f9cddbf62e43c08be7ffea5c_prof);

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
