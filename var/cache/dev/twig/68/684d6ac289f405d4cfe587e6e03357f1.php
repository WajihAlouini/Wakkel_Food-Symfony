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

/* reclamation/pdf.html.twig */
class __TwigTemplate_4f721b2b78b1b712f3557d7104c5c22f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        // line 1
        yield "    <style>
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
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
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

        .create-new {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .create-new:hover {
            background-color: #218838;
        }

        td.description {
            max-width: 200px; /* Adjust the max-width as needed */
            word-wrap: break-word;
        }

        td.date {
            white-space: nowrap;
        }
    </style>


";
        // line 76
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        yield "    <h1>Reclamation index</h1>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 91
            yield "                <tr>
                    <td>";
            // line 92
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "emailR", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                    <td class=\"date\">";
            // line 93
            ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 93)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                    <td class=\"description\">";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                    <td>";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statut", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
<td>
</td>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            yield "                <tr>
                    <td colspan=\"7\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "        </tbody>
    </table>


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
        return "reclamation/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  201 => 106,  192 => 102,  181 => 96,  177 => 95,  173 => 94,  169 => 93,  165 => 92,  162 => 91,  157 => 90,  142 => 77,  122 => 76,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <style>
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
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
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

        .create-new {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .create-new:hover {
            background-color: #218838;
        }

        td.description {
            max-width: 200px; /* Adjust the max-width as needed */
            word-wrap: break-word;
        }

        td.date {
            white-space: nowrap;
        }
    </style>


{% block body %}
    <h1>Reclamation index</h1>

    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Statut</th>
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
<td>
</td>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "reclamation/pdf.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\reclamation\\pdf.html.twig");
    }
}
