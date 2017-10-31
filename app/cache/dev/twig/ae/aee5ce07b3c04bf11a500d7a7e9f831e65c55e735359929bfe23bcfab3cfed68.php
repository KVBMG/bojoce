<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_52569d1bd45ed1b48ecad76077abb3d609dbfbada21d94073906d4511f6ab9d7 extends Twig_Template
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
        $__internal_f7bbdec2678ad6d8f3d732e88f035d48896ce9b12566fcfd6c9431da9e9ed58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbdec2678ad6d8f3d732e88f035d48896ce9b12566fcfd6c9431da9e9ed58a->enter($__internal_f7bbdec2678ad6d8f3d732e88f035d48896ce9b12566fcfd6c9431da9e9ed58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bbdec2678ad6d8f3d732e88f035d48896ce9b12566fcfd6c9431da9e9ed58a->leave($__internal_f7bbdec2678ad6d8f3d732e88f035d48896ce9b12566fcfd6c9431da9e9ed58a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_868fa887c2dbe3dbf5cc26f178c7398697b3ffea6c23f439c0e2fe0943ca1f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868fa887c2dbe3dbf5cc26f178c7398697b3ffea6c23f439c0e2fe0943ca1f30->enter($__internal_868fa887c2dbe3dbf5cc26f178c7398697b3ffea6c23f439c0e2fe0943ca1f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_868fa887c2dbe3dbf5cc26f178c7398697b3ffea6c23f439c0e2fe0943ca1f30->leave($__internal_868fa887c2dbe3dbf5cc26f178c7398697b3ffea6c23f439c0e2fe0943ca1f30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8605c95fd05b14ef8c63f1150dd1b37fbdde38ad194a946a182e9c85fc4d472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8605c95fd05b14ef8c63f1150dd1b37fbdde38ad194a946a182e9c85fc4d472->enter($__internal_b8605c95fd05b14ef8c63f1150dd1b37fbdde38ad194a946a182e9c85fc4d472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8605c95fd05b14ef8c63f1150dd1b37fbdde38ad194a946a182e9c85fc4d472->leave($__internal_b8605c95fd05b14ef8c63f1150dd1b37fbdde38ad194a946a182e9c85fc4d472_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da6e5dc84c8e2249ab50ef2d2cc0bf1a0159e0c3d831f54b1220bc15b6aba950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6e5dc84c8e2249ab50ef2d2cc0bf1a0159e0c3d831f54b1220bc15b6aba950->enter($__internal_da6e5dc84c8e2249ab50ef2d2cc0bf1a0159e0c3d831f54b1220bc15b6aba950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da6e5dc84c8e2249ab50ef2d2cc0bf1a0159e0c3d831f54b1220bc15b6aba950->leave($__internal_da6e5dc84c8e2249ab50ef2d2cc0bf1a0159e0c3d831f54b1220bc15b6aba950_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\kandra\\Dev\\bojoce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
