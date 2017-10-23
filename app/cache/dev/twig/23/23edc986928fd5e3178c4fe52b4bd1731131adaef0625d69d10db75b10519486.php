<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bf41baece5e6e5b8c75f328482ec2e01da109505874bc3107d516f4630e13c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6fdbb55235bd395d043df3f895ce2069f2110ed804af1f3e8f1b685d8939e837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdbb55235bd395d043df3f895ce2069f2110ed804af1f3e8f1b685d8939e837->enter($__internal_6fdbb55235bd395d043df3f895ce2069f2110ed804af1f3e8f1b685d8939e837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fdbb55235bd395d043df3f895ce2069f2110ed804af1f3e8f1b685d8939e837->leave($__internal_6fdbb55235bd395d043df3f895ce2069f2110ed804af1f3e8f1b685d8939e837_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_903beca958fa1e58b2c61632959d4c11a65a5b1fbb9489b8ebbc0d26865c55f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903beca958fa1e58b2c61632959d4c11a65a5b1fbb9489b8ebbc0d26865c55f3->enter($__internal_903beca958fa1e58b2c61632959d4c11a65a5b1fbb9489b8ebbc0d26865c55f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_903beca958fa1e58b2c61632959d4c11a65a5b1fbb9489b8ebbc0d26865c55f3->leave($__internal_903beca958fa1e58b2c61632959d4c11a65a5b1fbb9489b8ebbc0d26865c55f3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f65706914bae4d3f96d82bd2d77eafdfd8451495364f076f3ffa0c0d858f3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f65706914bae4d3f96d82bd2d77eafdfd8451495364f076f3ffa0c0d858f3e4->enter($__internal_9f65706914bae4d3f96d82bd2d77eafdfd8451495364f076f3ffa0c0d858f3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mot de passe oublié";
        
        $__internal_9f65706914bae4d3f96d82bd2d77eafdfd8451495364f076f3ffa0c0d858f3e4->leave($__internal_9f65706914bae4d3f96d82bd2d77eafdfd8451495364f076f3ffa0c0d858f3e4_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2bc70e476e734bc38741a5dbcfa5e62f3e72af49819126d01d2ab2a3ccb5f177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc70e476e734bc38741a5dbcfa5e62f3e72af49819126d01d2ab2a3ccb5f177->enter($__internal_2bc70e476e734bc38741a5dbcfa5e62f3e72af49819126d01d2ab2a3ccb5f177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Profile ";
        
        $__internal_2bc70e476e734bc38741a5dbcfa5e62f3e72af49819126d01d2ab2a3ccb5f177->leave($__internal_2bc70e476e734bc38741a5dbcfa5e62f3e72af49819126d01d2ab2a3ccb5f177_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_cada038a6997d4d3f4e936a28e4ebc562554938470624eed63b942921be82233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cada038a6997d4d3f4e936a28e4ebc562554938470624eed63b942921be82233->enter($__internal_cada038a6997d4d3f4e936a28e4ebc562554938470624eed63b942921be82233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Réinitialiser mon mot de passe ";
        
        $__internal_cada038a6997d4d3f4e936a28e4ebc562554938470624eed63b942921be82233->leave($__internal_cada038a6997d4d3f4e936a28e4ebc562554938470624eed63b942921be82233_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_4380b7d84e492761e7f989316da2b6633c06833dfde359017f547fc15f4446e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4380b7d84e492761e7f989316da2b6633c06833dfde359017f547fc15f4446e2->enter($__internal_4380b7d84e492761e7f989316da2b6633c06833dfde359017f547fc15f4446e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Réinitialiser mon mot de passe</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
                ";
        // line 25
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 25)->display($context);
        // line 26
        echo "          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_4380b7d84e492761e7f989316da2b6633c06833dfde359017f547fc15f4446e2->leave($__internal_4380b7d84e492761e7f989316da2b6633c06833dfde359017f547fc15f4446e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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

{% block title %} Mot de passe oublié{% endblock %}

{% block content_title %}Profile {% endblock %}

{% block content_stitle %}Réinitialiser mon mot de passe {% endblock %}

{% block content %}
{{parent()}}
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Réinitialiser mon mot de passe</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
                {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
