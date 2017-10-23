<?php

/* EcoJobAdminBundle:Admin:index.html.twig */
class __TwigTemplate_f589bdaad5acdf78d7f085350a8c4b034a905f461951e37b913af76058d633a2 extends Twig_Template
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
        $__internal_0337dcad91dcc24772d214f1bcc6dc84d45350e43ab05afc022be8343a2e5778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0337dcad91dcc24772d214f1bcc6dc84d45350e43ab05afc022be8343a2e5778->enter($__internal_0337dcad91dcc24772d214f1bcc6dc84d45350e43ab05afc022be8343a2e5778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0337dcad91dcc24772d214f1bcc6dc84d45350e43ab05afc022be8343a2e5778->leave($__internal_0337dcad91dcc24772d214f1bcc6dc84d45350e43ab05afc022be8343a2e5778_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_eadbb69cd13ccdec76aad42c38e459f458fb94718b04eacca45dc3fc6acc1757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadbb69cd13ccdec76aad42c38e459f458fb94718b04eacca45dc3fc6acc1757->enter($__internal_eadbb69cd13ccdec76aad42c38e459f458fb94718b04eacca45dc3fc6acc1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Administration";
        
        $__internal_eadbb69cd13ccdec76aad42c38e459f458fb94718b04eacca45dc3fc6acc1757->leave($__internal_eadbb69cd13ccdec76aad42c38e459f458fb94718b04eacca45dc3fc6acc1757_prof);

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
