<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1e6961e3be357a3e269de2a417364d887d8c218b065362d468b630d3ee042ae4 extends Twig_Template
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
        $__internal_c0801ce51bfb75c56492ab11b4bb9c59c1f2674b9ecb1b6675648ae41461a7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0801ce51bfb75c56492ab11b4bb9c59c1f2674b9ecb1b6675648ae41461a7c1->enter($__internal_c0801ce51bfb75c56492ab11b4bb9c59c1f2674b9ecb1b6675648ae41461a7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c0801ce51bfb75c56492ab11b4bb9c59c1f2674b9ecb1b6675648ae41461a7c1->leave($__internal_c0801ce51bfb75c56492ab11b4bb9c59c1f2674b9ecb1b6675648ae41461a7c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
