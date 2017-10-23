<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c9a8dc2c5e7d253179dea115694ee221515cf7ee63191e2c83171f34cb7294be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
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
        $__internal_639ed2e1e6e90e7cd00fda95a17043d2b9f8081044b88cc97b64e331e99e2db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639ed2e1e6e90e7cd00fda95a17043d2b9f8081044b88cc97b64e331e99e2db3->enter($__internal_639ed2e1e6e90e7cd00fda95a17043d2b9f8081044b88cc97b64e331e99e2db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639ed2e1e6e90e7cd00fda95a17043d2b9f8081044b88cc97b64e331e99e2db3->leave($__internal_639ed2e1e6e90e7cd00fda95a17043d2b9f8081044b88cc97b64e331e99e2db3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5471eaf615d9bb797400f20c4adee27791d7ef6c73194786738f4684343ef4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5471eaf615d9bb797400f20c4adee27791d7ef6c73194786738f4684343ef4c1->enter($__internal_5471eaf615d9bb797400f20c4adee27791d7ef6c73194786738f4684343ef4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Se connecter";
        
        $__internal_5471eaf615d9bb797400f20c4adee27791d7ef6c73194786738f4684343ef4c1->leave($__internal_5471eaf615d9bb797400f20c4adee27791d7ef6c73194786738f4684343ef4c1_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_aafd6893fc68c6509004d0f897b70a9f853901c1bcdea835f8361cfe764f4129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafd6893fc68c6509004d0f897b70a9f853901c1bcdea835f8361cfe764f4129->enter($__internal_aafd6893fc68c6509004d0f897b70a9f853901c1bcdea835f8361cfe764f4129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Connexion ";
        
        $__internal_aafd6893fc68c6509004d0f897b70a9f853901c1bcdea835f8361cfe764f4129->leave($__internal_aafd6893fc68c6509004d0f897b70a9f853901c1bcdea835f8361cfe764f4129_prof);

    }

    // line 6
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_cf1e615823e709e1aab09b0587d6b41192e2aada47bdf77e3c7afa5b798d1039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1e615823e709e1aab09b0587d6b41192e2aada47bdf77e3c7afa5b798d1039->enter($__internal_cf1e615823e709e1aab09b0587d6b41192e2aada47bdf77e3c7afa5b798d1039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Se connecter ";
        
        $__internal_cf1e615823e709e1aab09b0587d6b41192e2aada47bdf77e3c7afa5b798d1039->leave($__internal_cf1e615823e709e1aab09b0587d6b41192e2aada47bdf77e3c7afa5b798d1039_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_59185c7197d854d611fba0c7832b4307dccd8ab74cb43b306bee321b3c425dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59185c7197d854d611fba0c7832b4307dccd8ab74cb43b306bee321b3c425dec->enter($__internal_59185c7197d854d611fba0c7832b4307dccd8ab74cb43b306bee321b3c425dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
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
          <div class=\"title4\">Se connecter</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            <form class=\"ajax-contact-form\" class=\"form-horizontal\" action=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 41
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 42
            echo "                    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 45
        echo "                    
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />  
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputEmail\">Email or username</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"_username\" placeholder=\"Email or username\">
                  </div>
                </div>
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputPassword\">Last Name</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"_password\" placeholder=\"Password\">
                  </div>
                </div>
                <div class=\"col-sm-12\">  
                    <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
                    <a class=\"pull-right\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>                  
                </div>    
              </div>
              <button type=\"submit\" class=\"btn-default btn-cf-submit\">Connexion</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_59185c7197d854d611fba0c7832b4307dccd8ab74cb43b306bee321b3c425dec->leave($__internal_59185c7197d854d611fba0c7832b4307dccd8ab74cb43b306bee321b3c425dec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  149 => 61,  131 => 46,  128 => 45,  122 => 43,  119 => 42,  117 => 41,  113 => 40,  79 => 9,  73 => 8,  61 => 6,  49 => 4,  37 => 2,  11 => 1,);
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
{% block title %}Se connecter{% endblock %}

{% block content_title %}Connexion {% endblock %}

{% block content_stitle %}Se connecter {% endblock %}

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
          <div class=\"title4\">Se connecter</div>
          <br>
          <div id=\"note\"></div>
          <div id=\"fields\">
            <form class=\"ajax-contact-form\" class=\"form-horizontal\" action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}                    
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />  
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputEmail\">Email or username</label>
                      <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"_username\" placeholder=\"Email or username\">
                  </div>
                </div>
                <div class=\"col-sm-12\">
                  <div class=\"form-group\">
                      <label for=\"inputPassword\">Last Name</label>
                      <input type=\"password\" class=\"form-control\" id=\"inputPassword\" name=\"_password\" placeholder=\"Password\">
                  </div>
                </div>
                <div class=\"col-sm-12\">  
                    <a href=\"{{path('fos_user_registration_register')}}\">S'inscrire</a>
                    <a class=\"pull-right\" href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>                  
                </div>    
              </div>
              <button type=\"submit\" class=\"btn-default btn-cf-submit\">Connexion</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}


", "FOSUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
