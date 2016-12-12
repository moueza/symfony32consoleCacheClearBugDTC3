<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_32db79fea88b8ce74b4ff0b4cda1eb76c1e52cd5af0ac9c58309a0369822fad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32db79fea88b8ce74b4ff0b4cda1eb76c1e52cd5af0ac9c58309a0369822fad5->enter($__internal_32db79fea88b8ce74b4ff0b4cda1eb76c1e52cd5af0ac9c58309a0369822fad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a587129aae774bceb6846e90981d2a1e38adb8c80d27e4c57b36ddb282e27354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587129aae774bceb6846e90981d2a1e38adb8c80d27e4c57b36ddb282e27354->enter($__internal_a587129aae774bceb6846e90981d2a1e38adb8c80d27e4c57b36ddb282e27354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_32db79fea88b8ce74b4ff0b4cda1eb76c1e52cd5af0ac9c58309a0369822fad5->leave($__internal_32db79fea88b8ce74b4ff0b4cda1eb76c1e52cd5af0ac9c58309a0369822fad5_prof);

        
        $__internal_a587129aae774bceb6846e90981d2a1e38adb8c80d27e4c57b36ddb282e27354->leave($__internal_a587129aae774bceb6846e90981d2a1e38adb8c80d27e4c57b36ddb282e27354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
