<?php

/* EcoJobAdminBundle:Admin:offreCategorie.html.twig */
class __TwigTemplate_aa4aafea2240b7feb0b04c0c5739ebc3502f082808a7d28e6628afbabea14e2a extends Twig_Template
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
        $__internal_e19d5106b3cb314868ebc45fe9f5b3e38fc711cb7a249e1ff1d33ea288e9998b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19d5106b3cb314868ebc45fe9f5b3e38fc711cb7a249e1ff1d33ea288e9998b->enter($__internal_e19d5106b3cb314868ebc45fe9f5b3e38fc711cb7a249e1ff1d33ea288e9998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offreCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19d5106b3cb314868ebc45fe9f5b3e38fc711cb7a249e1ff1d33ea288e9998b->leave($__internal_e19d5106b3cb314868ebc45fe9f5b3e38fc711cb7a249e1ff1d33ea288e9998b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c19d47cd5853dfb213d6b2fe0f70850da97c1286b27ddc003926bc47696adaf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19d47cd5853dfb213d6b2fe0f70850da97c1286b27ddc003926bc47696adaf3->enter($__internal_c19d47cd5853dfb213d6b2fe0f70850da97c1286b27ddc003926bc47696adaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_c19d47cd5853dfb213d6b2fe0f70850da97c1286b27ddc003926bc47696adaf3->leave($__internal_c19d47cd5853dfb213d6b2fe0f70850da97c1286b27ddc003926bc47696adaf3_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d94808500a5221ff8e258690b981889492a1772695e8c4c8af2347c6a58bb108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94808500a5221ff8e258690b981889492a1772695e8c4c8af2347c6a58bb108->enter($__internal_d94808500a5221ff8e258690b981889492a1772695e8c4c8af2347c6a58bb108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_d94808500a5221ff8e258690b981889492a1772695e8c4c8af2347c6a58bb108->leave($__internal_d94808500a5221ff8e258690b981889492a1772695e8c4c8af2347c6a58bb108_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_d6c7a0402ff02229a808aee4d20230276ab4b3b07f5f8c51a4522cbaec1bce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c7a0402ff02229a808aee4d20230276ab4b3b07f5f8c51a4522cbaec1bce68->enter($__internal_d6c7a0402ff02229a808aee4d20230276ab4b3b07f5f8c51a4522cbaec1bce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Catégorie des offres";
        
        $__internal_d6c7a0402ff02229a808aee4d20230276ab4b3b07f5f8c51a4522cbaec1bce68->leave($__internal_d6c7a0402ff02229a808aee4d20230276ab4b3b07f5f8c51a4522cbaec1bce68_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_770bc1ff4fcbdbe7b51cd7fc9aff9726629a3dfea038304074fc3cf578478d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770bc1ff4fcbdbe7b51cd7fc9aff9726629a3dfea038304074fc3cf578478d84->enter($__internal_770bc1ff4fcbdbe7b51cd7fc9aff9726629a3dfea038304074fc3cf578478d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">List des catégorie des offres </div>
        <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"/>
        </form>
                                    
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        
        $__internal_770bc1ff4fcbdbe7b51cd7fc9aff9726629a3dfea038304074fc3cf578478d84->leave($__internal_770bc1ff4fcbdbe7b51cd7fc9aff9726629a3dfea038304074fc3cf578478d84_prof);

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
", "EcoJobAdminBundle:Admin:offreCategorie.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Admin/offreCategorie.html.twig");
    }
}
