<?php

/* EcoJobAdminBundle:Admin:users.html.twig */
class __TwigTemplate_2d16ce773b645c347ec62751a8cdb53371a2d7e57fc2f52f30975154fd006d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:users.html.twig", 1);
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
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a8c647fff582badc2fcf52b04ed3c17f9fdcf7b052dedf55e05788de8814baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8c647fff582badc2fcf52b04ed3c17f9fdcf7b052dedf55e05788de8814baa->enter($__internal_2a8c647fff582badc2fcf52b04ed3c17f9fdcf7b052dedf55e05788de8814baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a8c647fff582badc2fcf52b04ed3c17f9fdcf7b052dedf55e05788de8814baa->leave($__internal_2a8c647fff582badc2fcf52b04ed3c17f9fdcf7b052dedf55e05788de8814baa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5e51ed98f58c207fb4de339a3aa69c7ff9b05207d63cc38194b5e6ca56b7acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e51ed98f58c207fb4de339a3aa69c7ff9b05207d63cc38194b5e6ca56b7acf->enter($__internal_e5e51ed98f58c207fb4de339a3aa69c7ff9b05207d63cc38194b5e6ca56b7acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_e5e51ed98f58c207fb4de339a3aa69c7ff9b05207d63cc38194b5e6ca56b7acf->leave($__internal_e5e51ed98f58c207fb4de339a3aa69c7ff9b05207d63cc38194b5e6ca56b7acf_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_41f43f2366ca733768b4bd6455b490c1efa0585e87749f75b4a9ef00c6ecd104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f43f2366ca733768b4bd6455b490c1efa0585e87749f75b4a9ef00c6ecd104->enter($__internal_41f43f2366ca733768b4bd6455b490c1efa0585e87749f75b4a9ef00c6ecd104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_41f43f2366ca733768b4bd6455b490c1efa0585e87749f75b4a9ef00c6ecd104->leave($__internal_41f43f2366ca733768b4bd6455b490c1efa0585e87749f75b4a9ef00c6ecd104_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_049082555c039b4120a02b3e2289c272893cf5d344e447db415941c59807322b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049082555c039b4120a02b3e2289c272893cf5d344e447db415941c59807322b->enter($__internal_049082555c039b4120a02b3e2289c272893cf5d344e447db415941c59807322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " Nouveaux utilisateurs";
        
        $__internal_049082555c039b4120a02b3e2289c272893cf5d344e447db415941c59807322b->leave($__internal_049082555c039b4120a02b3e2289c272893cf5d344e447db415941c59807322b_prof);

    }

    // line 10
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_0d5d0e81b6ca76090fc4602b832e12c380fc0d4858c0a0c8847121092c71d3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5d0e81b6ca76090fc4602b832e12c380fc0d4858c0a0c8847121092c71d3f0->enter($__internal_0d5d0e81b6ca76090fc4602b832e12c380fc0d4858c0a0c8847121092c71d3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des candidats qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        <table id=\"candidatTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr role=\"row\">
                    <th>Id</th> 
                    <th>Date d'inscription</th>  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th> 
                    <th>Date d'inscription</th>                  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>            

        <div class=\"title7\">Liste des recruteurs qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        <table id=\"recruteurTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr role=\"row\">
                    <th>Id</th> 
                    <th>Date d'inscription</th>  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th> 
                    <th>Date d'inscription</th>                  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>     

    </div>

    ";
        // line 62
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 
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
        
        $__internal_0d5d0e81b6ca76090fc4602b832e12c380fc0d4858c0a0c8847121092c71d3f0->leave($__internal_0d5d0e81b6ca76090fc4602b832e12c380fc0d4858c0a0c8847121092c71d3f0_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e02be9f4366c9adf345ab9c27d9da7de5461690b547f8790627a4e68750a8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e02be9f4366c9adf345ab9c27d9da7de5461690b547f8790627a4e68750a8a1->enter($__internal_0e02be9f4366c9adf345ab9c27d9da7de5461690b547f8790627a4e68750a8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>     
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>    
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
    <script> var table = \"\"; var table2 =\"\";</script>    
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin_candidat.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_0e02be9f4366c9adf345ab9c27d9da7de5461690b547f8790627a4e68750a8a1->leave($__internal_0e02be9f4366c9adf345ab9c27d9da7de5461690b547f8790627a4e68750a8a1_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 104,  200 => 102,  196 => 101,  192 => 100,  188 => 99,  183 => 98,  177 => 97,  135 => 62,  76 => 10,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
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

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} {{parent()}} Nouveaux utilisateurs{% endblock %}


{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des candidats qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        <table id=\"candidatTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr role=\"row\">
                    <th>Id</th> 
                    <th>Date d'inscription</th>  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th> 
                    <th>Date d'inscription</th>                  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>            

        <div class=\"title7\">Liste des recruteurs qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        <table id=\"recruteurTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr role=\"row\">
                    <th>Id</th> 
                    <th>Date d'inscription</th>  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th> 
                    <th>Date d'inscription</th>                  
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>     

    </div>

    {{parent()}} 
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
    <script> var table = \"\"; var table2 =\"\";</script>    
    <script src=\"{{asset('js/admin_candidat.js')}}\"></script>    
{% endblock %}", "EcoJobAdminBundle:Admin:users.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/users.html.twig");
    }
}
