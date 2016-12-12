<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_71bebd6b020a05f151cf140392e2b64f00c0c93947f29cc03338ff170739e2b4 extends Twig_Template
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
        $__internal_6b3ee2340805cb342bda6a75e4dd99c73ee346c74b099fe946a73752f3c4c4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3ee2340805cb342bda6a75e4dd99c73ee346c74b099fe946a73752f3c4c4b7->enter($__internal_6b3ee2340805cb342bda6a75e4dd99c73ee346c74b099fe946a73752f3c4c4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5bab0358a324f789b0d2f0cefe96db6b4a93bb9557208b1016e0ca67d9bf4456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bab0358a324f789b0d2f0cefe96db6b4a93bb9557208b1016e0ca67d9bf4456->enter($__internal_5bab0358a324f789b0d2f0cefe96db6b4a93bb9557208b1016e0ca67d9bf4456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6b3ee2340805cb342bda6a75e4dd99c73ee346c74b099fe946a73752f3c4c4b7->leave($__internal_6b3ee2340805cb342bda6a75e4dd99c73ee346c74b099fe946a73752f3c4c4b7_prof);

        
        $__internal_5bab0358a324f789b0d2f0cefe96db6b4a93bb9557208b1016e0ca67d9bf4456->leave($__internal_5bab0358a324f789b0d2f0cefe96db6b4a93bb9557208b1016e0ca67d9bf4456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
