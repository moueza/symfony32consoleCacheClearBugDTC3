<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_1a6df087c708911945f0e0eb7d50910805c3fc88daca00773918b9baea273cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6df087c708911945f0e0eb7d50910805c3fc88daca00773918b9baea273cdd->enter($__internal_1a6df087c708911945f0e0eb7d50910805c3fc88daca00773918b9baea273cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3e4fd4a73914f036ebf012ffc0a8caace07fa0f70f89a0369191c91ca1419aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4fd4a73914f036ebf012ffc0a8caace07fa0f70f89a0369191c91ca1419aba->enter($__internal_3e4fd4a73914f036ebf012ffc0a8caace07fa0f70f89a0369191c91ca1419aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1a6df087c708911945f0e0eb7d50910805c3fc88daca00773918b9baea273cdd->leave($__internal_1a6df087c708911945f0e0eb7d50910805c3fc88daca00773918b9baea273cdd_prof);

        
        $__internal_3e4fd4a73914f036ebf012ffc0a8caace07fa0f70f89a0369191c91ca1419aba->leave($__internal_3e4fd4a73914f036ebf012ffc0a8caace07fa0f70f89a0369191c91ca1419aba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
