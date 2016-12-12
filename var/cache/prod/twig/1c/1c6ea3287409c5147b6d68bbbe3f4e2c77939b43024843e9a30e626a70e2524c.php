<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_7ac68cfee5db16d5a504e594a9abcb37bbd7d86be3b63348a4a32b1d5add4bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE HTML>

<html>

    <head>

        <meta charset=\"utf-8\">

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    </head>

    <body>


        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "

    </body>

</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "DTC 3";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  58 => 17,  52 => 10,  44 => 20,  42 => 17,  32 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCCoreBundle::layout.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
