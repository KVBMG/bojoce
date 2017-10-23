<?php

/* EcoJobCandidatBundle:AlertMail:show.html.twig */
class __TwigTemplate_c72246b43c9bfe060c940eb737da4d0a280c83020c350dc954295173b7a4263c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:AlertMail:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf762fb2ed9b9fa47505b71a3fa500b9b4c73f0dc11800ffbeba67123f79ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf762fb2ed9b9fa47505b71a3fa500b9b4c73f0dc11800ffbeba67123f79ff3->enter($__internal_aaf762fb2ed9b9fa47505b71a3fa500b9b4c73f0dc11800ffbeba67123f79ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:AlertMail:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf762fb2ed9b9fa47505b71a3fa500b9b4c73f0dc11800ffbeba67123f79ff3->leave($__internal_aaf762fb2ed9b9fa47505b71a3fa500b9b4c73f0dc11800ffbeba67123f79ff3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_334896974997438846203e02326f56f709db1f2e564fb5b1e3ca4b9393c64fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334896974997438846203e02326f56f709db1f2e564fb5b1e3ca4b9393c64fe4->enter($__internal_334896974997438846203e02326f56f709db1f2e564fb5b1e3ca4b9393c64fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes Alertes";
        
        $__internal_334896974997438846203e02326f56f709db1f2e564fb5b1e3ca4b9393c64fe4->leave($__internal_334896974997438846203e02326f56f709db1f2e564fb5b1e3ca4b9393c64fe4_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e69272aef0f7812d074a3f91455646431794c86221c3d72c4e7088fb3bb04fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69272aef0f7812d074a3f91455646431794c86221c3d72c4e7088fb3bb04fa6->enter($__internal_e69272aef0f7812d074a3f91455646431794c86221c3d72c4e7088fb3bb04fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_e69272aef0f7812d074a3f91455646431794c86221c3d72c4e7088fb3bb04fa6->leave($__internal_e69272aef0f7812d074a3f91455646431794c86221c3d72c4e7088fb3bb04fa6_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_5c810978a7108e1f0e8f26b8999cea2faf696aa1ea032669b7d803b177a4cea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c810978a7108e1f0e8f26b8999cea2faf696aa1ea032669b7d803b177a4cea9->enter($__internal_5c810978a7108e1f0e8f26b8999cea2faf696aa1ea032669b7d803b177a4cea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mes alertes mail ";
        
        $__internal_5c810978a7108e1f0e8f26b8999cea2faf696aa1ea032669b7d803b177a4cea9->leave($__internal_5c810978a7108e1f0e8f26b8999cea2faf696aa1ea032669b7d803b177a4cea9_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_e5b7e9078ce126eb7fffffd23d39779f2b8adc1c8f08d98f9263923eb94f360f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b7e9078ce126eb7fffffd23d39779f2b8adc1c8f08d98f9263923eb94f360f->enter($__internal_e5b7e9078ce126eb7fffffd23d39779f2b8adc1c8f08d98f9263923eb94f360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    <div class=\"latest_news\">
        <div class=\"title7\">Mes alertes mail</div>
        <div>
            ";
        // line 13
        if ((twig_length_filter($this->env, ($context["alerts"] ?? $this->getContext($context, "alerts"))) > 0)) {
            // line 14
            echo "                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Mot clés</th>
                        <th>Contrat</th>
                        <th>Experience</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 24
                echo "                        <tr>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "criter", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "contrat", array(), "array"), "html", null, true);
                echo "</td>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["alert"], "experience", array(), "array"), "html", null, true);
                echo "</td>
                            <td><a style=\"text-decoration:none; color: #ff4955;\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_alert_mail_delete", array("id" => $this->getAttribute($context["alert"], "id", array(), "array"))), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i> Supprimer</a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td><a style=\"text-decoration:none; color: #ff4955;\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_alert_mail_delete_all");
            echo "\"><i class=\"fa fa-trash\"></i> Tout supprimer</a></td>
                    </tr>
                    </tfoot>
                </table>
            ";
        } else {
            // line 39
            echo "                <div>
                    <p>Aucune alerte!</p>
                </div>
            ";
        }
        // line 43
        echo "        </div>
    </div>
";
        
        $__internal_e5b7e9078ce126eb7fffffd23d39779f2b8adc1c8f08d98f9263923eb94f360f->leave($__internal_e5b7e9078ce126eb7fffffd23d39779f2b8adc1c8f08d98f9263923eb94f360f_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:AlertMail:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 43,  138 => 39,  130 => 34,  125 => 31,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  101 => 24,  97 => 23,  86 => 14,  84 => 13,  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %} Mes Alertes{% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Mes alertes mail {% endblock %}

{% block scontent %}
    <div class=\"latest_news\">
        <div class=\"title7\">Mes alertes mail</div>
        <div>
            {% if alerts|length > 0 %}
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Mot clés</th>
                        <th>Contrat</th>
                        <th>Experience</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for alert in alerts %}
                        <tr>
                            <td>{{ alert['criter']}}</td>
                            <td>{{ alert['contrat']}}</td>
                            <td>{{ alert['experience']}}</td>
                            <td><a style=\"text-decoration:none; color: #ff4955;\" href=\"{{ path('eco_job_candidat_alert_mail_delete',{'id': alert['id']})}}\"><i class=\"fa fa-trash\"></i> Supprimer</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><a style=\"text-decoration:none; color: #ff4955;\" href=\"{{ path('eco_job_candidat_alert_mail_delete_all')}}\"><i class=\"fa fa-trash\"></i> Tout supprimer</a></td>
                    </tr>
                    </tfoot>
                </table>
            {% else %}
                <div>
                    <p>Aucune alerte!</p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "EcoJobCandidatBundle:AlertMail:show.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/AlertMail/show.html.twig");
    }
}
