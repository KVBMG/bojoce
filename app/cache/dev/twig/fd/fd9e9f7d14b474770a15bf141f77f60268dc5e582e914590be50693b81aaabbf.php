<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_b544dffa67ab1b478ea8ea38bf30e65481582fcec04b8088535c34ff6655d33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_a334022bda5ee7721a48ce6a64c16300b510ac406c04bb005e008b65107d08b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a334022bda5ee7721a48ce6a64c16300b510ac406c04bb005e008b65107d08b3->enter($__internal_a334022bda5ee7721a48ce6a64c16300b510ac406c04bb005e008b65107d08b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a334022bda5ee7721a48ce6a64c16300b510ac406c04bb005e008b65107d08b3->leave($__internal_a334022bda5ee7721a48ce6a64c16300b510ac406c04bb005e008b65107d08b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cf40b197b66cfdfd54586dca25ba18a196f35b8aa4651095184fcd835939f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf40b197b66cfdfd54586dca25ba18a196f35b8aa4651095184fcd835939f55->enter($__internal_5cf40b197b66cfdfd54586dca25ba18a196f35b8aa4651095184fcd835939f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_5cf40b197b66cfdfd54586dca25ba18a196f35b8aa4651095184fcd835939f55->leave($__internal_5cf40b197b66cfdfd54586dca25ba18a196f35b8aa4651095184fcd835939f55_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac133e9fd8685b676e75e0dde10648867bae1595621baa3b46a06cb35e73dc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac133e9fd8685b676e75e0dde10648867bae1595621baa3b46a06cb35e73dc3d->enter($__internal_ac133e9fd8685b676e75e0dde10648867bae1595621baa3b46a06cb35e73dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mot de passe oublié";
        
        $__internal_ac133e9fd8685b676e75e0dde10648867bae1595621baa3b46a06cb35e73dc3d->leave($__internal_ac133e9fd8685b676e75e0dde10648867bae1595621baa3b46a06cb35e73dc3d_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f6100ebc157679e89c6575d3ea0d49b451610af695d2755a7e0c1d8b7f903868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6100ebc157679e89c6575d3ea0d49b451610af695d2755a7e0c1d8b7f903868->enter($__internal_f6100ebc157679e89c6575d3ea0d49b451610af695d2755a7e0c1d8b7f903868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Profile ";
        
        $__internal_f6100ebc157679e89c6575d3ea0d49b451610af695d2755a7e0c1d8b7f903868->leave($__internal_f6100ebc157679e89c6575d3ea0d49b451610af695d2755a7e0c1d8b7f903868_prof);

    }

    // line 15
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_51f2cb0c7c327bee0d887997d30dbdc5661ffd7ca44dfce9d9db88ab6f8328b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f2cb0c7c327bee0d887997d30dbdc5661ffd7ca44dfce9d9db88ab6f8328b2->enter($__internal_51f2cb0c7c327bee0d887997d30dbdc5661ffd7ca44dfce9d9db88ab6f8328b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Réinitialiser mon mot de passe ";
        
        $__internal_51f2cb0c7c327bee0d887997d30dbdc5661ffd7ca44dfce9d9db88ab6f8328b2->leave($__internal_51f2cb0c7c327bee0d887997d30dbdc5661ffd7ca44dfce9d9db88ab6f8328b2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_161aa349b252953c9853994405e31f60cf70907f7fd39e423bbb1ba510a3d2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161aa349b252953c9853994405e31f60cf70907f7fd39e423bbb1ba510a3d2ef->enter($__internal_161aa349b252953c9853994405e31f60cf70907f7fd39e423bbb1ba510a3d2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
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
            <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
              <strong> Lien de réinitialisation envoyé!</strong> ";
        // line 28
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_161aa349b252953c9853994405e31f60cf70907f7fd39e423bbb1ba510a3d2ef->leave($__internal_161aa349b252953c9853994405e31f60cf70907f7fd39e423bbb1ba510a3d2ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 28,  100 => 17,  94 => 16,  82 => 15,  70 => 13,  58 => 11,  49 => 8,  44 => 7,  38 => 6,  11 => 1,);
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
            <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
              <strong> Lien de réinitialisation envoyé!</strong> {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
