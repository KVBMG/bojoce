<?php

/* EcoJobMessagerieBundle:Message:inbox.html.twig */
class __TwigTemplate_d2c38a389c326aa2f4b819b79ed2d76c6878fa8fbe8e5cd333524d64bb383f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:inbox.html.twig", 1);
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
        $__internal_ac110560da017d640c19793fd07163690d68a1724ae77666871271501bcbd5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac110560da017d640c19793fd07163690d68a1724ae77666871271501bcbd5d8->enter($__internal_ac110560da017d640c19793fd07163690d68a1724ae77666871271501bcbd5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac110560da017d640c19793fd07163690d68a1724ae77666871271501bcbd5d8->leave($__internal_ac110560da017d640c19793fd07163690d68a1724ae77666871271501bcbd5d8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_56628a946b3afea5c59d41a635ede9016ff5d87231b855c78302fa70ad0c1c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56628a946b3afea5c59d41a635ede9016ff5d87231b855c78302fa70ad0c1c47->enter($__internal_56628a946b3afea5c59d41a635ede9016ff5d87231b855c78302fa70ad0c1c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Inbox ";
        
        $__internal_56628a946b3afea5c59d41a635ede9016ff5d87231b855c78302fa70ad0c1c47->leave($__internal_56628a946b3afea5c59d41a635ede9016ff5d87231b855c78302fa70ad0c1c47_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_1535c7ea8a6ac6d2a26efb729c4b8702579fd2a42408e2b62355d00c181896cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1535c7ea8a6ac6d2a26efb729c4b8702579fd2a42408e2b62355d00c181896cc->enter($__internal_1535c7ea8a6ac6d2a26efb729c4b8702579fd2a42408e2b62355d00c181896cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</h2>

<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>

";
        // line 9
        $this->loadTemplate("EcoJobMessagerieBundle:Message:threads_list.html.twig", "EcoJobMessagerieBundle:Message:inbox.html.twig", 9)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 10
        echo "
";
        
        $__internal_1535c7ea8a6ac6d2a26efb729c4b8702579fd2a42408e2b62355d00c181896cc->leave($__internal_1535c7ea8a6ac6d2a26efb729c4b8702579fd2a42408e2b62355d00c181896cc_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  68 => 9,  61 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Inbox {% endblock %}
{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</h2>

<a href=\"{{ url('fos_message_thread_new' )}}\">{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</a>

{% include 'EcoJobMessagerieBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "EcoJobMessagerieBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/inbox.html.twig");
    }
}
