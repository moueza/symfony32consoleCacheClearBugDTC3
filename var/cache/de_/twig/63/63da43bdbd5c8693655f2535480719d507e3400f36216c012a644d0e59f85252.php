<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28e705f056180ea68eb0655f43f78da599490ebd82844bec379d4e2eca0af02a extends Twig_Template
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
        $__internal_83395eee55db7fc2e2c24b134e15419beaaebbb8396b01482030d00c7432badf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83395eee55db7fc2e2c24b134e15419beaaebbb8396b01482030d00c7432badf->enter($__internal_83395eee55db7fc2e2c24b134e15419beaaebbb8396b01482030d00c7432badf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5e15027d0e1483cee6c4e9b729b5be70ddaaa5d918637754b848460bdd24a464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e15027d0e1483cee6c4e9b729b5be70ddaaa5d918637754b848460bdd24a464->enter($__internal_5e15027d0e1483cee6c4e9b729b5be70ddaaa5d918637754b848460bdd24a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_83395eee55db7fc2e2c24b134e15419beaaebbb8396b01482030d00c7432badf->leave($__internal_83395eee55db7fc2e2c24b134e15419beaaebbb8396b01482030d00c7432badf_prof);

        
        $__internal_5e15027d0e1483cee6c4e9b729b5be70ddaaa5d918637754b848460bdd24a464->leave($__internal_5e15027d0e1483cee6c4e9b729b5be70ddaaa5d918637754b848460bdd24a464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
