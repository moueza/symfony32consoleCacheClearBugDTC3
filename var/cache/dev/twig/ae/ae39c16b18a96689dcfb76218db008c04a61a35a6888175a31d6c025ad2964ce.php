<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1ef9711d5812e446bdf8ddc16ec977eb826d3ab3cb26507456c9b09b7c4aa358 extends Twig_Template
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
        $__internal_5838b0067ffe7b9668731ec690738df6605ca529fcfe4266312f83aa3c9367c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5838b0067ffe7b9668731ec690738df6605ca529fcfe4266312f83aa3c9367c9->enter($__internal_5838b0067ffe7b9668731ec690738df6605ca529fcfe4266312f83aa3c9367c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2cf26bd3078f2108ce48508d10182fe9e4c4bac43ab89e5816eb7e7733190c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf26bd3078f2108ce48508d10182fe9e4c4bac43ab89e5816eb7e7733190c44->enter($__internal_2cf26bd3078f2108ce48508d10182fe9e4c4bac43ab89e5816eb7e7733190c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5838b0067ffe7b9668731ec690738df6605ca529fcfe4266312f83aa3c9367c9->leave($__internal_5838b0067ffe7b9668731ec690738df6605ca529fcfe4266312f83aa3c9367c9_prof);

        
        $__internal_2cf26bd3078f2108ce48508d10182fe9e4c4bac43ab89e5816eb7e7733190c44->leave($__internal_2cf26bd3078f2108ce48508d10182fe9e4c4bac43ab89e5816eb7e7733190c44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
