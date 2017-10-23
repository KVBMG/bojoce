<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_87b04162e4f130e383ada2d8c81eb7c0fdc1f24948c6663a84ab840fd6d7957a extends Twig_Template
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
        $__internal_98715957c813aef7714fb962b7c2633dd8fd098f9aff46c62265eced3efd919d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98715957c813aef7714fb962b7c2633dd8fd098f9aff46c62265eced3efd919d->enter($__internal_98715957c813aef7714fb962b7c2633dd8fd098f9aff46c62265eced3efd919d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_98715957c813aef7714fb962b7c2633dd8fd098f9aff46c62265eced3efd919d->leave($__internal_98715957c813aef7714fb962b7c2633dd8fd098f9aff46c62265eced3efd919d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
