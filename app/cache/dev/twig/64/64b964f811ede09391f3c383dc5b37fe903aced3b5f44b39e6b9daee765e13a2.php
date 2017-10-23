<?php

/* EcoJobMainBundle::layout.html.twig */
class __TwigTemplate_881c252673700224ee0d11d3261acd85616429c39b81bb8b6bb97fb6ad6e30bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe43671e5ac94620b6ab7eabe3ff116cc56e60941c6cda429077357ffde66663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe43671e5ac94620b6ab7eabe3ff116cc56e60941c6cda429077357ffde66663->enter($__internal_fe43671e5ac94620b6ab7eabe3ff116cc56e60941c6cda429077357ffde66663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe43671e5ac94620b6ab7eabe3ff116cc56e60941c6cda429077357ffde66663->leave($__internal_fe43671e5ac94620b6ab7eabe3ff116cc56e60941c6cda429077357ffde66663_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9cd64b4406e51c036a0f456af7273a5e39a352a4d5c2443553a1ab872bf63445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd64b4406e51c036a0f456af7273a5e39a352a4d5c2443553a1ab872bf63445->enter($__internal_9cd64b4406e51c036a0f456af7273a5e39a352a4d5c2443553a1ab872bf63445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
      
";
        
        $__internal_9cd64b4406e51c036a0f456af7273a5e39a352a4d5c2443553a1ab872bf63445->leave($__internal_9cd64b4406e51c036a0f456af7273a5e39a352a4d5c2443553a1ab872bf63445_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f066d6b1618fe1492b4678e7395111652a701dadd12ff8a3254368da084a8850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f066d6b1618fe1492b4678e7395111652a701dadd12ff8a3254368da084a8850->enter($__internal_f066d6b1618fe1492b4678e7395111652a701dadd12ff8a3254368da084a8850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f066d6b1618fe1492b4678e7395111652a701dadd12ff8a3254368da084a8850->leave($__internal_f066d6b1618fe1492b4678e7395111652a701dadd12ff8a3254368da084a8850_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block content %}
{{parent()}}
      
{% endblock %}
{% block body %}
{% endblock %}
", "EcoJobMainBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MainBundle/Resources/views/layout.html.twig");
    }
}
