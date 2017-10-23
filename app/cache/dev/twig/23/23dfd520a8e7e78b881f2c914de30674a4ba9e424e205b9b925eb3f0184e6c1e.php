<?php

/* EcoJobMessagerieBundle:Message:sent.html.twig */
class __TwigTemplate_c5958969bc9285589f59fa9673ff4aad3a645d28df1c02a7ded26aa5cc67494e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:sent.html.twig", 1);
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
        $__internal_8c739654cf793fb09b2aa9a1a44241b9f283d12cb565d79262c32ebd4b30702f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c739654cf793fb09b2aa9a1a44241b9f283d12cb565d79262c32ebd4b30702f->enter($__internal_8c739654cf793fb09b2aa9a1a44241b9f283d12cb565d79262c32ebd4b30702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c739654cf793fb09b2aa9a1a44241b9f283d12cb565d79262c32ebd4b30702f->leave($__internal_8c739654cf793fb09b2aa9a1a44241b9f283d12cb565d79262c32ebd4b30702f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfeeb7aab00dda51615ba273ac49bcc30c1a844e962abc5473daeb7125857c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfeeb7aab00dda51615ba273ac49bcc30c1a844e962abc5473daeb7125857c5->enter($__internal_2bfeeb7aab00dda51615ba273ac49bcc30c1a844e962abc5473daeb7125857c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Envoyés ";
        
        $__internal_2bfeeb7aab00dda51615ba273ac49bcc30c1a844e962abc5473daeb7125857c5->leave($__internal_2bfeeb7aab00dda51615ba273ac49bcc30c1a844e962abc5473daeb7125857c5_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_b5c9dacb2f3643ef776497a4f2430514241f403c41e48037698d5fa0b0bfa70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c9dacb2f3643ef776497a4f2430514241f403c41e48037698d5fa0b0bfa70c->enter($__internal_b5c9dacb2f3643ef776497a4f2430514241f403c41e48037698d5fa0b0bfa70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "EcoJobMessagerieBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_b5c9dacb2f3643ef776497a4f2430514241f403c41e48037698d5fa0b0bfa70c->leave($__internal_b5c9dacb2f3643ef776497a4f2430514241f403c41e48037698d5fa0b0bfa70c_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  61 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Envoyés {% endblock %}
{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "EcoJobMessagerieBundle:Message:sent.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/sent.html.twig");
    }
}
