<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_96ad2c2804abc3f3537b939f9adb1222e25818960fc62162f9565b5d31b00c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ad2c2804abc3f3537b939f9adb1222e25818960fc62162f9565b5d31b00c20->enter($__internal_96ad2c2804abc3f3537b939f9adb1222e25818960fc62162f9565b5d31b00c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bb6a3a280c286173c20082960d0a4a4a076df57d98ae6e72eff6de6d738ef8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6a3a280c286173c20082960d0a4a4a076df57d98ae6e72eff6de6d738ef8ce->enter($__internal_bb6a3a280c286173c20082960d0a4a4a076df57d98ae6e72eff6de6d738ef8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_96ad2c2804abc3f3537b939f9adb1222e25818960fc62162f9565b5d31b00c20->leave($__internal_96ad2c2804abc3f3537b939f9adb1222e25818960fc62162f9565b5d31b00c20_prof);

        
        $__internal_bb6a3a280c286173c20082960d0a4a4a076df57d98ae6e72eff6de6d738ef8ce->leave($__internal_bb6a3a280c286173c20082960d0a4a4a076df57d98ae6e72eff6de6d738ef8ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
