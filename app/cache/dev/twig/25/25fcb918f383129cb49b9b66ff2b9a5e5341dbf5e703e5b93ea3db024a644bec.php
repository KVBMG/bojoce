<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_7e8d01e5bf8b30f0d9a49dd9f68357be1252efbe9e9f9ec5405cd4bd92b9a7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a0e7793143073519eba174c2b9528a9d66ffb1dba62c41e2c31f7da7ad16f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0e7793143073519eba174c2b9528a9d66ffb1dba62c41e2c31f7da7ad16f45->enter($__internal_1a0e7793143073519eba174c2b9528a9d66ffb1dba62c41e2c31f7da7ad16f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0e7793143073519eba174c2b9528a9d66ffb1dba62c41e2c31f7da7ad16f45->leave($__internal_1a0e7793143073519eba174c2b9528a9d66ffb1dba62c41e2c31f7da7ad16f45_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_fc2df47b488886f30570e041377809495b35d3eb616cb77ebea7ba64c6c1a339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2df47b488886f30570e041377809495b35d3eb616cb77ebea7ba64c6c1a339->enter($__internal_fc2df47b488886f30570e041377809495b35d3eb616cb77ebea7ba64c6c1a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>

<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_fc2df47b488886f30570e041377809495b35d3eb616cb77ebea7ba64c6c1a339->leave($__internal_fc2df47b488886f30570e041377809495b35d3eb616cb77ebea7ba64c6c1a339_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>

<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:newThread.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/newThread.html.twig");
    }
}
