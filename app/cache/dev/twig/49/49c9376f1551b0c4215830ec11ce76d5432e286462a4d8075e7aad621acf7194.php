<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_83155a15371c7f85c83e2214a1bb699044189115ef4365a83f8d202bc3dbc5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_ddb491e7d3c2b6819236d608d44240172865cfb928b6026e80babaff3efc8f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb491e7d3c2b6819236d608d44240172865cfb928b6026e80babaff3efc8f08->enter($__internal_ddb491e7d3c2b6819236d608d44240172865cfb928b6026e80babaff3efc8f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb491e7d3c2b6819236d608d44240172865cfb928b6026e80babaff3efc8f08->leave($__internal_ddb491e7d3c2b6819236d608d44240172865cfb928b6026e80babaff3efc8f08_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bb03057dcafa65b2c3e95dba730ca9dd34cfaf8b3085dae7dca8f3e6e3e8e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb03057dcafa65b2c3e95dba730ca9dd34cfaf8b3085dae7dca8f3e6e3e8e0f->enter($__internal_6bb03057dcafa65b2c3e95dba730ca9dd34cfaf8b3085dae7dca8f3e6e3e8e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_6bb03057dcafa65b2c3e95dba730ca9dd34cfaf8b3085dae7dca8f3e6e3e8e0f->leave($__internal_6bb03057dcafa65b2c3e95dba730ca9dd34cfaf8b3085dae7dca8f3e6e3e8e0f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8804d39b514ff8238a7bca31a10c3a979971debbb73b69a3bc6760d1d6f14cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8804d39b514ff8238a7bca31a10c3a979971debbb73b69a3bc6760d1d6f14cf0->enter($__internal_8804d39b514ff8238a7bca31a10c3a979971debbb73b69a3bc6760d1d6f14cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réinitialisation mot de passe";
        
        $__internal_8804d39b514ff8238a7bca31a10c3a979971debbb73b69a3bc6760d1d6f14cf0->leave($__internal_8804d39b514ff8238a7bca31a10c3a979971debbb73b69a3bc6760d1d6f14cf0_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e6ad039cb5eaba7b7bcfaed03bd5055d07685d88b2124726dda9a19c29b32208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad039cb5eaba7b7bcfaed03bd5055d07685d88b2124726dda9a19c29b32208->enter($__internal_e6ad039cb5eaba7b7bcfaed03bd5055d07685d88b2124726dda9a19c29b32208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Profile ";
        
        $__internal_e6ad039cb5eaba7b7bcfaed03bd5055d07685d88b2124726dda9a19c29b32208->leave($__internal_e6ad039cb5eaba7b7bcfaed03bd5055d07685d88b2124726dda9a19c29b32208_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_388d2ed7000eccf1416776957e5a0d60fd1ec18e46ae7be7ec21a5e8b0cf657c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388d2ed7000eccf1416776957e5a0d60fd1ec18e46ae7be7ec21a5e8b0cf657c->enter($__internal_388d2ed7000eccf1416776957e5a0d60fd1ec18e46ae7be7ec21a5e8b0cf657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Réinitialisation mon mot de passe ";
        
        $__internal_388d2ed7000eccf1416776957e5a0d60fd1ec18e46ae7be7ec21a5e8b0cf657c->leave($__internal_388d2ed7000eccf1416776957e5a0d60fd1ec18e46ae7be7ec21a5e8b0cf657c_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3b11ed75fdf1980af7e391184d322710217761dcb26285c4c3272aa5b8ddc28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b11ed75fdf1980af7e391184d322710217761dcb26285c4c3272aa5b8ddc28->enter($__internal_b3b11ed75fdf1980af7e391184d322710217761dcb26285c4c3272aa5b8ddc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Réinitialisation mon mot de passe</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            ";
        // line 25
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 25)->display($context);
        // line 26
        echo "          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_b3b11ed75fdf1980af7e391184d322710217761dcb26285c4c3272aa5b8ddc28->leave($__internal_b3b11ed75fdf1980af7e391184d322710217761dcb26285c4c3272aa5b8ddc28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  113 => 25,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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

{% block title %}Réinitialisation mot de passe{% endblock %}

{% block content_title %}Profile {% endblock %}

{% block content_stitle %}Réinitialisation mon mot de passe {% endblock %}

{% block content %}
{{parent()}}
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Réinitialisation mon mot de passe</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}", "FOSUserBundle:Resetting:reset.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
