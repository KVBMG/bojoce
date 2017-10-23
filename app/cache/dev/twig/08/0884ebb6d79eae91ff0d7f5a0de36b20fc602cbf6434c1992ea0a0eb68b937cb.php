<?php

/* FOSMessageBundle:Message:threads_list.html.twig */
class __TwigTemplate_69bbd6b6789a91fb5a981dfa25dbcfbfced660f66cd5eb07652b37dd4027b9fb extends Twig_Template
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
        $__internal_5b3396287fe8b23df7431bc1385baf7c11db603107f5203d4c7306373b3459c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3396287fe8b23df7431bc1385baf7c11db603107f5203d4c7306373b3459c5->enter($__internal_5b3396287fe8b23df7431bc1385baf7c11db603107f5203d4c7306373b3459c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:threads_list.html.twig"));

        // line 1
        echo "<table>

    <thead>
        <tr>
            <th>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("subject", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("startdate", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("last_message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 16
        if (($context["threads"] ?? $this->getContext($context, "threads"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 18
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                    </a>

                    ";
                // line 24
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
                    // line 25
                    echo "                        (";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("new", array(), "FOSMessageBundle");
                    echo ")
                    ";
                }
                // line 27
                echo "                </td>
                <td>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 35
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 38
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 39
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 42
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 43
                    echo "                        <br />
                        ";
                    // line 44
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 45
                    echo "                    ";
                } else {
                    // line 46
                    echo "                        ----
                    ";
                }
                // line 48
                echo "                </td>
                <td>
                    ";
                // line 50
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 51
                    echo "                        ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 52
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 54
                        echo "                        ";
                    } else {
                        // line 55
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 56
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 57
                        echo "                        ";
                    }
                    // line 58
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" />
                        </form>
                    ";
                }
                // line 62
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        } else {
            // line 66
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 72
        echo "
    </tbody>

</table>
";
        
        $__internal_5b3396287fe8b23df7431bc1385baf7c11db603107f5203d4c7306373b3459c5->leave($__internal_5b3396287fe8b23df7431bc1385baf7c11db603107f5203d4c7306373b3459c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:threads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 72,  196 => 68,  192 => 66,  189 => 65,  181 => 62,  175 => 59,  170 => 58,  167 => 57,  162 => 56,  157 => 55,  154 => 54,  149 => 53,  144 => 52,  141 => 51,  139 => 50,  135 => 48,  131 => 46,  128 => 45,  126 => 44,  123 => 43,  121 => 42,  110 => 39,  108 => 38,  102 => 35,  96 => 32,  90 => 29,  86 => 27,  80 => 25,  78 => 24,  72 => 21,  68 => 20,  64 => 18,  59 => 17,  57 => 16,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>

    <thead>
        <tr>
            <th>{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}messages{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>
        </tr>
    </thead>

    <tbody>

    {% if threads %}
        {% for thread in threads %}
            <tr>
                <td>
                    <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\">
                        {{ thread.subject }}
                    </a>

                    {% if not fos_message_is_read(thread) %}
                        ({% trans from 'FOSMessageBundle' %}new{% endtrans %})
                    {% endif %}
                </td>
                <td>
                    {{ thread.createdBy }}
                </td>
                <td>
                    {{ thread.createdAt|date }}
                </td>
                <td>
                    {{ thread.messages|length }}
                </td>
                <td>
                    {% if thread.lastMessage %}
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                            →
                        </a>
                        {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                        <br />
                        {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                    {% else %}
                        ----
                    {% endif %}
                </td>
                <td>
                    {% if fos_message_can_delete_thread(thread) %}
                        {% if fos_message_deleted_by_participant(thread) %}
                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                        {% else %}
                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                        {% endif %}
                        <form action=\"{{ formAction }}\" method=\"post\">
                                <input type=\"submit\" value=\"{{ submitValue }}\" />
                        </form>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"6\">
                {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
            </td>
        </tr>
    {% endif %}

    </tbody>

</table>
", "FOSMessageBundle:Message:threads_list.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/threads_list.html.twig");
    }
}
