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
        $__internal_479e9e2f1e83b80afecc61a51ff15087422df59fe4d296c1849bab257d06f9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479e9e2f1e83b80afecc61a51ff15087422df59fe4d296c1849bab257d06f9c4->enter($__internal_479e9e2f1e83b80afecc61a51ff15087422df59fe4d296c1849bab257d06f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_398253fde271ee947607fd30a368cc32f2f6f48f7dde5b6c9d7290a05b0998f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398253fde271ee947607fd30a368cc32f2f6f48f7dde5b6c9d7290a05b0998f7->enter($__internal_398253fde271ee947607fd30a368cc32f2f6f48f7dde5b6c9d7290a05b0998f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_479e9e2f1e83b80afecc61a51ff15087422df59fe4d296c1849bab257d06f9c4->leave($__internal_479e9e2f1e83b80afecc61a51ff15087422df59fe4d296c1849bab257d06f9c4_prof);

        
        $__internal_398253fde271ee947607fd30a368cc32f2f6f48f7dde5b6c9d7290a05b0998f7->leave($__internal_398253fde271ee947607fd30a368cc32f2f6f48f7dde5b6c9d7290a05b0998f7_prof);

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
