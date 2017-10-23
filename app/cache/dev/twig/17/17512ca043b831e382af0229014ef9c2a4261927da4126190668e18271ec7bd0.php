<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_9d2f3ce0004132ce269615276ae44e888039588c50d39b8242db9b7824ec8ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
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
        $__internal_c8a713e33a8f0168b00be93b28dbc0e8321388d30179fabf23b596f52068ba7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a713e33a8f0168b00be93b28dbc0e8321388d30179fabf23b596f52068ba7e->enter($__internal_c8a713e33a8f0168b00be93b28dbc0e8321388d30179fabf23b596f52068ba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a713e33a8f0168b00be93b28dbc0e8321388d30179fabf23b596f52068ba7e->leave($__internal_c8a713e33a8f0168b00be93b28dbc0e8321388d30179fabf23b596f52068ba7e_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_48f17a2e89d5edb7a91dfe7969dc17a5d077134a4793eb527a287da3186216b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f17a2e89d5edb7a91dfe7969dc17a5d077134a4793eb527a287da3186216b4->enter($__internal_48f17a2e89d5edb7a91dfe7969dc17a5d077134a4793eb527a287da3186216b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 7)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_48f17a2e89d5edb7a91dfe7969dc17a5d077134a4793eb527a287da3186216b4->leave($__internal_48f17a2e89d5edb7a91dfe7969dc17a5d077134a4793eb527a287da3186216b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
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

<h2>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:deleted.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/deleted.html.twig");
    }
}
