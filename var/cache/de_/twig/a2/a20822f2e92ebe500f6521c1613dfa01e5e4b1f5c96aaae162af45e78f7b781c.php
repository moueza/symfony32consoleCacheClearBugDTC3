<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_47d17abb8549a96cfef132098a81a26e86ba236a4c488325a675d5b2c5dd1ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d17abb8549a96cfef132098a81a26e86ba236a4c488325a675d5b2c5dd1ce9->enter($__internal_47d17abb8549a96cfef132098a81a26e86ba236a4c488325a675d5b2c5dd1ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d02d84d573f13d3698a29b2119e402c9c40505c6be5a2d8015e81a1c5eab2833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02d84d573f13d3698a29b2119e402c9c40505c6be5a2d8015e81a1c5eab2833->enter($__internal_d02d84d573f13d3698a29b2119e402c9c40505c6be5a2d8015e81a1c5eab2833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_47d17abb8549a96cfef132098a81a26e86ba236a4c488325a675d5b2c5dd1ce9->leave($__internal_47d17abb8549a96cfef132098a81a26e86ba236a4c488325a675d5b2c5dd1ce9_prof);

        
        $__internal_d02d84d573f13d3698a29b2119e402c9c40505c6be5a2d8015e81a1c5eab2833->leave($__internal_d02d84d573f13d3698a29b2119e402c9c40505c6be5a2d8015e81a1c5eab2833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
