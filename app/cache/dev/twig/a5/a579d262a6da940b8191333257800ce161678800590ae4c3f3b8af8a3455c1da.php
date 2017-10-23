<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_bcacfcaeab8c5aa599f61f939e08fd7a34696e8e209e93f0f62f04b562d2ed74 extends Twig_Template
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
        $__internal_6b89c01ead4aec2b86ca276d09bdbaceb9203d8b01af6084e49e516cd8bbd295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b89c01ead4aec2b86ca276d09bdbaceb9203d8b01af6084e49e516cd8bbd295->enter($__internal_6b89c01ead4aec2b86ca276d09bdbaceb9203d8b01af6084e49e516cd8bbd295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group ";
        // line 6
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-3"), "label" => "Mot de passe"));
        echo "   
            <div class=\"col-sm-9\">
                ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        echo "
            </div>
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        </div>         
    </div>
</div>   
<br>
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group ";
        // line 18
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-3"), "label" => "Confirmation du mot de passe"));
        echo "   
            <div class=\"col-sm-9\">
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        echo "
            </div>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        </div>         
    </div>
</div> 
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group ";
        // line 29
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-3")));
        echo "   
            <div class=\"col-sm-9\">
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "captchaCodeError", "aria-describedby" => "captchaCodeError", "autocomplete" => "off")));
        echo "
            </div>
            ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "captchaCode", array()), 'errors', array("attr" => array("id" => "captchaCodeError", "class" => "help-block")));
        echo "
        </div>         
    </div>
</div>             
";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "   
<input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6b89c01ead4aec2b86ca276d09bdbaceb9203d8b01af6084e49e516cd8bbd295->leave($__internal_6b89c01ead4aec2b86ca276d09bdbaceb9203d8b01af6084e49e516cd8bbd295_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  109 => 39,  105 => 38,  98 => 34,  93 => 32,  88 => 30,  82 => 29,  73 => 23,  68 => 21,  63 => 19,  57 => 18,  47 => 11,  42 => 9,  37 => 7,  31 => 6,  25 => 3,  22 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group {% if(form_errors(form.plainPassword.first) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.plainPassword.first,\"Mot de passe\", {'label_attr': {'class': 'control-label col-sm-3'}})}}   
            <div class=\"col-sm-9\">
                {{form_widget(form.plainPassword.first,{'attr':{'class':'form-control','autocomplete':'off'}})}}
            </div>
            {{form_errors(form.plainPassword.first)}}
        </div>         
    </div>
</div>   
<br>
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group {% if(form_errors(form.plainPassword.second) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.plainPassword.second,\"Confirmation du mot de passe\", {'label_attr': {'class': 'control-label col-sm-3'}})}}   
            <div class=\"col-sm-9\">
                {{form_widget(form.plainPassword.second,{'attr':{'class':'form-control','autocomplete':'off'}})}}
            </div>
            {{form_errors(form.plainPassword.second)}}
        </div>         
    </div>
</div> 
<div class=\"row\">
    <div class=\"col-sm-12\">        
        <div class=\"form-group {% if(form_errors(form.captchaCode) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.captchaCode,\"\", {'label_attr': {'class': 'control-label col-sm-3'}})}}   
            <div class=\"col-sm-9\">
                {{form_widget(form.captchaCode,{'attr':{'class':'form-control','id':'captchaCodeError','aria-describedby':'captchaCodeError','autocomplete':'off'}})}}
            </div>
            {{form_errors(form.captchaCode,{'attr':{'id':'captchaCodeError','class':'help-block'}})}}
        </div>         
    </div>
</div>             
{{form_rest(form)}}   
<input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
