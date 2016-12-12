<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_6863309cc2c4bd9ef4819dd5a13c816c68f812cf2949ef40055d1c36aaf7cea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6863309cc2c4bd9ef4819dd5a13c816c68f812cf2949ef40055d1c36aaf7cea6->enter($__internal_6863309cc2c4bd9ef4819dd5a13c816c68f812cf2949ef40055d1c36aaf7cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6a4dec787ae2d8e5d919ade206b1edb56cb788d0e1dcf0fa3b4d510910b21f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4dec787ae2d8e5d919ade206b1edb56cb788d0e1dcf0fa3b4d510910b21f0c->enter($__internal_6a4dec787ae2d8e5d919ade206b1edb56cb788d0e1dcf0fa3b4d510910b21f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6863309cc2c4bd9ef4819dd5a13c816c68f812cf2949ef40055d1c36aaf7cea6->leave($__internal_6863309cc2c4bd9ef4819dd5a13c816c68f812cf2949ef40055d1c36aaf7cea6_prof);

        
        $__internal_6a4dec787ae2d8e5d919ade206b1edb56cb788d0e1dcf0fa3b4d510910b21f0c->leave($__internal_6a4dec787ae2d8e5d919ade206b1edb56cb788d0e1dcf0fa3b4d510910b21f0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
