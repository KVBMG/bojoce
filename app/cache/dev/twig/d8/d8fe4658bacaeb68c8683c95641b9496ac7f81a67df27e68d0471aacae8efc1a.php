<?php

/* EcoJobAdminBundle:Admin:offre_without_ex.html.twig */
class __TwigTemplate_4bc7467768c1aba331d2f87072befd4f4fdaab6532cb9cb341afd06b57ecf24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:offre_without_ex.html.twig", 1);
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
        $__internal_ce6ad7fbf5bb5e8542e06636419dfe0a065a200be456f4e28bc1217f2187f35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6ad7fbf5bb5e8542e06636419dfe0a065a200be456f4e28bc1217f2187f35b->enter($__internal_ce6ad7fbf5bb5e8542e06636419dfe0a065a200be456f4e28bc1217f2187f35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offre_without_ex.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6ad7fbf5bb5e8542e06636419dfe0a065a200be456f4e28bc1217f2187f35b->leave($__internal_ce6ad7fbf5bb5e8542e06636419dfe0a065a200be456f4e28bc1217f2187f35b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f2f7b6e178ab99700085ff6b7b64836aa0c3f7d45755ac9aeda40436e296655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2f7b6e178ab99700085ff6b7b64836aa0c3f7d45755ac9aeda40436e296655->enter($__internal_4f2f7b6e178ab99700085ff6b7b64836aa0c3f7d45755ac9aeda40436e296655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_4f2f7b6e178ab99700085ff6b7b64836aa0c3f7d45755ac9aeda40436e296655->leave($__internal_4f2f7b6e178ab99700085ff6b7b64836aa0c3f7d45755ac9aeda40436e296655_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab562493dcc56ef85b93d13d568dd959188ef986b9051cff5ff88aac3d39a18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab562493dcc56ef85b93d13d568dd959188ef986b9051cff5ff88aac3d39a18b->enter($__internal_ab562493dcc56ef85b93d13d568dd959188ef986b9051cff5ff88aac3d39a18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ab562493dcc56ef85b93d13d568dd959188ef986b9051cff5ff88aac3d39a18b->leave($__internal_ab562493dcc56ef85b93d13d568dd959188ef986b9051cff5ff88aac3d39a18b_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7eb392b7927e486486ac0f31e3034f3131033bcf576e627f26213177e0d4b147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb392b7927e486486ac0f31e3034f3131033bcf576e627f26213177e0d4b147->enter($__internal_7eb392b7927e486486ac0f31e3034f3131033bcf576e627f26213177e0d4b147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_7eb392b7927e486486ac0f31e3034f3131033bcf576e627f26213177e0d4b147->leave($__internal_7eb392b7927e486486ac0f31e3034f3131033bcf576e627f26213177e0d4b147_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_01736ff40e4d977bb3f3201f301d1d9fc1652881761dca954b5fa71270f71be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01736ff40e4d977bb3f3201f301d1d9fc1652881761dca954b5fa71270f71be1->enter($__internal_01736ff40e4d977bb3f3201f301d1d9fc1652881761dca954b5fa71270f71be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " / Liste de tout les offres";
        
        $__internal_01736ff40e4d977bb3f3201f301d1d9fc1652881761dca954b5fa71270f71be1->leave($__internal_01736ff40e4d977bb3f3201f301d1d9fc1652881761dca954b5fa71270f71be1_prof);

    }

    // line 15
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_951d7374b5a25fcb817a98a275e9adf6c19f29939bd318cc2d321c6fb2928a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951d7374b5a25fcb817a98a275e9adf6c19f29939bd318cc2d321c6fb2928a60->enter($__internal_951d7374b5a25fcb817a98a275e9adf6c19f29939bd318cc2d321c6fb2928a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 16
        echo "    ";
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
    <table id=\"offreTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr role=\"row\">
            <th>Id</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>createdAt</th>
            <th>recruteur_username</th>
            <th>recruteur_email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>createdAt</th>
            <th>recruteur_username</th>
            <th>recruteur_email</th>
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
                    Etes-vous sûr de vouloir supprimer cet offre?
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
        
        $__internal_951d7374b5a25fcb817a98a275e9adf6c19f29939bd318cc2d321c6fb2928a60->leave($__internal_951d7374b5a25fcb817a98a275e9adf6c19f29939bd318cc2d321c6fb2928a60_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_917acd0808b888d72555a5d546b91bd1d0acfca70e52c803c72b06badeb8e9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917acd0808b888d72555a5d546b91bd1d0acfca70e52c803c72b06badeb8e9a5->enter($__internal_917acd0808b888d72555a5d546b91bd1d0acfca70e52c803c72b06badeb8e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fnReloadAjax.js"), "html", null, true);
        echo "\"></script>
    <script> var table = \"\";</script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/admin_offre.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_917acd0808b888d72555a5d546b91bd1d0acfca70e52c803c72b06badeb8e9a5->leave($__internal_917acd0808b888d72555a5d546b91bd1d0acfca70e52c803c72b06badeb8e9a5_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:offre_without_ex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 82,  193 => 80,  189 => 79,  185 => 78,  181 => 77,  176 => 76,  170 => 75,  103 => 16,  97 => 15,  83 => 12,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
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

{% block content_stitle %} {{parent()}} / Liste de tout les offres{% endblock %}


{% block scontent %}
    {{parent()}}
    <table id=\"offreTable\" class=\"table table-striped jambo_table bulk_action dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr role=\"row\">
            <th>Id</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>createdAt</th>
            <th>recruteur_username</th>
            <th>recruteur_email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>createdAt</th>
            <th>recruteur_username</th>
            <th>recruteur_email</th>
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
                    Etes-vous sûr de vouloir supprimer cet offre?
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
    <script src=\"{{asset('js/admin_offre.js')}}\"></script>
{% endblock %}", "EcoJobAdminBundle:Admin:offre_without_ex.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/offre_without_ex.html.twig");
    }
}
