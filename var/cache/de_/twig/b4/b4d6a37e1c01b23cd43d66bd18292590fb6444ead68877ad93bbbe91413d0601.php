<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_c557d73b9949a412c1b9213dc327a9165d54e95c23edddf2ce64b3f42f513969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c557d73b9949a412c1b9213dc327a9165d54e95c23edddf2ce64b3f42f513969->enter($__internal_c557d73b9949a412c1b9213dc327a9165d54e95c23edddf2ce64b3f42f513969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_17881f9446b67678d8c2230d4d232857d4c69a9026d9dcd6be5853daaa1bcab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17881f9446b67678d8c2230d4d232857d4c69a9026d9dcd6be5853daaa1bcab8->enter($__internal_17881f9446b67678d8c2230d4d232857d4c69a9026d9dcd6be5853daaa1bcab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c557d73b9949a412c1b9213dc327a9165d54e95c23edddf2ce64b3f42f513969->leave($__internal_c557d73b9949a412c1b9213dc327a9165d54e95c23edddf2ce64b3f42f513969_prof);

        
        $__internal_17881f9446b67678d8c2230d4d232857d4c69a9026d9dcd6be5853daaa1bcab8->leave($__internal_17881f9446b67678d8c2230d4d232857d4c69a9026d9dcd6be5853daaa1bcab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
