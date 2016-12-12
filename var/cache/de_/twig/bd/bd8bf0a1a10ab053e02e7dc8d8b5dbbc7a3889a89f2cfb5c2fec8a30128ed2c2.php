<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b9d171de1fc17f7d7a699aaf9f4dd5e018eac2e452701ac05e85df0aaceb2885 extends Twig_Template
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
        $__internal_3b7971f52fcf5d6ba0aaa6c2fe619ef0f30c9843dc42b77b5626df2943cd3fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7971f52fcf5d6ba0aaa6c2fe619ef0f30c9843dc42b77b5626df2943cd3fb8->enter($__internal_3b7971f52fcf5d6ba0aaa6c2fe619ef0f30c9843dc42b77b5626df2943cd3fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_762363b54e67a9b725310bb460d0531be271235569cbd07aa3271c36023764aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762363b54e67a9b725310bb460d0531be271235569cbd07aa3271c36023764aa->enter($__internal_762363b54e67a9b725310bb460d0531be271235569cbd07aa3271c36023764aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3b7971f52fcf5d6ba0aaa6c2fe619ef0f30c9843dc42b77b5626df2943cd3fb8->leave($__internal_3b7971f52fcf5d6ba0aaa6c2fe619ef0f30c9843dc42b77b5626df2943cd3fb8_prof);

        
        $__internal_762363b54e67a9b725310bb460d0531be271235569cbd07aa3271c36023764aa->leave($__internal_762363b54e67a9b725310bb460d0531be271235569cbd07aa3271c36023764aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
