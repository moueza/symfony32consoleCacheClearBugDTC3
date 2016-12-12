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
        $__internal_4eb2b78d46d3003f482cc98cb18c52b074bde15f1afb03140665cdf0c67406fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb2b78d46d3003f482cc98cb18c52b074bde15f1afb03140665cdf0c67406fe->enter($__internal_4eb2b78d46d3003f482cc98cb18c52b074bde15f1afb03140665cdf0c67406fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $__internal_62a80706ef5fa9dca486c5df02b5bffdf112911c29ed793ac8bed1f33bfef74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a80706ef5fa9dca486c5df02b5bffdf112911c29ed793ac8bed1f33bfef74b->enter($__internal_62a80706ef5fa9dca486c5df02b5bffdf112911c29ed793ac8bed1f33bfef74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb2b78d46d3003f482cc98cb18c52b074bde15f1afb03140665cdf0c67406fe->leave($__internal_4eb2b78d46d3003f482cc98cb18c52b074bde15f1afb03140665cdf0c67406fe_prof);

        
        $__internal_62a80706ef5fa9dca486c5df02b5bffdf112911c29ed793ac8bed1f33bfef74b->leave($__internal_62a80706ef5fa9dca486c5df02b5bffdf112911c29ed793ac8bed1f33bfef74b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4476f64f9f00e31296ad91b3be7882b1308018290920df3e7bff957bec09a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4476f64f9f00e31296ad91b3be7882b1308018290920df3e7bff957bec09a8d->enter($__internal_b4476f64f9f00e31296ad91b3be7882b1308018290920df3e7bff957bec09a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e14d7a43868f2c73859f7504f1541a396a800e60bf55891091eedf6081e009b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e14d7a43868f2c73859f7504f1541a396a800e60bf55891091eedf6081e009b->enter($__internal_7e14d7a43868f2c73859f7504f1541a396a800e60bf55891091eedf6081e009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e14d7a43868f2c73859f7504f1541a396a800e60bf55891091eedf6081e009b->leave($__internal_7e14d7a43868f2c73859f7504f1541a396a800e60bf55891091eedf6081e009b_prof);

        
        $__internal_b4476f64f9f00e31296ad91b3be7882b1308018290920df3e7bff957bec09a8d->leave($__internal_b4476f64f9f00e31296ad91b3be7882b1308018290920df3e7bff957bec09a8d_prof);

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
