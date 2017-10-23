<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_183a3bdfe37856bc3c10229c6cf1e7278397acc2b0f6ae6bc0b2cb12ed35e710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_2781b3f2ac838cfd9bc862ecf8fc40b9a50fc8ea4151d45411ab4efb247b3c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2781b3f2ac838cfd9bc862ecf8fc40b9a50fc8ea4151d45411ab4efb247b3c3d->enter($__internal_2781b3f2ac838cfd9bc862ecf8fc40b9a50fc8ea4151d45411ab4efb247b3c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2781b3f2ac838cfd9bc862ecf8fc40b9a50fc8ea4151d45411ab4efb247b3c3d->leave($__internal_2781b3f2ac838cfd9bc862ecf8fc40b9a50fc8ea4151d45411ab4efb247b3c3d_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_ca5b275564022c4b58caf3981d1b17aee676c22a848954d1af0ed59b40eb5cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5b275564022c4b58caf3981d1b17aee676c22a848954d1af0ed59b40eb5cc3->enter($__internal_ca5b275564022c4b58caf3981d1b17aee676c22a848954d1af0ed59b40eb5cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            ";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            // line 11
            echo "        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<h3>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
        
        $__internal_ca5b275564022c4b58caf3981d1b17aee676c22a848954d1af0ed59b40eb5cc3->leave($__internal_ca5b275564022c4b58caf3981d1b17aee676c22a848954d1af0ed59b40eb5cc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  84 => 21,  79 => 19,  76 => 18,  66 => 14,  62 => 13,  58 => 11,  56 => 10,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<h2>{{ thread.subject }}</h2>

{% for message in thread.messages %}
    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
            {{ message.body }}
        </div>
    </div>
{% endfor %}

<h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

<form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" />
</form>

{% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/thread.html.twig");
    }
}
