<?php

/* EcoJobRecruteurBundle:Recruteur:search.html.twig */
class __TwigTemplate_aae2f8341e0c95ad3ee5095032491ef45ad63a6bce4365c4b78b0f36d693c0c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:search.html.twig", 1);
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
        $__internal_4734c205a3bb32743f0c9dde04927e52502e1a76fc496cd8ff611545839bcb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4734c205a3bb32743f0c9dde04927e52502e1a76fc496cd8ff611545839bcb07->enter($__internal_4734c205a3bb32743f0c9dde04927e52502e1a76fc496cd8ff611545839bcb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4734c205a3bb32743f0c9dde04927e52502e1a76fc496cd8ff611545839bcb07->leave($__internal_4734c205a3bb32743f0c9dde04927e52502e1a76fc496cd8ff611545839bcb07_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81334d584f8cd01d791324cb168f6cd60d2c4c46f98e3ce040b224bed5d2f132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81334d584f8cd01d791324cb168f6cd60d2c4c46f98e3ce040b224bed5d2f132->enter($__internal_81334d584f8cd01d791324cb168f6cd60d2c4c46f98e3ce040b224bed5d2f132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_81334d584f8cd01d791324cb168f6cd60d2c4c46f98e3ce040b224bed5d2f132->leave($__internal_81334d584f8cd01d791324cb168f6cd60d2c4c46f98e3ce040b224bed5d2f132_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f64fdd098d81c6e1ea47eb71110430b55ce29cc40336e6a3e6cecb47af84f486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64fdd098d81c6e1ea47eb71110430b55ce29cc40336e6a3e6cecb47af84f486->enter($__internal_f64fdd098d81c6e1ea47eb71110430b55ce29cc40336e6a3e6cecb47af84f486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_f64fdd098d81c6e1ea47eb71110430b55ce29cc40336e6a3e6cecb47af84f486->leave($__internal_f64fdd098d81c6e1ea47eb71110430b55ce29cc40336e6a3e6cecb47af84f486_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_c545d2a17d41daec624fac47b56527e67988f9e6d0110ac48ab8e621ec415468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c545d2a17d41daec624fac47b56527e67988f9e6d0110ac48ab8e621ec415468->enter($__internal_c545d2a17d41daec624fac47b56527e67988f9e6d0110ac48ab8e621ec415468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_c545d2a17d41daec624fac47b56527e67988f9e6d0110ac48ab8e621ec415468->leave($__internal_c545d2a17d41daec624fac47b56527e67988f9e6d0110ac48ab8e621ec415468_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_62fd138f7012c69a8f56a9a1e1754b77ee54ce9d8d6a8bbf2dd9976861466129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fd138f7012c69a8f56a9a1e1754b77ee54ce9d8d6a8bbf2dd9976861466129->enter($__internal_62fd138f7012c69a8f56a9a1e1754b77ee54ce9d8d6a8bbf2dd9976861466129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a></div>
                <div class=\"txt3\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      
        </div>
    </div>


";
        
        $__internal_62fd138f7012c69a8f56a9a1e1754b77ee54ce9d8d6a8bbf2dd9976861466129->leave($__internal_62fd138f7012c69a8f56a9a1e1754b77ee54ce9d8d6a8bbf2dd9976861466129_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06f0a62d4f1bc3fd06481c136f8991118f6cf7e14421f73535a2f82bf43adabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f0a62d4f1bc3fd06481c136f8991118f6cf7e14421f73535a2f82bf43adabf->enter($__internal_06f0a62d4f1bc3fd06481c136f8991118f6cf7e14421f73535a2f82bf43adabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/searchr.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_06f0a62d4f1bc3fd06481c136f8991118f6cf7e14421f73535a2f82bf43adabf->leave($__internal_06f0a62d4f1bc3fd06481c136f8991118f6cf7e14421f73535a2f82bf43adabf_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  148 => 51,  142 => 50,  130 => 43,  121 => 41,  117 => 40,  113 => 38,  109 => 37,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block title %} Mes offres{% endblock %}

{% block content_title %} Recruteur {% endblock %}

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
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
            </div>
        {% endfor %}      
        </div>
    </div>


{% endblock %}  

{% block javascripts %}
    {{parent()}}    
    <script type=\"text/javascript\" src=\"{{asset('js/searchr.js')}}\"></script>

{% endblock %}
", "EcoJobRecruteurBundle:Recruteur:search.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/search.html.twig");
    }
}
