<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_666ca16d15022509935b8f7a98149344700b6c1c1b0396958f7c70dfb6ed762e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d595029cbb25f8a6c78cca29b7bd6bfe2348c37b9bc1ec6b2d4c3ad9422bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d595029cbb25f8a6c78cca29b7bd6bfe2348c37b9bc1ec6b2d4c3ad9422bc2->enter($__internal_08d595029cbb25f8a6c78cca29b7bd6bfe2348c37b9bc1ec6b2d4c3ad9422bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d595029cbb25f8a6c78cca29b7bd6bfe2348c37b9bc1ec6b2d4c3ad9422bc2->leave($__internal_08d595029cbb25f8a6c78cca29b7bd6bfe2348c37b9bc1ec6b2d4c3ad9422bc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_900b8658c54278bc6e97850ec200d3d7c06cc028903afc1c5f2ab49b56267df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900b8658c54278bc6e97850ec200d3d7c06cc028903afc1c5f2ab49b56267df7->enter($__internal_900b8658c54278bc6e97850ec200d3d7c06cc028903afc1c5f2ab49b56267df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_900b8658c54278bc6e97850ec200d3d7c06cc028903afc1c5f2ab49b56267df7->leave($__internal_900b8658c54278bc6e97850ec200d3d7c06cc028903afc1c5f2ab49b56267df7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ce7a1845f3f5cf99431ed7f2da779a0075502e4905a10ee47169b8e7a2295be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce7a1845f3f5cf99431ed7f2da779a0075502e4905a10ee47169b8e7a2295be->enter($__internal_4ce7a1845f3f5cf99431ed7f2da779a0075502e4905a10ee47169b8e7a2295be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4ce7a1845f3f5cf99431ed7f2da779a0075502e4905a10ee47169b8e7a2295be->leave($__internal_4ce7a1845f3f5cf99431ed7f2da779a0075502e4905a10ee47169b8e7a2295be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78cc4afc7c5d8b36cedea79db5cab7c8d9d9cfb112e74c86d04581bbc779ea6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cc4afc7c5d8b36cedea79db5cab7c8d9d9cfb112e74c86d04581bbc779ea6b->enter($__internal_78cc4afc7c5d8b36cedea79db5cab7c8d9d9cfb112e74c86d04581bbc779ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_78cc4afc7c5d8b36cedea79db5cab7c8d9d9cfb112e74c86d04581bbc779ea6b->leave($__internal_78cc4afc7c5d8b36cedea79db5cab7c8d9d9cfb112e74c86d04581bbc779ea6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
