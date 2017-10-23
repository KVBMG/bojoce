<?php

/* EcoJobUserBundle:Registration:resend_confirm.html.twig */
class __TwigTemplate_d909dd56e0e437c4b73f817645e07e684cd5d58e5f0cda139c8206291a594eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "EcoJobUserBundle:Registration:resend_confirm.html.twig", 1);
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
        $__internal_3bdc7d537287ef9eaafefb42a219a6f037edf7d6139ab922bc954d64851640dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdc7d537287ef9eaafefb42a219a6f037edf7d6139ab922bc954d64851640dd->enter($__internal_3bdc7d537287ef9eaafefb42a219a6f037edf7d6139ab922bc954d64851640dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobUserBundle:Registration:resend_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bdc7d537287ef9eaafefb42a219a6f037edf7d6139ab922bc954d64851640dd->leave($__internal_3bdc7d537287ef9eaafefb42a219a6f037edf7d6139ab922bc954d64851640dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ebda3e87aa5b1c62b07f8940cb95a40e2acfd669ad5b53840b41f9c33470a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebda3e87aa5b1c62b07f8940cb95a40e2acfd669ad5b53840b41f9c33470a09->enter($__internal_7ebda3e87aa5b1c62b07f8940cb95a40e2acfd669ad5b53840b41f9c33470a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_7ebda3e87aa5b1c62b07f8940cb95a40e2acfd669ad5b53840b41f9c33470a09->leave($__internal_7ebda3e87aa5b1c62b07f8940cb95a40e2acfd669ad5b53840b41f9c33470a09_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_41243db44c89d080b1270e87fb81314a886adb691f2c95effe73266423122c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41243db44c89d080b1270e87fb81314a886adb691f2c95effe73266423122c7a->enter($__internal_41243db44c89d080b1270e87fb81314a886adb691f2c95effe73266423122c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_41243db44c89d080b1270e87fb81314a886adb691f2c95effe73266423122c7a->leave($__internal_41243db44c89d080b1270e87fb81314a886adb691f2c95effe73266423122c7a_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_025814bb493d3704237a1bc55708e06b07d4f585ba87ae7cf895d3ce09d0f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025814bb493d3704237a1bc55708e06b07d4f585ba87ae7cf895d3ce09d0f3e6->enter($__internal_025814bb493d3704237a1bc55708e06b07d4f585ba87ae7cf895d3ce09d0f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Inscription ";
        
        $__internal_025814bb493d3704237a1bc55708e06b07d4f585ba87ae7cf895d3ce09d0f3e6->leave($__internal_025814bb493d3704237a1bc55708e06b07d4f585ba87ae7cf895d3ce09d0f3e6_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_ba643e1be3aac66ae09d7811e461e9bf3d7a2fc8bd319a3c11cab60d65ca1004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba643e1be3aac66ae09d7811e461e9bf3d7a2fc8bd319a3c11cab60d65ca1004->enter($__internal_ba643e1be3aac66ae09d7811e461e9bf3d7a2fc8bd319a3c11cab60d65ca1004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "S'inscrire ";
        
        $__internal_ba643e1be3aac66ae09d7811e461e9bf3d7a2fc8bd319a3c11cab60d65ca1004->leave($__internal_ba643e1be3aac66ae09d7811e461e9bf3d7a2fc8bd319a3c11cab60d65ca1004_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_17f6581e40e1d83b14f88e9c27b882370f651f2da6fa503040d1d796befc114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f6581e40e1d83b14f88e9c27b882370f651f2da6fa503040d1d796befc114a->enter($__internal_17f6581e40e1d83b14f88e9c27b882370f651f2da6fa503040d1d796befc114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Renvoyer l'e-mail de confirmation</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
                ";
        // line 25
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 26
            echo "                    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 29
        echo "                 
            ";
        // line 30
        $this->loadTemplate("EcoJobUserBundle:Registration:resend_confirm_content.html.twig", "EcoJobUserBundle:Registration:resend_confirm.html.twig", 30)->display($context);
        // line 31
        echo "          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_17f6581e40e1d83b14f88e9c27b882370f651f2da6fa503040d1d796befc114a->leave($__internal_17f6581e40e1d83b14f88e9c27b882370f651f2da6fa503040d1d796befc114a_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobUserBundle:Registration:resend_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  127 => 30,  124 => 29,  118 => 27,  115 => 26,  113 => 25,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Renvoyer l'e-mail de confirmation</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
                {% if error %}
                    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
                        {{error}}
                    </div>
                {% endif %}                 
            {% include \"EcoJobUserBundle:Registration:resend_confirm_content.html.twig\" %}
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}", "EcoJobUserBundle:Registration:resend_confirm.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/UserBundle/Resources/views/Registration/resend_confirm.html.twig");
    }
}
