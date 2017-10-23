<?php

/* EcoJobUserBundle:Registration:resend_confirm_content.html.twig */
class __TwigTemplate_12d2db3538cd419abe42c909624eb2c12407c11180e6d499605cf63c66870195 extends Twig_Template
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
        $__internal_7726c43f284b95fbee999366b43c68af8c8c9f5d28bb910d4b8c2ff108ecfeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7726c43f284b95fbee999366b43c68af8c8c9f5d28bb910d4b8c2ff108ecfeca->enter($__internal_7726c43f284b95fbee999366b43c68af8c8c9f5d28bb910d4b8c2ff108ecfeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobUserBundle:Registration:resend_confirm_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_registration_resend_confirm");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"user_registration_resend_confirm\">
    <div class=\"row\">      
        <div class=\"form-group ";
        // line 3
        if ((twig_length_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors')) > 0)) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2"), "label" => "Adresse e-mail"));
        echo "   
            <div class=\"col-sm-9\">
                ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "autocomplete" => "off")));
        echo "
            </div>
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        </div>         
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"Renvoyer\" /> 
            </div>
        </div>                        
    </div>

</form> ";
        
        $__internal_7726c43f284b95fbee999366b43c68af8c8c9f5d28bb910d4b8c2ff108ecfeca->leave($__internal_7726c43f284b95fbee999366b43c68af8c8c9f5d28bb910d4b8c2ff108ecfeca_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobUserBundle:Registration:resend_confirm_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 8,  41 => 6,  36 => 4,  30 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('user_registration_resend_confirm') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"user_registration_resend_confirm\">
    <div class=\"row\">      
        <div class=\"form-group {% if(form_errors(form.email) | length >0) %}has-error{% endif %}\">
            {{ form_label(form.email,\"Adresse e-mail\", {'label_attr': {'class': 'control-label col-sm-2'}})}}   
            <div class=\"col-sm-9\">
                {{form_widget(form.email,{'attr':{'class':'form-control','autocomplete':'off'}})}}
            </div>
            {{form_errors(form.email)}}
        </div>         
        {{form_rest(form)}}    
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"Renvoyer\" /> 
            </div>
        </div>                        
    </div>

</form> ", "EcoJobUserBundle:Registration:resend_confirm_content.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/UserBundle/Resources/views/Registration/resend_confirm_content.html.twig");
    }
}
