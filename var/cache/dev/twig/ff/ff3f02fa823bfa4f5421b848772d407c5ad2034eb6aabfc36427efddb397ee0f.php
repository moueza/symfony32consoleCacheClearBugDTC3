<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_0cf248c6c55a1192bc3af7bd3f9bf5f113b9b5c90b722281523b79f453376718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf248c6c55a1192bc3af7bd3f9bf5f113b9b5c90b722281523b79f453376718->enter($__internal_0cf248c6c55a1192bc3af7bd3f9bf5f113b9b5c90b722281523b79f453376718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6c44c831bb6ed3c9bd03ebfe92c15c1fa2d0494111f683ce3643617fa934c9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c44c831bb6ed3c9bd03ebfe92c15c1fa2d0494111f683ce3643617fa934c9cb->enter($__internal_6c44c831bb6ed3c9bd03ebfe92c15c1fa2d0494111f683ce3643617fa934c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0cf248c6c55a1192bc3af7bd3f9bf5f113b9b5c90b722281523b79f453376718->leave($__internal_0cf248c6c55a1192bc3af7bd3f9bf5f113b9b5c90b722281523b79f453376718_prof);

        
        $__internal_6c44c831bb6ed3c9bd03ebfe92c15c1fa2d0494111f683ce3643617fa934c9cb->leave($__internal_6c44c831bb6ed3c9bd03ebfe92c15c1fa2d0494111f683ce3643617fa934c9cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
