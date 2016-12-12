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
        $__internal_4275d1c3bb603aa665708b6b9494c6585d4f1633a5f121244c7ddebb506313a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4275d1c3bb603aa665708b6b9494c6585d4f1633a5f121244c7ddebb506313a6->enter($__internal_4275d1c3bb603aa665708b6b9494c6585d4f1633a5f121244c7ddebb506313a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f2502e3787f8e745db1d4dc855cf82f203feab23a3950c2c2347a2c1de791959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2502e3787f8e745db1d4dc855cf82f203feab23a3950c2c2347a2c1de791959->enter($__internal_f2502e3787f8e745db1d4dc855cf82f203feab23a3950c2c2347a2c1de791959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4275d1c3bb603aa665708b6b9494c6585d4f1633a5f121244c7ddebb506313a6->leave($__internal_4275d1c3bb603aa665708b6b9494c6585d4f1633a5f121244c7ddebb506313a6_prof);

        
        $__internal_f2502e3787f8e745db1d4dc855cf82f203feab23a3950c2c2347a2c1de791959->leave($__internal_f2502e3787f8e745db1d4dc855cf82f203feab23a3950c2c2347a2c1de791959_prof);

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
