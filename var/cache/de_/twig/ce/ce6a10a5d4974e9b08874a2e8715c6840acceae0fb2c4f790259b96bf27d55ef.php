<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_56097ca3d1f050c174938b8e437f89d4d1e3f2fed91f98af490e81c686f8fc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56097ca3d1f050c174938b8e437f89d4d1e3f2fed91f98af490e81c686f8fc1d->enter($__internal_56097ca3d1f050c174938b8e437f89d4d1e3f2fed91f98af490e81c686f8fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0df506eab4444ae1790a2e20c112afb98ab906adac0bb9c1c002f8d1e9dfcb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df506eab4444ae1790a2e20c112afb98ab906adac0bb9c1c002f8d1e9dfcb95->enter($__internal_0df506eab4444ae1790a2e20c112afb98ab906adac0bb9c1c002f8d1e9dfcb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56097ca3d1f050c174938b8e437f89d4d1e3f2fed91f98af490e81c686f8fc1d->leave($__internal_56097ca3d1f050c174938b8e437f89d4d1e3f2fed91f98af490e81c686f8fc1d_prof);

        
        $__internal_0df506eab4444ae1790a2e20c112afb98ab906adac0bb9c1c002f8d1e9dfcb95->leave($__internal_0df506eab4444ae1790a2e20c112afb98ab906adac0bb9c1c002f8d1e9dfcb95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
