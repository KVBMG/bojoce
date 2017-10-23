<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_55a11e59d120639ecf625d6e94cce536a53b2603c6e728e7b930a932304f64b9 extends Twig_Template
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
        $__internal_f6d3c17c5a3e4cbe0103be5ac8222cd4a6853c36820a7e2e398982ee560b9bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d3c17c5a3e4cbe0103be5ac8222cd4a6853c36820a7e2e398982ee560b9bba->enter($__internal_f6d3c17c5a3e4cbe0103be5ac8222cd4a6853c36820a7e2e398982ee560b9bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f6d3c17c5a3e4cbe0103be5ac8222cd4a6853c36820a7e2e398982ee560b9bba->leave($__internal_f6d3c17c5a3e4cbe0103be5ac8222cd4a6853c36820a7e2e398982ee560b9bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
