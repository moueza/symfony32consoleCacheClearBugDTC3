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
        $__internal_b856651fbff0cbec3d3d2bb650471fb38a1641c7d7f20f8cdcaca5f4e2728b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b856651fbff0cbec3d3d2bb650471fb38a1641c7d7f20f8cdcaca5f4e2728b02->enter($__internal_b856651fbff0cbec3d3d2bb650471fb38a1641c7d7f20f8cdcaca5f4e2728b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $__internal_ad22cd945c63dbc8e7b578c5df7ab98c332e5d9b4dfbea9f9b90e2fd42a205d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad22cd945c63dbc8e7b578c5df7ab98c332e5d9b4dfbea9f9b90e2fd42a205d3->enter($__internal_ad22cd945c63dbc8e7b578c5df7ab98c332e5d9b4dfbea9f9b90e2fd42a205d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b856651fbff0cbec3d3d2bb650471fb38a1641c7d7f20f8cdcaca5f4e2728b02->leave($__internal_b856651fbff0cbec3d3d2bb650471fb38a1641c7d7f20f8cdcaca5f4e2728b02_prof);

        
        $__internal_ad22cd945c63dbc8e7b578c5df7ab98c332e5d9b4dfbea9f9b90e2fd42a205d3->leave($__internal_ad22cd945c63dbc8e7b578c5df7ab98c332e5d9b4dfbea9f9b90e2fd42a205d3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf1c0cf1f21f70aad8d98b7470dfa82b5f6a25c1a42e00c86104509674de2e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1c0cf1f21f70aad8d98b7470dfa82b5f6a25c1a42e00c86104509674de2e43->enter($__internal_bf1c0cf1f21f70aad8d98b7470dfa82b5f6a25c1a42e00c86104509674de2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a62a57d5008547ded5623063f373c82668c65264c08ab208ab5b7561689d76ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62a57d5008547ded5623063f373c82668c65264c08ab208ab5b7561689d76ee->enter($__internal_a62a57d5008547ded5623063f373c82668c65264c08ab208ab5b7561689d76ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a62a57d5008547ded5623063f373c82668c65264c08ab208ab5b7561689d76ee->leave($__internal_a62a57d5008547ded5623063f373c82668c65264c08ab208ab5b7561689d76ee_prof);

        
        $__internal_bf1c0cf1f21f70aad8d98b7470dfa82b5f6a25c1a42e00c86104509674de2e43->leave($__internal_bf1c0cf1f21f70aad8d98b7470dfa82b5f6a25c1a42e00c86104509674de2e43_prof);

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
