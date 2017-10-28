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
        $__internal_cc5f5652db5be0bc36c6d46ca125d2abf2f41be0d20a659e64a9af1a0a27bda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5f5652db5be0bc36c6d46ca125d2abf2f41be0d20a659e64a9af1a0a27bda3->enter($__internal_cc5f5652db5be0bc36c6d46ca125d2abf2f41be0d20a659e64a9af1a0a27bda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5f5652db5be0bc36c6d46ca125d2abf2f41be0d20a659e64a9af1a0a27bda3->leave($__internal_cc5f5652db5be0bc36c6d46ca125d2abf2f41be0d20a659e64a9af1a0a27bda3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0c158dfd87f2de5e12bf7c2533696485abec70d3eea10fcacc914f81eb66ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c158dfd87f2de5e12bf7c2533696485abec70d3eea10fcacc914f81eb66ae6->enter($__internal_b0c158dfd87f2de5e12bf7c2533696485abec70d3eea10fcacc914f81eb66ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0c158dfd87f2de5e12bf7c2533696485abec70d3eea10fcacc914f81eb66ae6->leave($__internal_b0c158dfd87f2de5e12bf7c2533696485abec70d3eea10fcacc914f81eb66ae6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f8df32f6762344e725f17d3a735bd24beeb52052295b06c256eed78caf98edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8df32f6762344e725f17d3a735bd24beeb52052295b06c256eed78caf98edf->enter($__internal_8f8df32f6762344e725f17d3a735bd24beeb52052295b06c256eed78caf98edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f8df32f6762344e725f17d3a735bd24beeb52052295b06c256eed78caf98edf->leave($__internal_8f8df32f6762344e725f17d3a735bd24beeb52052295b06c256eed78caf98edf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed58a8d887cca1583e115c5c1d44ea89ee80e16dafdf711e067af6291d7cf43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed58a8d887cca1583e115c5c1d44ea89ee80e16dafdf711e067af6291d7cf43e->enter($__internal_ed58a8d887cca1583e115c5c1d44ea89ee80e16dafdf711e067af6291d7cf43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed58a8d887cca1583e115c5c1d44ea89ee80e16dafdf711e067af6291d7cf43e->leave($__internal_ed58a8d887cca1583e115c5c1d44ea89ee80e16dafdf711e067af6291d7cf43e_prof);

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
