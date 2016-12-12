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
        $__internal_242a8826139cf0efb51bf8849a096908d1a78db7b0f30d12068e900ceabc0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242a8826139cf0efb51bf8849a096908d1a78db7b0f30d12068e900ceabc0385->enter($__internal_242a8826139cf0efb51bf8849a096908d1a78db7b0f30d12068e900ceabc0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9671a2f813c162f6ccc754ea9903e5428fc6c99d68ce866bf0d89b8f90b3aa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9671a2f813c162f6ccc754ea9903e5428fc6c99d68ce866bf0d89b8f90b3aa83->enter($__internal_9671a2f813c162f6ccc754ea9903e5428fc6c99d68ce866bf0d89b8f90b3aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_242a8826139cf0efb51bf8849a096908d1a78db7b0f30d12068e900ceabc0385->leave($__internal_242a8826139cf0efb51bf8849a096908d1a78db7b0f30d12068e900ceabc0385_prof);

        
        $__internal_9671a2f813c162f6ccc754ea9903e5428fc6c99d68ce866bf0d89b8f90b3aa83->leave($__internal_9671a2f813c162f6ccc754ea9903e5428fc6c99d68ce866bf0d89b8f90b3aa83_prof);

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
