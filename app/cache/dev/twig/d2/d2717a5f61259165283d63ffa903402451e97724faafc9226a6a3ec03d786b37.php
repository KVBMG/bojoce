<?php

/* EcoJobMainBundle::layout.html.twig */
class __TwigTemplate_a6d444887d24e550f82ff67361abf04f99b47b62ce781e6a2a75a4bfd6212a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9166a31ae3d0f6eb81a4c0be17e9817343be585084a058a644efc8a8c15b663c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9166a31ae3d0f6eb81a4c0be17e9817343be585084a058a644efc8a8c15b663c->enter($__internal_9166a31ae3d0f6eb81a4c0be17e9817343be585084a058a644efc8a8c15b663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9166a31ae3d0f6eb81a4c0be17e9817343be585084a058a644efc8a8c15b663c->leave($__internal_9166a31ae3d0f6eb81a4c0be17e9817343be585084a058a644efc8a8c15b663c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d31be956c7c036f0e7c0f84ef5e42cfdc47f261ad05124c9f0e55fb2a3356f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31be956c7c036f0e7c0f84ef5e42cfdc47f261ad05124c9f0e55fb2a3356f8d->enter($__internal_d31be956c7c036f0e7c0f84ef5e42cfdc47f261ad05124c9f0e55fb2a3356f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
      
";
        
        $__internal_d31be956c7c036f0e7c0f84ef5e42cfdc47f261ad05124c9f0e55fb2a3356f8d->leave($__internal_d31be956c7c036f0e7c0f84ef5e42cfdc47f261ad05124c9f0e55fb2a3356f8d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d26bc38957aabee548693b85254ad2b011f68bdd018551c89264017b97040c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26bc38957aabee548693b85254ad2b011f68bdd018551c89264017b97040c54->enter($__internal_d26bc38957aabee548693b85254ad2b011f68bdd018551c89264017b97040c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d26bc38957aabee548693b85254ad2b011f68bdd018551c89264017b97040c54->leave($__internal_d26bc38957aabee548693b85254ad2b011f68bdd018551c89264017b97040c54_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block content %}
{{parent()}}
      
{% endblock %}
{% block body %}
{% endblock %}
", "EcoJobMainBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MainBundle/Resources/views/layout.html.twig");
    }
}
