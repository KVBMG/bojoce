<?php

/* EcoJobAdminBundle:Admin:users_dash.html.twig */
class __TwigTemplate_5afe00204c4da532c625d42b1aa0d673174701d7cd467e7473bed1dd9bbbe30a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:users_dash.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae599418370084dbb83c1e8dae6f80c94f5a53a3cfae0e4935e928e39f84a7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae599418370084dbb83c1e8dae6f80c94f5a53a3cfae0e4935e928e39f84a7ac->enter($__internal_ae599418370084dbb83c1e8dae6f80c94f5a53a3cfae0e4935e928e39f84a7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:users_dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae599418370084dbb83c1e8dae6f80c94f5a53a3cfae0e4935e928e39f84a7ac->leave($__internal_ae599418370084dbb83c1e8dae6f80c94f5a53a3cfae0e4935e928e39f84a7ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab2a1f682706466e4b95d91409708c187377e4fd7a31b5fef593e1d32562e96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2a1f682706466e4b95d91409708c187377e4fd7a31b5fef593e1d32562e96b->enter($__internal_ab2a1f682706466e4b95d91409708c187377e4fd7a31b5fef593e1d32562e96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_ab2a1f682706466e4b95d91409708c187377e4fd7a31b5fef593e1d32562e96b->leave($__internal_ab2a1f682706466e4b95d91409708c187377e4fd7a31b5fef593e1d32562e96b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c478f4fb391f437d321ab5d13a115380668cebd2a67400ab1b28e490ca3ca83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c478f4fb391f437d321ab5d13a115380668cebd2a67400ab1b28e490ca3ca83->enter($__internal_3c478f4fb391f437d321ab5d13a115380668cebd2a67400ab1b28e490ca3ca83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">    
";
        
        $__internal_3c478f4fb391f437d321ab5d13a115380668cebd2a67400ab1b28e490ca3ca83->leave($__internal_3c478f4fb391f437d321ab5d13a115380668cebd2a67400ab1b28e490ca3ca83_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0fd39e947f454cce5d04b904f43da61f50cd737ebca82f81be3710dae7715a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd39e947f454cce5d04b904f43da61f50cd737ebca82f81be3710dae7715a8c->enter($__internal_0fd39e947f454cce5d04b904f43da61f50cd737ebca82f81be3710dae7715a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_0fd39e947f454cce5d04b904f43da61f50cd737ebca82f81be3710dae7715a8c->leave($__internal_0fd39e947f454cce5d04b904f43da61f50cd737ebca82f81be3710dae7715a8c_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_b43f4e50a738d627d3b1ab6c61f9bd9ee647d6ca51ed61f7ed85c57675a1f6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43f4e50a738d627d3b1ab6c61f9bd9ee647d6ca51ed61f7ed85c57675a1f6fc->enter($__internal_b43f4e50a738d627d3b1ab6c61f9bd9ee647d6ca51ed61f7ed85c57675a1f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " Liste des utilisateurs";
        
        $__internal_b43f4e50a738d627d3b1ab6c61f9bd9ee647d6ca51ed61f7ed85c57675a1f6fc->leave($__internal_b43f4e50a738d627d3b1ab6c61f9bd9ee647d6ca51ed61f7ed85c57675a1f6fc_prof);

    }

    // line 15
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_24e4ba94d26f0ab0ac1d22ccc291887ae1503429e39f0b516a63e61530bae695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e4ba94d26f0ab0ac1d22ccc291887ae1503429e39f0b516a63e61530bae695->enter($__internal_24e4ba94d26f0ab0ac1d22ccc291887ae1503429e39f0b516a63e61530bae695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    ";
        // line 16
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 
    <table id=\"userTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr role=\"row\">
                <th>Id</th>                
                <th>Nom</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>                
                <th>Nom</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Alerte</h4>
                </div>
                <div class=\"modal-body\">
                    Etes-vous sûr de vouloir supprimer cet utilisateur?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary valider\">Valider</button>
                </div>            
            </div>
        </div>
    </div> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"profilModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Alerte</h4>
                </div>
                <div class=\"modal-body\">
                    Profil
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>            
            </div>
        </div>
    </div>    
";
        
        $__internal_24e4ba94d26f0ab0ac1d22ccc291887ae1503429e39f0b516a63e61530bae695->leave($__internal_24e4ba94d26f0ab0ac1d22ccc291887ae1503429e39f0b516a63e61530bae695_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f71aac51001b64cc864b1670aea52611fc9b7f3228e97d422dacb79ef8f357a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71aac51001b64cc864b1670aea52611fc9b7f3228e97d422dacb79ef8f357a8->enter($__internal_f71aac51001b64cc864b1670aea52611fc9b7f3228e97d422dacb79ef8f357a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>     
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
    <script> var table = \"\";</script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f71aac51001b64cc864b1670aea52611fc9b7f3228e97d422dacb79ef8f357a8->leave($__internal_f71aac51001b64cc864b1670aea52611fc9b7f3228e97d422dacb79ef8f357a8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:users_dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 78,  190 => 76,  186 => 75,  182 => 74,  178 => 73,  173 => 72,  167 => 71,  105 => 16,  97 => 15,  83 => 12,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobAdminBundle::layout.html.twig\"%}

{% block title %} Espace administration {% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{asset('css/dataTables.bootstrap.min.css')}}\">    
{% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} {{parent()}} Liste des utilisateurs{% endblock %}


{% block scontent %}   
    {{parent()}} 
    <table id=\"userTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr role=\"row\">
                <th>Id</th>                
                <th>Nom</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>                
                <th>Nom</th>
                <th>E-mail</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"globModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Alerte</h4>
                </div>
                <div class=\"modal-body\">
                    Etes-vous sûr de vouloir supprimer cet utilisateur?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary valider\">Valider</button>
                </div>            
            </div>
        </div>
    </div> 
    <div style=\"z-index:2016;\" class=\"modal fade \" id=\"profilModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" >Alerte</h4>
                </div>
                <div class=\"modal-body\">
                    Profil
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>            
            </div>
        </div>
    </div>    
{% endblock %}  
{% block javascripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"{{asset('js/jquery.blockUI.js')}}\"></script>     
    <script src=\"{{ asset(\"js/jquery.dataTables.min.js\")}}\"></script>    
    <script src=\"{{ asset(\"js/dataTables.bootstrap.min.js\")}}\"></script>
    <script src=\"{{asset('js/fnReloadAjax.js')}}\"></script>
    <script> var table = \"\";</script>
    <script src=\"{{asset('js/user.js')}}\"></script>
{% endblock %}", "EcoJobAdminBundle:Admin:users_dash.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/users_dash.html.twig");
    }
}
