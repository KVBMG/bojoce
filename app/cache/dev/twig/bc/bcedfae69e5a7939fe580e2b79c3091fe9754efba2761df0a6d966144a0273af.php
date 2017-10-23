<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_af0bdc937708f7a31fe4b9d36d5c68a05ddb34cfa40c15992ca6d3ea3e2d01cd extends Twig_Template
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
        $__internal_3852b7d5911b656dfb2b18df472c935ce1fd32af1194a59cf10f3b7d3899cb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3852b7d5911b656dfb2b18df472c935ce1fd32af1194a59cf10f3b7d3899cb7a->enter($__internal_3852b7d5911b656dfb2b18df472c935ce1fd32af1194a59cf10f3b7d3899cb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3852b7d5911b656dfb2b18df472c935ce1fd32af1194a59cf10f3b7d3899cb7a->leave($__internal_3852b7d5911b656dfb2b18df472c935ce1fd32af1194a59cf10f3b7d3899cb7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
