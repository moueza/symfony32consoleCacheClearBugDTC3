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
        $__internal_36bd401334ebafbcc1c5793ec2e223ba7e076e4c54c1eb452e5c4f22c0c6e3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bd401334ebafbcc1c5793ec2e223ba7e076e4c54c1eb452e5c4f22c0c6e3e9->enter($__internal_36bd401334ebafbcc1c5793ec2e223ba7e076e4c54c1eb452e5c4f22c0c6e3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_34e5682e6a06cd18ae46f968481b4141fdc66784dbd3dcc684608d6c37fef092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e5682e6a06cd18ae46f968481b4141fdc66784dbd3dcc684608d6c37fef092->enter($__internal_34e5682e6a06cd18ae46f968481b4141fdc66784dbd3dcc684608d6c37fef092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_36bd401334ebafbcc1c5793ec2e223ba7e076e4c54c1eb452e5c4f22c0c6e3e9->leave($__internal_36bd401334ebafbcc1c5793ec2e223ba7e076e4c54c1eb452e5c4f22c0c6e3e9_prof);

        
        $__internal_34e5682e6a06cd18ae46f968481b4141fdc66784dbd3dcc684608d6c37fef092->leave($__internal_34e5682e6a06cd18ae46f968481b4141fdc66784dbd3dcc684608d6c37fef092_prof);

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
