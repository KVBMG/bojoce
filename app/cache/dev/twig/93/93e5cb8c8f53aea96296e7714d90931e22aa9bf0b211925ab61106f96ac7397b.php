<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c9046c5d970f8a4390b7e16fc7f7755c4fceee769369c32edf7abf7dac8626ab extends Twig_Template
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
        $__internal_437ebea779364d47be9254b25be2bb2f000320f496cd7bc4f05e3c78649ed302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ebea779364d47be9254b25be2bb2f000320f496cd7bc4f05e3c78649ed302->enter($__internal_437ebea779364d47be9254b25be2bb2f000320f496cd7bc4f05e3c78649ed302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_437ebea779364d47be9254b25be2bb2f000320f496cd7bc4f05e3c78649ed302->leave($__internal_437ebea779364d47be9254b25be2bb2f000320f496cd7bc4f05e3c78649ed302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
