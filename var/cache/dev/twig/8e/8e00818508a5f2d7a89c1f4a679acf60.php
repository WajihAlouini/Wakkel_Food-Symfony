<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig */
class __TwigTemplate_fb955d052054167b6fe66c43b6949725 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig"));

        // line 12
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["attr"], "html", null, true);
            yield "=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    <span class=\"float-right\">
        ";
        // line 14
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 15, $this->source); })()) == "desc")) {
                // line 16
                yield "                <i class=\"material-icons\">expand_more</i>
            ";
            } else {
                // line 18
                yield "                <i class=\"material-icons\">expand_less</i>
            ";
            }
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "            <i class=\"material-icons\">unfold_more</i>
        ";
        }
        // line 23
        yield "    </span>
    ";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  84 => 24,  81 => 23,  77 => 21,  74 => 20,  70 => 18,  66 => 16,  63 => 15,  61 => 14,  44 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Twitter Bootstrap - Material Design Icons Sorting control implementation.
 *
 * Install Icon Set:    https://google.github.io/material-design-icons/
 * Overview:            https://material.io/resources/icons/?style=baseline
 *
 * @author Mike Stuebbe <mike.stuebbe@gmail.com>
 */
#}
<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>
    <span class=\"float-right\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"material-icons\">expand_more</i>
            {% else %}
                <i class=\"material-icons\">expand_less</i>
            {% endif %}
        {% else %}
            <i class=\"material-icons\">unfold_more</i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\twitter_bootstrap_v4_material_design_icons_sortable_link.html.twig");
    }
}
