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
        $__internal_b3ea083af400a5e8e5f5ef95a419ff96a457290d466965272b6564aefeceee54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ea083af400a5e8e5f5ef95a419ff96a457290d466965272b6564aefeceee54->enter($__internal_b3ea083af400a5e8e5f5ef95a419ff96a457290d466965272b6564aefeceee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c1c9c2b74da0fc8ffee93d19d9c81253358bca3bc279d2e187ac451b246862d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c9c2b74da0fc8ffee93d19d9c81253358bca3bc279d2e187ac451b246862d4->enter($__internal_c1c9c2b74da0fc8ffee93d19d9c81253358bca3bc279d2e187ac451b246862d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b3ea083af400a5e8e5f5ef95a419ff96a457290d466965272b6564aefeceee54->leave($__internal_b3ea083af400a5e8e5f5ef95a419ff96a457290d466965272b6564aefeceee54_prof);

        
        $__internal_c1c9c2b74da0fc8ffee93d19d9c81253358bca3bc279d2e187ac451b246862d4->leave($__internal_c1c9c2b74da0fc8ffee93d19d9c81253358bca3bc279d2e187ac451b246862d4_prof);

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
