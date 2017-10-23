<?php

/* EcoJobAnonymousBundle:Default:integralite_offre.html.twig */
class __TwigTemplate_35ad06916c142a6dc6a615130ccf0d4320c524e4ae3c876949dd4d3fd32fd750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAnonymousBundle:Default:integralite_offre.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb420bd26c7ed4e083d36d27c4bd1aac38d86e71c02f6b3881fff485cd010778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb420bd26c7ed4e083d36d27c4bd1aac38d86e71c02f6b3881fff485cd010778->enter($__internal_eb420bd26c7ed4e083d36d27c4bd1aac38d86e71c02f6b3881fff485cd010778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:integralite_offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb420bd26c7ed4e083d36d27c4bd1aac38d86e71c02f6b3881fff485cd010778->leave($__internal_eb420bd26c7ed4e083d36d27c4bd1aac38d86e71c02f6b3881fff485cd010778_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc024ea6e69f53f6525e86217027a83cb395e7fad6eff9588d9fab57d53c69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc024ea6e69f53f6525e86217027a83cb395e7fad6eff9588d9fab57d53c69c->enter($__internal_ddc024ea6e69f53f6525e86217027a83cb395e7fad6eff9588d9fab57d53c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_ddc024ea6e69f53f6525e86217027a83cb395e7fad6eff9588d9fab57d53c69c->leave($__internal_ddc024ea6e69f53f6525e86217027a83cb395e7fad6eff9588d9fab57d53c69c_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_dd0d34679c443c7a7c3a2df40bc6b095c406f05772768fd624928c7b6b7088d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0d34679c443c7a7c3a2df40bc6b095c406f05772768fd624928c7b6b7088d4->enter($__internal_dd0d34679c443c7a7c3a2df40bc6b095c406f05772768fd624928c7b6b7088d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Détails de l'offre ";
        
        $__internal_dd0d34679c443c7a7c3a2df40bc6b095c406f05772768fd624928c7b6b7088d4->leave($__internal_dd0d34679c443c7a7c3a2df40bc6b095c406f05772768fd624928c7b6b7088d4_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_a95c07cad515eb313e01a62eab32776b9bf9ed7fc8202757ab03116a776ce1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95c07cad515eb313e01a62eab32776b9bf9ed7fc8202757ab03116a776ce1bf->enter($__internal_a95c07cad515eb313e01a62eab32776b9bf9ed7fc8202757ab03116a776ce1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_a95c07cad515eb313e01a62eab32776b9bf9ed7fc8202757ab03116a776ce1bf->leave($__internal_a95c07cad515eb313e01a62eab32776b9bf9ed7fc8202757ab03116a776ce1bf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4713a235c42f117b9b43f1bff33263682b2e640cdbf9f69d26588938cbc170da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4713a235c42f117b9b43f1bff33263682b2e640cdbf9f69d26588938cbc170da->enter($__internal_4713a235c42f117b9b43f1bff33263682b2e640cdbf9f69d26588938cbc170da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
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
            ";
        }
        // line 40
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
        // line 49
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_postuler", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" id=\"candidatureForm\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Posulter pour l'offre : ";
        // line 61
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
        
        $__internal_4713a235c42f117b9b43f1bff33263682b2e640cdbf9f69d26588938cbc170da->leave($__internal_4713a235c42f117b9b43f1bff33263682b2e640cdbf9f69d26588938cbc170da_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94abf1cca96122786415f5cb6ab7c26ac92904e806da78c21ca608e61c9b9e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94abf1cca96122786415f5cb6ab7c26ac92904e806da78c21ca608e61c9b9e5a->enter($__internal_94abf1cca96122786415f5cb6ab7c26ac92904e806da78c21ca608e61c9b9e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "
    ";
        // line 85
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 86
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
        
        $__internal_94abf1cca96122786415f5cb6ab7c26ac92904e806da78c21ca608e61c9b9e5a->leave($__internal_94abf1cca96122786415f5cb6ab7c26ac92904e806da78c21ca608e61c9b9e5a_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:integralite_offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  214 => 85,  211 => 84,  205 => 83,  176 => 61,  171 => 59,  158 => 49,  147 => 40,  141 => 36,  137 => 34,  133 => 32,  130 => 31,  124 => 29,  120 => 27,  117 => 26,  109 => 21,  104 => 20,  102 => 19,  95 => 15,  91 => 14,  86 => 12,  80 => 10,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %} Offres d'emploi {% endblock %}

{% block content_title %} Détails de l'offre {% endblock %}

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block content %}
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
", "EcoJobAnonymousBundle:Default:integralite_offre.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/integralite_offre.html.twig");
    }
}
