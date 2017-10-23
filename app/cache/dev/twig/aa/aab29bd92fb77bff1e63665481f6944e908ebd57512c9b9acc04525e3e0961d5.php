<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a0f573afd58f777926080731efd23bf4d58c9facf47241c68cdf9252eb611cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7f30acf8fea2222d5d32afb2b4119ee6e97ddd3a18c4b253cadc40ffa64332e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f30acf8fea2222d5d32afb2b4119ee6e97ddd3a18c4b253cadc40ffa64332e5->enter($__internal_7f30acf8fea2222d5d32afb2b4119ee6e97ddd3a18c4b253cadc40ffa64332e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f30acf8fea2222d5d32afb2b4119ee6e97ddd3a18c4b253cadc40ffa64332e5->leave($__internal_7f30acf8fea2222d5d32afb2b4119ee6e97ddd3a18c4b253cadc40ffa64332e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_601e18699cbb8d5d8714d13aacb26731103adb75ed67b8378dab2a753aabf9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601e18699cbb8d5d8714d13aacb26731103adb75ed67b8378dab2a753aabf9f4->enter($__internal_601e18699cbb8d5d8714d13aacb26731103adb75ed67b8378dab2a753aabf9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_601e18699cbb8d5d8714d13aacb26731103adb75ed67b8378dab2a753aabf9f4->leave($__internal_601e18699cbb8d5d8714d13aacb26731103adb75ed67b8378dab2a753aabf9f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
