<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_d739e176eb1ed75b31ed6cb6f652879ac09c2fe291dabdd596aef2c6580a23d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:search.html.twig", 1);
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
        $__internal_f6ade32635fcfb74447946ce316e59ac865aa18c64cd0031aebf5bca95389bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ade32635fcfb74447946ce316e59ac865aa18c64cd0031aebf5bca95389bbc->enter($__internal_f6ade32635fcfb74447946ce316e59ac865aa18c64cd0031aebf5bca95389bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ade32635fcfb74447946ce316e59ac865aa18c64cd0031aebf5bca95389bbc->leave($__internal_f6ade32635fcfb74447946ce316e59ac865aa18c64cd0031aebf5bca95389bbc_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_7f71ffada64dc5857f509e33910bc56f445272b7b8662f961ebbb0e4cf607427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f71ffada64dc5857f509e33910bc56f445272b7b8662f961ebbb0e4cf607427->enter($__internal_7f71ffada64dc5857f509e33910bc56f445272b7b8662f961ebbb0e4cf607427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_7f71ffada64dc5857f509e33910bc56f445272b7b8662f961ebbb0e4cf607427->leave($__internal_7f71ffada64dc5857f509e33910bc56f445272b7b8662f961ebbb0e4cf607427_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  50 => 9,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<h2>{% trans from 'FOSMessageBundle' %}search{% endtrans %}</h2>

<p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}
    threads_found
{% endtranschoice %}</p>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:search.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/search.html.twig");
    }
}
