<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5384edb8598d17273cbf36f28612cfe512bfe2a1a85dec4ef41b12ad37761e93 extends Twig_Template
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
        $__internal_ae2702741180b73bab8af05f61bcb977839a62270b807a4985c225e6a9343db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2702741180b73bab8af05f61bcb977839a62270b807a4985c225e6a9343db3->enter($__internal_ae2702741180b73bab8af05f61bcb977839a62270b807a4985c225e6a9343db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_73640e2ecbe83e727d74868529a8945b98d0bceae8fd4fa94c4273198acd4b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73640e2ecbe83e727d74868529a8945b98d0bceae8fd4fa94c4273198acd4b64->enter($__internal_73640e2ecbe83e727d74868529a8945b98d0bceae8fd4fa94c4273198acd4b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ae2702741180b73bab8af05f61bcb977839a62270b807a4985c225e6a9343db3->leave($__internal_ae2702741180b73bab8af05f61bcb977839a62270b807a4985c225e6a9343db3_prof);

        
        $__internal_73640e2ecbe83e727d74868529a8945b98d0bceae8fd4fa94c4273198acd4b64->leave($__internal_73640e2ecbe83e727d74868529a8945b98d0bceae8fd4fa94c4273198acd4b64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
