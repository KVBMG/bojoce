<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d75f193e0552551eebaaed199fd72a17d8e16bb23b8e8ac79dfbd49510e90477 extends Twig_Template
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
        $__internal_176ede915d80b8616b74a1c52730d814b423ebc277644778612e9b51d892d675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176ede915d80b8616b74a1c52730d814b423ebc277644778612e9b51d892d675->enter($__internal_176ede915d80b8616b74a1c52730d814b423ebc277644778612e9b51d892d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_176ede915d80b8616b74a1c52730d814b423ebc277644778612e9b51d892d675->leave($__internal_176ede915d80b8616b74a1c52730d814b423ebc277644778612e9b51d892d675_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9570db11468289ddd1d6577cbd8221d7957e042da508c9271ed3698181411520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9570db11468289ddd1d6577cbd8221d7957e042da508c9271ed3698181411520->enter($__internal_9570db11468289ddd1d6577cbd8221d7957e042da508c9271ed3698181411520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9570db11468289ddd1d6577cbd8221d7957e042da508c9271ed3698181411520->leave($__internal_9570db11468289ddd1d6577cbd8221d7957e042da508c9271ed3698181411520_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35d6c77be1c86315fe3b9196d55a1d94ba599f6ba395325385763409c1301819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d6c77be1c86315fe3b9196d55a1d94ba599f6ba395325385763409c1301819->enter($__internal_35d6c77be1c86315fe3b9196d55a1d94ba599f6ba395325385763409c1301819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35d6c77be1c86315fe3b9196d55a1d94ba599f6ba395325385763409c1301819->leave($__internal_35d6c77be1c86315fe3b9196d55a1d94ba599f6ba395325385763409c1301819_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75af90297b3aee40260edd1480f11a811c2eb5de9613afb478511589da169570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75af90297b3aee40260edd1480f11a811c2eb5de9613afb478511589da169570->enter($__internal_75af90297b3aee40260edd1480f11a811c2eb5de9613afb478511589da169570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_75af90297b3aee40260edd1480f11a811c2eb5de9613afb478511589da169570->leave($__internal_75af90297b3aee40260edd1480f11a811c2eb5de9613afb478511589da169570_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\kandra\\Dev\\bojoce\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
