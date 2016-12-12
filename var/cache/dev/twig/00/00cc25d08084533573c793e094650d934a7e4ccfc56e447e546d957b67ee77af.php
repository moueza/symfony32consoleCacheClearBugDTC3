<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_f6937ad547a70fc9408f4f2559acbb2383996f86a60bb8217f6a91c88e33cbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6937ad547a70fc9408f4f2559acbb2383996f86a60bb8217f6a91c88e33cbdc->enter($__internal_f6937ad547a70fc9408f4f2559acbb2383996f86a60bb8217f6a91c88e33cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_266a89f0df989f5fbfc6231da71bf3a04dae811aa279fefa9f284ce8ec63a8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266a89f0df989f5fbfc6231da71bf3a04dae811aa279fefa9f284ce8ec63a8f7->enter($__internal_266a89f0df989f5fbfc6231da71bf3a04dae811aa279fefa9f284ce8ec63a8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f6937ad547a70fc9408f4f2559acbb2383996f86a60bb8217f6a91c88e33cbdc->leave($__internal_f6937ad547a70fc9408f4f2559acbb2383996f86a60bb8217f6a91c88e33cbdc_prof);

        
        $__internal_266a89f0df989f5fbfc6231da71bf3a04dae811aa279fefa9f284ce8ec63a8f7->leave($__internal_266a89f0df989f5fbfc6231da71bf3a04dae811aa279fefa9f284ce8ec63a8f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
