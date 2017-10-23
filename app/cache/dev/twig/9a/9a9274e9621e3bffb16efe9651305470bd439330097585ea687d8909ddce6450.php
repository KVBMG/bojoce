<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ed51c652f33b8d7385939e119d2eb5f766c3c4e1efe8b12caa84bebbdf966fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c812aced62988b63579873113d73c6439913bd7a5695913dd04acf77a07d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c812aced62988b63579873113d73c6439913bd7a5695913dd04acf77a07d59->enter($__internal_46c812aced62988b63579873113d73c6439913bd7a5695913dd04acf77a07d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_46c812aced62988b63579873113d73c6439913bd7a5695913dd04acf77a07d59->leave($__internal_46c812aced62988b63579873113d73c6439913bd7a5695913dd04acf77a07d59_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e184634868f38d2ce6338f7d0967414f674c99557eefdcca5419a01be784147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e184634868f38d2ce6338f7d0967414f674c99557eefdcca5419a01be784147->enter($__internal_0e184634868f38d2ce6338f7d0967414f674c99557eefdcca5419a01be784147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0e184634868f38d2ce6338f7d0967414f674c99557eefdcca5419a01be784147->leave($__internal_0e184634868f38d2ce6338f7d0967414f674c99557eefdcca5419a01be784147_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2924339b89ad4bec16f2613f52bde1741822269f14824af6bc8438d44ceeb222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2924339b89ad4bec16f2613f52bde1741822269f14824af6bc8438d44ceeb222->enter($__internal_2924339b89ad4bec16f2613f52bde1741822269f14824af6bc8438d44ceeb222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2924339b89ad4bec16f2613f52bde1741822269f14824af6bc8438d44ceeb222->leave($__internal_2924339b89ad4bec16f2613f52bde1741822269f14824af6bc8438d44ceeb222_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb521fe2f67ba33ea5b2674447a8f37216467250d0662a3f6521babfa1f32a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb521fe2f67ba33ea5b2674447a8f37216467250d0662a3f6521babfa1f32a93->enter($__internal_cb521fe2f67ba33ea5b2674447a8f37216467250d0662a3f6521babfa1f32a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb521fe2f67ba33ea5b2674447a8f37216467250d0662a3f6521babfa1f32a93->leave($__internal_cb521fe2f67ba33ea5b2674447a8f37216467250d0662a3f6521babfa1f32a93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
