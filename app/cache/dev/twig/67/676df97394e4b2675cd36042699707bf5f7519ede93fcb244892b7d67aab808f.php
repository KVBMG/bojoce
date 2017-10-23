<?php

/* EcoJobAnonymousBundle:Default:map.html.twig */
class __TwigTemplate_f349ce2c6ecce373304cc2cebcb34fbe1d2db6e5c1c4b6219f0d7580cf565ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAnonymousBundle:Default:map.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_2364ed7e7e3a282b04d9cf081fef28b8aeb27c446b21e7169482ea265de19eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2364ed7e7e3a282b04d9cf081fef28b8aeb27c446b21e7169482ea265de19eed->enter($__internal_2364ed7e7e3a282b04d9cf081fef28b8aeb27c446b21e7169482ea265de19eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2364ed7e7e3a282b04d9cf081fef28b8aeb27c446b21e7169482ea265de19eed->leave($__internal_2364ed7e7e3a282b04d9cf081fef28b8aeb27c446b21e7169482ea265de19eed_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fef3772687a441759a3bf26f6eca8a721e11acaaa080e28934bbc09ac380b391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef3772687a441759a3bf26f6eca8a721e11acaaa080e28934bbc09ac380b391->enter($__internal_fef3772687a441759a3bf26f6eca8a721e11acaaa080e28934bbc09ac380b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " 
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/map.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">     
";
        
        $__internal_fef3772687a441759a3bf26f6eca8a721e11acaaa080e28934bbc09ac380b391->leave($__internal_fef3772687a441759a3bf26f6eca8a721e11acaaa080e28934bbc09ac380b391_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b6aa1a78f03eaae74bf338bad4a37433cb0fe779c739eba76a1a3a9daee0a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6aa1a78f03eaae74bf338bad4a37433cb0fe779c739eba76a1a3a9daee0a6c->enter($__internal_1b6aa1a78f03eaae74bf338bad4a37433cb0fe779c739eba76a1a3a9daee0a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_1b6aa1a78f03eaae74bf338bad4a37433cb0fe779c739eba76a1a3a9daee0a6c->leave($__internal_1b6aa1a78f03eaae74bf338bad4a37433cb0fe779c739eba76a1a3a9daee0a6c_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f2b1e13b7240ad810d048fa643de31b54a14c8d46ad782a63490b994fb4ada42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b1e13b7240ad810d048fa643de31b54a14c8d46ad782a63490b994fb4ada42->enter($__internal_f2b1e13b7240ad810d048fa643de31b54a14c8d46ad782a63490b994fb4ada42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recherche ";
        
        $__internal_f2b1e13b7240ad810d048fa643de31b54a14c8d46ad782a63490b994fb4ada42->leave($__internal_f2b1e13b7240ad810d048fa643de31b54a14c8d46ad782a63490b994fb4ada42_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_14c3bd84b18f1b65a03543abe47147ed43ee76b05cbeedade1991c794d7ad579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c3bd84b18f1b65a03543abe47147ed43ee76b05cbeedade1991c794d7ad579->enter($__internal_14c3bd84b18f1b65a03543abe47147ed43ee76b05cbeedade1991c794d7ad579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_14c3bd84b18f1b65a03543abe47147ed43ee76b05cbeedade1991c794d7ad579->leave($__internal_14c3bd84b18f1b65a03543abe47147ed43ee76b05cbeedade1991c794d7ad579_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_71d76cb22977bdbf6e8beb215d4c9879212fd7a6d542299bd5983481976e730c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d76cb22977bdbf6e8beb215d4c9879212fd7a6d542299bd5983481976e730c->enter($__internal_71d76cb22977bdbf6e8beb215d4c9879212fd7a6d542299bd5983481976e730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    <div id=\"content\" class=\"container\">
        <div >
            <div class=\"title6 text-uppercase\">Map</div>    
            <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous__offre_searchpage");
        echo "\">Sans carte de France</a>
            <div class=\"row\">
                <div class=\"col-sm-5\">    
                    <form id=\"searchForm\" class=\"form-horizontal\">           

                        <input size=\"65\" type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">

                        <br/>
                        <label for=\"exp\">Expérience:</label>
                        <select name=\"experience\" id=\"exp\">
                            <option value=\"0\">Tous</option>
                            <option value=\"1\">1 an</option>
                            <option value=\"2\">2 ans</option>
                            <option value=\"3\">3 ans</option>
                            <option value=\"4\">4 ans</option>
                            <option value=\"5\">5 ans</option>
                            <option value=\"6\">6 ans</option>
                            <option value=\"7\">7 ans</option>
                            <option value=\"8\">8 ans</option>
                            <option value=\"9\">9 ans</option>
                            <option value=\"10\">10 ans</option>
                            
                        </select>    
                        <label for=\"contrat\">Type de contrat:</label>
                        <select name=\"contrat\" id=\"contrat\">
                            <option value=\"0\">Tous</option>
                            <option value=\"1\">CDD</option>
                            <option value=\"2\">CDI</option>
                        </select>                                
\t\t\t<label for=\"limit\">Nombre d'offre à afficher :</label>
                        <select name=\"limit\" id=\"limit\">
                            <option value=\"10\">10</option>
                            <option value=\"15\">15</option>                            
                            <option value=\"20\">20</option>
                        </select>  
                        <input type=\"hidden\" id=\"offset\" name=\"offset\" value=\"0\" />                        
                        <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
                    </form>  
                    <br/>
                    <div id=\"google_map\"></div>

                </div>             
                <div class=\"col-sm-4 latest_news srollko\" id=\"offreList\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 63
            echo "                        <div class=\"news1 offre\" offreId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
            echo "\">
                            <div class=\"txt2\"><a href=\"#details\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a></div>
                            <div class=\"txt3\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "localisation", array()), "html", null, true);
            echo "</div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                 
                </div>  
                <div class=\"col-sm-3\" id=\"details\">

                </div>                 
            </div>
        </div>
    </div> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" >Alerte</h4>
          </div>
          <div class=\"modal-body\">
              Vous devez vous avoir un compte sur eco-job avant de pouvoir sauvegarder ou postuler à une offre d'emploi.
              Veuillez vous inscrire en cliquant <a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn-default\">ici</a>
            ou vous connecter <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn-default\">ici</a>
          </div>
        </div>
      </div>
    </div>                      
";
        
        $__internal_71d76cb22977bdbf6e8beb215d4c9879212fd7a6d542299bd5983481976e730c->leave($__internal_71d76cb22977bdbf6e8beb215d4c9879212fd7a6d542299bd5983481976e730c_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7a11d87729941fda11f7927b75894bf1195b0390be1feb15f294ae0739bcca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a11d87729941fda11f7927b75894bf1195b0390be1feb15f294ae0739bcca3->enter($__internal_e7a11d87729941fda11f7927b75894bf1195b0390be1feb15f294ae0739bcca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <!--[if lte IE 9 ]>
        <script type=\"text/javascript\">
            window.location.href= '";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous__offre_searchpage");
        echo "';
        </script>
    <![endif]-->

    ";
        // line 105
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
    <script>
        var assetsBaseDir = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
        echo "\"
    </script>  
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.debounce.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDz7p9ZkcuK0_vpO57wMtBLakylq6vn0RM&libraries=places\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/markerclusterer.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>     
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map_free.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e7a11d87729941fda11f7927b75894bf1195b0390be1feb15f294ae0739bcca3->leave($__internal_e7a11d87729941fda11f7927b75894bf1195b0390be1feb15f294ae0739bcca3_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 114,  251 => 113,  246 => 111,  241 => 109,  236 => 107,  231 => 105,  224 => 101,  220 => 99,  214 => 98,  201 => 85,  197 => 84,  178 => 67,  169 => 65,  165 => 64,  160 => 63,  156 => 62,  110 => 19,  103 => 15,  95 => 14,  83 => 12,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{parent()}} 
    <link href=\"{{asset('css/map.css')}}\" rel=\"stylesheet\" type=\"text/css\">     
{% endblock %}

{% block title %} Offres d'emploi {% endblock %}

{% block content_title %} Recherche {% endblock %}

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block content %} 
    {{parent()}} 
    <div id=\"content\" class=\"container\">
        <div >
            <div class=\"title6 text-uppercase\">Map</div>    
            <a href=\"{{path('eco_job_anonymous__offre_searchpage')}}\">Sans carte de France</a>
            <div class=\"row\">
                <div class=\"col-sm-5\">    
                    <form id=\"searchForm\" class=\"form-horizontal\">           

                        <input size=\"65\" type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">

                        <br/>
                        <label for=\"exp\">Expérience:</label>
                        <select name=\"experience\" id=\"exp\">
                            <option value=\"0\">Tous</option>
                            <option value=\"1\">1 an</option>
                            <option value=\"2\">2 ans</option>
                            <option value=\"3\">3 ans</option>
                            <option value=\"4\">4 ans</option>
                            <option value=\"5\">5 ans</option>
                            <option value=\"6\">6 ans</option>
                            <option value=\"7\">7 ans</option>
                            <option value=\"8\">8 ans</option>
                            <option value=\"9\">9 ans</option>
                            <option value=\"10\">10 ans</option>
                            
                        </select>    
                        <label for=\"contrat\">Type de contrat:</label>
                        <select name=\"contrat\" id=\"contrat\">
                            <option value=\"0\">Tous</option>
                            <option value=\"1\">CDD</option>
                            <option value=\"2\">CDI</option>
                        </select>                                
\t\t\t<label for=\"limit\">Nombre d'offre à afficher :</label>
                        <select name=\"limit\" id=\"limit\">
                            <option value=\"10\">10</option>
                            <option value=\"15\">15</option>                            
                            <option value=\"20\">20</option>
                        </select>  
                        <input type=\"hidden\" id=\"offset\" name=\"offset\" value=\"0\" />                        
                        <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
                    </form>  
                    <br/>
                    <div id=\"google_map\"></div>

                </div>             
                <div class=\"col-sm-4 latest_news srollko\" id=\"offreList\">
                    {% for offre in offres %}
                        <div class=\"news1 offre\" offreId=\"{{offre.id}}\">
                            <div class=\"txt2\"><a href=\"#details\">{{offre.titre}}</a></div>
                            <div class=\"txt3\">{{offre.localisation}}</div>
                        </div>
                    {% endfor %}                 
                </div>  
                <div class=\"col-sm-3\" id=\"details\">

                </div>                 
            </div>
        </div>
    </div> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h4 class=\"modal-title\" >Alerte</h4>
          </div>
          <div class=\"modal-body\">
              Vous devez vous avoir un compte sur eco-job avant de pouvoir sauvegarder ou postuler à une offre d'emploi.
              Veuillez vous inscrire en cliquant <a href=\"{{ path('fos_user_registration_register')}}\" class=\"btn-default\">ici</a>
            ou vous connecter <a href=\"{{ path('fos_user_security_login')}}\" class=\"btn-default\">ici</a>
          </div>
        </div>
      </div>
    </div>                      
{% endblock %}                







{% block javascripts %}
    <!--[if lte IE 9 ]>
        <script type=\"text/javascript\">
            window.location.href= '{{path('eco_job_anonymous__offre_searchpage')}}';
        </script>
    <![endif]-->

    {{parent()}} 
    <script>
        var assetsBaseDir = \"{{ asset('images/') }}\"
    </script>  
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.debounce.js')}}\"></script>    
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDz7p9ZkcuK0_vpO57wMtBLakylq6vn0RM&libraries=places\"></script>
    <script src=\"{{asset('js/markerclusterer.js')}}\">
    </script>
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.blockUI.js')}}\"></script>     
    <script type=\"text/javascript\" src=\"{{asset('js/map_free.js')}}\"></script>
{% endblock %}
", "EcoJobAnonymousBundle:Default:map.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/map.html.twig");
    }
}
