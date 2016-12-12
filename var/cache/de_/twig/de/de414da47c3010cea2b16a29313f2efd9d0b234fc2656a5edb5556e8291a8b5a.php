<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_59ad285c96328f8c24e063c3e3a9c14e02f3bac9cfe79e2ee508a0e6cc50f161 extends Twig_Template
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
        $__internal_857354dfd4dd5c1131087e78bc094ac2714e10a165f254960379bf1773b0d6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857354dfd4dd5c1131087e78bc094ac2714e10a165f254960379bf1773b0d6ae->enter($__internal_857354dfd4dd5c1131087e78bc094ac2714e10a165f254960379bf1773b0d6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dec95086c7eae26ab58a01c13927b99400bfa177baf6407b320fd0f76bc7bf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec95086c7eae26ab58a01c13927b99400bfa177baf6407b320fd0f76bc7bf06->enter($__internal_dec95086c7eae26ab58a01c13927b99400bfa177baf6407b320fd0f76bc7bf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_857354dfd4dd5c1131087e78bc094ac2714e10a165f254960379bf1773b0d6ae->leave($__internal_857354dfd4dd5c1131087e78bc094ac2714e10a165f254960379bf1773b0d6ae_prof);

        
        $__internal_dec95086c7eae26ab58a01c13927b99400bfa177baf6407b320fd0f76bc7bf06->leave($__internal_dec95086c7eae26ab58a01c13927b99400bfa177baf6407b320fd0f76bc7bf06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
