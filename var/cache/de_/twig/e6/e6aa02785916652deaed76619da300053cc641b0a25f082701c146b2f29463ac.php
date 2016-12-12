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
        $__internal_3eb660dd7d8838d1bd48c9a4879c508730394b4bcccb32e2f3d946aca369e770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb660dd7d8838d1bd48c9a4879c508730394b4bcccb32e2f3d946aca369e770->enter($__internal_3eb660dd7d8838d1bd48c9a4879c508730394b4bcccb32e2f3d946aca369e770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $__internal_17d4f0f07d3bc465f0817ad0c6ba2ab4f24643bdf923b278c9ae7b1bf27c1d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d4f0f07d3bc465f0817ad0c6ba2ab4f24643bdf923b278c9ae7b1bf27c1d46->enter($__internal_17d4f0f07d3bc465f0817ad0c6ba2ab4f24643bdf923b278c9ae7b1bf27c1d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb660dd7d8838d1bd48c9a4879c508730394b4bcccb32e2f3d946aca369e770->leave($__internal_3eb660dd7d8838d1bd48c9a4879c508730394b4bcccb32e2f3d946aca369e770_prof);

        
        $__internal_17d4f0f07d3bc465f0817ad0c6ba2ab4f24643bdf923b278c9ae7b1bf27c1d46->leave($__internal_17d4f0f07d3bc465f0817ad0c6ba2ab4f24643bdf923b278c9ae7b1bf27c1d46_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a99e208597c0d39db7f5cd31ee88d1874c7c4da7b267417a072b84baddc9bacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99e208597c0d39db7f5cd31ee88d1874c7c4da7b267417a072b84baddc9bacf->enter($__internal_a99e208597c0d39db7f5cd31ee88d1874c7c4da7b267417a072b84baddc9bacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad6d1ae2ff3c449ba83d48cfab649536651ec1bee87e77ada22b318502edb7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6d1ae2ff3c449ba83d48cfab649536651ec1bee87e77ada22b318502edb7cb->enter($__internal_ad6d1ae2ff3c449ba83d48cfab649536651ec1bee87e77ada22b318502edb7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad6d1ae2ff3c449ba83d48cfab649536651ec1bee87e77ada22b318502edb7cb->leave($__internal_ad6d1ae2ff3c449ba83d48cfab649536651ec1bee87e77ada22b318502edb7cb_prof);

        
        $__internal_a99e208597c0d39db7f5cd31ee88d1874c7c4da7b267417a072b84baddc9bacf->leave($__internal_a99e208597c0d39db7f5cd31ee88d1874c7c4da7b267417a072b84baddc9bacf_prof);

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
