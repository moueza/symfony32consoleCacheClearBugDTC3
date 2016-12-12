<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_853970894709f4efb6a2dccdc14ee7b6c2ac01b45ae1cd916547413d4fecd609 extends Twig_Template
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
        $__internal_ed9cfedf9bd418e58364705f510395b73013a6bfe9741bbb94cfcb56e264681d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9cfedf9bd418e58364705f510395b73013a6bfe9741bbb94cfcb56e264681d->enter($__internal_ed9cfedf9bd418e58364705f510395b73013a6bfe9741bbb94cfcb56e264681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e53cd6f7bcb0fcec65320f82fe3409b6ae2019c3ff562c1cb08c346889e01634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53cd6f7bcb0fcec65320f82fe3409b6ae2019c3ff562c1cb08c346889e01634->enter($__internal_e53cd6f7bcb0fcec65320f82fe3409b6ae2019c3ff562c1cb08c346889e01634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ed9cfedf9bd418e58364705f510395b73013a6bfe9741bbb94cfcb56e264681d->leave($__internal_ed9cfedf9bd418e58364705f510395b73013a6bfe9741bbb94cfcb56e264681d_prof);

        
        $__internal_e53cd6f7bcb0fcec65320f82fe3409b6ae2019c3ff562c1cb08c346889e01634->leave($__internal_e53cd6f7bcb0fcec65320f82fe3409b6ae2019c3ff562c1cb08c346889e01634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
