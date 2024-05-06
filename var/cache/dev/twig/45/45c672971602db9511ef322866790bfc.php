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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_98cc1d5adab4a41986001be0293609cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . (isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 3, $this->source); })()))) : (""));
            // line 4
            yield "        <ul class=\"pagination";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\">

            ";
            // line 6
            if (array_key_exists("previous", $context)) {
                // line 7
                yield "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 8
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 8, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 8, $this->source); })())])), "html", null, true);
                yield "\">
                        ";
                // line 9
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 13
                yield "                <li class=\"pagination-previous disabled\">
                    ";
                // line 14
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 17
            yield "
            ";
            // line 18
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 18, $this->source); })()) > 1)) {
                // line 19
                yield "                <li>
                    <a href=\"";
                // line 20
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 20, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 20, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 20, $this->source); })()) => 1])), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 22
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 22, $this->source); })()) == 3)) {
                    // line 23
                    yield "                    <li>
                        <a href=\"";
                    // line 24
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 24, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 24, $this->source); })()) => 2])), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 26
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 26, $this->source); })()) != 2)) {
                    // line 27
                    yield "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 29
                yield "            ";
            }
            // line 30
            yield "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                yield "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 32, $this->source); })()))) {
                    // line 33
                    yield "                    <li>
                        <a href=\"";
                    // line 34
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 34, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\">
                            ";
                    // line 35
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                ";
                } else {
                    // line 39
                    yield "                    <li class=\"current\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["page"], "html", null, true);
                    yield "</li>
                ";
                }
                // line 41
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "
            ";
            // line 43
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 43, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 43, $this->source); })()))) {
                // line 44
                yield "                ";
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 44, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 44, $this->source); })()) + 1))) {
                    // line 45
                    yield "                    ";
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 45, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 45, $this->source); })()) + 2))) {
                        // line 46
                        yield "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 48
                        yield "                        <li>
                            <a href=\"";
                        // line 49
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 49, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 49, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 49, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 49, $this->source); })()) - 1)])), "html", null, true);
                        yield "\">
                                ";
                        // line 50
                        yield Twig\Extension\EscaperExtension::escape($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 50, $this->source); })()) - 1), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    // line 54
                    yield "                ";
                }
                // line 55
                yield "                <li>
                    <a href=\"";
                // line 56
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 56, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 56, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 56, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })())])), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 56, $this->source); })()), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 59
            yield "
            ";
            // line 60
            if (array_key_exists("next", $context)) {
                // line 61
                yield "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 62
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 62, $this->source); })()), Twig\Extension\CoreExtension::arrayMerge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 62, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 62, $this->source); })())])), "html", null, true);
                yield "\">
                        ";
                // line 63
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 67
                yield "                <li class=\"pagination-next disabled\">
                    ";
                // line 68
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 71
            yield "
        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  221 => 71,  215 => 68,  212 => 67,  205 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  185 => 56,  182 => 55,  179 => 54,  172 => 50,  168 => 49,  165 => 48,  161 => 46,  158 => 45,  155 => 44,  153 => 43,  150 => 42,  144 => 41,  138 => 39,  131 => 35,  127 => 34,  124 => 33,  121 => 32,  117 => 31,  114 => 30,  111 => 29,  107 => 27,  105 => 26,  100 => 24,  97 => 23,  95 => 22,  90 => 20,  87 => 19,  85 => 18,  82 => 17,  76 => 14,  73 => 13,  66 => 9,  62 => 8,  59 => 7,  57 => 6,  51 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <nav aria-label=\"Pagination\">
        {% set classAlign = (align is defined) ? \" text-#{align}\" : '' %}
        <ul class=\"pagination{{ classAlign }}\">

            {% if previous is defined %}
                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                        {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-previous disabled\">
                    {{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}
                </li>
            {% endif %}

            {% if startPage > 1 %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
                </li>
                {% if startPage == 3 %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                    </li>
                {% elseif startPage != 2 %}
                    <li class=\"ellipsis\"></li>
                {% endif %}
            {% endif %}

            {% for page in pagesInRange %}
                {% if page != current %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">
                            {{ page }}
                        </a>
                    </li>
                {% else %}
                    <li class=\"current\">{{ page }}</li>
                {% endif %}
            {% endfor %}

            {% if pageCount > endPage %}
                {% if pageCount > (endPage + 1) %}
                    {% if pageCount > (endPage + 2) %}
                        <li class=\"ellipsis\"></li>
                    {% else %}
                        <li>
                            <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">
                                {{ pageCount -1 }}
                            </a>
                        </li>
                    {% endif %}
                {% endif %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
                </li>
            {% endif %}

            {% if next is defined %}
                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                        {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                    </a>
                </li>
            {% else %}
                <li class=\"pagination-next disabled\">
                    {{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}
                </li>
            {% endif %}

        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\foundation_v6_pagination.html.twig");
    }
}
