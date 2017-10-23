<?php

/* EcoJobRecruteurBundle:Recruteur:edit.html.twig */
class __TwigTemplate_f68ddcb10a67c16175b72b4e07088c81f80886201dfaa340d874feee7c9450e0 extends Twig_Template
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
        $__internal_93f557f75c17f9131e01802056723f528dbcf498103316d0bd36f20671258f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f557f75c17f9131e01802056723f528dbcf498103316d0bd36f20671258f2e->enter($__internal_93f557f75c17f9131e01802056723f528dbcf498103316d0bd36f20671258f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f557f75c17f9131e01802056723f528dbcf498103316d0bd36f20671258f2e->leave($__internal_93f557f75c17f9131e01802056723f528dbcf498103316d0bd36f20671258f2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edded65b03afc71b91dbbc4b2fa1eb37c2dc92d895dcaec8f2a2b5d44db08e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edded65b03afc71b91dbbc4b2fa1eb37c2dc92d895dcaec8f2a2b5d44db08e27->enter($__internal_edded65b03afc71b91dbbc4b2fa1eb37c2dc92d895dcaec8f2a2b5d44db08e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifer offre ";
        
        $__internal_edded65b03afc71b91dbbc4b2fa1eb37c2dc92d895dcaec8f2a2b5d44db08e27->leave($__internal_edded65b03afc71b91dbbc4b2fa1eb37c2dc92d895dcaec8f2a2b5d44db08e27_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_674862579453c3ef1682d2668e45e947feee90c08c6985d27f699927cfaf3d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674862579453c3ef1682d2668e45e947feee90c08c6985d27f699927cfaf3d34->enter($__internal_674862579453c3ef1682d2668e45e947feee90c08c6985d27f699927cfaf3d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_674862579453c3ef1682d2668e45e947feee90c08c6985d27f699927cfaf3d34->leave($__internal_674862579453c3ef1682d2668e45e947feee90c08c6985d27f699927cfaf3d34_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_b73808926386bb14f5d5f54516b2c36a12cf02a0f9ed725790d0cf947ab6076d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73808926386bb14f5d5f54516b2c36a12cf02a0f9ed725790d0cf947ab6076d->enter($__internal_b73808926386bb14f5d5f54516b2c36a12cf02a0f9ed725790d0cf947ab6076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emloi ";
        
        $__internal_b73808926386bb14f5d5f54516b2c36a12cf02a0f9ed725790d0cf947ab6076d->leave($__internal_b73808926386bb14f5d5f54516b2c36a12cf02a0f9ed725790d0cf947ab6076d_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_949cc65d7d1ba1a594f05c5018776a9ff62d0f184bd7eea4e36c76ac01773721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949cc65d7d1ba1a594f05c5018776a9ff62d0f184bd7eea4e36c76ac01773721->enter($__internal_949cc65d7d1ba1a594f05c5018776a9ff62d0f184bd7eea4e36c76ac01773721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_949cc65d7d1ba1a594f05c5018776a9ff62d0f184bd7eea4e36c76ac01773721->leave($__internal_949cc65d7d1ba1a594f05c5018776a9ff62d0f184bd7eea4e36c76ac01773721_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d6c421a96edc32193b786682bc2e2ad7e7af30e605bb9c1f8ce5a2faa4c8c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6c421a96edc32193b786682bc2e2ad7e7af30e605bb9c1f8ce5a2faa4c8c99->enter($__internal_0d6c421a96edc32193b786682bc2e2ad7e7af30e605bb9c1f8ce5a2faa4c8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0d6c421a96edc32193b786682bc2e2ad7e7af30e605bb9c1f8ce5a2faa4c8c99->leave($__internal_0d6c421a96edc32193b786682bc2e2ad7e7af30e605bb9c1f8ce5a2faa4c8c99_prof);

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
