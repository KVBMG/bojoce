<?php

/* EcoJobRecruteurBundle:Recruteur:banquecv.html.twig */
class __TwigTemplate_4ae73dfe809c3761e1873791638e0937caa3d13fa60b7d94a7be237306dbdbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobRecruteurBundle:Recruteur:banquecv.html.twig", 1);
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
        $__internal_5f4d010fa51a6a12b8b47234b1c99de61934d27c86e8eaa25db8752be5a444ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4d010fa51a6a12b8b47234b1c99de61934d27c86e8eaa25db8752be5a444ac->enter($__internal_5f4d010fa51a6a12b8b47234b1c99de61934d27c86e8eaa25db8752be5a444ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:banquecv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4d010fa51a6a12b8b47234b1c99de61934d27c86e8eaa25db8752be5a444ac->leave($__internal_5f4d010fa51a6a12b8b47234b1c99de61934d27c86e8eaa25db8752be5a444ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_806c2067a05181ec0bd935b081d092d67a1b929f54ac7b6450fed0860e6134e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806c2067a05181ec0bd935b081d092d67a1b929f54ac7b6450fed0860e6134e2->enter($__internal_806c2067a05181ec0bd935b081d092d67a1b929f54ac7b6450fed0860e6134e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Banque de CV ";
        
        $__internal_806c2067a05181ec0bd935b081d092d67a1b929f54ac7b6450fed0860e6134e2->leave($__internal_806c2067a05181ec0bd935b081d092d67a1b929f54ac7b6450fed0860e6134e2_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f2b861f77d30cbaba83cc4fbc0d9a4ae6e4cb6ce47981c512bc72235282436c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b861f77d30cbaba83cc4fbc0d9a4ae6e4cb6ce47981c512bc72235282436c6->enter($__internal_f2b861f77d30cbaba83cc4fbc0d9a4ae6e4cb6ce47981c512bc72235282436c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_f2b861f77d30cbaba83cc4fbc0d9a4ae6e4cb6ce47981c512bc72235282436c6->leave($__internal_f2b861f77d30cbaba83cc4fbc0d9a4ae6e4cb6ce47981c512bc72235282436c6_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_bc8e16113cdd76a957ae16c1719d70057c8c1257cc708bc3ce9b889ce46088ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e16113cdd76a957ae16c1719d70057c8c1257cc708bc3ce9b889ce46088ef->enter($__internal_bc8e16113cdd76a957ae16c1719d70057c8c1257cc708bc3ce9b889ce46088ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Triage de CV ";
        
        $__internal_bc8e16113cdd76a957ae16c1719d70057c8c1257cc708bc3ce9b889ce46088ef->leave($__internal_bc8e16113cdd76a957ae16c1719d70057c8c1257cc708bc3ce9b889ce46088ef_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4cbc45f8db2e9e0fe2d7e76c48bdc36c6b15d4bf22545c4fffb2b7b8476ec1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbc45f8db2e9e0fe2d7e76c48bdc36c6b15d4bf22545c4fffb2b7b8476ec1c1->enter($__internal_4cbc45f8db2e9e0fe2d7e76c48bdc36c6b15d4bf22545c4fffb2b7b8476ec1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>
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
            <div class=\"col-sm-6 latest_news srollko\" id=\"cvList\">

            </div>   
            <div class=\"col-sm-3\" id=\"details\">

            </div>                 
        </div>
        <br>
    </div>


";
        
        $__internal_4cbc45f8db2e9e0fe2d7e76c48bdc36c6b15d4bf22545c4fffb2b7b8476ec1c1->leave($__internal_4cbc45f8db2e9e0fe2d7e76c48bdc36c6b15d4bf22545c4fffb2b7b8476ec1c1_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c8981d83e1ce3887480030c2258e9126d2a50a3aa6f676ae840233e144e0e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8981d83e1ce3887480030c2258e9126d2a50a3aa6f676ae840233e144e0e5c->enter($__internal_0c8981d83e1ce3887480030c2258e9126d2a50a3aa6f676ae840233e144e0e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.debounce.js"), "html", null, true);
        echo "\"></script>          
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/banquecv.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0c8981d83e1ce3887480030c2258e9126d2a50a3aa6f676ae840233e144e0e5c->leave($__internal_0c8981d83e1ce3887480030c2258e9126d2a50a3aa6f676ae840233e144e0e5c_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:banquecv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 70,  156 => 69,  152 => 68,  147 => 67,  141 => 66,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block title %} Banque de CV {% endblock %}

{% block content_title %} Recruteur {% endblock %}

{% block content_stitle %} Triage de CV {% endblock %}

{% block content %} 
    <div class=\"latest_news\">
        <div class=\"title7\">Recherche</div>
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
            <div class=\"col-sm-6 latest_news srollko\" id=\"cvList\">

            </div>   
            <div class=\"col-sm-3\" id=\"details\">

            </div>                 
        </div>
        <br>
    </div>


{% endblock %}  

{% block javascripts %}
    {{parent()}}    
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.blockUI.js')}}\"></script>    
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.debounce.js')}}\"></script>          
    <script type=\"text/javascript\" src=\"{{asset('js/banquecv.js')}}\"></script>

{% endblock %}
", "EcoJobRecruteurBundle:Recruteur:banquecv.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/banquecv.html.twig");
    }
}
