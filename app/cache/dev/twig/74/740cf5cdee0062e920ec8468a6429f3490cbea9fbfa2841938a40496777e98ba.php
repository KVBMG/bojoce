<?php

/* EcoJobMessagerieBundle:Message:thread.html.twig */
class __TwigTemplate_a7fba63a3646f2f138fd6e0d82e2db173c67bcbd7816daf7bfde07b05de9e564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:thread.html.twig", 1);
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
        $__internal_ca76b903f53da84e530ee38b81fc556e6077da7d7a81e951621089003c0db7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76b903f53da84e530ee38b81fc556e6077da7d7a81e951621089003c0db7fe->enter($__internal_ca76b903f53da84e530ee38b81fc556e6077da7d7a81e951621089003c0db7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca76b903f53da84e530ee38b81fc556e6077da7d7a81e951621089003c0db7fe->leave($__internal_ca76b903f53da84e530ee38b81fc556e6077da7d7a81e951621089003c0db7fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c219d467a4a86ce86c2540f43f20a414658d894031449e778ed0b80c0041f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c219d467a4a86ce86c2540f43f20a414658d894031449e778ed0b80c0041f5f->enter($__internal_5c219d467a4a86ce86c2540f43f20a414658d894031449e778ed0b80c0041f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Messages";
        
        $__internal_5c219d467a4a86ce86c2540f43f20a414658d894031449e778ed0b80c0041f5f->leave($__internal_5c219d467a4a86ce86c2540f43f20a414658d894031449e778ed0b80c0041f5f_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_145804b99bb09f6aad373dde02af0b878a558c12b35c50b3b3072141dd9f3355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145804b99bb09f6aad373dde02af0b878a558c12b35c50b3b3072141dd9f3355->enter($__internal_145804b99bb09f6aad373dde02af0b878a558c12b35c50b3b3072141dd9f3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
            echo "    
    
    <div class=\"messenger_thread_message\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                
                 <div class=\"messenger_thread_message_info help-block anel-title\">
            ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            // line 16
            echo "        </div>
            </div>
       

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            <div class=\"panel-body\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "</div>
        </div>
     </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
<h3>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" value=\"Répondre\" class=\"btn-default btn-cf-submit\"/>
</form>

";
        
        $__internal_145804b99bb09f6aad373dde02af0b878a558c12b35c50b3b3072141dd9f3355->leave($__internal_145804b99bb09f6aad373dde02af0b878a558c12b35c50b3b3072141dd9f3355_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  105 => 29,  100 => 27,  97 => 26,  86 => 21,  82 => 20,  76 => 16,  74 => 15,  65 => 8,  61 => 7,  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
{% block title %} Messages{% endblock %}
{% block fos_message_content %}

<h2>{{ thread.subject }}</h2>

{% for message in thread.messages %}
    
    
    <div class=\"messenger_thread_message\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                
                 <div class=\"messenger_thread_message_info help-block anel-title\">
            {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
        </div>
            </div>
       

        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
            <div class=\"panel-body\">{{ message.body }}</div>
        </div>
     </div>
    </div>
{% endfor %}

<h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

<form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
    {{ form_widget(form) }}

    <input type=\"submit\" value=\"Répondre\" class=\"btn-default btn-cf-submit\"/>
</form>

{% endblock %}
", "EcoJobMessagerieBundle:Message:thread.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/thread.html.twig");
    }
}
