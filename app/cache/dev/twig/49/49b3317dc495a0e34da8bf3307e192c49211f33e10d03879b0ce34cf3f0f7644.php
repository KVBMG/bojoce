<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_7d6994f54b909c21c9c1ce3e5a08babfed5a266d4ccf16e527cb532a3ad1a70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_c81bac13ab52f87658313997f12f5f2cb6e46b94e8fe53ce7cf52af511d560c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81bac13ab52f87658313997f12f5f2cb6e46b94e8fe53ce7cf52af511d560c0->enter($__internal_c81bac13ab52f87658313997f12f5f2cb6e46b94e8fe53ce7cf52af511d560c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81bac13ab52f87658313997f12f5f2cb6e46b94e8fe53ce7cf52af511d560c0->leave($__internal_c81bac13ab52f87658313997f12f5f2cb6e46b94e8fe53ce7cf52af511d560c0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbfbc0b6cea4fc1ee66085b4a430899265df2120406a8f1519524ad0e5fbb25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfbc0b6cea4fc1ee66085b4a430899265df2120406a8f1519524ad0e5fbb25b->enter($__internal_cbfbc0b6cea4fc1ee66085b4a430899265df2120406a8f1519524ad0e5fbb25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_cbfbc0b6cea4fc1ee66085b4a430899265df2120406a8f1519524ad0e5fbb25b->leave($__internal_cbfbc0b6cea4fc1ee66085b4a430899265df2120406a8f1519524ad0e5fbb25b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_18ae515143cdc153734bfdb03c303074f1bc778c1a4f9a41570aa7de881bde17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ae515143cdc153734bfdb03c303074f1bc778c1a4f9a41570aa7de881bde17->enter($__internal_18ae515143cdc153734bfdb03c303074f1bc778c1a4f9a41570aa7de881bde17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_18ae515143cdc153734bfdb03c303074f1bc778c1a4f9a41570aa7de881bde17->leave($__internal_18ae515143cdc153734bfdb03c303074f1bc778c1a4f9a41570aa7de881bde17_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_27712e10d42cc91f79727bf25577b4180c0581e68b4abcc28fea2b52937a1e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27712e10d42cc91f79727bf25577b4180c0581e68b4abcc28fea2b52937a1e1f->enter($__internal_27712e10d42cc91f79727bf25577b4180c0581e68b4abcc28fea2b52937a1e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Inscription ";
        
        $__internal_27712e10d42cc91f79727bf25577b4180c0581e68b4abcc28fea2b52937a1e1f->leave($__internal_27712e10d42cc91f79727bf25577b4180c0581e68b4abcc28fea2b52937a1e1f_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_7f4ad4d29e0f5a84588715e2708018a73e37ca8ce13e3fa5e7c4b908afead35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f4ad4d29e0f5a84588715e2708018a73e37ca8ce13e3fa5e7c4b908afead35a->enter($__internal_7f4ad4d29e0f5a84588715e2708018a73e37ca8ce13e3fa5e7c4b908afead35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "S'inscrire ";
        
        $__internal_7f4ad4d29e0f5a84588715e2708018a73e37ca8ce13e3fa5e7c4b908afead35a->leave($__internal_7f4ad4d29e0f5a84588715e2708018a73e37ca8ce13e3fa5e7c4b908afead35a_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_d33fffc5d0b0f91e67c81b83fdf04e1e9d5f11a96c77ab16e9ebaa2cb17065e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33fffc5d0b0f91e67c81b83fdf04e1e9d5f11a96c77ab16e9ebaa2cb17065e8->enter($__internal_d33fffc5d0b0f91e67c81b83fdf04e1e9d5f11a96c77ab16e9ebaa2cb17065e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
              <strong> Inscription réussi!</strong> Consulter votre e-mail pour valider votre inscription.
              ou <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration_resend_confirm");
        echo "\" >renvoyer l'e-mail de confirmation</a>
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_d33fffc5d0b0f91e67c81b83fdf04e1e9d5f11a96c77ab16e9ebaa2cb17065e8->leave($__internal_d33fffc5d0b0f91e67c81b83fdf04e1e9d5f11a96c77ab16e9ebaa2cb17065e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
          <div class=\"title4\">S'inscrire</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            <div class=\"alert alert-warning alert-dismissible\" role=\"alert\">
              <strong> Inscription réussi!</strong> Consulter votre e-mail pour valider votre inscription.
              ou <a href=\"{{path('user_registration_resend_confirm')}}\" >renvoyer l'e-mail de confirmation</a>
            </div>              
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
