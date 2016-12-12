<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_d7ef43eab77daa5525b3c3aca807b1a4e37f45fec1fc640e1860f58cd8a91532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ef43eab77daa5525b3c3aca807b1a4e37f45fec1fc640e1860f58cd8a91532->enter($__internal_d7ef43eab77daa5525b3c3aca807b1a4e37f45fec1fc640e1860f58cd8a91532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ad2fdaed52cb9d804ee39d72bbd168c5ca94ea9465424097c201756d204235d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2fdaed52cb9d804ee39d72bbd168c5ca94ea9465424097c201756d204235d1->enter($__internal_ad2fdaed52cb9d804ee39d72bbd168c5ca94ea9465424097c201756d204235d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d7ef43eab77daa5525b3c3aca807b1a4e37f45fec1fc640e1860f58cd8a91532->leave($__internal_d7ef43eab77daa5525b3c3aca807b1a4e37f45fec1fc640e1860f58cd8a91532_prof);

        
        $__internal_ad2fdaed52cb9d804ee39d72bbd168c5ca94ea9465424097c201756d204235d1->leave($__internal_ad2fdaed52cb9d804ee39d72bbd168c5ca94ea9465424097c201756d204235d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
