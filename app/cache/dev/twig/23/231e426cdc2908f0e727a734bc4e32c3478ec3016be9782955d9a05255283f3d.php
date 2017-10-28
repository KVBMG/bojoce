<?php

/* EcoJobAdminBundle:Admin:users_dash.html.twig */
class __TwigTemplate_2ff2484c8550b178a7efe8521068933f07d7dd7623712484adadc1f469c3eed3 extends Twig_Template
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
        $__internal_19bab68ff16b764bf49b8dc0e2c9fba53f65627be4279a5286afd3fbf4db7fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bab68ff16b764bf49b8dc0e2c9fba53f65627be4279a5286afd3fbf4db7fd7->enter($__internal_19bab68ff16b764bf49b8dc0e2c9fba53f65627be4279a5286afd3fbf4db7fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:users_dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19bab68ff16b764bf49b8dc0e2c9fba53f65627be4279a5286afd3fbf4db7fd7->leave($__internal_19bab68ff16b764bf49b8dc0e2c9fba53f65627be4279a5286afd3fbf4db7fd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e82b678ab17a8c7ac0865512062326a95651625b28ddd02e3d720bffdfd63297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82b678ab17a8c7ac0865512062326a95651625b28ddd02e3d720bffdfd63297->enter($__internal_e82b678ab17a8c7ac0865512062326a95651625b28ddd02e3d720bffdfd63297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_e82b678ab17a8c7ac0865512062326a95651625b28ddd02e3d720bffdfd63297->leave($__internal_e82b678ab17a8c7ac0865512062326a95651625b28ddd02e3d720bffdfd63297_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a04100cc7e454e902213d4ef47e4911daf7f8a3e3725d18d92e7f5f8bbc9f57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04100cc7e454e902213d4ef47e4911daf7f8a3e3725d18d92e7f5f8bbc9f57f->enter($__internal_a04100cc7e454e902213d4ef47e4911daf7f8a3e3725d18d92e7f5f8bbc9f57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">    
";
        
        $__internal_a04100cc7e454e902213d4ef47e4911daf7f8a3e3725d18d92e7f5f8bbc9f57f->leave($__internal_a04100cc7e454e902213d4ef47e4911daf7f8a3e3725d18d92e7f5f8bbc9f57f_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7eae2dfdc42e768766d7a667adaf5d57a39034849515b3e30bed6250064c1aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eae2dfdc42e768766d7a667adaf5d57a39034849515b3e30bed6250064c1aa2->enter($__internal_7eae2dfdc42e768766d7a667adaf5d57a39034849515b3e30bed6250064c1aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_7eae2dfdc42e768766d7a667adaf5d57a39034849515b3e30bed6250064c1aa2->leave($__internal_7eae2dfdc42e768766d7a667adaf5d57a39034849515b3e30bed6250064c1aa2_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_e15d57e7f127adda62c9f687a2c0af87ad3da236827541ef7fac6f2b0eec11e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15d57e7f127adda62c9f687a2c0af87ad3da236827541ef7fac6f2b0eec11e4->enter($__internal_e15d57e7f127adda62c9f687a2c0af87ad3da236827541ef7fac6f2b0eec11e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " Liste des utilisateurs";
        
        $__internal_e15d57e7f127adda62c9f687a2c0af87ad3da236827541ef7fac6f2b0eec11e4->leave($__internal_e15d57e7f127adda62c9f687a2c0af87ad3da236827541ef7fac6f2b0eec11e4_prof);

    }

    // line 15
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_9208f8f7345a48b786b838d561c6f8e8596a0f82a094ba56384eedb3f1513898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9208f8f7345a48b786b838d561c6f8e8596a0f82a094ba56384eedb3f1513898->enter($__internal_9208f8f7345a48b786b838d561c6f8e8596a0f82a094ba56384eedb3f1513898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_9208f8f7345a48b786b838d561c6f8e8596a0f82a094ba56384eedb3f1513898->leave($__internal_9208f8f7345a48b786b838d561c6f8e8596a0f82a094ba56384eedb3f1513898_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8de8e9255fd95c85800e3fb0f5d4246ceb6fc01552d213f6ce588a9ed4c46e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de8e9255fd95c85800e3fb0f5d4246ceb6fc01552d213f6ce588a9ed4c46e18->enter($__internal_8de8e9255fd95c85800e3fb0f5d4246ceb6fc01552d213f6ce588a9ed4c46e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8de8e9255fd95c85800e3fb0f5d4246ceb6fc01552d213f6ce588a9ed4c46e18->leave($__internal_8de8e9255fd95c85800e3fb0f5d4246ceb6fc01552d213f6ce588a9ed4c46e18_prof);

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
