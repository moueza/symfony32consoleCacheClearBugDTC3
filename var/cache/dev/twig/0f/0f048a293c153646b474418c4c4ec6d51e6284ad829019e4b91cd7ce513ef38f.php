<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_0eb7031ca059231a54a270ffb4120367aaa455383e1d8f9c35bde7b2cef4c8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb7031ca059231a54a270ffb4120367aaa455383e1d8f9c35bde7b2cef4c8f1->enter($__internal_0eb7031ca059231a54a270ffb4120367aaa455383e1d8f9c35bde7b2cef4c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f1119d4df9b62d6e4e001342ede8958cac6c976776bc09e0ae77441f10dc8721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1119d4df9b62d6e4e001342ede8958cac6c976776bc09e0ae77441f10dc8721->enter($__internal_f1119d4df9b62d6e4e001342ede8958cac6c976776bc09e0ae77441f10dc8721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0eb7031ca059231a54a270ffb4120367aaa455383e1d8f9c35bde7b2cef4c8f1->leave($__internal_0eb7031ca059231a54a270ffb4120367aaa455383e1d8f9c35bde7b2cef4c8f1_prof);

        
        $__internal_f1119d4df9b62d6e4e001342ede8958cac6c976776bc09e0ae77441f10dc8721->leave($__internal_f1119d4df9b62d6e4e001342ede8958cac6c976776bc09e0ae77441f10dc8721_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
