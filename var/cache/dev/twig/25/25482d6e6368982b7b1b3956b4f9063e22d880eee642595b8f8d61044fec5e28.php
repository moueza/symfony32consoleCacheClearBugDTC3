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
        $__internal_c0741de1f1d74386d37a4f0cd5357a38b64ea5e79ae0f018591381cbbaca5c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0741de1f1d74386d37a4f0cd5357a38b64ea5e79ae0f018591381cbbaca5c85->enter($__internal_c0741de1f1d74386d37a4f0cd5357a38b64ea5e79ae0f018591381cbbaca5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_70baf2d980a017d4af28cd040f30c9c8868bc0739f1b5a3519bab6aa9d96a3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70baf2d980a017d4af28cd040f30c9c8868bc0739f1b5a3519bab6aa9d96a3c7->enter($__internal_70baf2d980a017d4af28cd040f30c9c8868bc0739f1b5a3519bab6aa9d96a3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c0741de1f1d74386d37a4f0cd5357a38b64ea5e79ae0f018591381cbbaca5c85->leave($__internal_c0741de1f1d74386d37a4f0cd5357a38b64ea5e79ae0f018591381cbbaca5c85_prof);

        
        $__internal_70baf2d980a017d4af28cd040f30c9c8868bc0739f1b5a3519bab6aa9d96a3c7->leave($__internal_70baf2d980a017d4af28cd040f30c9c8868bc0739f1b5a3519bab6aa9d96a3c7_prof);

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
