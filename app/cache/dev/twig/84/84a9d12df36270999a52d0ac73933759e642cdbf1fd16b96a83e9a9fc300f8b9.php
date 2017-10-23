<?php

/* EcoJobCandidatBundle:Candidat:search.html.twig */
class __TwigTemplate_b76072807bf96dc7ee9725b9630d88ef28bcb46c0cf2378593d2b20adb5df11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:search.html.twig", 1);
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
        $__internal_177f2b92a04370608426602cb82b70a5080c2bcecd28b27d96d1b8ac489edd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177f2b92a04370608426602cb82b70a5080c2bcecd28b27d96d1b8ac489edd6c->enter($__internal_177f2b92a04370608426602cb82b70a5080c2bcecd28b27d96d1b8ac489edd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177f2b92a04370608426602cb82b70a5080c2bcecd28b27d96d1b8ac489edd6c->leave($__internal_177f2b92a04370608426602cb82b70a5080c2bcecd28b27d96d1b8ac489edd6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe88fced406833e987b5174926973a8e120f0a9cc27c16e69e5319c5a9d52b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe88fced406833e987b5174926973a8e120f0a9cc27c16e69e5319c5a9d52b9f->enter($__internal_fe88fced406833e987b5174926973a8e120f0a9cc27c16e69e5319c5a9d52b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_fe88fced406833e987b5174926973a8e120f0a9cc27c16e69e5319c5a9d52b9f->leave($__internal_fe88fced406833e987b5174926973a8e120f0a9cc27c16e69e5319c5a9d52b9f_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_09109a06b32264fe2975ad54a5d6db5d4503595aef7ac5af31b1e27659c29d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09109a06b32264fe2975ad54a5d6db5d4503595aef7ac5af31b1e27659c29d80->enter($__internal_09109a06b32264fe2975ad54a5d6db5d4503595aef7ac5af31b1e27659c29d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_09109a06b32264fe2975ad54a5d6db5d4503595aef7ac5af31b1e27659c29d80->leave($__internal_09109a06b32264fe2975ad54a5d6db5d4503595aef7ac5af31b1e27659c29d80_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_8cdf270ac56f1a0b211286b35af641162e9c5064176d0e3790c38406f134e516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdf270ac56f1a0b211286b35af641162e9c5064176d0e3790c38406f134e516->enter($__internal_8cdf270ac56f1a0b211286b35af641162e9c5064176d0e3790c38406f134e516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_8cdf270ac56f1a0b211286b35af641162e9c5064176d0e3790c38406f134e516->leave($__internal_8cdf270ac56f1a0b211286b35af641162e9c5064176d0e3790c38406f134e516_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_e8bd5755920264ba4b18b00052200bb320d08f9a8e350533705a03f13532577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bd5755920264ba4b18b00052200bb320d08f9a8e350533705a03f13532577a->enter($__internal_e8bd5755920264ba4b18b00052200bb320d08f9a8e350533705a03f13532577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>
        <form id=\"searchForm\">           
            <input type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">
            <label for=\"exp\">Expérience:</label>
            <select name=\"experience\" id=\"exp\">
                <option value=\"0\">Tous</option>
                <option value=\"1\">1 an</option>
                <option value=\"2\">2 ans</option>
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
                <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
        </form>
        <br>
        <div id=\"result\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 38
            echo "            <div class=\"news1\">
                <div class=\"txt1\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "createdAt", array()), "html", null, true);
            echo "</div>
                <div class=\"txt2\"><a href=\"#details\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a></div>
                <div class=\"txt3\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
                ";
            // line 42
            if ($this->getAttribute($context["offre"], "added", array())) {
                // line 43
                echo "                    <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                ";
            } else {
                // line 45
                echo "                    <!-- data-href a changer au lien menant au page de l'offre -->
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn1\">Save</a>

                    <!--==FACEBOOK LIKE and SHARE Buttons==-->
                    <div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
                    <!--== LinkedIn share button==-->
                    <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: fr_FR</script>
                    <script type=\"IN/Share\" data-url=\"http://platform.linkedin.com\"";
                // line 52
                echo "></script>
                ";
            }
            // line 54
            echo "            </div>
            <div class=\"divider\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      
        </div>
    </div>


";
        
        $__internal_e8bd5755920264ba4b18b00052200bb320d08f9a8e350533705a03f13532577a->leave($__internal_e8bd5755920264ba4b18b00052200bb320d08f9a8e350533705a03f13532577a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16aeb294147ff750d43444753d90e3a62e0a970065e8e153853d6342915ea899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16aeb294147ff750d43444753d90e3a62e0a970065e8e153853d6342915ea899->enter($__internal_16aeb294147ff750d43444753d90e3a62e0a970065e8e153853d6342915ea899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--=== Need to change the domain and URL from the facebook.developper to get a new Id ===-->
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1750551898578027\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_16aeb294147ff750d43444753d90e3a62e0a970065e8e153853d6342915ea899->leave($__internal_16aeb294147ff750d43444753d90e3a62e0a970065e8e153853d6342915ea899_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 76,  176 => 64,  170 => 63,  158 => 56,  150 => 54,  146 => 52,  137 => 46,  134 => 45,  130 => 43,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  113 => 38,  109 => 37,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>
        <form id=\"searchForm\">           
            <input type=\"text\" id=\"searchBar\" name=\"keywords\" placehodler=\"Mots clés\">
            <label for=\"exp\">Expérience:</label>
            <select name=\"experience\" id=\"exp\">
                <option value=\"0\">Tous</option>
                <option value=\"1\">1 an</option>
                <option value=\"2\">2 ans</option>
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
                <button class=\"btn-default btn1\" id=\"reset\">Reset</button>           
        </form>
        <br>
        <div id=\"result\">
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">{{offre.createdAt}}</div>
                <div class=\"txt2\"><a href=\"#details\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                {% if offre.added %}
                    <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                {% else %}
                    <!-- data-href a changer au lien menant au page de l'offre -->
                    <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>

                    <!--==FACEBOOK LIKE and SHARE Buttons==-->
                    <div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
                    <!--== LinkedIn share button==-->
                    <script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: fr_FR</script>
                    <script type=\"IN/Share\" data-url=\"http://platform.linkedin.com\"{# change to the url to share e.g: http://eco-job.fr/developpement/ #}></script>
                {% endif %}
            </div>
            <div class=\"divider\"></div>
        {% endfor %}      
        </div>
    </div>


{% endblock %}  

{% block javascripts %}
    {{parent()}}
    <!--=== Need to change the domain and URL from the facebook.developper to get a new Id ===-->
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1750551898578027\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type=\"text/javascript\" src=\"{{asset('js/search.js')}}\"></script>

{% endblock %}
", "EcoJobCandidatBundle:Candidat:search.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/search.html.twig");
    }
}
