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
        $__internal_95cbe710b13ba50a14c75bed030882abbb6553dd716429fea868c75498df5978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cbe710b13ba50a14c75bed030882abbb6553dd716429fea868c75498df5978->enter($__internal_95cbe710b13ba50a14c75bed030882abbb6553dd716429fea868c75498df5978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c79849dbf4cf4309a3c6571be5ba6d96745e9b10495cc1719fafea5b0a3b00d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79849dbf4cf4309a3c6571be5ba6d96745e9b10495cc1719fafea5b0a3b00d3->enter($__internal_c79849dbf4cf4309a3c6571be5ba6d96745e9b10495cc1719fafea5b0a3b00d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_95cbe710b13ba50a14c75bed030882abbb6553dd716429fea868c75498df5978->leave($__internal_95cbe710b13ba50a14c75bed030882abbb6553dd716429fea868c75498df5978_prof);

        
        $__internal_c79849dbf4cf4309a3c6571be5ba6d96745e9b10495cc1719fafea5b0a3b00d3->leave($__internal_c79849dbf4cf4309a3c6571be5ba6d96745e9b10495cc1719fafea5b0a3b00d3_prof);

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
