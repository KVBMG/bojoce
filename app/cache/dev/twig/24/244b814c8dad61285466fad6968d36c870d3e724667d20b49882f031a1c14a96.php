<?php

/* EcoJobRecruteurBundle:Recruteur:create.html.twig */
class __TwigTemplate_5d1824d0aeebe9138800332e2b98813e8e3c43862084231c3257cf05faf82b09 extends Twig_Template
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
        $__internal_91d5cbb47ae64af8058a0d4b16ef02a510e5b986b87f480c15d645a46b1d60c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d5cbb47ae64af8058a0d4b16ef02a510e5b986b87f480c15d645a46b1d60c7->enter($__internal_91d5cbb47ae64af8058a0d4b16ef02a510e5b986b87f480c15d645a46b1d60c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d5cbb47ae64af8058a0d4b16ef02a510e5b986b87f480c15d645a46b1d60c7->leave($__internal_91d5cbb47ae64af8058a0d4b16ef02a510e5b986b87f480c15d645a46b1d60c7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_422c610235bd756dc49b30ade27426ed0d27afaa67b146feb73e8b1491aa7f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422c610235bd756dc49b30ade27426ed0d27afaa67b146feb73e8b1491aa7f11->enter($__internal_422c610235bd756dc49b30ade27426ed0d27afaa67b146feb73e8b1491aa7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\">
";
        
        $__internal_422c610235bd756dc49b30ade27426ed0d27afaa67b146feb73e8b1491aa7f11->leave($__internal_422c610235bd756dc49b30ade27426ed0d27afaa67b146feb73e8b1491aa7f11_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9a7876ed5db69de1f49b1195b959de7a2e857b5b4987f3bf27a92a080ab6c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a7876ed5db69de1f49b1195b959de7a2e857b5b4987f3bf27a92a080ab6c23->enter($__internal_e9a7876ed5db69de1f49b1195b959de7a2e857b5b4987f3bf27a92a080ab6c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Création offre ";
        
        $__internal_e9a7876ed5db69de1f49b1195b959de7a2e857b5b4987f3bf27a92a080ab6c23->leave($__internal_e9a7876ed5db69de1f49b1195b959de7a2e857b5b4987f3bf27a92a080ab6c23_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_452d97e5e4b05ed390c15c98b6131b363478a233153d320a60f00f8ef35962d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452d97e5e4b05ed390c15c98b6131b363478a233153d320a60f00f8ef35962d0->enter($__internal_452d97e5e4b05ed390c15c98b6131b363478a233153d320a60f00f8ef35962d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_452d97e5e4b05ed390c15c98b6131b363478a233153d320a60f00f8ef35962d0->leave($__internal_452d97e5e4b05ed390c15c98b6131b363478a233153d320a60f00f8ef35962d0_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_512583d8b310b70c6e9960b1de52225c951ce28dce0a9d0aae686022e67e980e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512583d8b310b70c6e9960b1de52225c951ce28dce0a9d0aae686022e67e980e->enter($__internal_512583d8b310b70c6e9960b1de52225c951ce28dce0a9d0aae686022e67e980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emloi ";
        
        $__internal_512583d8b310b70c6e9960b1de52225c951ce28dce0a9d0aae686022e67e980e->leave($__internal_512583d8b310b70c6e9960b1de52225c951ce28dce0a9d0aae686022e67e980e_prof);

    }

    // line 14
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_c88372b2c444c889d74d8391a8f55ab4d6f722a849d8642d88b33c3ed7e7827d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88372b2c444c889d74d8391a8f55ab4d6f722a849d8642d88b33c3ed7e7827d->enter($__internal_c88372b2c444c889d74d8391a8f55ab4d6f722a849d8642d88b33c3ed7e7827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_c88372b2c444c889d74d8391a8f55ab4d6f722a849d8642d88b33c3ed7e7827d->leave($__internal_c88372b2c444c889d74d8391a8f55ab4d6f722a849d8642d88b33c3ed7e7827d_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7d04ba40ba03a074d34fe3729d525067586d31b2c6415a8fa7289d5a30b33b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d04ba40ba03a074d34fe3729d525067586d31b2c6415a8fa7289d5a30b33b0->enter($__internal_f7d04ba40ba03a074d34fe3729d525067586d31b2c6415a8fa7289d5a30b33b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f7d04ba40ba03a074d34fe3729d525067586d31b2c6415a8fa7289d5a30b33b0->leave($__internal_f7d04ba40ba03a074d34fe3729d525067586d31b2c6415a8fa7289d5a30b33b0_prof);

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
