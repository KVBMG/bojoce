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
        $__internal_2a3274c37c1bb99b452b899575c0501247cb698441abf60a2ade2ce0ba1ee3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3274c37c1bb99b452b899575c0501247cb698441abf60a2ade2ce0ba1ee3fb->enter($__internal_2a3274c37c1bb99b452b899575c0501247cb698441abf60a2ade2ce0ba1ee3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:users_dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a3274c37c1bb99b452b899575c0501247cb698441abf60a2ade2ce0ba1ee3fb->leave($__internal_2a3274c37c1bb99b452b899575c0501247cb698441abf60a2ade2ce0ba1ee3fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_191af65a6982dd24f18b95f982e21ce8ffb92a70225db02d7cc18de62353d20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191af65a6982dd24f18b95f982e21ce8ffb92a70225db02d7cc18de62353d20d->enter($__internal_191af65a6982dd24f18b95f982e21ce8ffb92a70225db02d7cc18de62353d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_191af65a6982dd24f18b95f982e21ce8ffb92a70225db02d7cc18de62353d20d->leave($__internal_191af65a6982dd24f18b95f982e21ce8ffb92a70225db02d7cc18de62353d20d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94293c4c867dfd63fdd1374f69dd5b96efc8e8a4feb541141b67b296b1973b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94293c4c867dfd63fdd1374f69dd5b96efc8e8a4feb541141b67b296b1973b2d->enter($__internal_94293c4c867dfd63fdd1374f69dd5b96efc8e8a4feb541141b67b296b1973b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">    
";
        
        $__internal_94293c4c867dfd63fdd1374f69dd5b96efc8e8a4feb541141b67b296b1973b2d->leave($__internal_94293c4c867dfd63fdd1374f69dd5b96efc8e8a4feb541141b67b296b1973b2d_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4e2e8897bc0edc552b88e5529a0e7241d17ecde4283a91d01cc3ce2e9080c4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2e8897bc0edc552b88e5529a0e7241d17ecde4283a91d01cc3ce2e9080c4c1->enter($__internal_4e2e8897bc0edc552b88e5529a0e7241d17ecde4283a91d01cc3ce2e9080c4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_4e2e8897bc0edc552b88e5529a0e7241d17ecde4283a91d01cc3ce2e9080c4c1->leave($__internal_4e2e8897bc0edc552b88e5529a0e7241d17ecde4283a91d01cc3ce2e9080c4c1_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_c378bb22f4013b6786927430be8a255ca59960c9ac79ffb92edc11ef65f0c7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c378bb22f4013b6786927430be8a255ca59960c9ac79ffb92edc11ef65f0c7c3->enter($__internal_c378bb22f4013b6786927430be8a255ca59960c9ac79ffb92edc11ef65f0c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " Liste des utilisateurs";
        
        $__internal_c378bb22f4013b6786927430be8a255ca59960c9ac79ffb92edc11ef65f0c7c3->leave($__internal_c378bb22f4013b6786927430be8a255ca59960c9ac79ffb92edc11ef65f0c7c3_prof);

    }

    // line 15
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_7a458e9f71cda6f09c2815d0dad837434fbe03c7944d6f0f4312f8f8f7d63c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a458e9f71cda6f09c2815d0dad837434fbe03c7944d6f0f4312f8f8f7d63c53->enter($__internal_7a458e9f71cda6f09c2815d0dad837434fbe03c7944d6f0f4312f8f8f7d63c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_7a458e9f71cda6f09c2815d0dad837434fbe03c7944d6f0f4312f8f8f7d63c53->leave($__internal_7a458e9f71cda6f09c2815d0dad837434fbe03c7944d6f0f4312f8f8f7d63c53_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1955af7b3dae971c16a4d47796704b3a89e8c50ff8faa63bd5764592b85b8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1955af7b3dae971c16a4d47796704b3a89e8c50ff8faa63bd5764592b85b8b3->enter($__internal_c1955af7b3dae971c16a4d47796704b3a89e8c50ff8faa63bd5764592b85b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c1955af7b3dae971c16a4d47796704b3a89e8c50ff8faa63bd5764592b85b8b3->leave($__internal_c1955af7b3dae971c16a4d47796704b3a89e8c50ff8faa63bd5764592b85b8b3_prof);

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
