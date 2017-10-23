<?php

/* EcoJobAdminBundle::layout2.html.twig */
class __TwigTemplate_7d1efaef051c55e0d65233383abe7ec75c1e929a6a948c12609167b22a109bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAdminBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'content' => array($this, 'block_content'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c82f2ded589478f2da26beb38f959fe045ec9fd3d0cac9da36dcd38f58cbed85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82f2ded589478f2da26beb38f959fe045ec9fd3d0cac9da36dcd38f58cbed85->enter($__internal_c82f2ded589478f2da26beb38f959fe045ec9fd3d0cac9da36dcd38f58cbed85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82f2ded589478f2da26beb38f959fe045ec9fd3d0cac9da36dcd38f58cbed85->leave($__internal_c82f2ded589478f2da26beb38f959fe045ec9fd3d0cac9da36dcd38f58cbed85_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_53f92837c66c4a80f3ca80a4e95563f0c3e9dd15b3f7686883409e62f74209f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f92837c66c4a80f3ca80a4e95563f0c3e9dd15b3f7686883409e62f74209f0->enter($__internal_53f92837c66c4a80f3ca80a4e95563f0c3e9dd15b3f7686883409e62f74209f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_53f92837c66c4a80f3ca80a4e95563f0c3e9dd15b3f7686883409e62f74209f0->leave($__internal_53f92837c66c4a80f3ca80a4e95563f0c3e9dd15b3f7686883409e62f74209f0_prof);

    }

    // line 3
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_0792e078b4a494222012acf771b66f24e5443245dc5a63331263a0df549ae825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0792e078b4a494222012acf771b66f24e5443245dc5a63331263a0df549ae825->enter($__internal_0792e078b4a494222012acf771b66f24e5443245dc5a63331263a0df549ae825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Administration ";
        
        $__internal_0792e078b4a494222012acf771b66f24e5443245dc5a63331263a0df549ae825->leave($__internal_0792e078b4a494222012acf771b66f24e5443245dc5a63331263a0df549ae825_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc073b67fed529d1b9e3a0b9e910be095f87eecff6c22aabdfa399d920c218d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc073b67fed529d1b9e3a0b9e910be095f87eecff6c22aabdfa399d920c218d3->enter($__internal_dc073b67fed529d1b9e3a0b9e910be095f87eecff6c22aabdfa399d920c218d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 

    ";
        // line 7
        $this->displayBlock('scontent', $context, $blocks);
        // line 9
        echo "    

";
        
        $__internal_dc073b67fed529d1b9e3a0b9e910be095f87eecff6c22aabdfa399d920c218d3->leave($__internal_dc073b67fed529d1b9e3a0b9e910be095f87eecff6c22aabdfa399d920c218d3_prof);

    }

    // line 7
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_ee6c263ef1384fb2fd9523498127b4a6a1f511d69704022a1c162c843895a83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6c263ef1384fb2fd9523498127b4a6a1f511d69704022a1c162c843895a83e->enter($__internal_ee6c263ef1384fb2fd9523498127b4a6a1f511d69704022a1c162c843895a83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 8
        echo "        <div class=\"title6\">Contenu pour un administrateur</div>
    ";
        
        $__internal_ee6c263ef1384fb2fd9523498127b4a6a1f511d69704022a1c162c843895a83e->leave($__internal_ee6c263ef1384fb2fd9523498127b4a6a1f511d69704022a1c162c843895a83e_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  84 => 7,  75 => 9,  73 => 7,  68 => 5,  60 => 4,  48 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}{% endblock %}
{% block content_stitle %} Administration {% endblock %}
{% block content %} 
    {{parent()}} 

    {% block scontent %}
        <div class=\"title6\">Contenu pour un administrateur</div>
    {% endblock %}    

{% endblock %}                ", "EcoJobAdminBundle::layout2.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/layout2.html.twig");
    }
}
