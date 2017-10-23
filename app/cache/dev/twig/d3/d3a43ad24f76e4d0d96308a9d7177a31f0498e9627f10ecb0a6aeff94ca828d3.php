<?php

/* EcoJobMessagerieBundle:Message:search.html.twig */
class __TwigTemplate_7e0da82e25eb43a8e2342c33b67896b5e39301cbac925d080a18f5d3e49e1196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:search.html.twig", 1);
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
        $__internal_cc323411ee1590f1208928000d61f346606766d93f2534663e8147d23c205237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc323411ee1590f1208928000d61f346606766d93f2534663e8147d23c205237->enter($__internal_cc323411ee1590f1208928000d61f346606766d93f2534663e8147d23c205237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc323411ee1590f1208928000d61f346606766d93f2534663e8147d23c205237->leave($__internal_cc323411ee1590f1208928000d61f346606766d93f2534663e8147d23c205237_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_02f2f161948610f71dadb273a3ca9afb7c1883446c49be2737ab7e2f8197214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f2f161948610f71dadb273a3ca9afb7c1883446c49be2737ab7e2f8197214b->enter($__internal_02f2f161948610f71dadb273a3ca9afb7c1883446c49be2737ab7e2f8197214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Recherche ";
        
        $__internal_02f2f161948610f71dadb273a3ca9afb7c1883446c49be2737ab7e2f8197214b->leave($__internal_02f2f161948610f71dadb273a3ca9afb7c1883446c49be2737ab7e2f8197214b_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_a97458d5bbd8ae812ab66a4c08bd5ce00056ae5e76bf727eaf79ea71de6ffeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97458d5bbd8ae812ab66a4c08bd5ce00056ae5e76bf727eaf79ea71de6ffeda->enter($__internal_a97458d5bbd8ae812ab66a4c08bd5ce00056ae5e76bf727eaf79ea71de6ffeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("search", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, ($context["threads"] ?? $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, ($context["threads"] ?? $this->getContext($context, "threads")))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "EcoJobMessagerieBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_a97458d5bbd8ae812ab66a4c08bd5ce00056ae5e76bf727eaf79ea71de6ffeda->leave($__internal_a97458d5bbd8ae812ab66a4c08bd5ce00056ae5e76bf727eaf79ea71de6ffeda_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  67 => 11,  63 => 9,  61 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Recherche {% endblock %}
{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}search{% endtrans %}</h2>

<p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}
    threads_found
{% endtranschoice %}</p>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "EcoJobMessagerieBundle:Message:search.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/search.html.twig");
    }
}
