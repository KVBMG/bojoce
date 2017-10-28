<?php

/* EcoJobAnonymousBundle:Default:search.html.twig */
class __TwigTemplate_31a43f8df0cd16b8302bfbd8900c81cf48a79c2620e89f81888dc7e5e9a29595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAnonymousBundle:Default:search.html.twig", 1);
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
        $__internal_0daada1679bae6ccf6f7b7b8eaa15ee6c90900687fca18988e7cd80d7666c877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0daada1679bae6ccf6f7b7b8eaa15ee6c90900687fca18988e7cd80d7666c877->enter($__internal_0daada1679bae6ccf6f7b7b8eaa15ee6c90900687fca18988e7cd80d7666c877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0daada1679bae6ccf6f7b7b8eaa15ee6c90900687fca18988e7cd80d7666c877->leave($__internal_0daada1679bae6ccf6f7b7b8eaa15ee6c90900687fca18988e7cd80d7666c877_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bf5545ee3b2f3760a0f723b20a3dbcc6cc8461a2e0a3707c5817930db659a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf5545ee3b2f3760a0f723b20a3dbcc6cc8461a2e0a3707c5817930db659a89->enter($__internal_2bf5545ee3b2f3760a0f723b20a3dbcc6cc8461a2e0a3707c5817930db659a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_2bf5545ee3b2f3760a0f723b20a3dbcc6cc8461a2e0a3707c5817930db659a89->leave($__internal_2bf5545ee3b2f3760a0f723b20a3dbcc6cc8461a2e0a3707c5817930db659a89_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_025ccb9c7e849312198fd1cc5c01ab4572b44fc9e17c7f3fb6ad24d38a3a46c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025ccb9c7e849312198fd1cc5c01ab4572b44fc9e17c7f3fb6ad24d38a3a46c5->enter($__internal_025ccb9c7e849312198fd1cc5c01ab4572b44fc9e17c7f3fb6ad24d38a3a46c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recherche ";
        
        $__internal_025ccb9c7e849312198fd1cc5c01ab4572b44fc9e17c7f3fb6ad24d38a3a46c5->leave($__internal_025ccb9c7e849312198fd1cc5c01ab4572b44fc9e17c7f3fb6ad24d38a3a46c5_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_5bef187e0b6543a97e340a51d3d700ddac4aad2ffe4e4a731b606b7d0171c6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bef187e0b6543a97e340a51d3d700ddac4aad2ffe4e4a731b606b7d0171c6a0->enter($__internal_5bef187e0b6543a97e340a51d3d700ddac4aad2ffe4e4a731b606b7d0171c6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_5bef187e0b6543a97e340a51d3d700ddac4aad2ffe4e4a731b606b7d0171c6a0->leave($__internal_5bef187e0b6543a97e340a51d3d700ddac4aad2ffe4e4a731b606b7d0171c6a0_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_373ba25ff2c461c8e5afb11559824515a0300c5f23e149ee857855f2885f2afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373ba25ff2c461c8e5afb11559824515a0300c5f23e149ee857855f2885f2afa->enter($__internal_373ba25ff2c461c8e5afb11559824515a0300c5f23e149ee857855f2885f2afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "   
    <div id=\"content\" class=\"container\">
        <div >
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous_map");
        echo "\">Avec carte de France</a>

            <div class=\"title6 text-uppercase\">Map</div>           
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <form id=\"searchForm\">           
                        <input type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">
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
                        <label for=\"radiobtn\">Type de contrat:</label>
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat3\" value=0 checked>
                            <label for=\"contrat3\">Tous</label>
                        </div>                
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat2\" value=1 >
                            <label for=\"contrat2\">CDD</label>
                        </div>
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat1\" value=2>
                            <label for=\"contrat1\">CDI</label>
                        </div>
                        <label for=\"limit\">Nombre d'offre à afficher :</label>
                        <select name=\"limit\" id=\"limit\">
                            <option value=\"10\">10</option>
                            <option value=\"15\">15</option>                            
                            <option value=\"20\">20</option>
                        </select>                        
                        <input type=\"hidden\" id=\"offset\" name=\"offset\" value=\"0\" />                                                
                        <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
                    </form> 
                </div> 
                <div class=\"col-sm-6 latest_news srollko\" id=\"offreList\">
                    ";
        // line 57
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 58
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 59
                echo "                            <div class=\"news1 offre\" offreId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"txt2\"><a href=\"#details\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                echo "</a></div>
                                <div class=\"txt3\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "localisation", array()), "html", null, true);
                echo "</div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " 
                    ";
        } else {
            // line 65
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 66
                echo "                            <div class=\"news1 offre\" offreId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"txt2\"><a href=\"#details\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                echo "</a></div>
                                <div class=\"txt1\">";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "createdAt", array()), "Y-m-d"), "html", null, true);
                echo " </div>                                
                                <div class=\"txt3\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
                echo "</div>
                                ";
                // line 70
                if ($this->getAttribute($context["offre"], "added", array())) {
                    // line 71
                    echo "                                    <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                                ";
                } else {
                    // line 73
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn-default btn1\">Save</a>
                                ";
                }
                // line 75
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                               
                    ";
        }
        // line 78
        echo "                </div>   
                <div class=\"col-sm-3\" id=\"details\">

                </div>                 
            </div>
        </div>
    </div>    
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>

        <br>

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
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn-default\">ici</a>
                    ou vous connecter <a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn-default\">ici</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_373ba25ff2c461c8e5afb11559824515a0300c5f23e149ee857855f2885f2afa->leave($__internal_373ba25ff2c461c8e5afb11559824515a0300c5f23e149ee857855f2885f2afa_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cee0b48c43d907f5b890b41b539fe3ad114794c6b2f0f3dc0ecc37bbe13b5b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee0b48c43d907f5b890b41b539fe3ad114794c6b2f0f3dc0ecc37bbe13b5b8e->enter($__internal_cee0b48c43d907f5b890b41b539fe3ad114794c6b2f0f3dc0ecc37bbe13b5b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.debounce.js"), "html", null, true);
        echo "\"></script>        
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search_free.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_cee0b48c43d907f5b890b41b539fe3ad114794c6b2f0f3dc0ecc37bbe13b5b8e->leave($__internal_cee0b48c43d907f5b890b41b539fe3ad114794c6b2f0f3dc0ecc37bbe13b5b8e_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 113,  263 => 112,  259 => 111,  254 => 110,  248 => 109,  235 => 102,  231 => 101,  206 => 78,  202 => 76,  195 => 75,  189 => 73,  185 => 71,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  166 => 66,  161 => 65,  157 => 63,  148 => 61,  144 => 60,  139 => 59,  134 => 58,  132 => 57,  84 => 12,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block content_title %} Recherche {% endblock %}

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block content %}   
    <div id=\"content\" class=\"container\">
        <div >
            <a href=\"{{path('eco_job_anonymous_map')}}\">Avec carte de France</a>

            <div class=\"title6 text-uppercase\">Map</div>           
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <form id=\"searchForm\">           
                        <input type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">
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
                        <label for=\"radiobtn\">Type de contrat:</label>
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat3\" value=0 checked>
                            <label for=\"contrat3\">Tous</label>
                        </div>                
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat2\" value=1 >
                            <label for=\"contrat2\">CDD</label>
                        </div>
                        <div class=\"radio radio-danger\">
                            <input type=\"radio\" name=\"contrat\" id=\"contrat1\" value=2>
                            <label for=\"contrat1\">CDI</label>
                        </div>
                        <label for=\"limit\">Nombre d'offre à afficher :</label>
                        <select name=\"limit\" id=\"limit\">
                            <option value=\"10\">10</option>
                            <option value=\"15\">15</option>                            
                            <option value=\"20\">20</option>
                        </select>                        
                        <input type=\"hidden\" id=\"offset\" name=\"offset\" value=\"0\" />                                                
                        <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
                    </form> 
                </div> 
                <div class=\"col-sm-6 latest_news srollko\" id=\"offreList\">
                    {% if not app.user %}
                        {% for offre in offres %}
                            <div class=\"news1 offre\" offreId=\"{{offre.id}}\">
                                <div class=\"txt2\"><a href=\"#details\">{{offre.titre}}</a></div>
                                <div class=\"txt3\">{{offre.localisation}}</div>
                            </div>
                        {% endfor %} 
                    {% else %}
                        {% for offre in offres %}
                            <div class=\"news1 offre\" offreId=\"{{offre.id}}\">
                                <div class=\"txt2\"><a href=\"#details\">{{offre.titre}}</a></div>
                                <div class=\"txt1\">{{offre.createdAt |date('Y-m-d') }} </div>                                
                                <div class=\"txt3\">{{offre.contenu}}</div>
                                {% if offre.added %}
                                    <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                                {% else %}
                                    <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>
                                {% endif %}
                            </div>
                        {% endfor %}                                               
                    {% endif %}
                </div>   
                <div class=\"col-sm-3\" id=\"details\">

                </div>                 
            </div>
        </div>
    </div>    
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>

        <br>

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
    {{parent()}}    
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.blockUI.js')}}\"></script>    
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.debounce.js')}}\"></script>        
    <script type=\"text/javascript\" src=\"{{asset('js/search_free.js')}}\"></script>

{% endblock %}
", "EcoJobAnonymousBundle:Default:search.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/search.html.twig");
    }
}
