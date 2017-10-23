<?php

/* EcoJobMessagerieBundle:Message:send.html.twig */
class __TwigTemplate_da61a34e98643ad69cea8b78af1338b6f735842c50e706358876f644e7a62071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:send.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'mcontent' => array($this, 'block_mcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMessagerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3412f5f06d800aa5656b0b9b4d4b3f1248e1698b18f1e4d93e6c851add51e1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3412f5f06d800aa5656b0b9b4d4b3f1248e1698b18f1e4d93e6c851add51e1d1->enter($__internal_3412f5f06d800aa5656b0b9b4d4b3f1248e1698b18f1e4d93e6c851add51e1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:send.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3412f5f06d800aa5656b0b9b4d4b3f1248e1698b18f1e4d93e6c851add51e1d1->leave($__internal_3412f5f06d800aa5656b0b9b4d4b3f1248e1698b18f1e4d93e6c851add51e1d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a24630840103ab3741094a6124c072f5f348d29f38b3d1bdda12a42edd52c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a24630840103ab3741094a6124c072f5f348d29f38b3d1bdda12a42edd52c9->enter($__internal_b3a24630840103ab3741094a6124c072f5f348d29f38b3d1bdda12a42edd52c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Envoi message ";
        
        $__internal_b3a24630840103ab3741094a6124c072f5f348d29f38b3d1bdda12a42edd52c9->leave($__internal_b3a24630840103ab3741094a6124c072f5f348d29f38b3d1bdda12a42edd52c9_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b560c514889d35e4fcc75e8b447537acdd0b8ae531c22058c2700901ced57c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b560c514889d35e4fcc75e8b447537acdd0b8ae531c22058c2700901ced57c90->enter($__internal_b560c514889d35e4fcc75e8b447537acdd0b8ae531c22058c2700901ced57c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Envoi message ";
        
        $__internal_b560c514889d35e4fcc75e8b447537acdd0b8ae531c22058c2700901ced57c90->leave($__internal_b560c514889d35e4fcc75e8b447537acdd0b8ae531c22058c2700901ced57c90_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_8f6b99e74f533c52f49e3484614a3302bc88863767a502add88c83034172f278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6b99e74f533c52f49e3484614a3302bc88863767a502add88c83034172f278->enter($__internal_8f6b99e74f533c52f49e3484614a3302bc88863767a502add88c83034172f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Envoi message ";
        
        $__internal_8f6b99e74f533c52f49e3484614a3302bc88863767a502add88c83034172f278->leave($__internal_8f6b99e74f533c52f49e3484614a3302bc88863767a502add88c83034172f278_prof);

    }

    // line 9
    public function block_mcontent($context, array $blocks = array())
    {
        $__internal_9f21cfebd22ede18b38dabb2b7f9c135047118212e9e4f9725f5c386b659c5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f21cfebd22ede18b38dabb2b7f9c135047118212e9e4f9725f5c386b659c5ab->enter($__internal_9f21cfebd22ede18b38dabb2b7f9c135047118212e9e4f9725f5c386b659c5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mcontent"));

        // line 10
        echo "    <div>
        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">A :</label>
            <div class=\"col-sm-10\">
                <p class=\"form-control-static\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "receiver", array()), "username", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Offre :</label>
            <div class=\"col-sm-10\">
                <p class=\"form-control-static\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "subject", array()), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"col-sm-2 control-label\">Contenu :</label>
            <div class=\"col-sm-10\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
            </div>
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
        </div>

        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

        <div style=\"text-align: right;\">
            <input type=\"submit\" style=\"border-radius: 2px;\" class=\"btn-default btn1\" value=\"Envoyer\">
        </div>

        ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_9f21cfebd22ede18b38dabb2b7f9c135047118212e9e4f9725f5c386b659c5ab->leave($__internal_9f21cfebd22ede18b38dabb2b7f9c135047118212e9e4f9725f5c386b659c5ab_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  123 => 34,  117 => 31,  112 => 29,  107 => 27,  99 => 22,  90 => 16,  82 => 11,  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobMessagerieBundle::layout.html.twig\"%}

{% block title %} Envoi message {% endblock %}

{% block content_title %} Envoi message {% endblock %}

{% block content_stitle %} Envoi message {% endblock %}

{% block mcontent %}
    <div>
        {{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal'}}) }}

        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">A :</label>
            <div class=\"col-sm-10\">
                <p class=\"form-control-static\">{{ form.vars.data.receiver.username }}</p>
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">Offre :</label>
            <div class=\"col-sm-10\">
                <p class=\"form-control-static\">{{ form.vars.data.subject }}</p>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"{{ form.content.vars.id }}\" class=\"col-sm-2 control-label\">Contenu :</label>
            <div class=\"col-sm-10\">
                {{ form_widget(form.content) }}
            </div>
            {{ form_errors(form.content) }}
        </div>

        {{ form_rest(form) }}

        <div style=\"text-align: right;\">
            <input type=\"submit\" style=\"border-radius: 2px;\" class=\"btn-default btn1\" value=\"Envoyer\">
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}", "EcoJobMessagerieBundle:Message:send.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/send.html.twig");
    }
}
