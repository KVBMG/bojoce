<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_15394d3583851071e95f3f8c43355dd3671a02bf7eec2f84174020e3ca5f5b12 extends Twig_Template
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
        $__internal_6edd6d9cbdb81202d4825ef5c64f1b3297f5e93097cf2b90b7f120a59c40d5e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edd6d9cbdb81202d4825ef5c64f1b3297f5e93097cf2b90b7f120a59c40d5e9->enter($__internal_6edd6d9cbdb81202d4825ef5c64f1b3297f5e93097cf2b90b7f120a59c40d5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6edd6d9cbdb81202d4825ef5c64f1b3297f5e93097cf2b90b7f120a59c40d5e9->leave($__internal_6edd6d9cbdb81202d4825ef5c64f1b3297f5e93097cf2b90b7f120a59c40d5e9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_257e9f731a4b70f17c2c5e25ab9eb4e0b8649c4c21aff6618499d31fd1dbf31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257e9f731a4b70f17c2c5e25ab9eb4e0b8649c4c21aff6618499d31fd1dbf31e->enter($__internal_257e9f731a4b70f17c2c5e25ab9eb4e0b8649c4c21aff6618499d31fd1dbf31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Se connecter";
        
        $__internal_257e9f731a4b70f17c2c5e25ab9eb4e0b8649c4c21aff6618499d31fd1dbf31e->leave($__internal_257e9f731a4b70f17c2c5e25ab9eb4e0b8649c4c21aff6618499d31fd1dbf31e_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_168a1085322482c2b86daea961b2e9bbb56f367baa91e79d806eed241191dc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168a1085322482c2b86daea961b2e9bbb56f367baa91e79d806eed241191dc18->enter($__internal_168a1085322482c2b86daea961b2e9bbb56f367baa91e79d806eed241191dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Connexion ";
        
        $__internal_168a1085322482c2b86daea961b2e9bbb56f367baa91e79d806eed241191dc18->leave($__internal_168a1085322482c2b86daea961b2e9bbb56f367baa91e79d806eed241191dc18_prof);

    }

    // line 6
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_86266c8748e0336e21df622acf554b5d0684d51ba3c3c7cbaa7a1f83af5ae48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86266c8748e0336e21df622acf554b5d0684d51ba3c3c7cbaa7a1f83af5ae48a->enter($__internal_86266c8748e0336e21df622acf554b5d0684d51ba3c3c7cbaa7a1f83af5ae48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Se connecter ";
        
        $__internal_86266c8748e0336e21df622acf554b5d0684d51ba3c3c7cbaa7a1f83af5ae48a->leave($__internal_86266c8748e0336e21df622acf554b5d0684d51ba3c3c7cbaa7a1f83af5ae48a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_98512c91ce2427c1d986ea19b317ac96e9308a235dfebab28581256fdbbdd07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98512c91ce2427c1d986ea19b317ac96e9308a235dfebab28581256fdbbdd07c->enter($__internal_98512c91ce2427c1d986ea19b317ac96e9308a235dfebab28581256fdbbdd07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_98512c91ce2427c1d986ea19b317ac96e9308a235dfebab28581256fdbbdd07c->leave($__internal_98512c91ce2427c1d986ea19b317ac96e9308a235dfebab28581256fdbbdd07c_prof);

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


", "@FOSUser/Security/login.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
