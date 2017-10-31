<?php

/* EcoJobMessagerieBundle:Message:inbox.html.twig */
class __TwigTemplate_25e4300b746b67faca5158a2e9be8fbd973573f2ddc58e8b66514765a474707e extends Twig_Template
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
        $__internal_3edef11ece4b1d1c7166da4f1af25c0ab22b1d4ff8980ee2c7a0dc7651d36766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edef11ece4b1d1c7166da4f1af25c0ab22b1d4ff8980ee2c7a0dc7651d36766->enter($__internal_3edef11ece4b1d1c7166da4f1af25c0ab22b1d4ff8980ee2c7a0dc7651d36766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edef11ece4b1d1c7166da4f1af25c0ab22b1d4ff8980ee2c7a0dc7651d36766->leave($__internal_3edef11ece4b1d1c7166da4f1af25c0ab22b1d4ff8980ee2c7a0dc7651d36766_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96d247a7e329997927504fbff184515042edf2beb38ed7cd4aad40bfce9c416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d247a7e329997927504fbff184515042edf2beb38ed7cd4aad40bfce9c416f->enter($__internal_96d247a7e329997927504fbff184515042edf2beb38ed7cd4aad40bfce9c416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Inbox ";
        
        $__internal_96d247a7e329997927504fbff184515042edf2beb38ed7cd4aad40bfce9c416f->leave($__internal_96d247a7e329997927504fbff184515042edf2beb38ed7cd4aad40bfce9c416f_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_b81a3670befb2b46e3e58191a28a4ada83598ea43c8f56bcd607bef5d0996dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81a3670befb2b46e3e58191a28a4ada83598ea43c8f56bcd607bef5d0996dda->enter($__internal_b81a3670befb2b46e3e58191a28a4ada83598ea43c8f56bcd607bef5d0996dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        $this->loadTemplate("EcoJobMessagerieBundle:Message:threads_list.html.twig", "EcoJobMessagerieBundle:Message:inbox.html.twig", 9)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 10
        echo "
";
        
        $__internal_b81a3670befb2b46e3e58191a28a4ada83598ea43c8f56bcd607bef5d0996dda->leave($__internal_b81a3670befb2b46e3e58191a28a4ada83598ea43c8f56bcd607bef5d0996dda_prof);

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
", "EcoJobMessagerieBundle:Message:inbox.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\MessagerieBundle/Resources/views/Message/inbox.html.twig");
    }
}
