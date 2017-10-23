<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c4f2900dd5537f900e82594327af8d49ede8346e10f12e6f0b60fbd978cedfe0 extends Twig_Template
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
        $__internal_6e8fcbaa3e95b42775fcec8d109bc56c4253beebaad22c6e6457d7e6cb1137e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8fcbaa3e95b42775fcec8d109bc56c4253beebaad22c6e6457d7e6cb1137e6->enter($__internal_6e8fcbaa3e95b42775fcec8d109bc56c4253beebaad22c6e6457d7e6cb1137e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6e8fcbaa3e95b42775fcec8d109bc56c4253beebaad22c6e6457d7e6cb1137e6->leave($__internal_6e8fcbaa3e95b42775fcec8d109bc56c4253beebaad22c6e6457d7e6cb1137e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
