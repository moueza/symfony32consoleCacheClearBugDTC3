<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb119405b368fa8247cecef5b9b88ae299d02e96ae115f1fe7e136e453c08792 extends Twig_Template
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
        $__internal_0669d4a1ff4360a85bb72fef3743f6b991d9a47c888eb0d791b17b824e235317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0669d4a1ff4360a85bb72fef3743f6b991d9a47c888eb0d791b17b824e235317->enter($__internal_0669d4a1ff4360a85bb72fef3743f6b991d9a47c888eb0d791b17b824e235317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b44cf4b79e475c44cf9f9fb6404e8e35b9f9e359c2c840a781847495a212d4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44cf4b79e475c44cf9f9fb6404e8e35b9f9e359c2c840a781847495a212d4fa->enter($__internal_b44cf4b79e475c44cf9f9fb6404e8e35b9f9e359c2c840a781847495a212d4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0669d4a1ff4360a85bb72fef3743f6b991d9a47c888eb0d791b17b824e235317->leave($__internal_0669d4a1ff4360a85bb72fef3743f6b991d9a47c888eb0d791b17b824e235317_prof);

        
        $__internal_b44cf4b79e475c44cf9f9fb6404e8e35b9f9e359c2c840a781847495a212d4fa->leave($__internal_b44cf4b79e475c44cf9f9fb6404e8e35b9f9e359c2c840a781847495a212d4fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
