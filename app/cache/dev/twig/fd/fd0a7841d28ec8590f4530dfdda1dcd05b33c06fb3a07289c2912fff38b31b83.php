<?php

/* EcoJobMessagerieBundle::layout.html.twig */
class __TwigTemplate_c32ae75aca6059a6112b3c348acbf1d583d2252a1988071c861a5b10253af0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobMessagerieBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scontent' => array($this, 'block_scontent'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736bf690cf1f640982702e6242d3f738f0f3ee127232098dad0d3e530f3125a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736bf690cf1f640982702e6242d3f738f0f3ee127232098dad0d3e530f3125a3->enter($__internal_736bf690cf1f640982702e6242d3f738f0f3ee127232098dad0d3e530f3125a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736bf690cf1f640982702e6242d3f738f0f3ee127232098dad0d3e530f3125a3->leave($__internal_736bf690cf1f640982702e6242d3f738f0f3ee127232098dad0d3e530f3125a3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b5b3ab2aea3f8e834bc9a0c02e9dab052b33987e26eec7630f270a12f0cdeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5b3ab2aea3f8e834bc9a0c02e9dab052b33987e26eec7630f270a12f0cdeca->enter($__internal_7b5b3ab2aea3f8e834bc9a0c02e9dab052b33987e26eec7630f270a12f0cdeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7b5b3ab2aea3f8e834bc9a0c02e9dab052b33987e26eec7630f270a12f0cdeca->leave($__internal_7b5b3ab2aea3f8e834bc9a0c02e9dab052b33987e26eec7630f270a12f0cdeca_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb37279487dc2a24f8ee93c268912438e6fcca286d8fd35738a068bd5ac15846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb37279487dc2a24f8ee93c268912438e6fcca286d8fd35738a068bd5ac15846->enter($__internal_cb37279487dc2a24f8ee93c268912438e6fcca286d8fd35738a068bd5ac15846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 15
                echo "                            <div class=\"alert alert-succes alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hi
                    dden=\"true\">&times;</span></button>
                                    <strong>";
                // line 18
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</strong>
                            </div>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    ";
        }
        echo "                    
                    ";
        // line 22
        $this->displayBlock('scontent', $context, $blocks);
        // line 33
        echo "    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_cb37279487dc2a24f8ee93c268912438e6fcca286d8fd35738a068bd5ac15846->leave($__internal_cb37279487dc2a24f8ee93c268912438e6fcca286d8fd35738a068bd5ac15846_prof);

    }

    // line 22
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_999c09cca36c2524a809680933f37d281d12e295885c3cc54c4765d6844b498d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999c09cca36c2524a809680933f37d281d12e295885c3cc54c4765d6844b498d->enter($__internal_999c09cca36c2524a809680933f37d281d12e295885c3cc54c4765d6844b498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 23
        echo "                    <div class=\"title6\">Messagerie</div>
                   <!-- <h1> ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</h1> -->

        <ul>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
        </ul>

        ";
        // line 32
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 33
        echo "                ";
        
        $__internal_999c09cca36c2524a809680933f37d281d12e295885c3cc54c4765d6844b498d->leave($__internal_999c09cca36c2524a809680933f37d281d12e295885c3cc54c4765d6844b498d_prof);

    }

    // line 32
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_648a486ca070b736dd011924f230cc63d20ec7b79e3a4c2905631e2644c8f507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648a486ca070b736dd011924f230cc63d20ec7b79e3a4c2905631e2644c8f507->enter($__internal_648a486ca070b736dd011924f230cc63d20ec7b79e3a4c2905631e2644c8f507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_648a486ca070b736dd011924f230cc63d20ec7b79e3a4c2905631e2644c8f507->leave($__internal_648a486ca070b736dd011924f230cc63d20ec7b79e3a4c2905631e2644c8f507_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 32,  144 => 33,  142 => 32,  134 => 29,  128 => 28,  122 => 27,  116 => 24,  113 => 23,  107 => 22,  95 => 33,  93 => 22,  88 => 21,  79 => 18,  74 => 15,  69 => 14,  67 => 13,  56 => 5,  48 => 4,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}{% endblock %}

{% block content %} 
    {{parent()}} 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    
                </div>                
                <div class=\"col-sm-8\">
                    {% if app.request.hasPreviousSession %}
                       {% for flashMessage in app.session.flashBag.get('success') %}
                            <div class=\"alert alert-succes alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hi
                    dden=\"true\">&times;</span></button>
                                    <strong>{{ flashMessage }}</strong>
                            </div>
                       {% endfor %}
                    {% endif %}                    
                    {% block scontent %}
                    <div class=\"title6\">Messagerie</div>
                   <!-- <h1> {% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1> -->

        <ul>
            <li><a href=\"{{ url('fos_message_inbox') }}\">{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_sent') }}\">{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_deleted') }}\">{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a></li>
        </ul>

        {% block fos_message_content %}{% endblock %}
                {% endblock %}    
                </div>
            </div>
        </div>
    </div>
{% endblock %}                ", "EcoJobMessagerieBundle::layout.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\MessagerieBundle/Resources/views/layout.html.twig");
    }
}
