<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_f4ced24802b9d01b643f0efceec266ac8f10bb7bbce56cdfa2c20030b4291ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ced24802b9d01b643f0efceec266ac8f10bb7bbce56cdfa2c20030b4291ed1->enter($__internal_f4ced24802b9d01b643f0efceec266ac8f10bb7bbce56cdfa2c20030b4291ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4fae7687da20e9f91b5a8fcc216229756756893a4ef5d217ee9c9422be7e09b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fae7687da20e9f91b5a8fcc216229756756893a4ef5d217ee9c9422be7e09b4->enter($__internal_4fae7687da20e9f91b5a8fcc216229756756893a4ef5d217ee9c9422be7e09b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f4ced24802b9d01b643f0efceec266ac8f10bb7bbce56cdfa2c20030b4291ed1->leave($__internal_f4ced24802b9d01b643f0efceec266ac8f10bb7bbce56cdfa2c20030b4291ed1_prof);

        
        $__internal_4fae7687da20e9f91b5a8fcc216229756756893a4ef5d217ee9c9422be7e09b4->leave($__internal_4fae7687da20e9f91b5a8fcc216229756756893a4ef5d217ee9c9422be7e09b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
