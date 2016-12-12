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
        $__internal_97126170884a8ea2f4ae635e71465b5c937cfd3e8b2b997eb551d134e63f2fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97126170884a8ea2f4ae635e71465b5c937cfd3e8b2b997eb551d134e63f2fc4->enter($__internal_97126170884a8ea2f4ae635e71465b5c937cfd3e8b2b997eb551d134e63f2fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $__internal_e6df4a903c0aeba13a8223a5fe87f8f4580516f9799940623fa904e17a73b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6df4a903c0aeba13a8223a5fe87f8f4580516f9799940623fa904e17a73b9b3->enter($__internal_e6df4a903c0aeba13a8223a5fe87f8f4580516f9799940623fa904e17a73b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscrits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97126170884a8ea2f4ae635e71465b5c937cfd3e8b2b997eb551d134e63f2fc4->leave($__internal_97126170884a8ea2f4ae635e71465b5c937cfd3e8b2b997eb551d134e63f2fc4_prof);

        
        $__internal_e6df4a903c0aeba13a8223a5fe87f8f4580516f9799940623fa904e17a73b9b3->leave($__internal_e6df4a903c0aeba13a8223a5fe87f8f4580516f9799940623fa904e17a73b9b3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7b338ff18dff6bb5021287f82f2115cf24bd830b3e6aeab244d45a3f5eccdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b338ff18dff6bb5021287f82f2115cf24bd830b3e6aeab244d45a3f5eccdb7->enter($__internal_d7b338ff18dff6bb5021287f82f2115cf24bd830b3e6aeab244d45a3f5eccdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b152e865cc8c784e1a01e452fdc0a84ca269615f35f66d4f1beeb6b0d373ecbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b152e865cc8c784e1a01e452fdc0a84ca269615f35f66d4f1beeb6b0d373ecbe->enter($__internal_b152e865cc8c784e1a01e452fdc0a84ca269615f35f66d4f1beeb6b0d373ecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b152e865cc8c784e1a01e452fdc0a84ca269615f35f66d4f1beeb6b0d373ecbe->leave($__internal_b152e865cc8c784e1a01e452fdc0a84ca269615f35f66d4f1beeb6b0d373ecbe_prof);

        
        $__internal_d7b338ff18dff6bb5021287f82f2115cf24bd830b3e6aeab244d45a3f5eccdb7->leave($__internal_d7b338ff18dff6bb5021287f82f2115cf24bd830b3e6aeab244d45a3f5eccdb7_prof);

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
