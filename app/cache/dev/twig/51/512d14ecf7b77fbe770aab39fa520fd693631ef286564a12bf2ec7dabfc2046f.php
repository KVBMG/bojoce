<?php

/* EcoJobUserBundle:Registration:recruteur_form.html.twig */
class __TwigTemplate_0978ac70cf79e6522fee27523999f46f9e72cf74d4ec2259d3c7fd4c4c93f5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "EcoJobUserBundle:Registration:recruteur_form.html.twig", 1);
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
        $__internal_9fe63e62991cdb7906e21a5c1e3c0eacb68fdb94d1de94b7c6a0325b5518358e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe63e62991cdb7906e21a5c1e3c0eacb68fdb94d1de94b7c6a0325b5518358e->enter($__internal_9fe63e62991cdb7906e21a5c1e3c0eacb68fdb94d1de94b7c6a0325b5518358e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobUserBundle:Registration:recruteur_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe63e62991cdb7906e21a5c1e3c0eacb68fdb94d1de94b7c6a0325b5518358e->leave($__internal_9fe63e62991cdb7906e21a5c1e3c0eacb68fdb94d1de94b7c6a0325b5518358e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1c1a16ccff5eccb218752808106b14aec5baeaeb21d24833d1599bbd3907e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c1a16ccff5eccb218752808106b14aec5baeaeb21d24833d1599bbd3907e09->enter($__internal_d1c1a16ccff5eccb218752808106b14aec5baeaeb21d24833d1599bbd3907e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        // line 5
        echo "
    <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recruteur_registration");
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
        
        $__internal_d1c1a16ccff5eccb218752808106b14aec5baeaeb21d24833d1599bbd3907e09->leave($__internal_d1c1a16ccff5eccb218752808106b14aec5baeaeb21d24833d1599bbd3907e09_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobUserBundle:Registration:recruteur_form.html.twig";
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

    <form action=\"{{ path('recruteur_registration') }}\" {{ form_enctype(form) }} method=\"POST\">
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
    </form>
{% endblock fos_user_content %}", "EcoJobUserBundle:Registration:recruteur_form.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/UserBundle/Resources/views/Registration/recruteur_form.html.twig");
    }
}
