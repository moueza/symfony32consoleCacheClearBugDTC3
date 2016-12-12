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
        $__internal_528e8bc496982bfea804aebd857574915c23a21fbceaec311e05d9962c6ecf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528e8bc496982bfea804aebd857574915c23a21fbceaec311e05d9962c6ecf37->enter($__internal_528e8bc496982bfea804aebd857574915c23a21fbceaec311e05d9962c6ecf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7a4fa37ebef36a75b25679844ba8afe04bf4a82f13ef7a52c72ed58b07e981d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4fa37ebef36a75b25679844ba8afe04bf4a82f13ef7a52c72ed58b07e981d1->enter($__internal_7a4fa37ebef36a75b25679844ba8afe04bf4a82f13ef7a52c72ed58b07e981d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_528e8bc496982bfea804aebd857574915c23a21fbceaec311e05d9962c6ecf37->leave($__internal_528e8bc496982bfea804aebd857574915c23a21fbceaec311e05d9962c6ecf37_prof);

        
        $__internal_7a4fa37ebef36a75b25679844ba8afe04bf4a82f13ef7a52c72ed58b07e981d1->leave($__internal_7a4fa37ebef36a75b25679844ba8afe04bf4a82f13ef7a52c72ed58b07e981d1_prof);

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
