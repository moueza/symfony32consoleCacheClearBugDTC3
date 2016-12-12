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
        $__internal_8da9cc4777b64117d3f447fd75b3e660ece4a43b9ec5307f6033758c3172e7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da9cc4777b64117d3f447fd75b3e660ece4a43b9ec5307f6033758c3172e7e4->enter($__internal_8da9cc4777b64117d3f447fd75b3e660ece4a43b9ec5307f6033758c3172e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fdecefd3463982d49fd7b5b79e17b77e639fa48b0e2e525765c0c8c5f280ff1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdecefd3463982d49fd7b5b79e17b77e639fa48b0e2e525765c0c8c5f280ff1c->enter($__internal_fdecefd3463982d49fd7b5b79e17b77e639fa48b0e2e525765c0c8c5f280ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8da9cc4777b64117d3f447fd75b3e660ece4a43b9ec5307f6033758c3172e7e4->leave($__internal_8da9cc4777b64117d3f447fd75b3e660ece4a43b9ec5307f6033758c3172e7e4_prof);

        
        $__internal_fdecefd3463982d49fd7b5b79e17b77e639fa48b0e2e525765c0c8c5f280ff1c->leave($__internal_fdecefd3463982d49fd7b5b79e17b77e639fa48b0e2e525765c0c8c5f280ff1c_prof);

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
