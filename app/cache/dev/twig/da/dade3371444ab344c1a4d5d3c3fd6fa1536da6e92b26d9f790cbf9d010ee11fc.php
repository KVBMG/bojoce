<?php

/* EcoJobMessagerieBundle:Message:respond.html.twig */
class __TwigTemplate_9d2e32d55197fcd5a11dd7955d533c624a220580795e37341823208a43d3e0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMessagerieBundle::layout.html.twig", "EcoJobMessagerieBundle:Message:respond.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'mcontent' => array($this, 'block_mcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMessagerieBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb73b583780a29fe8f42db581e0bc808a91654fd51aae40eec97453ece9dcf1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb73b583780a29fe8f42db581e0bc808a91654fd51aae40eec97453ece9dcf1b->enter($__internal_cb73b583780a29fe8f42db581e0bc808a91654fd51aae40eec97453ece9dcf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMessagerieBundle:Message:respond.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb73b583780a29fe8f42db581e0bc808a91654fd51aae40eec97453ece9dcf1b->leave($__internal_cb73b583780a29fe8f42db581e0bc808a91654fd51aae40eec97453ece9dcf1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f41c2768519cbe72680770cc5cb7ae3f5f1f0334b3393aebc084bc9f0a17a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f41c2768519cbe72680770cc5cb7ae3f5f1f0334b3393aebc084bc9f0a17a5f->enter($__internal_7f41c2768519cbe72680770cc5cb7ae3f5f1f0334b3393aebc084bc9f0a17a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Message ";
        
        $__internal_7f41c2768519cbe72680770cc5cb7ae3f5f1f0334b3393aebc084bc9f0a17a5f->leave($__internal_7f41c2768519cbe72680770cc5cb7ae3f5f1f0334b3393aebc084bc9f0a17a5f_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_90d20c1e687ebed56e9802167de0a7661bec748777ab510ca41e0028db6c5fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d20c1e687ebed56e9802167de0a7661bec748777ab510ca41e0028db6c5fd2->enter($__internal_90d20c1e687ebed56e9802167de0a7661bec748777ab510ca41e0028db6c5fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "subject", array())) > 20)) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "subject", array()), 0, 20) . "..."), "html", null, true);
            echo "
    ";
        } else {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "subject", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_90d20c1e687ebed56e9802167de0a7661bec748777ab510ca41e0028db6c5fd2->leave($__internal_90d20c1e687ebed56e9802167de0a7661bec748777ab510ca41e0028db6c5fd2_prof);

    }

    // line 13
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_da75e855a1a85be4aef5f882e8cfab5850846034c511c945dad7df8c38c354cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da75e855a1a85be4aef5f882e8cfab5850846034c511c945dad7df8c38c354cf->enter($__internal_da75e855a1a85be4aef5f882e8cfab5850846034c511c945dad7df8c38c354cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Message ";
        
        $__internal_da75e855a1a85be4aef5f882e8cfab5850846034c511c945dad7df8c38c354cf->leave($__internal_da75e855a1a85be4aef5f882e8cfab5850846034c511c945dad7df8c38c354cf_prof);

    }

    // line 15
    public function block_mcontent($context, array $blocks = array())
    {
        $__internal_1dd9e54003114d428731498da66bde4c1a8b1fec64fce0baf82afaaf04e52b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd9e54003114d428731498da66bde4c1a8b1fec64fce0baf82afaaf04e52b6a->enter($__internal_1dd9e54003114d428731498da66bde4c1a8b1fec64fce0baf82afaaf04e52b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mcontent"));

        // line 16
        echo "    <div style=\"margin-left: 10px; margin-right: 20px;\">
        <div>
            <div>
                <h2><b>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "subject", array()), "html", null, true);
        echo "</b></h2>
            </div>
            <div>
                <p style=\"font-size: 18px;\"><b>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "sender", array()), "username", array()), "html", null, true);
        echo "</b> <span style=\"color:#c3a6a6; font-size: 12px;\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "date", array()), "d-m-Y H:i"), "html", null, true);
        echo "</span></p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-1\"></div>
                <div class=\"col-sm-11\">
                    <p>
                        ";
        // line 28
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "content", array()), "html", null, true));
        echo "
                    </p>
                </div>
            </div>
        </div>
        <hr/>

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "data", array()), "message", array()), "submessages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["submessage"]) {
            // line 36
            echo "            <div>
                <div>
                    <p style=\"font-size: 18px;\"><b>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["submessage"], "sender", array()), "username", array()), "html", null, true);
            echo "</b> <span style=\"color:#c3a6a6; font-size: 12px;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["submessage"], "date", array()), "d-m-Y H:i"), "html", null, true);
            echo "</span></p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-1\"></div>
                    <div class=\"col-sm-11\">
                        <p>
                            ";
            // line 44
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["submessage"], "content", array()), "html", null, true));
            echo "
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
            </div>
        </div>

        ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

        <div style=\"text-align: right;\">
            <input type=\"submit\" style=\"border-radius: 2px;\" class=\"btn-default btn1\" value=\"Répondre\">
        </div>

        ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_1dd9e54003114d428731498da66bde4c1a8b1fec64fce0baf82afaaf04e52b6a->leave($__internal_1dd9e54003114d428731498da66bde4c1a8b1fec64fce0baf82afaaf04e52b6a_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMessagerieBundle:Message:respond.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 67,  178 => 61,  171 => 57,  167 => 56,  160 => 52,  157 => 51,  144 => 44,  133 => 38,  129 => 36,  125 => 35,  115 => 28,  104 => 22,  98 => 19,  93 => 16,  87 => 15,  75 => 13,  64 => 9,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %} Message {% endblock %}

{% block content_title %}
    {% if form.vars.data.message.subject|length > 20 %}
        {{ form.vars.data.message.subject|slice(0,20) ~ \"...\" }}
    {% else %}
        {{ form.vars.data.message.subject }}
    {% endif %}
{% endblock %}

{% block content_stitle %} Message {% endblock %}

{% block mcontent %}
    <div style=\"margin-left: 10px; margin-right: 20px;\">
        <div>
            <div>
                <h2><b>{{ form.vars.data.message.subject }}</b></h2>
            </div>
            <div>
                <p style=\"font-size: 18px;\"><b>{{ form.vars.data.message.sender.username }}</b> <span style=\"color:#c3a6a6; font-size: 12px;\">{{ form.vars.data.message.date|date('d-m-Y H:i') }}</span></p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-1\"></div>
                <div class=\"col-sm-11\">
                    <p>
                        {{ form.vars.data.message.content|nl2br }}
                    </p>
                </div>
            </div>
        </div>
        <hr/>

        {% for submessage in form.vars.data.message.submessages %}
            <div>
                <div>
                    <p style=\"font-size: 18px;\"><b>{{ submessage.sender.username }}</b> <span style=\"color:#c3a6a6; font-size: 12px;\">{{ submessage.date|date('d-m-Y H:i') }}</span></p>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-1\"></div>
                    <div class=\"col-sm-11\">
                        <p>
                            {{ submessage.content|nl2br }}
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
        {% endfor %}

        {{ form_start(form, {'method': 'post', 'attr': {'class': 'form-horizontal'}}) }}

        <div class=\"form-group\">
            <div class=\"col-sm-12\">
                {{ form_widget(form.content) }}
                {{ form_errors(form.content) }}
            </div>
        </div>

        {{ form_rest(form) }}

        <div style=\"text-align: right;\">
            <input type=\"submit\" style=\"border-radius: 2px;\" class=\"btn-default btn1\" value=\"Répondre\">
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}", "EcoJobMessagerieBundle:Message:respond.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MessagerieBundle/Resources/views/Message/respond.html.twig");
    }
}
