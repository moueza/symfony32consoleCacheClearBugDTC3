<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b0928880b95e6e41bc8da2a66a3fe74aa0f108b47cfd43b1fd15bb63604602d7 extends Twig_Template
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
        $__internal_35b1dcca7b5ca6339bbd2fa464974e2f78858f8d45590adf3929efcf3e3cd41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b1dcca7b5ca6339bbd2fa464974e2f78858f8d45590adf3929efcf3e3cd41a->enter($__internal_35b1dcca7b5ca6339bbd2fa464974e2f78858f8d45590adf3929efcf3e3cd41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6ece0ba80922a038bf7b22a62146c8358422e32181a343517310dfc75719d775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ece0ba80922a038bf7b22a62146c8358422e32181a343517310dfc75719d775->enter($__internal_6ece0ba80922a038bf7b22a62146c8358422e32181a343517310dfc75719d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_35b1dcca7b5ca6339bbd2fa464974e2f78858f8d45590adf3929efcf3e3cd41a->leave($__internal_35b1dcca7b5ca6339bbd2fa464974e2f78858f8d45590adf3929efcf3e3cd41a_prof);

        
        $__internal_6ece0ba80922a038bf7b22a62146c8358422e32181a343517310dfc75719d775->leave($__internal_6ece0ba80922a038bf7b22a62146c8358422e32181a343517310dfc75719d775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
