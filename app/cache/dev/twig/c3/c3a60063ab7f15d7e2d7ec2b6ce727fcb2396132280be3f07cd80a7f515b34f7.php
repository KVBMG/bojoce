<?php

/* EcoJobAdminBundle:Admin:index.html.twig */
class __TwigTemplate_764e1fd4c0cc5e559103904619372ea418fce71b1416f5390404058172e44b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa62e773e0526921a28bf44ebb96c4b2671a7cd93094c3c9ec363684f0bef2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa62e773e0526921a28bf44ebb96c4b2671a7cd93094c3c9ec363684f0bef2ee->enter($__internal_aa62e773e0526921a28bf44ebb96c4b2671a7cd93094c3c9ec363684f0bef2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa62e773e0526921a28bf44ebb96c4b2671a7cd93094c3c9ec363684f0bef2ee->leave($__internal_aa62e773e0526921a28bf44ebb96c4b2671a7cd93094c3c9ec363684f0bef2ee_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_2bdaeacf56244c3cc04368bd1840d7dd3336b035948f7bceae5d25af2033efab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdaeacf56244c3cc04368bd1840d7dd3336b035948f7bceae5d25af2033efab->enter($__internal_2bdaeacf56244c3cc04368bd1840d7dd3336b035948f7bceae5d25af2033efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Administration";
        
        $__internal_2bdaeacf56244c3cc04368bd1840d7dd3336b035948f7bceae5d25af2033efab->leave($__internal_2bdaeacf56244c3cc04368bd1840d7dd3336b035948f7bceae5d25af2033efab_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
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
{% block titre %}Administration{% endblock %}", "EcoJobAdminBundle:Admin:index.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
