<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e55e717dc784b7d4a6db5a4f33e359e836c766579ae8dd54d9e96a9a194a3ffd extends Twig_Template
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
        $__internal_a27ab62f504ea2a7df4fd4c86ae572f3661513e718313226a485f0da38eff2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27ab62f504ea2a7df4fd4c86ae572f3661513e718313226a485f0da38eff2eb->enter($__internal_a27ab62f504ea2a7df4fd4c86ae572f3661513e718313226a485f0da38eff2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        echo "    ";
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('body_text', $context, $blocks);
        // line 19
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a27ab62f504ea2a7df4fd4c86ae572f3661513e718313226a485f0da38eff2eb->leave($__internal_a27ab62f504ea2a7df4fd4c86ae572f3661513e718313226a485f0da38eff2eb_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_045e68004d4265d10fe50822220bf2a95f5cb5027f6fdfe4ed534c607855b384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045e68004d4265d10fe50822220bf2a95f5cb5027f6fdfe4ed534c607855b384->enter($__internal_045e68004d4265d10fe50822220bf2a95f5cb5027f6fdfe4ed534c607855b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmez votre inscription sur eco-job.fr", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        // line 5
        echo "    ";
        
        $__internal_045e68004d4265d10fe50822220bf2a95f5cb5027f6fdfe4ed534c607855b384->leave($__internal_045e68004d4265d10fe50822220bf2a95f5cb5027f6fdfe4ed534c607855b384_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_62e018bbfa4ebb4b2b56f4a2f787927ba8169b39cc9d920d7cb3a05e84c5adb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e018bbfa4ebb4b2b56f4a2f787927ba8169b39cc9d920d7cb3a05e84c5adb2->enter($__internal_62e018bbfa4ebb4b2b56f4a2f787927ba8169b39cc9d920d7cb3a05e84c5adb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 7
        echo "    ";
        // line 8
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bonjour %username%

    Merci de cliquer sur le lien suivant afin de confirmer votre inscription sur eco-job.fr:

    %confirmationUrl% .Ce lien ne peut être utilisé qu'une seule fois pour valider votre compte.

        Cordialement,
        L'équipe    ", array("%username%" => $this->getAttribute(        // line 15
($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "

";
        
        $__internal_62e018bbfa4ebb4b2b56f4a2f787927ba8169b39cc9d920d7cb3a05e84c5adb2->leave($__internal_62e018bbfa4ebb4b2b56f4a2f787927ba8169b39cc9d920d7cb3a05e84c5adb2_prof);

    }

    // line 19
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5bd21e77d01c0af1e4ba65d966a549bddba0a2164f22d674ef26523c53adb47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd21e77d01c0af1e4ba65d966a549bddba0a2164f22d674ef26523c53adb47b->enter($__internal_5bd21e77d01c0af1e4ba65d966a549bddba0a2164f22d674ef26523c53adb47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5bd21e77d01c0af1e4ba65d966a549bddba0a2164f22d674ef26523c53adb47b->leave($__internal_5bd21e77d01c0af1e4ba65d966a549bddba0a2164f22d674ef26523c53adb47b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  75 => 15,  66 => 8,  64 => 7,  58 => 6,  51 => 5,  46 => 3,  44 => 2,  38 => 1,  31 => 19,  28 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% block subject %}
    {% autoescape false %}
    {{ 'Confirmez votre inscription sur eco-job.fr'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
    {% endautoescape %}
    {% endblock %}
    {% block body_text %}
    {% autoescape false %}
    {{ 'Bonjour %username%

    Merci de cliquer sur le lien suivant afin de confirmer votre inscription sur eco-job.fr:

    %confirmationUrl% .Ce lien ne peut être utilisé qu\\'une seule fois pour valider votre compte.

        Cordialement,
        L\\'équipe    '|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}

{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
