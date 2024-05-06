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

/* reclamation/index.html.twig */
class __TwigTemplate_2ac283333f00dd2bc497e8e2872e6767 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back&front/back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "reclamation/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 82
        yield "
    <h1>Reclamation index</h1>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 99
            yield "                <tr>
                    <td>";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "emailR", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                    <td class=\"date\">";
            // line 101
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 101)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 101), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 102
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                    <td class=\"description\">";
            // line 103
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
                    <td>";
            // line 104
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                    <td>";
            // line 105
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                    <td class=\"actions\">
                        <a href=\"";
            // line 107
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\">Show</a>
                        <a href=\"";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "idReclamation", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            yield "                <tr>
                    <td colspan=\"7\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"create-new\">Create New</a>
    <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index_pdf");
        yield "\" class=\"download-pdf\">Download PDF</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    <style>
        /* Styles pour le tableau */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd; /* Ajout de bordure droite */
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border-top: 1px solid #ddd; /* Ajout de bordure supérieure pour les en-têtes */
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .actions a:hover {
            color: #0056b3;
        }

        .create-new, .download-pdf {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .create-new:hover, .download-pdf:hover {
            background-color: #218838;
        }

        td.description {
            max-width: 200px; /* Ajuster la largeur maximale si nécessaire */
            word-wrap: break-word;
        }

        td.date {
            white-space: nowrap;
        }
    </style>
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
        return "reclamation/index.html.twig";
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
        return array (  178 => 5,  168 => 4,  154 => 120,  150 => 119,  145 => 116,  136 => 112,  127 => 108,  123 => 107,  118 => 105,  114 => 104,  110 => 103,  106 => 102,  102 => 101,  98 => 100,  95 => 99,  90 => 98,  72 => 82,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block body %}
{% block stylesheets %}
    <style>
        /* Styles pour le tableau */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ddd; /* Ajout de bordure droite */
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border-top: 1px solid #ddd; /* Ajout de bordure supérieure pour les en-têtes */
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .actions a:hover {
            color: #0056b3;
        }

        .create-new, .download-pdf {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .create-new:hover, .download-pdf:hover {
            background-color: #218838;
        }

        td.description {
            max-width: 200px; /* Ajuster la largeur maximale si nécessaire */
            word-wrap: break-word;
        }

        td.date {
            white-space: nowrap;
        }
    </style>
{% endblock %}

    <h1>Reclamation index</h1>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for reclamation in reclamations %}
                <tr>
                    <td>{{ reclamation.emailR }}</td>
                    <td class=\"date\">{{ reclamation.date ? reclamation.date|date('Y-m-d') : '' }}</td>
                    <td>{{ reclamation.type }}</td>
                    <td class=\"description\">{{ reclamation.description }}</td>
                    <td>{{ reclamation.statut }}</td>
                    <td>{{ reclamation.image }}</td>
                    <td class=\"actions\">
                        <a href=\"{{ path('app_reclamation_show', {'idReclamation': reclamation.idReclamation}) }}\">Show</a>
                        <a href=\"{{ path('app_reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_reclamation_new') }}\" class=\"create-new\">Create New</a>
    <a href=\"{{ path('app_reclamation_index_pdf') }}\" class=\"download-pdf\">Download PDF</a>

{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\reclamation\\index.html.twig");
    }
}
