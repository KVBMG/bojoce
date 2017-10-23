<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_ef876a40f50d00053458a1611510d51b32cf06c43c8688000a1f7f1446b6dc04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d62109b16b28c7149bd9b6bbb1f1d736cecb42c2f1eee778afe7e8f22a376d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62109b16b28c7149bd9b6bbb1f1d736cecb42c2f1eee778afe7e8f22a376d0c->enter($__internal_d62109b16b28c7149bd9b6bbb1f1d736cecb42c2f1eee778afe7e8f22a376d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register ajax-inscription-form form-horizontal")));
        echo "

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"form-group ";
        // line 7
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Adresse e-mail"));
        echo "
            ";
        // line 9
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) > 0)) {
            // line 10
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "onBlur" => "if (this.value == '')this.value = 'Adresse e-mail'", "onFocus" => "if (this.value == 'Adresse e-mail')this.value = ''")));
            // line 12
            echo "
            ";
        } else {
            // line 14
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "onBlur" => "if (this.value == '')this.value = 'Adresse e-mail'", "onFocus" => "if (this.value == 'Adresse e-mail')this.value = ''")));
            // line 16
            echo "                
            ";
        }
        // line 18
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"form-group ";
        // line 22
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "
            ";
        // line 24
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors')) > 0)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "onBlur" => "if (this.value == '')this.value = 'Nom d'utilisateur'", "onFocus" => "if (this.value == 'Nom d'utilisateur')this.value = ''")));
            // line 27
            echo "
            ";
        } else {
            // line 29
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "onBlur" => "if (this.value == '')this.value = 'Nom d'utilisateur'", "onFocus" => "if (this.value == 'Nom d'utilisateur')this.value = ''")));
            // line 31
            echo "               
             
            ";
        }
        // line 34
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        </div>
    </div>  
</div>           
<div class=\"row\">

    <div class=\"col-sm-12\">
        <div class=\"form-group ";
        // line 41
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'label', array("label" => "Type de compte"));
        echo "
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off", "onBlur" => "if (this.value == '')this.value = 'Type de compte'", "onFocus" => "if (this.value == 'Type de compte')this.value = ''")));
        // line 45
        echo "
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
        </div>
    </div>        

    <div class=\"col-sm-12\">        
        <div class=\"form-group ";
        // line 51
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "   
            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        echo "            
            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        </div>         
    </div>
</div>   

<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group ";
        // line 61
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Confirmation du mot de passe"));
        echo "   
            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        echo "            
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        </div>         
    </div>
      


    <div class=\"col-sm-12\">
        <div class=\"form-group ";
        // line 71
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'label', array("label" => "Vérification"));
        echo "
            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'errors');
        echo "
        </div>
    </div>
</div>        

";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "    
</div> 

<button type=\"submit\" class=\"btn-default btn-cf-submit\">Inscription</button>
";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d62109b16b28c7149bd9b6bbb1f1d736cecb42c2f1eee778afe7e8f22a376d0c->leave($__internal_d62109b16b28c7149bd9b6bbb1f1d736cecb42c2f1eee778afe7e8f22a376d0c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 83,  197 => 79,  189 => 74,  185 => 73,  181 => 72,  175 => 71,  165 => 64,  161 => 63,  157 => 62,  151 => 61,  141 => 54,  137 => 53,  133 => 52,  127 => 51,  119 => 46,  116 => 45,  114 => 43,  110 => 42,  104 => 41,  93 => 34,  88 => 31,  85 => 29,  81 => 27,  78 => 25,  76 => 24,  72 => 23,  66 => 22,  58 => 18,  54 => 16,  51 => 14,  47 => 12,  44 => 10,  42 => 9,  38 => 8,  32 => 7,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register ajax-inscription-form form-horizontal'}}) }}

<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"form-group {% if(form_errors(form.email) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.email,\"Adresse e-mail\")}}
            {% if(form_errors(form.email) | length >0) %}
            {{form_widget(form.email,{'attr':{'class':'form-control','autocomplete':'off',
                        'onBlur':\"if (this.value == '')this.value = 'Adresse e-mail'\", 'onFocus':\"if (this.value == 'Adresse e-mail')this.value = ''\"
            }})}}
            {% else %}
            {{form_widget(form.email,{'attr':{'class':'form-control','autocomplete':'off',
                        'onBlur':\"if (this.value == '')this.value = 'Adresse e-mail'\", 'onFocus':\"if (this.value == 'Adresse e-mail')this.value = ''\"
            }})}}                
            {% endif %}
            {{form_errors(form.email)}}
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"form-group {% if(form_errors(form.username) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.username,\"Nom d'utilisateur\")}}
            {% if(form_errors(form.username) | length >0) %}
            {{form_widget(form.username,{'attr':{'class':'form-control','autocomplete':'off',
                        'onBlur':\"if (this.value == '')this.value = 'Nom d'utilisateur'\", 'onFocus':\"if (this.value == 'Nom d'utilisateur')this.value = ''\"
            }})}}
            {% else %}
            {{form_widget(form.username,{'attr':{'class':'form-control','autocomplete':'off',
                        'onBlur':\"if (this.value == '')this.value = 'Nom d'utilisateur'\", 'onFocus':\"if (this.value == 'Nom d'utilisateur')this.value = ''\"
            }})}}               
             
            {% endif %}
            {{form_errors(form.username)}}
        </div>
    </div>  
</div>           
<div class=\"row\">

    <div class=\"col-sm-12\">
        <div class=\"form-group {% if(form_errors(form.type) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.type,\"Type de compte\")}}
            {{form_widget(form.type,{'attr':{'class':'form-control','autocomplete':'off',
                        'onBlur':\"if (this.value == '')this.value = 'Type de compte'\", 'onFocus':\"if (this.value == 'Type de compte')this.value = ''\"
            }})}}
            {{form_errors(form.type)}}
        </div>
    </div>        

    <div class=\"col-sm-12\">        
        <div class=\"form-group {% if(form_errors(form.plainPassword.first) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.plainPassword.first,\"Mot de passe\")}}   
            {{form_widget(form.plainPassword.first,{'attr':{'class':'form-control','autocomplete':'off'}})}}            
            {{form_errors(form.plainPassword.first)}}
        </div>         
    </div>
</div>   

<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group {% if(form_errors(form.plainPassword.second) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.plainPassword.second,\"Confirmation du mot de passe\")}}   
            {{form_widget(form.plainPassword.second,{'attr':{'class':'form-control','autocomplete':'off'}})}}            
            {{form_errors(form.plainPassword.second)}}
        </div>         
    </div>
      


    <div class=\"col-sm-12\">
        <div class=\"form-group {% if(form_errors(form.captchaCode) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.captchaCode,\"Vérification\")}}
            {{form_widget(form.captchaCode,{'attr':{'class':'form-control'}})}}
            {{form_errors(form.captchaCode)}}
        </div>
    </div>
</div>        

{{form_rest(form)}}    
</div> 

<button type=\"submit\" class=\"btn-default btn-cf-submit\">Inscription</button>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
