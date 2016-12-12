<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8c647dc3fe76bc6399839bfa0f6da327a8ed977d04d3757ac7ca5a7a6ae90a51 extends Twig_Template
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
        $__internal_1cb5cf9fe9d53906020af6a9c3af926a21f400140858f4dfac55b774da94dd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb5cf9fe9d53906020af6a9c3af926a21f400140858f4dfac55b774da94dd5a->enter($__internal_1cb5cf9fe9d53906020af6a9c3af926a21f400140858f4dfac55b774da94dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b877afb08dca97da39935212b6f74665e05c639b286f38336be52e5151c2a7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b877afb08dca97da39935212b6f74665e05c639b286f38336be52e5151c2a7de->enter($__internal_b877afb08dca97da39935212b6f74665e05c639b286f38336be52e5151c2a7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1cb5cf9fe9d53906020af6a9c3af926a21f400140858f4dfac55b774da94dd5a->leave($__internal_1cb5cf9fe9d53906020af6a9c3af926a21f400140858f4dfac55b774da94dd5a_prof);

        
        $__internal_b877afb08dca97da39935212b6f74665e05c639b286f38336be52e5151c2a7de->leave($__internal_b877afb08dca97da39935212b6f74665e05c639b286f38336be52e5151c2a7de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
