<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_f074774cc4f79a2adf211138cfa3bc7c11f3f1627b8f32dd9c47a67b5f4a8aea extends Twig_Template
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
        $__internal_837b32216af370f068ecb8ebbf6e5f74fc23ea7e1f996abd6f52935a4ea3e328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837b32216af370f068ecb8ebbf6e5f74fc23ea7e1f996abd6f52935a4ea3e328->enter($__internal_837b32216af370f068ecb8ebbf6e5f74fc23ea7e1f996abd6f52935a4ea3e328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_837b32216af370f068ecb8ebbf6e5f74fc23ea7e1f996abd6f52935a4ea3e328->leave($__internal_837b32216af370f068ecb8ebbf6e5f74fc23ea7e1f996abd6f52935a4ea3e328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
