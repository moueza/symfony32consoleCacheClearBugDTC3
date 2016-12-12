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
        $__internal_678fa23533f077c2a77526b249da670de46e88654c212ee629905538e37a2987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678fa23533f077c2a77526b249da670de46e88654c212ee629905538e37a2987->enter($__internal_678fa23533f077c2a77526b249da670de46e88654c212ee629905538e37a2987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9028594948a264b54e8ae757b6e48d1bd989f1d93bf319fda2ffb818761bdd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9028594948a264b54e8ae757b6e48d1bd989f1d93bf319fda2ffb818761bdd51->enter($__internal_9028594948a264b54e8ae757b6e48d1bd989f1d93bf319fda2ffb818761bdd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_678fa23533f077c2a77526b249da670de46e88654c212ee629905538e37a2987->leave($__internal_678fa23533f077c2a77526b249da670de46e88654c212ee629905538e37a2987_prof);

        
        $__internal_9028594948a264b54e8ae757b6e48d1bd989f1d93bf319fda2ffb818761bdd51->leave($__internal_9028594948a264b54e8ae757b6e48d1bd989f1d93bf319fda2ffb818761bdd51_prof);

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
