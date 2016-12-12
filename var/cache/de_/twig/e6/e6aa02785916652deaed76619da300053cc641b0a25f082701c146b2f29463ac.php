<?php

/* @OCUser/Inscription/inscrits.html.twig */
class __TwigTemplate_3d04334ae5a1e71e5a35a72dc705f9dc856c1dc0a6e6c90e40e6bc3d5a2578ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle:Default:layout.html.twig", "@OCUser/Inscription/inscrits.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e3a11103221fdff88712f1bebf5237b85fd980c6e02affc57af7c189a0d477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e3a11103221fdff88712f1bebf5237b85fd980c6e02affc57af7c189a0d477->enter($__internal_80e3a11103221fdff88712f1bebf5237b85fd980c6e02affc57af7c189a0d477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $__internal_ddef2cfbeab4f3e73c87ab524a676f52352f2da8a2ef0232226c23fdbcd63814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddef2cfbeab4f3e73c87ab524a676f52352f2da8a2ef0232226c23fdbcd63814->enter($__internal_ddef2cfbeab4f3e73c87ab524a676f52352f2da8a2ef0232226c23fdbcd63814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e3a11103221fdff88712f1bebf5237b85fd980c6e02affc57af7c189a0d477->leave($__internal_80e3a11103221fdff88712f1bebf5237b85fd980c6e02affc57af7c189a0d477_prof);

        
        $__internal_ddef2cfbeab4f3e73c87ab524a676f52352f2da8a2ef0232226c23fdbcd63814->leave($__internal_ddef2cfbeab4f3e73c87ab524a676f52352f2da8a2ef0232226c23fdbcd63814_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a80300478bb908deae17875bd4dfc002f96f5220eb88bd45f5d5d57dad5fa4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a80300478bb908deae17875bd4dfc002f96f5220eb88bd45f5d5d57dad5fa4b->enter($__internal_2a80300478bb908deae17875bd4dfc002f96f5220eb88bd45f5d5d57dad5fa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b4b735c148a3357c116e96b289f22a3b54ce91bd9161c2654061e46305bb155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4b735c148a3357c116e96b289f22a3b54ce91bd9161c2654061e46305bb155->enter($__internal_7b4b735c148a3357c116e96b289f22a3b54ce91bd9161c2654061e46305bb155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h3>Les inscrits</h3>


    <div class=\"well\">
        Participent :

        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listInscrits"]) ? $context["listInscrits"] : $this->getContext($context, "listInscrits")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["inscrit"]) {
            // line 16
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ") ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscrit"], "username", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscrit"], "email", array()), "html", null, true);
            echo "</li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscrit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>


        <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>

";
        
        $__internal_7b4b735c148a3357c116e96b289f22a3b54ce91bd9161c2654061e46305bb155->leave($__internal_7b4b735c148a3357c116e96b289f22a3b54ce91bd9161c2654061e46305bb155_prof);

        
        $__internal_2a80300478bb908deae17875bd4dfc002f96f5220eb88bd45f5d5d57dad5fa4b->leave($__internal_2a80300478bb908deae17875bd4dfc002f96f5220eb88bd45f5d5d57dad5fa4b_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/inscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  76 => 16,  59 => 15,  49 => 7,  40 => 6,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"OCPlatformBundle:Default:layout.html.twig\" %}



{% block body %}

    <h3>Les inscrits</h3>


    <div class=\"well\">
        Participent :

        <ul>
            {% for inscrit in listInscrits %}
                <li>{{loop.index}}) {{inscrit.username}} {{inscrit.email}}</li>
                {% endfor %}
        </ul>


        <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>

{% endblock %}

", "@OCUser/Inscription/inscrits.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/inscrits.html.twig");
    }
}
