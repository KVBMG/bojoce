<?php

/* EcoJobMessagerieBundle:Message:deleted.html.twig */
class __TwigTemplate_aeacf780069eb5e185f1823f624c2408f11abeea53a5c0a2eb1e07386cae0983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:deleted.html.twig", 1);
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
        $__internal_fcb5f70616998fcee9dd6eb0c9390bd9347387843504ff3bdfbc16cfdd564e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb5f70616998fcee9dd6eb0c9390bd9347387843504ff3bdfbc16cfdd564e55->enter($__internal_fcb5f70616998fcee9dd6eb0c9390bd9347387843504ff3bdfbc16cfdd564e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb5f70616998fcee9dd6eb0c9390bd9347387843504ff3bdfbc16cfdd564e55->leave($__internal_fcb5f70616998fcee9dd6eb0c9390bd9347387843504ff3bdfbc16cfdd564e55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a92e8c03dab4487d9891e6558644ed027b273e7af44a4fa29c352829610b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a92e8c03dab4487d9891e6558644ed027b273e7af44a4fa29c352829610b58->enter($__internal_f5a92e8c03dab4487d9891e6558644ed027b273e7af44a4fa29c352829610b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Supprimés ";
        
        $__internal_f5a92e8c03dab4487d9891e6558644ed027b273e7af44a4fa29c352829610b58->leave($__internal_f5a92e8c03dab4487d9891e6558644ed027b273e7af44a4fa29c352829610b58_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_faf7eef31cec4f7168de98a85928743cc8560675844f37b5a8fe6069b06b7c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf7eef31cec4f7168de98a85928743cc8560675844f37b5a8fe6069b06b7c1d->enter($__internal_faf7eef31cec4f7168de98a85928743cc8560675844f37b5a8fe6069b06b7c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "EcoJobMessagerieBundle:Message:deleted.html.twig", 7)->display(array_merge($context, array("threads" => ($context["threads"] ?? $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_faf7eef31cec4f7168de98a85928743cc8560675844f37b5a8fe6069b06b7c1d->leave($__internal_faf7eef31cec4f7168de98a85928743cc8560675844f37b5a8fe6069b06b7c1d_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:deleted.html.twig";
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
{% block title %} Supprimés {% endblock %}
{% block fos_message_content %}

<h2>{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "EcoJobMessagerieBundle:Message:deleted.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/deleted.html.twig");
    }
}
