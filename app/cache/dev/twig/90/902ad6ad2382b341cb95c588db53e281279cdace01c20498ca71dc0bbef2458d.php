<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_30d2e2d245bbd7b6927522fca6a0614f420544b7f3927535c693a3023d19b939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
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
        $__internal_f3cfa6c132f301cd15cdb5453ed81b39825a36d1ee9dfd072e246a43027b2470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cfa6c132f301cd15cdb5453ed81b39825a36d1ee9dfd072e246a43027b2470->enter($__internal_f3cfa6c132f301cd15cdb5453ed81b39825a36d1ee9dfd072e246a43027b2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3cfa6c132f301cd15cdb5453ed81b39825a36d1ee9dfd072e246a43027b2470->leave($__internal_f3cfa6c132f301cd15cdb5453ed81b39825a36d1ee9dfd072e246a43027b2470_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_0ac550c670e07b01cf61653173bf9a477e49f7fd5896e893873587a6355e3784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac550c670e07b01cf61653173bf9a477e49f7fd5896e893873587a6355e3784->enter($__internal_0ac550c670e07b01cf61653173bf9a477e49f7fd5896e893873587a6355e3784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 9)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 10
        echo "
";
        
        $__internal_0ac550c670e07b01cf61653173bf9a477e49f7fd5896e893873587a6355e3784->leave($__internal_0ac550c670e07b01cf61653173bf9a477e49f7fd5896e893873587a6355e3784_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  55 => 9,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</h2>

<a href=\"{{ url('fos_message_thread_new' )}}\">{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</a>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/inbox.html.twig");
    }
}
