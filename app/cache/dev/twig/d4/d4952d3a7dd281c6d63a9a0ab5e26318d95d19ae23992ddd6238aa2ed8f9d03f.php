<?php

/* EcoJobCandidatBundle:Candidat:show.html.twig */
class __TwigTemplate_c75d4b74176b6c8cdc20fcf6fa6c549083b97e14108f16d27ab7c1f8ef7d7593 extends Twig_Template
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
        $__internal_9b49aa4bf4f8df249493129f5d252a12289b999979a48aeebfd6352c44fcf6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b49aa4bf4f8df249493129f5d252a12289b999979a48aeebfd6352c44fcf6b9->enter($__internal_9b49aa4bf4f8df249493129f5d252a12289b999979a48aeebfd6352c44fcf6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b49aa4bf4f8df249493129f5d252a12289b999979a48aeebfd6352c44fcf6b9->leave($__internal_9b49aa4bf4f8df249493129f5d252a12289b999979a48aeebfd6352c44fcf6b9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_835c6bc57e3edc4a3811a780bf26ddc5c3b2758c78754e6c6e3e73c7ab254cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835c6bc57e3edc4a3811a780bf26ddc5c3b2758c78754e6c6e3e73c7ab254cd5->enter($__internal_835c6bc57e3edc4a3811a780bf26ddc5c3b2758c78754e6c6e3e73c7ab254cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_835c6bc57e3edc4a3811a780bf26ddc5c3b2758c78754e6c6e3e73c7ab254cd5->leave($__internal_835c6bc57e3edc4a3811a780bf26ddc5c3b2758c78754e6c6e3e73c7ab254cd5_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_74b3ded9849cda19ff897a5de99e33d0a362859a46b74ec1867d21bca86afc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b3ded9849cda19ff897a5de99e33d0a362859a46b74ec1867d21bca86afc00->enter($__internal_74b3ded9849cda19ff897a5de99e33d0a362859a46b74ec1867d21bca86afc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_74b3ded9849cda19ff897a5de99e33d0a362859a46b74ec1867d21bca86afc00->leave($__internal_74b3ded9849cda19ff897a5de99e33d0a362859a46b74ec1867d21bca86afc00_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_9ef6c1c06dc8dd81c5ece9eb3218355966f23a0d2039ca7f3e20f8cc08129900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef6c1c06dc8dd81c5ece9eb3218355966f23a0d2039ca7f3e20f8cc08129900->enter($__internal_9ef6c1c06dc8dd81c5ece9eb3218355966f23a0d2039ca7f3e20f8cc08129900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_9ef6c1c06dc8dd81c5ece9eb3218355966f23a0d2039ca7f3e20f8cc08129900->leave($__internal_9ef6c1c06dc8dd81c5ece9eb3218355966f23a0d2039ca7f3e20f8cc08129900_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_b740b97c105ce0ac7eee0eac9a052f8fbc7e526cc05d1610a864fab26cce1aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b740b97c105ce0ac7eee0eac9a052f8fbc7e526cc05d1610a864fab26cce1aa9->enter($__internal_b740b97c105ce0ac7eee0eac9a052f8fbc7e526cc05d1610a864fab26cce1aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"title6\">Mon CV </div>

    <div class=\"team1 clearfix\">
        
        <figure><img src=\"";
        // line 14
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
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "cvFile", array(), "any", true, true)) {
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
        
        $__internal_b740b97c105ce0ac7eee0eac9a052f8fbc7e526cc05d1610a864fab26cce1aa9->leave($__internal_b740b97c105ce0ac7eee0eac9a052f8fbc7e526cc05d1610a864fab26cce1aa9_prof);

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
        return array (  141 => 31,  137 => 29,  132 => 27,  127 => 26,  125 => 25,  122 => 24,  116 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  92 => 16,  85 => 14,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
            {% if app.user.cvFile is defined %}
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
