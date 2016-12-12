<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_e285fd24c6292c88eae0b24fc4bc750a50868f388d7fb6db091d3172463e21b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e285fd24c6292c88eae0b24fc4bc750a50868f388d7fb6db091d3172463e21b7->enter($__internal_e285fd24c6292c88eae0b24fc4bc750a50868f388d7fb6db091d3172463e21b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c27aa23b07a4b4463e982088e36041b52fc4f32a745c0c933f907f883838fe69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27aa23b07a4b4463e982088e36041b52fc4f32a745c0c933f907f883838fe69->enter($__internal_c27aa23b07a4b4463e982088e36041b52fc4f32a745c0c933f907f883838fe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e285fd24c6292c88eae0b24fc4bc750a50868f388d7fb6db091d3172463e21b7->leave($__internal_e285fd24c6292c88eae0b24fc4bc750a50868f388d7fb6db091d3172463e21b7_prof);

        
        $__internal_c27aa23b07a4b4463e982088e36041b52fc4f32a745c0c933f907f883838fe69->leave($__internal_c27aa23b07a4b4463e982088e36041b52fc4f32a745c0c933f907f883838fe69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
