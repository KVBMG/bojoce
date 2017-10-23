<?php

/* EcoJobAdminBundle:Candidat:cv.html.twig */
class __TwigTemplate_fe19795a7ad44a0a94d7404ba4b7afff6f753ebfc8094b8edd9ab32fbce01967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Candidat:cv.html.twig", 1);
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
        $__internal_34e245ecc720a1044b72ab2b79d024a34c739885ff88ec6515b6b3aae13e48b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e245ecc720a1044b72ab2b79d024a34c739885ff88ec6515b6b3aae13e48b3->enter($__internal_34e245ecc720a1044b72ab2b79d024a34c739885ff88ec6515b6b3aae13e48b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Candidat:cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e245ecc720a1044b72ab2b79d024a34c739885ff88ec6515b6b3aae13e48b3->leave($__internal_34e245ecc720a1044b72ab2b79d024a34c739885ff88ec6515b6b3aae13e48b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5707e6ba63aa5afcae656cb0593f40b8a763e78fc13b144a1a4cac752b7c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5707e6ba63aa5afcae656cb0593f40b8a763e78fc13b144a1a4cac752b7c56->enter($__internal_5a5707e6ba63aa5afcae656cb0593f40b8a763e78fc13b144a1a4cac752b7c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " CV candidat ";
        
        $__internal_5a5707e6ba63aa5afcae656cb0593f40b8a763e78fc13b144a1a4cac752b7c56->leave($__internal_5a5707e6ba63aa5afcae656cb0593f40b8a763e78fc13b144a1a4cac752b7c56_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ffd55296a263d94a663b4602690093869077b853e470baa54eeb5333f317be33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd55296a263d94a663b4602690093869077b853e470baa54eeb5333f317be33->enter($__internal_ffd55296a263d94a663b4602690093869077b853e470baa54eeb5333f317be33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_ffd55296a263d94a663b4602690093869077b853e470baa54eeb5333f317be33->leave($__internal_ffd55296a263d94a663b4602690093869077b853e470baa54eeb5333f317be33_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_3df1e2a7ff4e08cec04d6c80fe948efbc1abf4c733b8136d95e9f8290c2f6cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df1e2a7ff4e08cec04d6c80fe948efbc1abf4c733b8136d95e9f8290c2f6cc4->enter($__internal_3df1e2a7ff4e08cec04d6c80fe948efbc1abf4c733b8136d95e9f8290c2f6cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Aperçu CV ";
        
        $__internal_3df1e2a7ff4e08cec04d6c80fe948efbc1abf4c733b8136d95e9f8290c2f6cc4->leave($__internal_3df1e2a7ff4e08cec04d6c80fe948efbc1abf4c733b8136d95e9f8290c2f6cc4_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_8485b98c59355eaafd8f50df53f9ed08e75cdd69690445a0455810dbcfb31587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8485b98c59355eaafd8f50df53f9ed08e75cdd69690445a0455810dbcfb31587->enter($__internal_8485b98c59355eaafd8f50df53f9ed08e75cdd69690445a0455810dbcfb31587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"title6\"> Curriculum Vitae </div>

    <div class=\"team1 clearfix\">
        ";
        // line 13
        if ( !(null === ($context["cv"] ?? $this->getContext($context, "cv")))) {
            // line 14
            echo "            <figure><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["cv"] ?? $this->getContext($context, "cv")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cv"] ?? $this->getContext($context, "cv")), "nom", array()), "html", null, true);
            echo "\" class=\"img-responsive\" /></figure>
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_delete");
            echo "\" class=\"btn-default btn3\">Supprimer</a>
            </div>
        ";
        } else {
            // line 22
            echo "            Ce candidat n'a pas encore rempli son CV.
        ";
        }
        // line 24
        echo "    </div>
</div>
";
        // line 26
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_8485b98c59355eaafd8f50df53f9ed08e75cdd69690445a0455810dbcfb31587->leave($__internal_8485b98c59355eaafd8f50df53f9ed08e75cdd69690445a0455810dbcfb31587_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Candidat:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 26,  118 => 24,  114 => 22,  108 => 19,  104 => 18,  100 => 17,  94 => 16,  86 => 14,  84 => 13,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %} CV candidat {% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} Aperçu CV {% endblock %}

{% block scontent %}   
    <div class=\"title6\"> Curriculum Vitae </div>

    <div class=\"team1 clearfix\">
        {% if cv is not null %}
            <figure><img src=\"{{ vich_uploader_asset(cv, 'imageFile') }}\" alt=\"{{ cv.nom }}\" class=\"img-responsive\" /></figure>
            <div class=\"caption\">
                <div class=\"txt1\">{{cv.nom}} {{cv.prenom}}</div>
                <div class=\"txt2\">{{cv.telephone}}</div>
                <div class=\"txt3\">{{cv.about}}</div>
                <a href=\"{{ path('eco_job_candidat_cv_delete')}}\" class=\"btn-default btn3\">Supprimer</a>
            </div>
        {% else %}
            Ce candidat n'a pas encore rempli son CV.
        {% endif %}
    </div>
</div>
{{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Candidat:cv.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Candidat/cv.html.twig");
    }
}
