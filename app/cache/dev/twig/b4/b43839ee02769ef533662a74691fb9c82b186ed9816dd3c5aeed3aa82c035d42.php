<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_43d99dc31e7de7873aa353ba0842ce6b2fe619a95c9544064f92bf21913ef6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_816beda33ee32bbd1deaaea245cf4f95d97ccbbf4472b5c9616ce5d949154ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816beda33ee32bbd1deaaea245cf4f95d97ccbbf4472b5c9616ce5d949154ab4->enter($__internal_816beda33ee32bbd1deaaea245cf4f95d97ccbbf4472b5c9616ce5d949154ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816beda33ee32bbd1deaaea245cf4f95d97ccbbf4472b5c9616ce5d949154ab4->leave($__internal_816beda33ee32bbd1deaaea245cf4f95d97ccbbf4472b5c9616ce5d949154ab4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_916733933803c2a62e4d0d911e2d32804fd93b4c4b228607310de7c8dd484367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916733933803c2a62e4d0d911e2d32804fd93b4c4b228607310de7c8dd484367->enter($__internal_916733933803c2a62e4d0d911e2d32804fd93b4c4b228607310de7c8dd484367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_916733933803c2a62e4d0d911e2d32804fd93b4c4b228607310de7c8dd484367->leave($__internal_916733933803c2a62e4d0d911e2d32804fd93b4c4b228607310de7c8dd484367_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
