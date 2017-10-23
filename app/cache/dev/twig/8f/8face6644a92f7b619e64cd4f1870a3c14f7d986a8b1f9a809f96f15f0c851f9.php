<?php

/* EcoJobMessagerieBundle::layout.html.twig */
class __TwigTemplate_491b00f21b29b4c997e4e8be671b1e1e020cb1556bd8435b1805cd5b763100fd extends Twig_Template
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
        $__internal_a61df18b29e10f62e79c89488b442af8c08283a913057fcc17da3ee4493e8b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61df18b29e10f62e79c89488b442af8c08283a913057fcc17da3ee4493e8b64->enter($__internal_a61df18b29e10f62e79c89488b442af8c08283a913057fcc17da3ee4493e8b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a61df18b29e10f62e79c89488b442af8c08283a913057fcc17da3ee4493e8b64->leave($__internal_a61df18b29e10f62e79c89488b442af8c08283a913057fcc17da3ee4493e8b64_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1402ec459d92bb9d434c3b69d28068a524173ee6dcaa88b45e176fc105f8fd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1402ec459d92bb9d434c3b69d28068a524173ee6dcaa88b45e176fc105f8fd04->enter($__internal_1402ec459d92bb9d434c3b69d28068a524173ee6dcaa88b45e176fc105f8fd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1402ec459d92bb9d434c3b69d28068a524173ee6dcaa88b45e176fc105f8fd04->leave($__internal_1402ec459d92bb9d434c3b69d28068a524173ee6dcaa88b45e176fc105f8fd04_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_862a000f25fb9ecfc77dc25425d93edf8905c51c71781f5535b9294590a6ca6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862a000f25fb9ecfc77dc25425d93edf8905c51c71781f5535b9294590a6ca6f->enter($__internal_862a000f25fb9ecfc77dc25425d93edf8905c51c71781f5535b9294590a6ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 14
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
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
        
        $__internal_862a000f25fb9ecfc77dc25425d93edf8905c51c71781f5535b9294590a6ca6f->leave($__internal_862a000f25fb9ecfc77dc25425d93edf8905c51c71781f5535b9294590a6ca6f_prof);

    }

    // line 22
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_c7349727da084d46ce909cc9a4379f3c48ae5b9dad1532bcc1e91f6819732e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7349727da084d46ce909cc9a4379f3c48ae5b9dad1532bcc1e91f6819732e5e->enter($__internal_c7349727da084d46ce909cc9a4379f3c48ae5b9dad1532bcc1e91f6819732e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_c7349727da084d46ce909cc9a4379f3c48ae5b9dad1532bcc1e91f6819732e5e->leave($__internal_c7349727da084d46ce909cc9a4379f3c48ae5b9dad1532bcc1e91f6819732e5e_prof);

    }

    // line 32
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_b6787ef46ae0568e7b2208582ce1a1c534479cb9b99e0e7e08d867e3b106085e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6787ef46ae0568e7b2208582ce1a1c534479cb9b99e0e7e08d867e3b106085e->enter($__internal_b6787ef46ae0568e7b2208582ce1a1c534479cb9b99e0e7e08d867e3b106085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_b6787ef46ae0568e7b2208582ce1a1c534479cb9b99e0e7e08d867e3b106085e->leave($__internal_b6787ef46ae0568e7b2208582ce1a1c534479cb9b99e0e7e08d867e3b106085e_prof);

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
{% endblock %}                ", "EcoJobMessagerieBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/layout.html.twig");
    }
}
