<?php

/* EcoJobRecruteurBundle:Recruteur:edit.html.twig */
class __TwigTemplate_30afdfda05fce93e450b76b3bdd1cbf80d796a830d93363ebe8bf247b8a82d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b7fd805bc461bb1c633091d5448ea5fe7257ef0fba4036164d170abc3c127c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fd805bc461bb1c633091d5448ea5fe7257ef0fba4036164d170abc3c127c51->enter($__internal_b7fd805bc461bb1c633091d5448ea5fe7257ef0fba4036164d170abc3c127c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fd805bc461bb1c633091d5448ea5fe7257ef0fba4036164d170abc3c127c51->leave($__internal_b7fd805bc461bb1c633091d5448ea5fe7257ef0fba4036164d170abc3c127c51_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62e929fccf83db5a45f0c7edebcf75e5c60e46c44c6547d2eca3659b71a38450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e929fccf83db5a45f0c7edebcf75e5c60e46c44c6547d2eca3659b71a38450->enter($__internal_62e929fccf83db5a45f0c7edebcf75e5c60e46c44c6547d2eca3659b71a38450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifer offre ";
        
        $__internal_62e929fccf83db5a45f0c7edebcf75e5c60e46c44c6547d2eca3659b71a38450->leave($__internal_62e929fccf83db5a45f0c7edebcf75e5c60e46c44c6547d2eca3659b71a38450_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_58360b1f5b47462a1b64cc8230209260ed9a048eed5ec1b0676a02ad3625939d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58360b1f5b47462a1b64cc8230209260ed9a048eed5ec1b0676a02ad3625939d->enter($__internal_58360b1f5b47462a1b64cc8230209260ed9a048eed5ec1b0676a02ad3625939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_58360b1f5b47462a1b64cc8230209260ed9a048eed5ec1b0676a02ad3625939d->leave($__internal_58360b1f5b47462a1b64cc8230209260ed9a048eed5ec1b0676a02ad3625939d_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_ab490f8613a5fb50396f4c23e0dfcd804881195ecc8823f6b73b2f5e5b6ac0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab490f8613a5fb50396f4c23e0dfcd804881195ecc8823f6b73b2f5e5b6ac0cc->enter($__internal_ab490f8613a5fb50396f4c23e0dfcd804881195ecc8823f6b73b2f5e5b6ac0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emloi ";
        
        $__internal_ab490f8613a5fb50396f4c23e0dfcd804881195ecc8823f6b73b2f5e5b6ac0cc->leave($__internal_ab490f8613a5fb50396f4c23e0dfcd804881195ecc8823f6b73b2f5e5b6ac0cc_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_c81896ce33bfd2b27a262b51d566dc388ae737b885df544f028a8b5ebf42a9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81896ce33bfd2b27a262b51d566dc388ae737b885df544f028a8b5ebf42a9da->enter($__internal_c81896ce33bfd2b27a262b51d566dc388ae737b885df544f028a8b5ebf42a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
";
        // line 10
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "    
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Modifier une <span>offre d'emploi</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            <form novalidate class=\"form-horizontal\"  method=\"post\" ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Valider</button>
                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "   
        </div>               
    </form>    
</div>
";
        
        $__internal_c81896ce33bfd2b27a262b51d566dc388ae737b885df544f028a8b5ebf42a9da->leave($__internal_c81896ce33bfd2b27a262b51d566dc388ae737b885df544f028a8b5ebf42a9da_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60388561b44a1e07c221c89f222e23376753054b7c06554728076c0debefc269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60388561b44a1e07c221c89f222e23376753054b7c06554728076c0debefc269->enter($__internal_60388561b44a1e07c221c89f222e23376753054b7c06554728076c0debefc269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
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
        
        $__internal_60388561b44a1e07c221c89f222e23376753054b7c06554728076c0debefc269->leave($__internal_60388561b44a1e07c221c89f222e23376753054b7c06554728076c0debefc269_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  113 => 25,  101 => 20,  96 => 18,  92 => 17,  82 => 10,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block title %} Modifer offre {% endblock %}

{% block content_title %} Recruteur {% endblock %}

{% block content_stitle %} Offres d'emloi {% endblock %}

{% block scontent %}   
{{parent()}}    
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Modifier une <span>offre d'emploi</span></div>
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
{% endblock %}", "EcoJobRecruteurBundle:Recruteur:edit.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/edit.html.twig");
    }
}
