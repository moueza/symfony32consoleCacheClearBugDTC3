<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_42e2bc998cd6969252ae0e27354a59004f6fa04a4e8c516071f1cbb60ccf8d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e2bc998cd6969252ae0e27354a59004f6fa04a4e8c516071f1cbb60ccf8d9c->enter($__internal_42e2bc998cd6969252ae0e27354a59004f6fa04a4e8c516071f1cbb60ccf8d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c3c779536342e930026c7c0c6b4fed5bedfd45e83319bc43d712e59c942574d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c779536342e930026c7c0c6b4fed5bedfd45e83319bc43d712e59c942574d7->enter($__internal_c3c779536342e930026c7c0c6b4fed5bedfd45e83319bc43d712e59c942574d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_42e2bc998cd6969252ae0e27354a59004f6fa04a4e8c516071f1cbb60ccf8d9c->leave($__internal_42e2bc998cd6969252ae0e27354a59004f6fa04a4e8c516071f1cbb60ccf8d9c_prof);

        
        $__internal_c3c779536342e930026c7c0c6b4fed5bedfd45e83319bc43d712e59c942574d7->leave($__internal_c3c779536342e930026c7c0c6b4fed5bedfd45e83319bc43d712e59c942574d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
