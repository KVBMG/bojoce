<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_700fb7deacbd45b9b0088b778554d1c2f2aaa55a5adac548f10305d93c010a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_14a50be3a22e3a7d7d781833a67398883dcd620d19edccfdc74e949a5b48fe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a50be3a22e3a7d7d781833a67398883dcd620d19edccfdc74e949a5b48fe60->enter($__internal_14a50be3a22e3a7d7d781833a67398883dcd620d19edccfdc74e949a5b48fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a50be3a22e3a7d7d781833a67398883dcd620d19edccfdc74e949a5b48fe60->leave($__internal_14a50be3a22e3a7d7d781833a67398883dcd620d19edccfdc74e949a5b48fe60_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_973f3c9c911da842ab068427d031ba4efa4ea5a09dec3fa2169afc3a00c6044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973f3c9c911da842ab068427d031ba4efa4ea5a09dec3fa2169afc3a00c6044c->enter($__internal_973f3c9c911da842ab068427d031ba4efa4ea5a09dec3fa2169afc3a00c6044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_973f3c9c911da842ab068427d031ba4efa4ea5a09dec3fa2169afc3a00c6044c->leave($__internal_973f3c9c911da842ab068427d031ba4efa4ea5a09dec3fa2169afc3a00c6044c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a437075eb0d07fc86fa52760894241e20c7317faf57b0a6d0e4e845b8118aafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a437075eb0d07fc86fa52760894241e20c7317faf57b0a6d0e4e845b8118aafb->enter($__internal_a437075eb0d07fc86fa52760894241e20c7317faf57b0a6d0e4e845b8118aafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_a437075eb0d07fc86fa52760894241e20c7317faf57b0a6d0e4e845b8118aafb->leave($__internal_a437075eb0d07fc86fa52760894241e20c7317faf57b0a6d0e4e845b8118aafb_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_43875de446e6c933808c5d5efeca33ad3553bbd884060eaa4f65193966d90727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43875de446e6c933808c5d5efeca33ad3553bbd884060eaa4f65193966d90727->enter($__internal_43875de446e6c933808c5d5efeca33ad3553bbd884060eaa4f65193966d90727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Inscription ";
        
        $__internal_43875de446e6c933808c5d5efeca33ad3553bbd884060eaa4f65193966d90727->leave($__internal_43875de446e6c933808c5d5efeca33ad3553bbd884060eaa4f65193966d90727_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_1e655964ae1cf9a4ce1a02ff8db0d591abf62bba8ee83fece7bc0b66f5deaa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e655964ae1cf9a4ce1a02ff8db0d591abf62bba8ee83fece7bc0b66f5deaa15->enter($__internal_1e655964ae1cf9a4ce1a02ff8db0d591abf62bba8ee83fece7bc0b66f5deaa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "S'inscrire ";
        
        $__internal_1e655964ae1cf9a4ce1a02ff8db0d591abf62bba8ee83fece7bc0b66f5deaa15->leave($__internal_1e655964ae1cf9a4ce1a02ff8db0d591abf62bba8ee83fece7bc0b66f5deaa15_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3b57ab30e0f4580d5a0dbd59bcb0b99ce2a9d8c05b00c055e07ef83d013b4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b57ab30e0f4580d5a0dbd59bcb0b99ce2a9d8c05b00c055e07ef83d013b4e7->enter($__internal_d3b57ab30e0f4580d5a0dbd59bcb0b99ce2a9d8c05b00c055e07ef83d013b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <div class=\"title6 text-uppercase\">Contact Information</div>
          Phone:
        <div class=\"phone3\">1-800-123-1234</div>
          Email:
        <div class=\"mail3\"><a href=\"#\">example@website.com</a></div>
          Address:
        <div class=\"address3\">8901 Marmora Road,<br>
Glasgow, D04 89GR.</div>
        <p>
          Follow Us:
        </p>
        <div class=\"social3_wrapper\">
          <ul class=\"social3 clearfix\">
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-6\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">S'inscrire</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            ";
        // line 46
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 46)->display($context);
        // line 47
        echo "          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_d3b57ab30e0f4580d5a0dbd59bcb0b99ce2a9d8c05b00c055e07ef83d013b4e7->leave($__internal_d3b57ab30e0f4580d5a0dbd59bcb0b99ce2a9d8c05b00c055e07ef83d013b4e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 47,  134 => 46,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
      <div class=\"col-sm-6\">
        <div class=\"title6 text-uppercase\">Contact Information</div>
          Phone:
        <div class=\"phone3\">1-800-123-1234</div>
          Email:
        <div class=\"mail3\"><a href=\"#\">example@website.com</a></div>
          Address:
        <div class=\"address3\">8901 Marmora Road,<br>
Glasgow, D04 89GR.</div>
        <p>
          Follow Us:
        </p>
        <div class=\"social3_wrapper\">
          <ul class=\"social3 clearfix\">
            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-sm-6\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">S'inscrire</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            {% include \"@FOSUser/Registration/register_content.html.twig\" %}
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}
", "@FOSUser/Registration/register.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
