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
        $__internal_4d41fa6a9eeae21a3c421294a54f3d8e8bd31e76c81d60659073913c4722cf90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d41fa6a9eeae21a3c421294a54f3d8e8bd31e76c81d60659073913c4722cf90->enter($__internal_4d41fa6a9eeae21a3c421294a54f3d8e8bd31e76c81d60659073913c4722cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d190e0299ad25b7a3f9b02453ac872796df770e6cfedb2e4c92ba60dfd6aaa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d190e0299ad25b7a3f9b02453ac872796df770e6cfedb2e4c92ba60dfd6aaa47->enter($__internal_d190e0299ad25b7a3f9b02453ac872796df770e6cfedb2e4c92ba60dfd6aaa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4d41fa6a9eeae21a3c421294a54f3d8e8bd31e76c81d60659073913c4722cf90->leave($__internal_4d41fa6a9eeae21a3c421294a54f3d8e8bd31e76c81d60659073913c4722cf90_prof);

        
        $__internal_d190e0299ad25b7a3f9b02453ac872796df770e6cfedb2e4c92ba60dfd6aaa47->leave($__internal_d190e0299ad25b7a3f9b02453ac872796df770e6cfedb2e4c92ba60dfd6aaa47_prof);

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
