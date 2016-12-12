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
        $__internal_39fc8eec2747e3b5c44749a81efe2be71d976e8bdfe70e632efb8a13d23489ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fc8eec2747e3b5c44749a81efe2be71d976e8bdfe70e632efb8a13d23489ea->enter($__internal_39fc8eec2747e3b5c44749a81efe2be71d976e8bdfe70e632efb8a13d23489ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_302079cc311ba2480b91ab2858a663664c8548c491ba9c61b0e297ae83e85c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302079cc311ba2480b91ab2858a663664c8548c491ba9c61b0e297ae83e85c29->enter($__internal_302079cc311ba2480b91ab2858a663664c8548c491ba9c61b0e297ae83e85c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_39fc8eec2747e3b5c44749a81efe2be71d976e8bdfe70e632efb8a13d23489ea->leave($__internal_39fc8eec2747e3b5c44749a81efe2be71d976e8bdfe70e632efb8a13d23489ea_prof);

        
        $__internal_302079cc311ba2480b91ab2858a663664c8548c491ba9c61b0e297ae83e85c29->leave($__internal_302079cc311ba2480b91ab2858a663664c8548c491ba9c61b0e297ae83e85c29_prof);

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
