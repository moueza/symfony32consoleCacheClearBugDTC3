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
        $__internal_8aea72f3da4f1ba5fb327de4d2259c45d33a35591d96c049ecf7574550d5ec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aea72f3da4f1ba5fb327de4d2259c45d33a35591d96c049ecf7574550d5ec24->enter($__internal_8aea72f3da4f1ba5fb327de4d2259c45d33a35591d96c049ecf7574550d5ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_10e310f6e26d6ddd5e9a29b348a90f780067408a258588b19c7500ec5b9ae0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e310f6e26d6ddd5e9a29b348a90f780067408a258588b19c7500ec5b9ae0ad->enter($__internal_10e310f6e26d6ddd5e9a29b348a90f780067408a258588b19c7500ec5b9ae0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8aea72f3da4f1ba5fb327de4d2259c45d33a35591d96c049ecf7574550d5ec24->leave($__internal_8aea72f3da4f1ba5fb327de4d2259c45d33a35591d96c049ecf7574550d5ec24_prof);

        
        $__internal_10e310f6e26d6ddd5e9a29b348a90f780067408a258588b19c7500ec5b9ae0ad->leave($__internal_10e310f6e26d6ddd5e9a29b348a90f780067408a258588b19c7500ec5b9ae0ad_prof);

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
