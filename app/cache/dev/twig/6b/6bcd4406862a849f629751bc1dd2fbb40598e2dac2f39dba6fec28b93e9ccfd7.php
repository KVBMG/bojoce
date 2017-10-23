<?php

/* EcoJobUserBundle:Registration:candidat_form.html.twig */
class __TwigTemplate_1794ae3bd1d437e3c9687821aa78deeb230d83e249a7ab585e9f3eab486fa4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "EcoJobUserBundle:Registration:candidat_form.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ac09659d400f4d81c866f66902ebcb8483ce23beb5dd4b8b1199650898d8973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac09659d400f4d81c866f66902ebcb8483ce23beb5dd4b8b1199650898d8973->enter($__internal_9ac09659d400f4d81c866f66902ebcb8483ce23beb5dd4b8b1199650898d8973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobUserBundle:Registration:candidat_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac09659d400f4d81c866f66902ebcb8483ce23beb5dd4b8b1199650898d8973->leave($__internal_9ac09659d400f4d81c866f66902ebcb8483ce23beb5dd4b8b1199650898d8973_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2827106d26188a3985d20edbfe2fb03f93f82b5af0664ee82679de57822be234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2827106d26188a3985d20edbfe2fb03f93f82b5af0664ee82679de57822be234->enter($__internal_2827106d26188a3985d20edbfe2fb03f93f82b5af0664ee82679de57822be234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        // line 5
        echo "
    <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("candidat_registration");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
";
        
        $__internal_2827106d26188a3985d20edbfe2fb03f93f82b5af0664ee82679de57822be234->leave($__internal_2827106d26188a3985d20edbfe2fb03f93f82b5af0664ee82679de57822be234_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobUserBundle:Registration:candidat_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}

    <form action=\"{{ path('candidat_registration') }}\" {{ form_enctype(form) }} method=\"POST\">
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
    </form>
{% endblock fos_user_content %}", "EcoJobUserBundle:Registration:candidat_form.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/UserBundle/Resources/views/Registration/candidat_form.html.twig");
    }
}
