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
        $__internal_0e61d45fe75e2a19a86d195bff6db70089933b4590da4f934d56b05c44b61e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e61d45fe75e2a19a86d195bff6db70089933b4590da4f934d56b05c44b61e91->enter($__internal_0e61d45fe75e2a19a86d195bff6db70089933b4590da4f934d56b05c44b61e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4ef132c8d1176eea78382bc4ca48d477e961580a7e3e2bfc51258ae9931f908a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef132c8d1176eea78382bc4ca48d477e961580a7e3e2bfc51258ae9931f908a->enter($__internal_4ef132c8d1176eea78382bc4ca48d477e961580a7e3e2bfc51258ae9931f908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0e61d45fe75e2a19a86d195bff6db70089933b4590da4f934d56b05c44b61e91->leave($__internal_0e61d45fe75e2a19a86d195bff6db70089933b4590da4f934d56b05c44b61e91_prof);

        
        $__internal_4ef132c8d1176eea78382bc4ca48d477e961580a7e3e2bfc51258ae9931f908a->leave($__internal_4ef132c8d1176eea78382bc4ca48d477e961580a7e3e2bfc51258ae9931f908a_prof);

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
