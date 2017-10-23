<?php

/* EcoJobRecruteurBundle:Recruteur:create.html.twig */
class __TwigTemplate_f6ee5ad43e6bb4e7cee66055a698918362da657a44c7036e2823af65e207b4f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:create.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobRecruteurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78605e53ac4aacbe6d6928b08cb9f6524808b511cddc3fe7c92ae4de135a19e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78605e53ac4aacbe6d6928b08cb9f6524808b511cddc3fe7c92ae4de135a19e7->enter($__internal_78605e53ac4aacbe6d6928b08cb9f6524808b511cddc3fe7c92ae4de135a19e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78605e53ac4aacbe6d6928b08cb9f6524808b511cddc3fe7c92ae4de135a19e7->leave($__internal_78605e53ac4aacbe6d6928b08cb9f6524808b511cddc3fe7c92ae4de135a19e7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31eff0448914964ced832dbb9eefcded53efe82282b22fab197429b13223a8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31eff0448914964ced832dbb9eefcded53efe82282b22fab197429b13223a8c9->enter($__internal_31eff0448914964ced832dbb9eefcded53efe82282b22fab197429b13223a8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\">
";
        
        $__internal_31eff0448914964ced832dbb9eefcded53efe82282b22fab197429b13223a8c9->leave($__internal_31eff0448914964ced832dbb9eefcded53efe82282b22fab197429b13223a8c9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd1b2135ebd704791f4a31b9b5b874c35f74953d1addd6fda65a4c1bddc76582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1b2135ebd704791f4a31b9b5b874c35f74953d1addd6fda65a4c1bddc76582->enter($__internal_cd1b2135ebd704791f4a31b9b5b874c35f74953d1addd6fda65a4c1bddc76582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Création offre ";
        
        $__internal_cd1b2135ebd704791f4a31b9b5b874c35f74953d1addd6fda65a4c1bddc76582->leave($__internal_cd1b2135ebd704791f4a31b9b5b874c35f74953d1addd6fda65a4c1bddc76582_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_791ee5bf7578fe7fce58f104c397b3abd6c855c0848249fb6c876e4470852147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791ee5bf7578fe7fce58f104c397b3abd6c855c0848249fb6c876e4470852147->enter($__internal_791ee5bf7578fe7fce58f104c397b3abd6c855c0848249fb6c876e4470852147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_791ee5bf7578fe7fce58f104c397b3abd6c855c0848249fb6c876e4470852147->leave($__internal_791ee5bf7578fe7fce58f104c397b3abd6c855c0848249fb6c876e4470852147_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_e72dbb4eaa21b471c62745b574374c116e7e77f69c8b02cd107b1751ea887a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72dbb4eaa21b471c62745b574374c116e7e77f69c8b02cd107b1751ea887a65->enter($__internal_e72dbb4eaa21b471c62745b574374c116e7e77f69c8b02cd107b1751ea887a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emloi ";
        
        $__internal_e72dbb4eaa21b471c62745b574374c116e7e77f69c8b02cd107b1751ea887a65->leave($__internal_e72dbb4eaa21b471c62745b574374c116e7e77f69c8b02cd107b1751ea887a65_prof);

    }

    // line 14
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_ccfb725f96153e2ec9e1a598d6bf0879e11f1ef4e5baf600e71583ec01fd1ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfb725f96153e2ec9e1a598d6bf0879e11f1ef4e5baf600e71583ec01fd1ae5->enter($__internal_ccfb725f96153e2ec9e1a598d6bf0879e11f1ef4e5baf600e71583ec01fd1ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    ";
        // line 15
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Créer une <span>offre d'emploi</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            <form novalidate class=\"form-horizontal\"  method=\"post\" ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Valider</button>
                ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "                       
        </div>                       
    </form>    
</div>
</div>

";
        
        $__internal_ccfb725f96153e2ec9e1a598d6bf0879e11f1ef4e5baf600e71583ec01fd1ae5->leave($__internal_ccfb725f96153e2ec9e1a598d6bf0879e11f1ef4e5baf600e71583ec01fd1ae5_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c74d3f107f4dd800b5bbc54850a7d7d08850e4046ef1e92f7738fa264fc7b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c74d3f107f4dd800b5bbc54850a7d7d08850e4046ef1e92f7738fa264fc7b77->enter($__internal_8c74d3f107f4dd800b5bbc54850a7d7d08850e4046ef1e92f7738fa264fc7b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDz7p9ZkcuK0_vpO57wMtBLakylq6vn0RM&libraries=places\"></script>
    <script>
        var autocomplete;
        function initialize() {
            autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('ecojob_recruteurbundle_offre_localisation')),
                    {types: ['geocode']});
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('ecojob_recruteurbundle_offre_latitude').value = place.geometry.location.lat();
                document.getElementById('ecojob_recruteurbundle_offre_longitude').value = place.geometry.location.lng();                
            });
        }
       \$(function() {
        initialize();

        });
    </script>
";
        
        $__internal_8c74d3f107f4dd800b5bbc54850a7d7d08850e4046ef1e92f7738fa264fc7b77->leave($__internal_8c74d3f107f4dd800b5bbc54850a7d7d08850e4046ef1e92f7738fa264fc7b77_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  133 => 32,  119 => 25,  114 => 23,  110 => 22,  100 => 15,  92 => 14,  80 => 12,  68 => 10,  56 => 8,  45 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobRecruteurBundle::layout.html.twig\"%}

{% block stylesheets %}
    {{parent()}}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\">
{% endblock %}

{% block title %} Création offre {% endblock %}

{% block content_title %} Recruteur {% endblock %}

{% block content_stitle %} Offres d'emloi {% endblock %}

{% block scontent %}   
    {{parent()}} 
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Créer une <span>offre d'emploi</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            <form novalidate class=\"form-horizontal\"  method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Valider</button>
                {{ form_end(form) }}                       
        </div>                       
    </form>    
</div>
</div>

{% endblock %}  
{% block javascripts %}
    {{parent()}}
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDz7p9ZkcuK0_vpO57wMtBLakylq6vn0RM&libraries=places\"></script>
    <script>
        var autocomplete;
        function initialize() {
            autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */(document.getElementById('ecojob_recruteurbundle_offre_localisation')),
                    {types: ['geocode']});
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('ecojob_recruteurbundle_offre_latitude').value = place.geometry.location.lat();
                document.getElementById('ecojob_recruteurbundle_offre_longitude').value = place.geometry.location.lng();                
            });
        }
       \$(function() {
        initialize();

        });
    </script>
{% endblock %}
", "EcoJobRecruteurBundle:Recruteur:create.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/create.html.twig");
    }
}
