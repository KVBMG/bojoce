<?php

/* EcoJobMessagerieBundle:Message:newThread.html.twig */
class __TwigTemplate_ad416eec8cfdbfbd2f5bee6feec09f181e154b54d133065d613a9de98615c6ea extends Twig_Template
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
        $__internal_62f5f99d927c4fbf2f91115dccfb506a14ec62cb0b85a0ca7b41865aed3c8182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f5f99d927c4fbf2f91115dccfb506a14ec62cb0b85a0ca7b41865aed3c8182->enter($__internal_62f5f99d927c4fbf2f91115dccfb506a14ec62cb0b85a0ca7b41865aed3c8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f5f99d927c4fbf2f91115dccfb506a14ec62cb0b85a0ca7b41865aed3c8182->leave($__internal_62f5f99d927c4fbf2f91115dccfb506a14ec62cb0b85a0ca7b41865aed3c8182_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb28c99946c19246d7673dc80812c721d99116fd2873be0e11567a11b46bfb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb28c99946c19246d7673dc80812c721d99116fd2873be0e11567a11b46bfb5f->enter($__internal_fb28c99946c19246d7673dc80812c721d99116fd2873be0e11567a11b46bfb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nouveau ";
        
        $__internal_fb28c99946c19246d7673dc80812c721d99116fd2873be0e11567a11b46bfb5f->leave($__internal_fb28c99946c19246d7673dc80812c721d99116fd2873be0e11567a11b46bfb5f_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_7034b3e4dfc16d446f248c8131d86dd4078a6835a7e7a9d3bd3eaf47e8c4ef24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7034b3e4dfc16d446f248c8131d86dd4078a6835a7e7a9d3bd3eaf47e8c4ef24->enter($__internal_7034b3e4dfc16d446f248c8131d86dd4078a6835a7e7a9d3bd3eaf47e8c4ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Envoyer\" class=\"btn-default btn-cf-submit\" />
</form>

";
        
        $__internal_7034b3e4dfc16d446f248c8131d86dd4078a6835a7e7a9d3bd3eaf47e8c4ef24->leave($__internal_7034b3e4dfc16d446f248c8131d86dd4078a6835a7e7a9d3bd3eaf47e8c4ef24_prof);

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
", "EcoJobMessagerieBundle:Message:newThread.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\MessagerieBundle/Resources/views/Message/newThread.html.twig");
    }
}
