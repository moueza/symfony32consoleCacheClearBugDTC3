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
        $__internal_568cd685d60dd7d242cc6bd97327d8e3c5c52c3bebadf2c8c065a48b585a238f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568cd685d60dd7d242cc6bd97327d8e3c5c52c3bebadf2c8c065a48b585a238f->enter($__internal_568cd685d60dd7d242cc6bd97327d8e3c5c52c3bebadf2c8c065a48b585a238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_983f719cefe20327242ead58d1e25d67b66cb8fc8b167b3cf7d781bdf5bb5754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983f719cefe20327242ead58d1e25d67b66cb8fc8b167b3cf7d781bdf5bb5754->enter($__internal_983f719cefe20327242ead58d1e25d67b66cb8fc8b167b3cf7d781bdf5bb5754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_568cd685d60dd7d242cc6bd97327d8e3c5c52c3bebadf2c8c065a48b585a238f->leave($__internal_568cd685d60dd7d242cc6bd97327d8e3c5c52c3bebadf2c8c065a48b585a238f_prof);

        
        $__internal_983f719cefe20327242ead58d1e25d67b66cb8fc8b167b3cf7d781bdf5bb5754->leave($__internal_983f719cefe20327242ead58d1e25d67b66cb8fc8b167b3cf7d781bdf5bb5754_prof);

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
