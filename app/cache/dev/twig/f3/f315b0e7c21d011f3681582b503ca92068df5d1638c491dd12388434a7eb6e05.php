<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_0e6b1d3707de84fb7c5f16a341a595b2b599d984d2b022881c0eb1e981888b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
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
        $__internal_5d5973887da637c13a457e030caf87e9b88fad64ed0a33e3d57318dd30858a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5973887da637c13a457e030caf87e9b88fad64ed0a33e3d57318dd30858a63->enter($__internal_5d5973887da637c13a457e030caf87e9b88fad64ed0a33e3d57318dd30858a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5973887da637c13a457e030caf87e9b88fad64ed0a33e3d57318dd30858a63->leave($__internal_5d5973887da637c13a457e030caf87e9b88fad64ed0a33e3d57318dd30858a63_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_cbbe8d6892a17d2ec9312c4d958ecf6eb5886338d9beb3a7cffc1b51cde4b951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbe8d6892a17d2ec9312c4d958ecf6eb5886338d9beb3a7cffc1b51cde4b951->enter($__internal_cbbe8d6892a17d2ec9312c4d958ecf6eb5886338d9beb3a7cffc1b51cde4b951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_cbbe8d6892a17d2ec9312c4d958ecf6eb5886338d9beb3a7cffc1b51cde4b951->leave($__internal_cbbe8d6892a17d2ec9312c4d958ecf6eb5886338d9beb3a7cffc1b51cde4b951_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:sent.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/sent.html.twig");
    }
}
