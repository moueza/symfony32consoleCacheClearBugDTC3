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
        $__internal_96b13efca9876cf63ada2ed95a3cf8eeaa6ae11dffbea98c7d8d3800cae0d7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b13efca9876cf63ada2ed95a3cf8eeaa6ae11dffbea98c7d8d3800cae0d7c6->enter($__internal_96b13efca9876cf63ada2ed95a3cf8eeaa6ae11dffbea98c7d8d3800cae0d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3e93d8c6ac807b595b4a8f5d8f8dd7277be313f5eb1fa5db9dfabe57062ceea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e93d8c6ac807b595b4a8f5d8f8dd7277be313f5eb1fa5db9dfabe57062ceea2->enter($__internal_3e93d8c6ac807b595b4a8f5d8f8dd7277be313f5eb1fa5db9dfabe57062ceea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_96b13efca9876cf63ada2ed95a3cf8eeaa6ae11dffbea98c7d8d3800cae0d7c6->leave($__internal_96b13efca9876cf63ada2ed95a3cf8eeaa6ae11dffbea98c7d8d3800cae0d7c6_prof);

        
        $__internal_3e93d8c6ac807b595b4a8f5d8f8dd7277be313f5eb1fa5db9dfabe57062ceea2->leave($__internal_3e93d8c6ac807b595b4a8f5d8f8dd7277be313f5eb1fa5db9dfabe57062ceea2_prof);

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
