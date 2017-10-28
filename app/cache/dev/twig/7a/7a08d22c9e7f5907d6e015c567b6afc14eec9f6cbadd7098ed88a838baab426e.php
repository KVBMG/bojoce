<?php

/* EcoJobCandidatBundle:Candidat:myoffres.html.twig */
class __TwigTemplate_08e55bbf4051727e3f66fb6bb945cb02b34c05dd96b597ae85b71f2f35c2c735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:myoffres.html.twig", 1);
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
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5106f427b66ec7ad851a36d5b0f9c7a586afebec4054cb3faf9fbffc19a3ebf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5106f427b66ec7ad851a36d5b0f9c7a586afebec4054cb3faf9fbffc19a3ebf1->enter($__internal_5106f427b66ec7ad851a36d5b0f9c7a586afebec4054cb3faf9fbffc19a3ebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:myoffres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5106f427b66ec7ad851a36d5b0f9c7a586afebec4054cb3faf9fbffc19a3ebf1->leave($__internal_5106f427b66ec7ad851a36d5b0f9c7a586afebec4054cb3faf9fbffc19a3ebf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6f453a21c9e73e51817b3e7936466aa61401519588cc86851566842bf317499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f453a21c9e73e51817b3e7936466aa61401519588cc86851566842bf317499->enter($__internal_f6f453a21c9e73e51817b3e7936466aa61401519588cc86851566842bf317499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_f6f453a21c9e73e51817b3e7936466aa61401519588cc86851566842bf317499->leave($__internal_f6f453a21c9e73e51817b3e7936466aa61401519588cc86851566842bf317499_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fc502ec0a3fcc46677210ef786dfe54e2ea96417d59d30704963999bf7be7e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc502ec0a3fcc46677210ef786dfe54e2ea96417d59d30704963999bf7be7e18->enter($__internal_fc502ec0a3fcc46677210ef786dfe54e2ea96417d59d30704963999bf7be7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_fc502ec0a3fcc46677210ef786dfe54e2ea96417d59d30704963999bf7be7e18->leave($__internal_fc502ec0a3fcc46677210ef786dfe54e2ea96417d59d30704963999bf7be7e18_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_706dd26bab2d19603601821a691dd50e362003995e5b9156fbe5f62cc5b157f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706dd26bab2d19603601821a691dd50e362003995e5b9156fbe5f62cc5b157f5->enter($__internal_706dd26bab2d19603601821a691dd50e362003995e5b9156fbe5f62cc5b157f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Les offres d'emploi sauvegardées ";
        
        $__internal_706dd26bab2d19603601821a691dd50e362003995e5b9156fbe5f62cc5b157f5->leave($__internal_706dd26bab2d19603601821a691dd50e362003995e5b9156fbe5f62cc5b157f5_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_583c306a570cd331c7a3d974b161d1bcc904e17b4fb4f87c58a92f11b20224ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583c306a570cd331c7a3d974b161d1bcc904e17b4fb4f87c58a92f11b20224ca->enter($__internal_583c306a570cd331c7a3d974b161d1bcc904e17b4fb4f87c58a92f11b20224ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des offres d'emploi sauvegardées</div>
        ";
        // line 12
        if ( !twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 13
            echo "            Total ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["offres"] ?? $this->getContext($context, "offres"))), "html", null, true);
            echo "
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 15
                echo "                 
                    <div class=\"news1\">
                        <div class=\"txt2\"><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                echo "</a></div>
                        <div class=\"txt3\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
                echo "</div>
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Afficher</a>
                        <a href=\"#\" class=\"postulerBtn txt3\" offreId=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                echo "\" type=\"button\" data-toggle=\"modal\" data-target=\"#m-m-u\" >Postuler</a>                        
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Supprimer</a>    
                          ";
                // line 22
                if ($this->getAttribute($context["offre"], "expired", array())) {
                    // line 23
                    echo "                            <div class=\"label label-warning\"> Offre est expirée</div>     
                           ";
                }
                // line 25
                echo "                    </div>
                  
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "            aucune offre sauvegardée 
        ";
        }
        // line 32
        echo "
    </div>
</div>

<div id=\"m-m-u\" class=\"modal fade\" data-backdrop=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <form id=\"candidatureForm\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Posulter pour l'offre </h4>
            </div>
            <div class=\"modal-body text-center p-lg\">
                <div class=\"form-group row\">
                    <label for=\"libelle\" class=\"col-sm-2 form-control-label\">Qu'est-ce qui vous motive?</label>
                    <div class=\"col-lg-10\">
                        <textarea class=\"form-control\" name=\"motivation\" id=\"\" cols=\"30\" rows=\"15\" required></textarea>
                    </div>
                </div>
                <div class=\"alert\" id=\"responseStore\">

                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn success p-x-md\" >Envoyer ma candidature</button>
                <button type=\"button\" class=\"btn dark-white p-x-md\" data-dismiss=\"modal\">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_583c306a570cd331c7a3d974b161d1bcc904e17b4fb4f87c58a92f11b20224ca->leave($__internal_583c306a570cd331c7a3d974b161d1bcc904e17b4fb4f87c58a92f11b20224ca_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_347ac1e716e2a5a431e4feea18b56e532bdeef8ad649cfb789d4b0af29dfc6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347ac1e716e2a5a431e4feea18b56e532bdeef8ad649cfb789d4b0af29dfc6bb->enter($__internal_347ac1e716e2a5a431e4feea18b56e532bdeef8ad649cfb789d4b0af29dfc6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
    ";
        // line 65
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
            var offreId = 0;
            \$('.postulerBtn').click(function(){
                offreId = \$(this).attr('offreId');
                \$(this).addClass('clickedPostul');
            });
            \$('#candidatureForm').submit(function(event){
               event.preventDefault();
                var form_data = \$(this).serialize();
                console.log(form_data);
                \$.ajax({
                    type : \"POST\",
                    url : Routing.generate('eco_job_candidat_offre_postuler', { id: offreId }),
                    data : form_data,
                    beforeSend : function () {
                        \$.blockUI({
                            message: '<p class=\"loader\"></p>',
                            css: {border: 'none', backgroundColor: 'transparent', width: '66px', top: (\$(window).height() - 100) / 2 + 'px', left: (\$(window).width() - 100) / 2 + 'px', }
                        });
                    },
                    error: function(err){
                        \$('#responseStore').addClass('alert-danger').html(\"L'envoie de votre candidature a échoué\").show();
                    },
                    success : function(data){
                        \$('#responseStore').addClass('alert-success').html(data.message).show();
                        \$('.clickedPostul').replaceWith(\"<a href=\\\"#\\\" class=\\\"btn-default btn-warning\\\">Déja postulé</a>\");
                        \$(\".clickedPostul\").removeClass(\"clickedPostul\");
                        \$('#m-m-u').modal('hide');
                    },
                    complete: function () {
                        \$.unblockUI();
                    }
                })
            });
        })
    </script>
";
        
        $__internal_347ac1e716e2a5a431e4feea18b56e532bdeef8ad649cfb789d4b0af29dfc6bb->leave($__internal_347ac1e716e2a5a431e4feea18b56e532bdeef8ad649cfb789d4b0af29dfc6bb_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:myoffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 66,  189 => 65,  186 => 64,  180 => 63,  143 => 32,  139 => 30,  136 => 29,  127 => 25,  123 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  99 => 17,  95 => 15,  91 => 14,  86 => 13,  84 => 12,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block title %} Mes offres{% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Les offres d'emploi sauvegardées {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des offres d'emploi sauvegardées</div>
        {% if offres is not empty %}
            Total {{ offres|length }}
            {% for offre in offres %}
                 
                    <div class=\"news1\">
                        <div class=\"txt2\"><a href=\"{{ path('eco_job_candidat_offre',{'id': offre.id})}}\">{{offre.titre}}</a></div>
                        <div class=\"txt3\">{{offre.contenu}}</div>
                        <a href=\"{{ path('eco_job_candidat_offre',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
                        <a href=\"#\" class=\"postulerBtn txt3\" offreId=\"{{offre.id}}\" type=\"button\" data-toggle=\"modal\" data-target=\"#m-m-u\" >Postuler</a>                        
                        <a href=\"{{ path('eco_job_candidat_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                          {% if offre.expired %}
                            <div class=\"label label-warning\"> Offre est expirée</div>     
                           {% endif%}
                    </div>
                  
                
            {% endfor %}
        {% else %}
            aucune offre sauvegardée 
        {%endif %}

    </div>
</div>

<div id=\"m-m-u\" class=\"modal fade\" data-backdrop=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <form id=\"candidatureForm\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Posulter pour l'offre </h4>
            </div>
            <div class=\"modal-body text-center p-lg\">
                <div class=\"form-group row\">
                    <label for=\"libelle\" class=\"col-sm-2 form-control-label\">Qu'est-ce qui vous motive?</label>
                    <div class=\"col-lg-10\">
                        <textarea class=\"form-control\" name=\"motivation\" id=\"\" cols=\"30\" rows=\"15\" required></textarea>
                    </div>
                </div>
                <div class=\"alert\" id=\"responseStore\">

                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn success p-x-md\" >Envoyer ma candidature</button>
                <button type=\"button\" class=\"btn dark-white p-x-md\" data-dismiss=\"modal\">Annuler</button>
            </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}  
{% block javascripts %}

    {{ parent() }}
    <script src=\"{{asset('js/jquery.blockUI.js')}}\"></script>
    <script>
        \$(function(){
            var offreId = 0;
            \$('.postulerBtn').click(function(){
                offreId = \$(this).attr('offreId');
                \$(this).addClass('clickedPostul');
            });
            \$('#candidatureForm').submit(function(event){
               event.preventDefault();
                var form_data = \$(this).serialize();
                console.log(form_data);
                \$.ajax({
                    type : \"POST\",
                    url : Routing.generate('eco_job_candidat_offre_postuler', { id: offreId }),
                    data : form_data,
                    beforeSend : function () {
                        \$.blockUI({
                            message: '<p class=\"loader\"></p>',
                            css: {border: 'none', backgroundColor: 'transparent', width: '66px', top: (\$(window).height() - 100) / 2 + 'px', left: (\$(window).width() - 100) / 2 + 'px', }
                        });
                    },
                    error: function(err){
                        \$('#responseStore').addClass('alert-danger').html(\"L'envoie de votre candidature a échoué\").show();
                    },
                    success : function(data){
                        \$('#responseStore').addClass('alert-success').html(data.message).show();
                        \$('.clickedPostul').replaceWith(\"<a href=\\\"#\\\" class=\\\"btn-default btn-warning\\\">Déja postulé</a>\");
                        \$(\".clickedPostul\").removeClass(\"clickedPostul\");
                        \$('#m-m-u').modal('hide');
                    },
                    complete: function () {
                        \$.unblockUI();
                    }
                })
            });
        })
    </script>
{% endblock %}


", "EcoJobCandidatBundle:Candidat:myoffres.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/myoffres.html.twig");
    }
}
