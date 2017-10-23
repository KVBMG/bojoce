<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ad8fcf186101dcc4f941a9e51b8dd748bfd890932041c188fe0444273a6513c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac5f883a2959e5fb5cf00a0cec63ae2bab76ec10ecc30bd7e2b06bc1182f7fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5f883a2959e5fb5cf00a0cec63ae2bab76ec10ecc30bd7e2b06bc1182f7fa9->enter($__internal_ac5f883a2959e5fb5cf00a0cec63ae2bab76ec10ecc30bd7e2b06bc1182f7fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5f883a2959e5fb5cf00a0cec63ae2bab76ec10ecc30bd7e2b06bc1182f7fa9->leave($__internal_ac5f883a2959e5fb5cf00a0cec63ae2bab76ec10ecc30bd7e2b06bc1182f7fa9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2e401eb41ac54cf7c66a3a025d8b02e6244621bdb96a891c9d1fd63b4f5e590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e401eb41ac54cf7c66a3a025d8b02e6244621bdb96a891c9d1fd63b4f5e590->enter($__internal_d2e401eb41ac54cf7c66a3a025d8b02e6244621bdb96a891c9d1fd63b4f5e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_d2e401eb41ac54cf7c66a3a025d8b02e6244621bdb96a891c9d1fd63b4f5e590->leave($__internal_d2e401eb41ac54cf7c66a3a025d8b02e6244621bdb96a891c9d1fd63b4f5e590_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aa6cef4e012b38dbd03c5855d6bdc5dfc1ee91f5c09bf0d48d33a499c149952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa6cef4e012b38dbd03c5855d6bdc5dfc1ee91f5c09bf0d48d33a499c149952->enter($__internal_0aa6cef4e012b38dbd03c5855d6bdc5dfc1ee91f5c09bf0d48d33a499c149952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_0aa6cef4e012b38dbd03c5855d6bdc5dfc1ee91f5c09bf0d48d33a499c149952->leave($__internal_0aa6cef4e012b38dbd03c5855d6bdc5dfc1ee91f5c09bf0d48d33a499c149952_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fb23150539c13456cfd1acfc8f003c747cb954971a1450033c9013a01b6ce62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb23150539c13456cfd1acfc8f003c747cb954971a1450033c9013a01b6ce62a->enter($__internal_fb23150539c13456cfd1acfc8f003c747cb954971a1450033c9013a01b6ce62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Inscription ";
        
        $__internal_fb23150539c13456cfd1acfc8f003c747cb954971a1450033c9013a01b6ce62a->leave($__internal_fb23150539c13456cfd1acfc8f003c747cb954971a1450033c9013a01b6ce62a_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_ed6496453adf332435a772ac8824ecea59ce11bb4da485dab182a664e9045515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6496453adf332435a772ac8824ecea59ce11bb4da485dab182a664e9045515->enter($__internal_ed6496453adf332435a772ac8824ecea59ce11bb4da485dab182a664e9045515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "S'inscrire ";
        
        $__internal_ed6496453adf332435a772ac8824ecea59ce11bb4da485dab182a664e9045515->leave($__internal_ed6496453adf332435a772ac8824ecea59ce11bb4da485dab182a664e9045515_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ecf1c2f4f0a2838d3c9daa648e56b980becd8cd09f5b05806d73787b3f1a870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecf1c2f4f0a2838d3c9daa648e56b980becd8cd09f5b05806d73787b3f1a870->enter($__internal_2ecf1c2f4f0a2838d3c9daa648e56b980becd8cd09f5b05806d73787b3f1a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">S'inscrire</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
              <strong> Inscription réussi!</strong> 
                <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
                ";
        // line 28
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 29
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                ";
        }
        // line 30
        echo "              
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_2ecf1c2f4f0a2838d3c9daa648e56b980becd8cd09f5b05806d73787b3f1a870->leave($__internal_2ecf1c2f4f0a2838d3c9daa648e56b980becd8cd09f5b05806d73787b3f1a870_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 30,  121 => 29,  119 => 28,  115 => 27,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobMainBundle::layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    {{parent()}}
  <link href=\"{{ path('captcha_layout_stylesheet_url') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block title %}Inscription{% endblock %}

{% block content_title %}Inscription {% endblock %}

{% block content_stitle %}S'inscrire {% endblock %}

{% block content %}
{{parent()}}
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">S'inscrire</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
              <strong> Inscription réussi!</strong> 
                <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
                {% if targetUrl %}
                <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
                {% endif %}              
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
