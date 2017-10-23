<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3b539d869c6210d91d04bd2172090a3746288c334f835c0d2f8c7f84db6077c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b85dbacd6ad5f4364e0b9c5cebfde60b978e181ccbe97b09620a4937db5e3172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85dbacd6ad5f4364e0b9c5cebfde60b978e181ccbe97b09620a4937db5e3172->enter($__internal_b85dbacd6ad5f4364e0b9c5cebfde60b978e181ccbe97b09620a4937db5e3172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85dbacd6ad5f4364e0b9c5cebfde60b978e181ccbe97b09620a4937db5e3172->leave($__internal_b85dbacd6ad5f4364e0b9c5cebfde60b978e181ccbe97b09620a4937db5e3172_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_151f0aec268fa21de0508fb251313f0220e44525898123a39491230e6acb7de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151f0aec268fa21de0508fb251313f0220e44525898123a39491230e6acb7de5->enter($__internal_151f0aec268fa21de0508fb251313f0220e44525898123a39491230e6acb7de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_151f0aec268fa21de0508fb251313f0220e44525898123a39491230e6acb7de5->leave($__internal_151f0aec268fa21de0508fb251313f0220e44525898123a39491230e6acb7de5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73457c264c45650a541628bae567b8e2fbb40c9936dbcef41667f3bc770667f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73457c264c45650a541628bae567b8e2fbb40c9936dbcef41667f3bc770667f7->enter($__internal_73457c264c45650a541628bae567b8e2fbb40c9936dbcef41667f3bc770667f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73457c264c45650a541628bae567b8e2fbb40c9936dbcef41667f3bc770667f7->leave($__internal_73457c264c45650a541628bae567b8e2fbb40c9936dbcef41667f3bc770667f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59f4c31260aaa9a182b76175bd8efcdcd3f15d798d2ed373c2d11dfdce814abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f4c31260aaa9a182b76175bd8efcdcd3f15d798d2ed373c2d11dfdce814abc->enter($__internal_59f4c31260aaa9a182b76175bd8efcdcd3f15d798d2ed373c2d11dfdce814abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59f4c31260aaa9a182b76175bd8efcdcd3f15d798d2ed373c2d11dfdce814abc->leave($__internal_59f4c31260aaa9a182b76175bd8efcdcd3f15d798d2ed373c2d11dfdce814abc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
