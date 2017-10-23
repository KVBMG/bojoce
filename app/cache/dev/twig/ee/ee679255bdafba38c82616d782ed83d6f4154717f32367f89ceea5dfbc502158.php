<?php

/* EcoJobAnonymousBundle:Default:details.html.twig */
class __TwigTemplate_ed4dd95b03190ab8abc093f6cf8bfe1cbece4341581e6145c3ed86c82269dd88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d16526cc955851a682ca409a8c2fd2ed7d8930fcf9764a927aaaa9896c99fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d16526cc955851a682ca409a8c2fd2ed7d8930fcf9764a927aaaa9896c99fb->enter($__internal_c3d16526cc955851a682ca409a8c2fd2ed7d8930fcf9764a927aaaa9896c99fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:details.html.twig"));

        // line 1
        echo "<div class=\"latest_news\">
    <div class=\"title7\">Offre numero ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "</div>
    <div class=\"news1\">
        <div class=\"txt2\"><a href=\"#\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
        <div class=\"txt3\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>  
        <div class=\"txt3\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "localisation", array()), "html", null, true);
        echo "</div>  
        ";
        // line 7
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 8
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"btn-default btn1\">Save</a>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous_offre_integralite", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn1\">Voir</a>
        ";
        } else {
            // line 11
            echo "            ";
            if ($this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "added", array())) {
                // line 12
                echo "                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            ";
            } else {
                // line 14
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn1\">Save</a>
            ";
            }
            // line 16
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous_offre_integralite", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn1\">Voir</a>
        ";
        }
        // line 18
        echo "    </div>

</div>
";
        
        $__internal_c3d16526cc955851a682ca409a8c2fd2ed7d8930fcf9764a927aaaa9896c99fb->leave($__internal_c3d16526cc955851a682ca409a8c2fd2ed7d8930fcf9764a927aaaa9896c99fb_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  67 => 16,  61 => 14,  57 => 12,  54 => 11,  49 => 9,  44 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"latest_news\">
    <div class=\"title7\">Offre numero {{offre.id}}</div>
    <div class=\"news1\">
        <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
        <div class=\"txt3\">{{offre.contenu}}</div>  
        <div class=\"txt3\">{{offre.localisation}}</div>  
        {% if not app.user %}
            <a href=\"{{ path('fos_user_registration_register')}}\" class=\"btn-default btn1\">Save</a>
            <a href=\"{{ path('eco_job_anonymous_offre_integralite',{ 'id': offre.id }) }}\" class=\"btn-default btn1\">Voir</a>
        {% else %}
            {% if offre.added %}
                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            {% else %}
                    <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>
            {% endif %}
                    <a href=\"{{ path('eco_job_anonymous_offre_integralite',{ 'id': offre.id }) }}\" class=\"btn-default btn1\">Voir</a>
        {% endif %}
    </div>

</div>
", "EcoJobAnonymousBundle:Default:details.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/details.html.twig");
    }
}
