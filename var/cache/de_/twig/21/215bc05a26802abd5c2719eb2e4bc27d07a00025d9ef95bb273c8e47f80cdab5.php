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
        $__internal_0e8efd0b4935551143184389a4214c9cbd2e85049369de1336478c1fbd9772e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8efd0b4935551143184389a4214c9cbd2e85049369de1336478c1fbd9772e5->enter($__internal_0e8efd0b4935551143184389a4214c9cbd2e85049369de1336478c1fbd9772e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_14044d1b32bf8a6d9863fc352adc4e28d9baf211db0c61179fa924444fd5fd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14044d1b32bf8a6d9863fc352adc4e28d9baf211db0c61179fa924444fd5fd71->enter($__internal_14044d1b32bf8a6d9863fc352adc4e28d9baf211db0c61179fa924444fd5fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0e8efd0b4935551143184389a4214c9cbd2e85049369de1336478c1fbd9772e5->leave($__internal_0e8efd0b4935551143184389a4214c9cbd2e85049369de1336478c1fbd9772e5_prof);

        
        $__internal_14044d1b32bf8a6d9863fc352adc4e28d9baf211db0c61179fa924444fd5fd71->leave($__internal_14044d1b32bf8a6d9863fc352adc4e28d9baf211db0c61179fa924444fd5fd71_prof);

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
