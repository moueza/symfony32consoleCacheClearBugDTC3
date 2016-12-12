<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b9bc5e6949cf687e112dc306ab9355c199d7cd7d89ea38462bc9381124e8050e extends Twig_Template
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
        $__internal_43e3020e4b96bd87294b56b8515fcf8c2146a5de74303790a1ad82cf3b2b747e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e3020e4b96bd87294b56b8515fcf8c2146a5de74303790a1ad82cf3b2b747e->enter($__internal_43e3020e4b96bd87294b56b8515fcf8c2146a5de74303790a1ad82cf3b2b747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5bba24fbe133d96a12d7231f36b17ff28147ef2c39f7bc052cdc1d9fd373f8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba24fbe133d96a12d7231f36b17ff28147ef2c39f7bc052cdc1d9fd373f8b8->enter($__internal_5bba24fbe133d96a12d7231f36b17ff28147ef2c39f7bc052cdc1d9fd373f8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_43e3020e4b96bd87294b56b8515fcf8c2146a5de74303790a1ad82cf3b2b747e->leave($__internal_43e3020e4b96bd87294b56b8515fcf8c2146a5de74303790a1ad82cf3b2b747e_prof);

        
        $__internal_5bba24fbe133d96a12d7231f36b17ff28147ef2c39f7bc052cdc1d9fd373f8b8->leave($__internal_5bba24fbe133d96a12d7231f36b17ff28147ef2c39f7bc052cdc1d9fd373f8b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
