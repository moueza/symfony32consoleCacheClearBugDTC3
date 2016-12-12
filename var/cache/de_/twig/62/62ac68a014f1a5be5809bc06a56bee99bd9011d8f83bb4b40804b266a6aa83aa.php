<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_25e0d66d1e52ef41f01df7e4b87654566ecc7f974f61fd2f1033f3c8c1183ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e0d66d1e52ef41f01df7e4b87654566ecc7f974f61fd2f1033f3c8c1183ed2->enter($__internal_25e0d66d1e52ef41f01df7e4b87654566ecc7f974f61fd2f1033f3c8c1183ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c677872899b145bebbde61deefbf3df5304db2abf6643064316e730b50e8a423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c677872899b145bebbde61deefbf3df5304db2abf6643064316e730b50e8a423->enter($__internal_c677872899b145bebbde61deefbf3df5304db2abf6643064316e730b50e8a423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_25e0d66d1e52ef41f01df7e4b87654566ecc7f974f61fd2f1033f3c8c1183ed2->leave($__internal_25e0d66d1e52ef41f01df7e4b87654566ecc7f974f61fd2f1033f3c8c1183ed2_prof);

        
        $__internal_c677872899b145bebbde61deefbf3df5304db2abf6643064316e730b50e8a423->leave($__internal_c677872899b145bebbde61deefbf3df5304db2abf6643064316e730b50e8a423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
