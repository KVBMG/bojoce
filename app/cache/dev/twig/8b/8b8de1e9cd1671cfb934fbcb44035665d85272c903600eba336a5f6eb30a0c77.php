<?php

/* EcoJobAdminBundle:Admin:offreCategorie.html.twig */
class __TwigTemplate_106e97d369f96c7d619a37049a76393d668419e16680510f1fdaf26365f96dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:offreCategorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50d46fb5bce5f7b541c2181790284a53c1229eaed2e93672eb42a13cfc1112c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d46fb5bce5f7b541c2181790284a53c1229eaed2e93672eb42a13cfc1112c4->enter($__internal_50d46fb5bce5f7b541c2181790284a53c1229eaed2e93672eb42a13cfc1112c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offreCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50d46fb5bce5f7b541c2181790284a53c1229eaed2e93672eb42a13cfc1112c4->leave($__internal_50d46fb5bce5f7b541c2181790284a53c1229eaed2e93672eb42a13cfc1112c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f8426d3803862d9df4c567c528dfff7635ae364a625aacf1e6fd61820ed095d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8426d3803862d9df4c567c528dfff7635ae364a625aacf1e6fd61820ed095d->enter($__internal_6f8426d3803862d9df4c567c528dfff7635ae364a625aacf1e6fd61820ed095d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_6f8426d3803862d9df4c567c528dfff7635ae364a625aacf1e6fd61820ed095d->leave($__internal_6f8426d3803862d9df4c567c528dfff7635ae364a625aacf1e6fd61820ed095d_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9f87768048ee1b7a45b12391efd87f1eef841905d7f5c71e1956fa25ed3954c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f87768048ee1b7a45b12391efd87f1eef841905d7f5c71e1956fa25ed3954c5->enter($__internal_9f87768048ee1b7a45b12391efd87f1eef841905d7f5c71e1956fa25ed3954c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_9f87768048ee1b7a45b12391efd87f1eef841905d7f5c71e1956fa25ed3954c5->leave($__internal_9f87768048ee1b7a45b12391efd87f1eef841905d7f5c71e1956fa25ed3954c5_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_d170aa58e5636fa75cb2bf216680a4f78ad38d6a4cc89dc34df3f9cddcc30d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d170aa58e5636fa75cb2bf216680a4f78ad38d6a4cc89dc34df3f9cddcc30d82->enter($__internal_d170aa58e5636fa75cb2bf216680a4f78ad38d6a4cc89dc34df3f9cddcc30d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Catégorie des offres";
        
        $__internal_d170aa58e5636fa75cb2bf216680a4f78ad38d6a4cc89dc34df3f9cddcc30d82->leave($__internal_d170aa58e5636fa75cb2bf216680a4f78ad38d6a4cc89dc34df3f9cddcc30d82_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_47640e31195d572e5081059f6a035154dbe72f3bc11fb9c3a243134ac3a25dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47640e31195d572e5081059f6a035154dbe72f3bc11fb9c3a243134ac3a25dd5->enter($__internal_47640e31195d572e5081059f6a035154dbe72f3bc11fb9c3a243134ac3a25dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">List des catégorie des offres </div>
        <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"/>
        </form>
                                    
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["categorie"], "id", array()) . " - ") . $this->getAttribute($context["categorie"], "designation", array())), "html", null, true);
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_categorie_delete", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

    ";
        // line 22
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_47640e31195d572e5081059f6a035154dbe72f3bc11fb9c3a243134ac3a25dd5->leave($__internal_47640e31195d572e5081059f6a035154dbe72f3bc11fb9c3a243134ac3a25dd5_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:offreCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 22,  109 => 20,  98 => 18,  94 => 17,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobAdminBundle::layout.html.twig\"%}

{% block title %} Offres d'emploi {% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} Catégorie des offres{% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">List des catégorie des offres </div>
        <form method=\"post\" {{ form_enctype(form) }}>
            {{ form_widget(form) }}
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"/>
        </form>
                                    
        {%for categorie  in categories %}
            {{ categorie.id ~ \" - \"~ categorie.designation }}  <a href=\"{{ path('eco_job_admin_categorie_delete',{'id': categorie.id})}}\" class=\"btn-default btn3\">Supprimer</a>    <br/>
        {%endfor%}
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:offreCategorie.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/offreCategorie.html.twig");
    }
}
