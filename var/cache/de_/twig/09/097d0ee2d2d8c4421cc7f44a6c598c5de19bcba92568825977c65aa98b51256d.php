<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cceb737a2ae9450e18628b7f29eebd0fa36ff449f807176e49cfde2bb18c301a extends Twig_Template
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
        $__internal_414a32e2d10ed21a063ea145a33689622af6793aba2478244a479a3fea13f219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414a32e2d10ed21a063ea145a33689622af6793aba2478244a479a3fea13f219->enter($__internal_414a32e2d10ed21a063ea145a33689622af6793aba2478244a479a3fea13f219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_572acbc2e3927cd2dd31e3976e463159b947f92530f26926bebf1298d466b00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572acbc2e3927cd2dd31e3976e463159b947f92530f26926bebf1298d466b00a->enter($__internal_572acbc2e3927cd2dd31e3976e463159b947f92530f26926bebf1298d466b00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_414a32e2d10ed21a063ea145a33689622af6793aba2478244a479a3fea13f219->leave($__internal_414a32e2d10ed21a063ea145a33689622af6793aba2478244a479a3fea13f219_prof);

        
        $__internal_572acbc2e3927cd2dd31e3976e463159b947f92530f26926bebf1298d466b00a->leave($__internal_572acbc2e3927cd2dd31e3976e463159b947f92530f26926bebf1298d466b00a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
