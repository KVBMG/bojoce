<?php

/* EcoJobMessagerieBundle:Message:list.html.twig */
class __TwigTemplate_a76904de3bf3abef4164941f75f8947d3beb5cb634f117790e9f3c3be4d22e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'mcontent' => array($this, 'block_mcontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMessagerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_400cab3b7c4a249e84a78516ca63d3ec3b12441824e166c4e4d30f22028fa79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400cab3b7c4a249e84a78516ca63d3ec3b12441824e166c4e4d30f22028fa79f->enter($__internal_400cab3b7c4a249e84a78516ca63d3ec3b12441824e166c4e4d30f22028fa79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_400cab3b7c4a249e84a78516ca63d3ec3b12441824e166c4e4d30f22028fa79f->leave($__internal_400cab3b7c4a249e84a78516ca63d3ec3b12441824e166c4e4d30f22028fa79f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d32ff176481f117585cf4142f665b7dc06ff6863c6fda8903e15b99f597e092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d32ff176481f117585cf4142f665b7dc06ff6863c6fda8903e15b99f597e092->enter($__internal_6d32ff176481f117585cf4142f665b7dc06ff6863c6fda8903e15b99f597e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Messages ";
        
        $__internal_6d32ff176481f117585cf4142f665b7dc06ff6863c6fda8903e15b99f597e092->leave($__internal_6d32ff176481f117585cf4142f665b7dc06ff6863c6fda8903e15b99f597e092_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_63a042a8021257627c498baec17e43f91a1604698abba279da5646f58d5cb390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a042a8021257627c498baec17e43f91a1604698abba279da5646f58d5cb390->enter($__internal_63a042a8021257627c498baec17e43f91a1604698abba279da5646f58d5cb390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Messages ";
        
        $__internal_63a042a8021257627c498baec17e43f91a1604698abba279da5646f58d5cb390->leave($__internal_63a042a8021257627c498baec17e43f91a1604698abba279da5646f58d5cb390_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_a37b3250194232fcde60ec099acba7acfe2146d5bea43d4865feba7131d038d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37b3250194232fcde60ec099acba7acfe2146d5bea43d4865feba7131d038d7->enter($__internal_a37b3250194232fcde60ec099acba7acfe2146d5bea43d4865feba7131d038d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Messages ";
        
        $__internal_a37b3250194232fcde60ec099acba7acfe2146d5bea43d4865feba7131d038d7->leave($__internal_a37b3250194232fcde60ec099acba7acfe2146d5bea43d4865feba7131d038d7_prof);

    }

    // line 9
    public function block_mcontent($context, array $blocks = array())
    {
        $__internal_846a9f62bf28ca7afed3acbea08c315be037fdb5e6f5d57ba56c5b28fa13f85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846a9f62bf28ca7afed3acbea08c315be037fdb5e6f5d57ba56c5b28fa13f85b->enter($__internal_846a9f62bf28ca7afed3acbea08c315be037fdb5e6f5d57ba56c5b28fa13f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mcontent"));

        // line 10
        echo "    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <td></td>
                <th>Membre</th>
                <th>Offre</th>
                <th>Contenu</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "            ";
            $context["style_tr"] = "style=\"cursor:pointer;\"";
            // line 24
            echo "            ";
            $context["style_voir"] = "";
            // line 25
            echo "            ";
            $context["envelop"] = "fa-envelope-open-o";
            // line 26
            echo "            ";
            if ( !$this->getAttribute($context["message"], "isRead", array())) {
                // line 27
                echo "                ";
                $context["style_tr"] = "style=\"cursor:pointer;background-color:#cdf2f2;color:#6b6363;font-weight:bold;\"";
                // line 28
                echo "                ";
                $context["style_voir"] = "style=\"color:#6b6363;\"";
                // line 29
                echo "                ";
                $context["envelop"] = "fa-envelope";
                // line 30
                echo "            ";
            }
            // line 31
            echo "            <tr ";
            echo ($context["style_tr"] ?? $this->getContext($context, "style_tr"));
            echo " class=\"clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_messagerie_respond", array("message_id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">
                <td align=\"center\"><i class=\"fa ";
            // line 32
            echo twig_escape_filter($this->env, ($context["envelop"] ?? $this->getContext($context, "envelop")), "html", null, true);
            echo "\"></i></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "member", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                <td align=\"center\">
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_messagerie_respond", array("message_id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"  ";
            echo ($context["style_voir"] ?? $this->getContext($context, "style_voir"));
            echo " title=\"Voir\"><i class=\"fa fa-eye fa-2x\"> </i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_846a9f62bf28ca7afed3acbea08c315be037fdb5e6f5d57ba56c5b28fa13f85b->leave($__internal_846a9f62bf28ca7afed3acbea08c315be037fdb5e6f5d57ba56c5b28fa13f85b_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f68471374273b2d304d8d571db42d0bf192c3d8fee1838ea8f73f5877bb4c432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68471374273b2d304d8d571db42d0bf192c3d8fee1838ea8f73f5877bb4c432->enter($__internal_f68471374273b2d304d8d571db42d0bf192c3d8fee1838ea8f73f5877bb4c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".clickable-row\").click(function() {
                window.location = \$(this).data(\"href\");
            });
        });
    </script>
";
        
        $__internal_f68471374273b2d304d8d571db42d0bf192c3d8fee1838ea8f73f5877bb4c432->leave($__internal_f68471374273b2d304d8d571db42d0bf192c3d8fee1838ea8f73f5877bb4c432_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  171 => 46,  162 => 42,  150 => 38,  145 => 36,  141 => 35,  137 => 34,  133 => 33,  129 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  94 => 22,  80 => 10,  74 => 9,  62 => 7,  50 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobMessagerieBundle::layout.html.twig\"%}

{% block title %} Messages {% endblock %}

{% block content_title %} Messages {% endblock %}

{% block content_stitle %} Messages {% endblock %}

{% block mcontent %}
    <table class=\"table table-bordered table-responsive\">
        <thead>
            <tr>
                <td></td>
                <th>Membre</th>
                <th>Offre</th>
                <th>Contenu</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            {% set style_tr = 'style=\"cursor:pointer;\"' %}
            {% set style_voir = '' %}
            {% set envelop = \"fa-envelope-open-o\" %}
            {% if not message.isRead %}
                {% set style_tr = 'style=\"cursor:pointer;background-color:#cdf2f2;color:#6b6363;font-weight:bold;\"' %}
                {% set style_voir = 'style=\"color:#6b6363;\"' %}
                {% set envelop = \"fa-envelope\" %}
            {% endif %}
            <tr {% autoescape 'html' %}{{ style_tr|raw }}{% endautoescape %} class=\"clickable-row\" data-href=\"{{ path('eco_job_messagerie_respond', {'message_id' : message.id}) }}\">
                <td align=\"center\"><i class=\"fa {{ envelop }}\"></i></td>
                <td>{{ message.member }}</td>
                <td>{{ message.subject }}</td>
                <td>{{ message.content }}</td>
                <td>{{ message.date|date('d-m-Y H:i') }}</td>
                <td align=\"center\">
                    <a href=\"{{ path('eco_job_messagerie_respond', {'message_id' : message.id}) }}\"  {% autoescape 'html' %}{{ style_voir|raw }}{% endautoescape %} title=\"Voir\"><i class=\"fa fa-eye fa-2x\"> </i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".clickable-row\").click(function() {
                window.location = \$(this).data(\"href\");
            });
        });
    </script>
{% endblock %}", "EcoJobMessagerieBundle:Message:list.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/list.html.twig");
    }
}
