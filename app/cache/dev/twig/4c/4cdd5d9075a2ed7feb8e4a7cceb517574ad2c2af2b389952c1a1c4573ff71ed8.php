<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_95a89677bd036abe694b79ec013736b9cca77553ba46d624b8a3f0f97c0be39b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8b016ea15c98de22bbcc0bee7c7741d26fa4f05b2c042cfeb4e02d2d3392791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b016ea15c98de22bbcc0bee7c7741d26fa4f05b2c042cfeb4e02d2d3392791->enter($__internal_e8b016ea15c98de22bbcc0bee7c7741d26fa4f05b2c042cfeb4e02d2d3392791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8b016ea15c98de22bbcc0bee7c7741d26fa4f05b2c042cfeb4e02d2d3392791->leave($__internal_e8b016ea15c98de22bbcc0bee7c7741d26fa4f05b2c042cfeb4e02d2d3392791_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c7feacdedbcfd77d958ce50343c9b1d5a189dcfa222f75a9813dd5d425ff43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7feacdedbcfd77d958ce50343c9b1d5a189dcfa222f75a9813dd5d425ff43c->enter($__internal_7c7feacdedbcfd77d958ce50343c9b1d5a189dcfa222f75a9813dd5d425ff43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7c7feacdedbcfd77d958ce50343c9b1d5a189dcfa222f75a9813dd5d425ff43c->leave($__internal_7c7feacdedbcfd77d958ce50343c9b1d5a189dcfa222f75a9813dd5d425ff43c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3a915fc71b9aa93c18f8c1d7f17bc5ebf838c912bfbd56e63b5e565d9ea5bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a915fc71b9aa93c18f8c1d7f17bc5ebf838c912bfbd56e63b5e565d9ea5bce->enter($__internal_c3a915fc71b9aa93c18f8c1d7f17bc5ebf838c912bfbd56e63b5e565d9ea5bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c3a915fc71b9aa93c18f8c1d7f17bc5ebf838c912bfbd56e63b5e565d9ea5bce->leave($__internal_c3a915fc71b9aa93c18f8c1d7f17bc5ebf838c912bfbd56e63b5e565d9ea5bce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e899255cf85b3997e693730291c7fcfe45a822138ba8860a71100e7b6680b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e899255cf85b3997e693730291c7fcfe45a822138ba8860a71100e7b6680b22->enter($__internal_8e899255cf85b3997e693730291c7fcfe45a822138ba8860a71100e7b6680b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8e899255cf85b3997e693730291c7fcfe45a822138ba8860a71100e7b6680b22->leave($__internal_8e899255cf85b3997e693730291c7fcfe45a822138ba8860a71100e7b6680b22_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a57a38d494a9f1c3bdbdd677f7e919a51048445b2736215e5023854b755f2f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57a38d494a9f1c3bdbdd677f7e919a51048445b2736215e5023854b755f2f30->enter($__internal_a57a38d494a9f1c3bdbdd677f7e919a51048445b2736215e5023854b755f2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a57a38d494a9f1c3bdbdd677f7e919a51048445b2736215e5023854b755f2f30->leave($__internal_a57a38d494a9f1c3bdbdd677f7e919a51048445b2736215e5023854b755f2f30_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/opt/lampp/htdocs/ecojob/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
