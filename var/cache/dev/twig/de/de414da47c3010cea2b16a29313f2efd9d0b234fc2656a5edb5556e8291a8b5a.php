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
        $__internal_97d2f1a7109d6896bc723a4162d16aa6494ddebf801a906c628b963662718fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d2f1a7109d6896bc723a4162d16aa6494ddebf801a906c628b963662718fac->enter($__internal_97d2f1a7109d6896bc723a4162d16aa6494ddebf801a906c628b963662718fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a0899cb7d0c2f58dc8696ddff7d8ae5c68f2b0db3decc42d84f50e7ec63e6cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0899cb7d0c2f58dc8696ddff7d8ae5c68f2b0db3decc42d84f50e7ec63e6cd4->enter($__internal_a0899cb7d0c2f58dc8696ddff7d8ae5c68f2b0db3decc42d84f50e7ec63e6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_97d2f1a7109d6896bc723a4162d16aa6494ddebf801a906c628b963662718fac->leave($__internal_97d2f1a7109d6896bc723a4162d16aa6494ddebf801a906c628b963662718fac_prof);

        
        $__internal_a0899cb7d0c2f58dc8696ddff7d8ae5c68f2b0db3decc42d84f50e7ec63e6cd4->leave($__internal_a0899cb7d0c2f58dc8696ddff7d8ae5c68f2b0db3decc42d84f50e7ec63e6cd4_prof);

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
