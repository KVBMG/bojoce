<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7d2884f7df83bda001c813f781610592a489caf8343760c6f38f505a87d66dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_648e9facac40c9ebd521401467b304cac22682090228d0cd4a938a3e2ecf03de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648e9facac40c9ebd521401467b304cac22682090228d0cd4a938a3e2ecf03de->enter($__internal_648e9facac40c9ebd521401467b304cac22682090228d0cd4a938a3e2ecf03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648e9facac40c9ebd521401467b304cac22682090228d0cd4a938a3e2ecf03de->leave($__internal_648e9facac40c9ebd521401467b304cac22682090228d0cd4a938a3e2ecf03de_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4033791df349dbc499cefefd0a5c4835b8c82b8723a6587b4e83eb92032ee15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4033791df349dbc499cefefd0a5c4835b8c82b8723a6587b4e83eb92032ee15->enter($__internal_b4033791df349dbc499cefefd0a5c4835b8c82b8723a6587b4e83eb92032ee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Se connecter";
        
        $__internal_b4033791df349dbc499cefefd0a5c4835b8c82b8723a6587b4e83eb92032ee15->leave($__internal_b4033791df349dbc499cefefd0a5c4835b8c82b8723a6587b4e83eb92032ee15_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_58c80b5ffe470eed83226c6cf586faf1e8c32335a4926fa548ebe797498eb76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c80b5ffe470eed83226c6cf586faf1e8c32335a4926fa548ebe797498eb76f->enter($__internal_58c80b5ffe470eed83226c6cf586faf1e8c32335a4926fa548ebe797498eb76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Connexion ";
        
        $__internal_58c80b5ffe470eed83226c6cf586faf1e8c32335a4926fa548ebe797498eb76f->leave($__internal_58c80b5ffe470eed83226c6cf586faf1e8c32335a4926fa548ebe797498eb76f_prof);

    }

    // line 6
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_b480bb40a74bc4dfa72360dd96bf15c77b6f316ccee5f738b6c46fd29bcceb62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b480bb40a74bc4dfa72360dd96bf15c77b6f316ccee5f738b6c46fd29bcceb62->enter($__internal_b480bb40a74bc4dfa72360dd96bf15c77b6f316ccee5f738b6c46fd29bcceb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Se connecter ";
        
        $__internal_b480bb40a74bc4dfa72360dd96bf15c77b6f316ccee5f738b6c46fd29bcceb62->leave($__internal_b480bb40a74bc4dfa72360dd96bf15c77b6f316ccee5f738b6c46fd29bcceb62_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_64a1171b76f19f6b7437361ed8df7a40c7ccbde2bc68b96b6d5af6b7ca7e6aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a1171b76f19f6b7437361ed8df7a40c7ccbde2bc68b96b6d5af6b7ca7e6aaa->enter($__internal_64a1171b76f19f6b7437361ed8df7a40c7ccbde2bc68b96b6d5af6b7ca7e6aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 42
            echo "                    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 45
        echo "                    
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        
        $__internal_64a1171b76f19f6b7437361ed8df7a40c7ccbde2bc68b96b6d5af6b7ca7e6aaa->leave($__internal_64a1171b76f19f6b7437361ed8df7a40c7ccbde2bc68b96b6d5af6b7ca7e6aaa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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


", "@FOSUser/Security/login.html.twig", "E:\\kandra\\Dev\\bojoce\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
