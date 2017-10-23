<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdfe8541768177653ca15a0a509c701c5182d117ef4429c6411e5098564ecac3 extends Twig_Template
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
        $__internal_4fb14cb403c4cd43441e3af288beff3db2a8040e10badac3f1a3149a02cc2a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb14cb403c4cd43441e3af288beff3db2a8040e10badac3f1a3149a02cc2a7b->enter($__internal_4fb14cb403c4cd43441e3af288beff3db2a8040e10badac3f1a3149a02cc2a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4fb14cb403c4cd43441e3af288beff3db2a8040e10badac3f1a3149a02cc2a7b->leave($__internal_4fb14cb403c4cd43441e3af288beff3db2a8040e10badac3f1a3149a02cc2a7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
