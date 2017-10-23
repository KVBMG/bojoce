<?php

/* EcoJobMessagerieBundle:Message:newThread.html.twig */
class __TwigTemplate_51da9c95d2a47d9688b24ad54c68afd2f0d87a87d8090c1187399e78e2027abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:newThread.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMessagerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d703c4896711918e8529805418c881a2fcd556e016ff605df8528e7e2b46ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d703c4896711918e8529805418c881a2fcd556e016ff605df8528e7e2b46ccf->enter($__internal_9d703c4896711918e8529805418c881a2fcd556e016ff605df8528e7e2b46ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d703c4896711918e8529805418c881a2fcd556e016ff605df8528e7e2b46ccf->leave($__internal_9d703c4896711918e8529805418c881a2fcd556e016ff605df8528e7e2b46ccf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d344240dda331f988c0051dc63e0f533ef21923cb11f7c42b5f184cf07df1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d344240dda331f988c0051dc63e0f533ef21923cb11f7c42b5f184cf07df1f6->enter($__internal_7d344240dda331f988c0051dc63e0f533ef21923cb11f7c42b5f184cf07df1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau ";
        
        $__internal_7d344240dda331f988c0051dc63e0f533ef21923cb11f7c42b5f184cf07df1f6->leave($__internal_7d344240dda331f988c0051dc63e0f533ef21923cb11f7c42b5f184cf07df1f6_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_50dd250553403ef6f51005f6daaf684787eb2fba4ae7ca53e6e9d36cb859797c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dd250553403ef6f51005f6daaf684787eb2fba4ae7ca53e6e9d36cb859797c->enter($__internal_50dd250553403ef6f51005f6daaf684787eb2fba4ae7ca53e6e9d36cb859797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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

    <input type=\"submit\" value=\"Envoyer\" class=\"btn-default btn-cf-submit\" />
</form>

";
        
        $__internal_50dd250553403ef6f51005f6daaf684787eb2fba4ae7ca53e6e9d36cb859797c->leave($__internal_50dd250553403ef6f51005f6daaf684787eb2fba4ae7ca53e6e9d36cb859797c_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  61 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EcoJobMessagerieBundle::layout.html.twig' %}
{% block title %} Nouveau {% endblock %}
{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>

<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" value=\"Envoyer\" class=\"btn-default btn-cf-submit\" />
</form>

{% endblock %}
", "EcoJobMessagerieBundle:Message:newThread.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/newThread.html.twig");
    }
}
