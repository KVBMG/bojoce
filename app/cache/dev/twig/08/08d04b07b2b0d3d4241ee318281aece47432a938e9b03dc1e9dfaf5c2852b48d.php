<?php

/* EcoJobRecruteurBundle:Recruteur:xhrCandidatureTemplate.html.twig */
class __TwigTemplate_652f19cd7ab18700ea1220d8dc20536fe4c10dd7411f7a5efc944ba50f0c4d3d extends Twig_Template
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
        $__internal_dbafd48c64ce9dcfddb0de542eef891118d2395d07bb90dcdd9cfd8e56d8565a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbafd48c64ce9dcfddb0de542eef891118d2395d07bb90dcdd9cfd8e56d8565a->enter($__internal_dbafd48c64ce9dcfddb0de542eef891118d2395d07bb90dcdd9cfd8e56d8565a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:xhrCandidatureTemplate.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["candidatures"] ?? $this->getContext($context, "candidatures"))) == 0)) {
            // line 2
            echo "    <li href=\"#\" class=\"list-group-item list-group-item-danger candidature-item\"><b>Aucun résultats!</b></li>
";
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["candidatures"] ?? $this->getContext($context, "candidatures")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 5
            echo "    <a class=\"list-group-item candidature-item\" data-candidature-item-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidature"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidature"], "candidat_username", array()), "html", null, true);
            echo " a postulé le :<b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["candidature"], 0, array(), "array"), "date_candidature", array())), "html", null, true);
            echo "</b></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "<script>
    \$(function() {
        var candidatureContainer = \$('#candidatureList'), page2 = 1;
        candidatureContainer.scroll(function() {
            var \$this = \$(this);
            var height = this.scrollHeight - \$this.height(); // Get the height of the div
            var scroll = \$this.scrollTop(); // Get the vertical scroll position
            var isScrolledToEnd = (scroll >= height);
            if (isScrolledToEnd) {
                page2++;
                \$(document).trigger('fetchMoreCandidature', [ page2 ]);
            }
        });

         \$(document).on('fetchMoreCandidature', function (event, start) {
             console.log(start);
             \$.ajax({
                 url: Routing.generate('eco_job_recruteur_offre_candidatures', {id: ";
        // line 24
        echo twig_escape_filter($this->env, ($context["offreId"] ?? $this->getContext($context, "offreId")), "html", null, true);
        echo ", offset: start}),
                 method: 'GET',
                 beforeSend : function () {
                     \$.blockUI({
                         message: '<p class=\"loader\"></p>',
                         css: {border: 'none', backgroundColor: 'transparent', width: '66px', top: (\$(window).height() - 100) / 2 + 'px', left: (\$(window).width() - 100) / 2 + 'px', }
                     });
                 },
                 success: function (data) {
                     var _data = JSON.parse(data);
                     renderCITems(_data);
                 },
                 error: function (err) {
                     console.warn(err);
                 },
                 complete: function () {
                     \$.unblockUI();
                 }
             });
         });

         function renderCITems(pageItem){
             if(pageItem.length === 0) {
                 console.warn(\"empty\");
                 page2 = page2 - 1; // aucune incrémentation
             }else {
                 pageItem.forEach(function (item, index, arr) {
                     var _date = formatDate(item[0].date_candidature);
                     var list = '<a class=\"list-group-item candidature-item\">' + item.candidat_username +' date'+ item[0].date_candidature +'</a>';
                     \$('#candidatureList').append(list);
                 });
             }
         }
    });
</script>";
        
        $__internal_dbafd48c64ce9dcfddb0de542eef891118d2395d07bb90dcdd9cfd8e56d8565a->leave($__internal_dbafd48c64ce9dcfddb0de542eef891118d2395d07bb90dcdd9cfd8e56d8565a_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:xhrCandidatureTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  45 => 7,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (candidatures | length) == 0 %}
    <li href=\"#\" class=\"list-group-item list-group-item-danger candidature-item\"><b>Aucun résultats!</b></li>
{% endif %}
{% for candidature in candidatures %}
    <a class=\"list-group-item candidature-item\" data-candidature-item-id=\"{{candidature.id}}\">{{ candidature.candidat_username }} a postulé le :<b>{{ candidature[0].date_candidature |date }}</b></a>
{% endfor %}
<script>
    \$(function() {
        var candidatureContainer = \$('#candidatureList'), page2 = 1;
        candidatureContainer.scroll(function() {
            var \$this = \$(this);
            var height = this.scrollHeight - \$this.height(); // Get the height of the div
            var scroll = \$this.scrollTop(); // Get the vertical scroll position
            var isScrolledToEnd = (scroll >= height);
            if (isScrolledToEnd) {
                page2++;
                \$(document).trigger('fetchMoreCandidature', [ page2 ]);
            }
        });

         \$(document).on('fetchMoreCandidature', function (event, start) {
             console.log(start);
             \$.ajax({
                 url: Routing.generate('eco_job_recruteur_offre_candidatures', {id: {{ offreId }}, offset: start}),
                 method: 'GET',
                 beforeSend : function () {
                     \$.blockUI({
                         message: '<p class=\"loader\"></p>',
                         css: {border: 'none', backgroundColor: 'transparent', width: '66px', top: (\$(window).height() - 100) / 2 + 'px', left: (\$(window).width() - 100) / 2 + 'px', }
                     });
                 },
                 success: function (data) {
                     var _data = JSON.parse(data);
                     renderCITems(_data);
                 },
                 error: function (err) {
                     console.warn(err);
                 },
                 complete: function () {
                     \$.unblockUI();
                 }
             });
         });

         function renderCITems(pageItem){
             if(pageItem.length === 0) {
                 console.warn(\"empty\");
                 page2 = page2 - 1; // aucune incrémentation
             }else {
                 pageItem.forEach(function (item, index, arr) {
                     var _date = formatDate(item[0].date_candidature);
                     var list = '<a class=\"list-group-item candidature-item\">' + item.candidat_username +' date'+ item[0].date_candidature +'</a>';
                     \$('#candidatureList').append(list);
                 });
             }
         }
    });
</script>", "EcoJobRecruteurBundle:Recruteur:xhrCandidatureTemplate.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/xhrCandidatureTemplate.html.twig");
    }
}
