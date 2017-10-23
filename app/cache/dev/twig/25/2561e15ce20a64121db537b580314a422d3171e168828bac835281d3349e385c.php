<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_173b1899f2ac4ef8ae7506bf33d3d199b971bfe4d9d67fdeede5b2286f8052a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54a4767f7289b0f94781a8246b5e50aa5cae272ff53d31b3f3bccb9f990b0b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a4767f7289b0f94781a8246b5e50aa5cae272ff53d31b3f3bccb9f990b0b77->enter($__internal_54a4767f7289b0f94781a8246b5e50aa5cae272ff53d31b3f3bccb9f990b0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a4767f7289b0f94781a8246b5e50aa5cae272ff53d31b3f3bccb9f990b0b77->leave($__internal_54a4767f7289b0f94781a8246b5e50aa5cae272ff53d31b3f3bccb9f990b0b77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8dfa2013d39db49cf19e98bdb4d4c236014e556b5ede64e765560cdf1e4afd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfa2013d39db49cf19e98bdb4d4c236014e556b5ede64e765560cdf1e4afd81->enter($__internal_8dfa2013d39db49cf19e98bdb4d4c236014e556b5ede64e765560cdf1e4afd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8dfa2013d39db49cf19e98bdb4d4c236014e556b5ede64e765560cdf1e4afd81->leave($__internal_8dfa2013d39db49cf19e98bdb4d4c236014e556b5ede64e765560cdf1e4afd81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f91f5be8d8fb5b82406ca22a15a257c02f063d8aa8d993d5b495279a7f8f8157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91f5be8d8fb5b82406ca22a15a257c02f063d8aa8d993d5b495279a7f8f8157->enter($__internal_f91f5be8d8fb5b82406ca22a15a257c02f063d8aa8d993d5b495279a7f8f8157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f91f5be8d8fb5b82406ca22a15a257c02f063d8aa8d993d5b495279a7f8f8157->leave($__internal_f91f5be8d8fb5b82406ca22a15a257c02f063d8aa8d993d5b495279a7f8f8157_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5cfbf357be3fb443a00511ab5e34f24e243bf0fabb63786b4f023c8d89d459f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cfbf357be3fb443a00511ab5e34f24e243bf0fabb63786b4f023c8d89d459f->enter($__internal_d5cfbf357be3fb443a00511ab5e34f24e243bf0fabb63786b4f023c8d89d459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5cfbf357be3fb443a00511ab5e34f24e243bf0fabb63786b4f023c8d89d459f->leave($__internal_d5cfbf357be3fb443a00511ab5e34f24e243bf0fabb63786b4f023c8d89d459f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
