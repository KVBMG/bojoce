<?php

/* EcoJobCandidatBundle:Candidat:show.html.twig */
class __TwigTemplate_633b269727f43f17509d5930fe91cb56913620c89bc0c206a38413ac969b16e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e931b5f2bbc1c43a6af81a25d0c5a1e460a5fa0e21e1d7ebc79df6559078da9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e931b5f2bbc1c43a6af81a25d0c5a1e460a5fa0e21e1d7ebc79df6559078da9d->enter($__internal_e931b5f2bbc1c43a6af81a25d0c5a1e460a5fa0e21e1d7ebc79df6559078da9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e931b5f2bbc1c43a6af81a25d0c5a1e460a5fa0e21e1d7ebc79df6559078da9d->leave($__internal_e931b5f2bbc1c43a6af81a25d0c5a1e460a5fa0e21e1d7ebc79df6559078da9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_151572bfb841306cab65f2c4f3b44acfcbfc7f84ac3486d3ae0f5148e2acd9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151572bfb841306cab65f2c4f3b44acfcbfc7f84ac3486d3ae0f5148e2acd9b4->enter($__internal_151572bfb841306cab65f2c4f3b44acfcbfc7f84ac3486d3ae0f5148e2acd9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_151572bfb841306cab65f2c4f3b44acfcbfc7f84ac3486d3ae0f5148e2acd9b4->leave($__internal_151572bfb841306cab65f2c4f3b44acfcbfc7f84ac3486d3ae0f5148e2acd9b4_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9413c15107a8b25c4f30ea131c06caa1f5e04da60c08f571bbfb875db9960404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9413c15107a8b25c4f30ea131c06caa1f5e04da60c08f571bbfb875db9960404->enter($__internal_9413c15107a8b25c4f30ea131c06caa1f5e04da60c08f571bbfb875db9960404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_9413c15107a8b25c4f30ea131c06caa1f5e04da60c08f571bbfb875db9960404->leave($__internal_9413c15107a8b25c4f30ea131c06caa1f5e04da60c08f571bbfb875db9960404_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_a26c70817833a248874d6cbedc84598d4f7e6f3e90b094e76dc4b526a48e6333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26c70817833a248874d6cbedc84598d4f7e6f3e90b094e76dc4b526a48e6333->enter($__internal_a26c70817833a248874d6cbedc84598d4f7e6f3e90b094e76dc4b526a48e6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_a26c70817833a248874d6cbedc84598d4f7e6f3e90b094e76dc4b526a48e6333->leave($__internal_a26c70817833a248874d6cbedc84598d4f7e6f3e90b094e76dc4b526a48e6333_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_5e73e44b242680c4fffd82cd44e4fecb4de62a0126cb97afcc44bc008d6ca4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e73e44b242680c4fffd82cd44e4fecb4de62a0126cb97afcc44bc008d6ca4be->enter($__internal_5e73e44b242680c4fffd82cd44e4fecb4de62a0126cb97afcc44bc008d6ca4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"title6\">Mon CV </div>

    <div class=\"team1 clearfix\">
        ";
        // line 13
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "cvFile", array())) {
            // line 14
            echo "        <figure><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["cv"] ?? $this->getContext($context, "cv")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "nom", array()), "html", null, true);
            echo "\" class=\"img-responsive\" height=\"200px\" width=\"200px\" /></figure>
        <div class=\"caption\">
            <div class=\"txt1\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "prenom", array()), "html", null, true);
            echo "</div>
            <div class=\"txt2\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "telephone", array()), "html", null, true);
            echo "</div>
            <div class=\"txt3\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "about", array()), "html", null, true);
            echo "</div>
            <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_edit");
            echo "\" class=\"btn-default btn3\">Modifier</a>
            <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_delete");
            echo "\" class=\"btn-default btn3\">Supprimer</a>
            ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "cvName", array(), "any", true, true)) {
                // line 22
                echo "                <a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["cv"] ?? $this->getContext($context, "cv")), "imageFile"), "html", null, true);
                echo "'>Votre CV numérique</a>
            ";
            }
            // line 24
            echo "        </div>
        ";
        } else {
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "cvFile", array()), "cvFile"), "html", null, true);
            echo "\">Aperçu du CV envoyé</a>
            <div class=\"txt3\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "cvFile", array()), "lm", array()), "html", null, true);
            echo "</div>
        ";
        }
        // line 29
        echo "    </div>
</div>
";
        // line 31
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_5e73e44b242680c4fffd82cd44e4fecb4de62a0126cb97afcc44bc008d6ca4be->leave($__internal_5e73e44b242680c4fffd82cd44e4fecb4de62a0126cb97afcc44bc008d6ca4be_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 31,  138 => 29,  133 => 27,  128 => 26,  124 => 24,  118 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  94 => 16,  86 => 14,  84 => 13,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\"%}

{% block title %} Mon CV {% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Mon CV {% endblock %}

{% block scontent %}   
    <div class=\"title6\">Mon CV </div>

    <div class=\"team1 clearfix\">
        {% if not app.user.cvFile %}
        <figure><img src=\"{{ vich_uploader_asset(cv, 'imageFile') }}\" alt=\"{{ cv.nom }}\" class=\"img-responsive\" height=\"200px\" width=\"200px\" /></figure>
        <div class=\"caption\">
            <div class=\"txt1\">{{cv.nom}} {{cv.prenom}}</div>
            <div class=\"txt2\">{{cv.telephone}}</div>
            <div class=\"txt3\">{{cv.about}}</div>
            <a href=\"{{ path('eco_job_candidat_cv_edit')}}\" class=\"btn-default btn3\">Modifier</a>
            <a href=\"{{ path('eco_job_candidat_cv_delete')}}\" class=\"btn-default btn3\">Supprimer</a>
            {% if app.user.cvName is defined %}
                <a href='{{ vich_uploader_asset(cv, 'imageFile') }}'>Votre CV numérique</a>
            {% endif %}
        </div>
        {% else %}
            <a href=\"{{ vich_uploader_asset(app.user.cvFile, 'cvFile') }}\">Aperçu du CV envoyé</a>
            <div class=\"txt3\">{{app.user.cvFile.lm}}</div>
        {% endif %}
    </div>
</div>
{{parent()}} 

{% endblock %}  
", "EcoJobCandidatBundle:Candidat:show.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/show.html.twig");
    }
}
