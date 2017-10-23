<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f7379baff66074cfd457733eafddd8b6a1e1e59f81ff029bae4e41ebe5989e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f720f917d4482bb43a81d6cb665a3bd3c65b28976afe40594e3e73af5c797858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f720f917d4482bb43a81d6cb665a3bd3c65b28976afe40594e3e73af5c797858->enter($__internal_f720f917d4482bb43a81d6cb665a3bd3c65b28976afe40594e3e73af5c797858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f720f917d4482bb43a81d6cb665a3bd3c65b28976afe40594e3e73af5c797858->leave($__internal_f720f917d4482bb43a81d6cb665a3bd3c65b28976afe40594e3e73af5c797858_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47f5e2e9cfde9aa9d6641eecec998d0ce9b78ea78db4da4a81e362057b0bf4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f5e2e9cfde9aa9d6641eecec998d0ce9b78ea78db4da4a81e362057b0bf4fb->enter($__internal_47f5e2e9cfde9aa9d6641eecec998d0ce9b78ea78db4da4a81e362057b0bf4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_47f5e2e9cfde9aa9d6641eecec998d0ce9b78ea78db4da4a81e362057b0bf4fb->leave($__internal_47f5e2e9cfde9aa9d6641eecec998d0ce9b78ea78db4da4a81e362057b0bf4fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
