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
        $__internal_e18bf36a15871bfe886c4744ca490735b8e0918bde455ad65965d04bfd57be16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18bf36a15871bfe886c4744ca490735b8e0918bde455ad65965d04bfd57be16->enter($__internal_e18bf36a15871bfe886c4744ca490735b8e0918bde455ad65965d04bfd57be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_76f5e6903e962d391a4d66731e95fdb41f0154e2dc3f2097f9712149b6563377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f5e6903e962d391a4d66731e95fdb41f0154e2dc3f2097f9712149b6563377->enter($__internal_76f5e6903e962d391a4d66731e95fdb41f0154e2dc3f2097f9712149b6563377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e18bf36a15871bfe886c4744ca490735b8e0918bde455ad65965d04bfd57be16->leave($__internal_e18bf36a15871bfe886c4744ca490735b8e0918bde455ad65965d04bfd57be16_prof);

        
        $__internal_76f5e6903e962d391a4d66731e95fdb41f0154e2dc3f2097f9712149b6563377->leave($__internal_76f5e6903e962d391a4d66731e95fdb41f0154e2dc3f2097f9712149b6563377_prof);

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
