<?php

/* EcoJobCandidatBundle::layout.html.twig */
class __TwigTemplate_0c36f957c179845c48f89609e8f064a955af6d4231c393a1864c854336b73605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobCandidatBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a9160837a51f4231d24be51d430cb1667f81567b29123c4424bed1a672aa839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9160837a51f4231d24be51d430cb1667f81567b29123c4424bed1a672aa839->enter($__internal_5a9160837a51f4231d24be51d430cb1667f81567b29123c4424bed1a672aa839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9160837a51f4231d24be51d430cb1667f81567b29123c4424bed1a672aa839->leave($__internal_5a9160837a51f4231d24be51d430cb1667f81567b29123c4424bed1a672aa839_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb3acff73080b26c269a9282b27ca5c9b039b106c40a17c533e9eb5f849315ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3acff73080b26c269a9282b27ca5c9b039b106c40a17c533e9eb5f849315ac->enter($__internal_cb3acff73080b26c269a9282b27ca5c9b039b106c40a17c533e9eb5f849315ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb3acff73080b26c269a9282b27ca5c9b039b106c40a17c533e9eb5f849315ac->leave($__internal_cb3acff73080b26c269a9282b27ca5c9b039b106c40a17c533e9eb5f849315ac_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1acf76f2476c2395c462aa4a2d0028aee0ff31306a44d83a1a604f19e6800e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1acf76f2476c2395c462aa4a2d0028aee0ff31306a44d83a1a604f19e6800e7->enter($__internal_c1acf76f2476c2395c462aa4a2d0028aee0ff31306a44d83a1a604f19e6800e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news\">
                        <div class=\"title7\">Candidat side bar</div>
                        <ul>
                            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_gerercv");
        echo "\"> Gérer mon CV</a></li>
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_show");
        echo "\"> Voir mon CV</a></li>
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_myoffres");
        echo "\"> Offres d'emploi sauvegardées (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "saved"), "method"), "html", null, true);
        echo ")</a></li>
                            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_postuled_offres");
        echo "\"> Offres d'emploi postulés (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "postuled"), "method"), "html", null, true);
        echo ")</a></li>
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_param");
        echo "\"> Paramètre d'alerte mail</a></li>
                            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Modifier nom et/ou email</a></li>
                            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Modifier nom mot de passe</a></li>
                        </ul>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 24
        $this->displayBlock('scontent', $context, $blocks);
        // line 27
        echo "    
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_c1acf76f2476c2395c462aa4a2d0028aee0ff31306a44d83a1a604f19e6800e7->leave($__internal_c1acf76f2476c2395c462aa4a2d0028aee0ff31306a44d83a1a604f19e6800e7_prof);

    }

    // line 24
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_85e182ba40e660feca19882bb94dd201d6323cdbe683a00908026228f5d1fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e182ba40e660feca19882bb94dd201d6323cdbe683a00908026228f5d1fec8->enter($__internal_85e182ba40e660feca19882bb94dd201d6323cdbe683a00908026228f5d1fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 25
        echo "                        <div class=\"title6\">Contenu pour un candidat</div>

                    ";
        
        $__internal_85e182ba40e660feca19882bb94dd201d6323cdbe683a00908026228f5d1fec8->leave($__internal_85e182ba40e660feca19882bb94dd201d6323cdbe683a00908026228f5d1fec8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  117 => 24,  104 => 27,  102 => 24,  94 => 19,  90 => 18,  86 => 17,  80 => 16,  74 => 15,  70 => 14,  66 => 13,  55 => 5,  47 => 4,  36 => 2,  11 => 1,);
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
{% block title %}{% endblock %}

{% block content %} 
    {{parent()}} 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news\">
                        <div class=\"title7\">Candidat side bar</div>
                        <ul>
                            <li><a href=\"{{path('eco_job_candidat_gerercv')}}\"> Gérer mon CV</a></li>
                            <li><a href=\"{{path('eco_job_candidat_cv_show')}}\"> Voir mon CV</a></li>
                            <li><a href=\"{{path('eco_job_candidat_myoffres')}}\"> Offres d'emploi sauvegardées ({{app.session.get('saved')}})</a></li>
                            <li><a href=\"{{path('eco_job_candidat_postuled_offres')}}\"> Offres d'emploi postulés ({{app.session.get('postuled')}})</a></li>
                            <li><a href=\"{{path('eco_job_candidat_param')}}\"> Paramètre d'alerte mail</a></li>
                            <li><a href=\"{{path('fos_user_profile_edit')}}\">Modifier nom et/ou email</a></li>
                            <li><a href=\"{{path('fos_user_change_password')}}\">Modifier nom mot de passe</a></li>
                        </ul>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    {% block scontent %}
                        <div class=\"title6\">Contenu pour un candidat</div>

                    {% endblock %}    
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}                
", "EcoJobCandidatBundle::layout.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\CandidatBundle/Resources/views/layout.html.twig");
    }
}
