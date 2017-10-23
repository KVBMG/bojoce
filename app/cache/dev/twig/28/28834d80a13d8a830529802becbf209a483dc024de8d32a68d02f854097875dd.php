<?php

/* EcoJobCandidatBundle:Candidat:offre.html.twig */
class __TwigTemplate_e95fc22b0b6a6baf9cd916255b3c740249ad746625a6c1214ed880d26dfc411f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:offre.html.twig", 1);
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
        $__internal_d6228f63720fae1906538c3fb8116ab8e06b4e3197fae6a3408567d74437f073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6228f63720fae1906538c3fb8116ab8e06b4e3197fae6a3408567d74437f073->enter($__internal_d6228f63720fae1906538c3fb8116ab8e06b4e3197fae6a3408567d74437f073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6228f63720fae1906538c3fb8116ab8e06b4e3197fae6a3408567d74437f073->leave($__internal_d6228f63720fae1906538c3fb8116ab8e06b4e3197fae6a3408567d74437f073_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c202054e080406d4b621168636714c5f2e87a570b20858f1ad161f45af2e6dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c202054e080406d4b621168636714c5f2e87a570b20858f1ad161f45af2e6dce->enter($__internal_c202054e080406d4b621168636714c5f2e87a570b20858f1ad161f45af2e6dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_c202054e080406d4b621168636714c5f2e87a570b20858f1ad161f45af2e6dce->leave($__internal_c202054e080406d4b621168636714c5f2e87a570b20858f1ad161f45af2e6dce_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5d6f42c204e2be5b42d87acd6406d8ca5cc5fb73ab9e91844d545f9cd354579a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6f42c204e2be5b42d87acd6406d8ca5cc5fb73ab9e91844d545f9cd354579a->enter($__internal_5d6f42c204e2be5b42d87acd6406d8ca5cc5fb73ab9e91844d545f9cd354579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_5d6f42c204e2be5b42d87acd6406d8ca5cc5fb73ab9e91844d545f9cd354579a->leave($__internal_5d6f42c204e2be5b42d87acd6406d8ca5cc5fb73ab9e91844d545f9cd354579a_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_f78bbe21a2b68bb87c6412bdbca3d104302e4d8e6776782501dae6cec7893376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78bbe21a2b68bb87c6412bdbca3d104302e4d8e6776782501dae6cec7893376->enter($__internal_f78bbe21a2b68bb87c6412bdbca3d104302e4d8e6776782501dae6cec7893376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_f78bbe21a2b68bb87c6412bdbca3d104302e4d8e6776782501dae6cec7893376->leave($__internal_f78bbe21a2b68bb87c6412bdbca3d104302e4d8e6776782501dae6cec7893376_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_866c75dff4f1317a4795ac342eff7f435b4275254ca4bd1ce9d22ba2e6d1845b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866c75dff4f1317a4795ac342eff7f435b4275254ca4bd1ce9d22ba2e6d1845b->enter($__internal_866c75dff4f1317a4795ac342eff7f435b4275254ca4bd1ce9d22ba2e6d1845b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo " 
    ";
        // line 10
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
            <div class=\"txt3\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>

        </div>
        <div class=\"button-group\">
            ";
        // line 19
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn-default btn1\">Save</a>
                <a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn-default btn1\">Postuler</a>
                <a class=\"btn-default btn1\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    Share
                </a>
            ";
        } else {
            // line 26
            echo "            ";
            if (($context["saved"] ?? $this->getContext($context, "saved"))) {
                // line 27
                echo "                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            ";
            } else {
                // line 29
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn1\">Save</a>
            ";
            }
            // line 31
            echo "            ";
            if (($context["postuled"] ?? $this->getContext($context, "postuled"))) {
                // line 32
                echo "                <a href=\"#\" class=\"btn-default btn-warning\">Déja postulé</a>
             ";
            } else {
                // line 34
                echo "                 <button class=\"btn-default btn1\" id=\"postulerBtn\" type=\"button\" data-toggle=\"modal\" data-target=\"#m-m-u\" >Postuler</button>
            ";
            }
            // line 36
            echo "            <a class=\"btn-default btn1\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                Share
            </a>
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_delete", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn1\">Supprimer</a>    
            
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"collapse\" id=\"collapseExample\">
            <div class=\"card card-block\">
                <ul class=\"social clearfix\">
                    <li><a href=\"\" id=\"fb-share\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a class=\"twitter popup\" href=\"http://twitter.com/share\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li>
                        <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
                        <script type=\"IN/Share\" data-url=\"ecojob.fr/valfid/developpement/web/search/offre/";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "\" data-counter=\"right\"></script>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<div id=\"m-m-u\" class=\"modal fade\" data-backdrop=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <form action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_postuler", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" id=\"candidatureForm\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Posulter pour l'offre : ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</h4>
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
        
        $__internal_866c75dff4f1317a4795ac342eff7f435b4275254ca4bd1ce9d22ba2e6d1845b->leave($__internal_866c75dff4f1317a4795ac342eff7f435b4275254ca4bd1ce9d22ba2e6d1845b_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de7019b9fd0ef21b8bec57fa9a3a151a2240ab31ecf1773faa83140724247647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7019b9fd0ef21b8bec57fa9a3a151a2240ab31ecf1773faa83140724247647->enter($__internal_de7019b9fd0ef21b8bec57fa9a3a151a2240ab31ecf1773faa83140724247647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "
    ";
        // line 87
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function(){
                var _url = window.location.href;
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '1750551898578027',
                    xfbml      : true,
                    version    : 'v2.10'
                });
                FB.AppEvents.logPageView();
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/en_US/sdk.js\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            \$('#fb-share').click(function(e){
                e.preventDefault();
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: _url, // to change with the true hrefLink when production
                }, function(response){});
                return false;
            });

            \$('.popup').click(function(event) {
                var width  = 575,
                    height = 400,
                    left   = (\$(window).width()  - width)  / 2,
                    top    = (\$(window).height() - height) / 2,
                    url    = this.href,
                    opts   = 'status=1' +
                        ',width='  + width  +
                        ',height=' + height +
                        ',top='    + top    +
                        ',left='   + left;

                window.open(url, 'twitter', opts);

                return false;
            });

            \$('#candidatureForm').submit(function(event){
               event.preventDefault();
                var form_data = \$(this).serialize();
                console.log(form_data);
                \$.ajax({
                    type : \"POST\",
                    url : \$(this).attr('action'),
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
                        \$('#postulerBtn').replaceWith(\"<a href=\\\"#\\\" class=\\\"btn-default btn-warning\\\">Déja postulé</a>\");
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
        
        $__internal_de7019b9fd0ef21b8bec57fa9a3a151a2240ab31ecf1773faa83140724247647->leave($__internal_de7019b9fd0ef21b8bec57fa9a3a151a2240ab31ecf1773faa83140724247647_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 88,  220 => 87,  217 => 86,  211 => 85,  182 => 63,  177 => 61,  164 => 51,  153 => 42,  147 => 39,  142 => 36,  138 => 34,  134 => 32,  131 => 31,  125 => 29,  121 => 27,  118 => 26,  110 => 21,  105 => 20,  103 => 19,  96 => 15,  92 => 14,  87 => 12,  82 => 10,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %} 
    {{parent()}}
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero {{offre.id}}</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>

        </div>
        <div class=\"button-group\">
            {% if not app.user %}
                <a href=\"{{ path('fos_user_registration_register')}}\" class=\"btn-default btn1\">Save</a>
                <a href=\"{{ path('fos_user_registration_register')}}\" class=\"btn-default btn1\">Postuler</a>
                <a class=\"btn-default btn1\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    Share
                </a>
            {% else %}
            {% if saved %}
                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            {% else %}
                <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>
            {% endif %}
            {% if postuled %}
                <a href=\"#\" class=\"btn-default btn-warning\">Déja postulé</a>
             {% else %}
                 <button class=\"btn-default btn1\" id=\"postulerBtn\" type=\"button\" data-toggle=\"modal\" data-target=\"#m-m-u\" >Postuler</button>
            {% endif %}
            <a class=\"btn-default btn1\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                Share
            </a>
            <a href=\"{{ path('eco_job_candidat_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn1\">Supprimer</a>    
            
            {% endif %}
        </div>
        <div class=\"collapse\" id=\"collapseExample\">
            <div class=\"card card-block\">
                <ul class=\"social clearfix\">
                    <li><a href=\"\" id=\"fb-share\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a class=\"twitter popup\" href=\"http://twitter.com/share\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li>
                        <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
                        <script type=\"IN/Share\" data-url=\"ecojob.fr/valfid/developpement/web/search/offre/{{ offre.id }}\" data-counter=\"right\"></script>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<div id=\"m-m-u\" class=\"modal fade\" data-backdrop=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <form action=\"{{ path('eco_job_candidat_offre_postuler',{ 'id' : offre.id }) }}\" id=\"candidatureForm\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Posulter pour l'offre : {{ offre.titre }}</h4>
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
                var _url = window.location.href;
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '1750551898578027',
                    xfbml      : true,
                    version    : 'v2.10'
                });
                FB.AppEvents.logPageView();
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/en_US/sdk.js\";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            \$('#fb-share').click(function(e){
                e.preventDefault();
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    href: _url, // to change with the true hrefLink when production
                }, function(response){});
                return false;
            });

            \$('.popup').click(function(event) {
                var width  = 575,
                    height = 400,
                    left   = (\$(window).width()  - width)  / 2,
                    top    = (\$(window).height() - height) / 2,
                    url    = this.href,
                    opts   = 'status=1' +
                        ',width='  + width  +
                        ',height=' + height +
                        ',top='    + top    +
                        ',left='   + left;

                window.open(url, 'twitter', opts);

                return false;
            });

            \$('#candidatureForm').submit(function(event){
               event.preventDefault();
                var form_data = \$(this).serialize();
                console.log(form_data);
                \$.ajax({
                    type : \"POST\",
                    url : \$(this).attr('action'),
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
                        \$('#postulerBtn').replaceWith(\"<a href=\\\"#\\\" class=\\\"btn-default btn-warning\\\">Déja postulé</a>\");
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
", "EcoJobCandidatBundle:Candidat:offre.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/offre.html.twig");
    }
}
