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
        $__internal_a2a6a267a1e6cb96b11d6272d7bc7639d36b4efc776eeeff081aeccb04a98c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a6a267a1e6cb96b11d6272d7bc7639d36b4efc776eeeff081aeccb04a98c4d->enter($__internal_a2a6a267a1e6cb96b11d6272d7bc7639d36b4efc776eeeff081aeccb04a98c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5ae296062e1ebd72c00bfcbf369f30818ebea66d697dcc5b2bbb5e996e6d4872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae296062e1ebd72c00bfcbf369f30818ebea66d697dcc5b2bbb5e996e6d4872->enter($__internal_5ae296062e1ebd72c00bfcbf369f30818ebea66d697dcc5b2bbb5e996e6d4872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a2a6a267a1e6cb96b11d6272d7bc7639d36b4efc776eeeff081aeccb04a98c4d->leave($__internal_a2a6a267a1e6cb96b11d6272d7bc7639d36b4efc776eeeff081aeccb04a98c4d_prof);

        
        $__internal_5ae296062e1ebd72c00bfcbf369f30818ebea66d697dcc5b2bbb5e996e6d4872->leave($__internal_5ae296062e1ebd72c00bfcbf369f30818ebea66d697dcc5b2bbb5e996e6d4872_prof);

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
