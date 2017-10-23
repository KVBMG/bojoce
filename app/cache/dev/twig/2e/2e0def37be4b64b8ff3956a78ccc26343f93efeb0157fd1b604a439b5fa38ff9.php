<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_fa2cf35b6718abff00fc6cc613f0d5a0055a6004397e1f8a65f11f87cec1cffd extends Twig_Template
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
        $__internal_a72170d1a22c4cc2c000d633a36732b8554209e3d42b748a209dd672175afca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72170d1a22c4cc2c000d633a36732b8554209e3d42b748a209dd672175afca3->enter($__internal_a72170d1a22c4cc2c000d633a36732b8554209e3d42b748a209dd672175afca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        echo "    ";
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('body_text', $context, $blocks);
        // line 19
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a72170d1a22c4cc2c000d633a36732b8554209e3d42b748a209dd672175afca3->leave($__internal_a72170d1a22c4cc2c000d633a36732b8554209e3d42b748a209dd672175afca3_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0da49f12d7247d8d7dc6c144d3c985dc4e9fb1ec4a00e39cf91941f6ac036d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da49f12d7247d8d7dc6c144d3c985dc4e9fb1ec4a00e39cf91941f6ac036d3b->enter($__internal_0da49f12d7247d8d7dc6c144d3c985dc4e9fb1ec4a00e39cf91941f6ac036d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirmez votre inscription sur eco-job.fr", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
    ";
        // line 5
        echo "    ";
        
        $__internal_0da49f12d7247d8d7dc6c144d3c985dc4e9fb1ec4a00e39cf91941f6ac036d3b->leave($__internal_0da49f12d7247d8d7dc6c144d3c985dc4e9fb1ec4a00e39cf91941f6ac036d3b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_82cc706d57945d2746ae038bf7a30a53e8cda6b2bd029009d6dea3d170e13432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cc706d57945d2746ae038bf7a30a53e8cda6b2bd029009d6dea3d170e13432->enter($__internal_82cc706d57945d2746ae038bf7a30a53e8cda6b2bd029009d6dea3d170e13432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_82cc706d57945d2746ae038bf7a30a53e8cda6b2bd029009d6dea3d170e13432->leave($__internal_82cc706d57945d2746ae038bf7a30a53e8cda6b2bd029009d6dea3d170e13432_prof);

    }

    // line 19
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_66b88f524c0d46a6abf35d81ac28e2ce8137cd518c96b274cc01f7fe50bb83a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b88f524c0d46a6abf35d81ac28e2ce8137cd518c96b274cc01f7fe50bb83a1->enter($__internal_66b88f524c0d46a6abf35d81ac28e2ce8137cd518c96b274cc01f7fe50bb83a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_66b88f524c0d46a6abf35d81ac28e2ce8137cd518c96b274cc01f7fe50bb83a1->leave($__internal_66b88f524c0d46a6abf35d81ac28e2ce8137cd518c96b274cc01f7fe50bb83a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{% block body_html %}{% endblock %}", "@FOSUser/Registration/email.txt.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
