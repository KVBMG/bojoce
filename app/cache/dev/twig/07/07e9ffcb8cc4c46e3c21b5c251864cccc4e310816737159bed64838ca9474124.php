<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_342a5faa914fc3fe1305dd16ebd34d132392f1289837fe030dc3f8cbfeef21ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c1f38a09b99c60ac416e64af9dd8b92edbb0573d177ed8983a580e421abcfed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f38a09b99c60ac416e64af9dd8b92edbb0573d177ed8983a580e421abcfed3->enter($__internal_c1f38a09b99c60ac416e64af9dd8b92edbb0573d177ed8983a580e421abcfed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f38a09b99c60ac416e64af9dd8b92edbb0573d177ed8983a580e421abcfed3->leave($__internal_c1f38a09b99c60ac416e64af9dd8b92edbb0573d177ed8983a580e421abcfed3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b3f1eb81ef37b822ff494d44ddf0ed6097aa653c3b6e22651ff89c0a53d511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3f1eb81ef37b822ff494d44ddf0ed6097aa653c3b6e22651ff89c0a53d511d->enter($__internal_5b3f1eb81ef37b822ff494d44ddf0ed6097aa653c3b6e22651ff89c0a53d511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_5b3f1eb81ef37b822ff494d44ddf0ed6097aa653c3b6e22651ff89c0a53d511d->leave($__internal_5b3f1eb81ef37b822ff494d44ddf0ed6097aa653c3b6e22651ff89c0a53d511d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_743bbf36701a1a996621dcbcebc0667b3cba05272c3fd3a283a20fca1801bad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743bbf36701a1a996621dcbcebc0667b3cba05272c3fd3a283a20fca1801bad4->enter($__internal_743bbf36701a1a996621dcbcebc0667b3cba05272c3fd3a283a20fca1801bad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_743bbf36701a1a996621dcbcebc0667b3cba05272c3fd3a283a20fca1801bad4->leave($__internal_743bbf36701a1a996621dcbcebc0667b3cba05272c3fd3a283a20fca1801bad4_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c8ce232adae5572b57ec13f738eb18059197e4146c77b7fb288667fffd08a9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ce232adae5572b57ec13f738eb18059197e4146c77b7fb288667fffd08a9ee->enter($__internal_c8ce232adae5572b57ec13f738eb18059197e4146c77b7fb288667fffd08a9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Inscription ";
        
        $__internal_c8ce232adae5572b57ec13f738eb18059197e4146c77b7fb288667fffd08a9ee->leave($__internal_c8ce232adae5572b57ec13f738eb18059197e4146c77b7fb288667fffd08a9ee_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_c6d04c038ee827a94e027d1e6c36185e4d08954f4ba64c331c6d00c16221cf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d04c038ee827a94e027d1e6c36185e4d08954f4ba64c331c6d00c16221cf21->enter($__internal_c6d04c038ee827a94e027d1e6c36185e4d08954f4ba64c331c6d00c16221cf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "S'inscrire ";
        
        $__internal_c6d04c038ee827a94e027d1e6c36185e4d08954f4ba64c331c6d00c16221cf21->leave($__internal_c6d04c038ee827a94e027d1e6c36185e4d08954f4ba64c331c6d00c16221cf21_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_7eea47d6ffa4825cca55da5aec5da0aa15da09b2ab0e08ccce8cf5086e20d706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eea47d6ffa4825cca55da5aec5da0aa15da09b2ab0e08ccce8cf5086e20d706->enter($__internal_7eea47d6ffa4825cca55da5aec5da0aa15da09b2ab0e08ccce8cf5086e20d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 46)->display($context);
        // line 47
        echo "          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_7eea47d6ffa4825cca55da5aec5da0aa15da09b2ab0e08ccce8cf5086e20d706->leave($__internal_7eea47d6ffa4825cca55da5aec5da0aa15da09b2ab0e08ccce8cf5086e20d706_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
