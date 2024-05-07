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

/* commande/index.html.twig */
class __TwigTemplate_85333fada6d24e6b00397f343378d856 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Table des commandes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<br>
<br>
<br>
<br>
<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center\">Table des commandes</h1>

            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 18) > 0)) {
            // line 19
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th scope=\"col\">
                                        <a href=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "idCommande", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">IdCommande ▲</a>
                                        <a href=\"";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "idCommande", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">IdCommande ▼</a>
                                    </th>
                                    <th scope=\"col\">
                                        <a href=\"";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "statusCommande", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Status ▲</a>
                                        <a href=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "statusCommande", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Status ▼</a>
                                    </th>
                                    <th scope=\"col\">
                                        <a href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "prix", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Prix ▲</a>
                                        <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "prix", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Prix ▼</a>
                                    </th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 40
                yield "                                <tr>
                                    <td>";
                // line 41
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                                    <td>";
                // line 42
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statusCommande", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
                                    <td>";
                // line 43
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
                                    <td>
                                        <a href=\"";
                // line 45
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["idCommande" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Show</a>
                                        <a href=\"";
                // line 46
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["idCommande" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                            </tbody>
                        </table>
                    </div>

                    ";
            // line 55
            yield "                    <div class=\"d-flex justify-content-center mt-3\">
                        ";
            // line 56
            yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()));
            yield "
                    </div>
                    ";
        } else {
            // line 59
            yield "                    <div class=\"alert alert-info\" role=\"alert\">
                        No records found.
                    </div>
                    ";
        }
        // line 63
        yield "                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistics");
        yield "\" class=\"btn btn-primary\">Statistiques</a>
            </div>
        </div>
    </div>
</div>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/index.html.twig";
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
        return array (  207 => 67,  201 => 63,  195 => 59,  189 => 56,  186 => 55,  180 => 50,  170 => 46,  166 => 45,  161 => 43,  157 => 42,  153 => 41,  150 => 40,  146 => 39,  137 => 33,  133 => 32,  127 => 29,  123 => 28,  117 => 25,  113 => 24,  106 => 19,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Table des commandes{% endblock %}

{% block body %}
<br>
<br>
<br>
<br>
<br>
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center\">Table des commandes</h1>

            <div class=\"card\">
                <div class=\"card-body\">
                    {% if pagination.getTotalItemCount() > 0 %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th scope=\"col\">
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'idCommande', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">IdCommande ▲</a>
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'idCommande', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">IdCommande ▼</a>
                                    </th>
                                    <th scope=\"col\">
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'statusCommande', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">Status ▲</a>
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'statusCommande', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">Status ▼</a>
                                    </th>
                                    <th scope=\"col\">
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'prix', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">Prix ▲</a>
                                        <a href=\"{{ path('app_commande_index', {'orderBy': 'prix', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">Prix ▼</a>
                                    </th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for commande in pagination %}
                                <tr>
                                    <td>{{ commande.idCommande }}</td>
                                    <td>{{ commande.statusCommande }}</td>
                                    <td>{{ commande.prix }}</td>
                                    <td>
                                        <a href=\"{{ path('app_commande_show', {'idCommande': commande.idCommande}) }}\" class=\"btn btn-sm btn-info\">Show</a>
                                        <a href=\"{{ path('app_commande_edit', {'idCommande': commande.idCommande}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    {# Affichage de la pagination #}
                    <div class=\"d-flex justify-content-center mt-3\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                    {% else %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        No records found.
                    </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"text-center mt-3\">
                <a href=\"{{ path('app_statistics') }}\" class=\"btn btn-primary\">Statistiques</a>
            </div>
        </div>
    </div>
</div>





{% endblock %}
", "commande/index.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\commande\\index.html.twig");
    }
}
