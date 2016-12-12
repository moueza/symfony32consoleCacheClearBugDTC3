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
        $__internal_fe0458630cc7014d3d3a04aef93270b02e2f675d7ca962b0e575e18f3f0a2e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0458630cc7014d3d3a04aef93270b02e2f675d7ca962b0e575e18f3f0a2e02->enter($__internal_fe0458630cc7014d3d3a04aef93270b02e2f675d7ca962b0e575e18f3f0a2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a9bee367b0e05783d06aa8bf66016d51f7c2b84e613e1fd1d270cb236fc31625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bee367b0e05783d06aa8bf66016d51f7c2b84e613e1fd1d270cb236fc31625->enter($__internal_a9bee367b0e05783d06aa8bf66016d51f7c2b84e613e1fd1d270cb236fc31625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fe0458630cc7014d3d3a04aef93270b02e2f675d7ca962b0e575e18f3f0a2e02->leave($__internal_fe0458630cc7014d3d3a04aef93270b02e2f675d7ca962b0e575e18f3f0a2e02_prof);

        
        $__internal_a9bee367b0e05783d06aa8bf66016d51f7c2b84e613e1fd1d270cb236fc31625->leave($__internal_a9bee367b0e05783d06aa8bf66016d51f7c2b84e613e1fd1d270cb236fc31625_prof);

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
