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

/* reclamation/show.html.twig */
class __TwigTemplate_a24bb1c63a65d875342b9ebfe6c591e4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "reclamation/show.html.twig", 1);
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
        // line 103
        yield "
    <div class=\"container\">
        <h1>Reclamation</h1>

        <table>
            <tbody>
                <tr>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>";
        // line 113
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 113, $this->source); })()), "emailR", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>";
        // line 117
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 117, $this->source); })()), "date", [], "any", false, false, false, 117)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 117, $this->source); })()), "date", [], "any", false, false, false, 117), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 121
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td class=\"description\">";
        // line 125
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 125, $this->source); })()), "description", [], "any", false, false, false, 125), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>";
        // line 129
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 129, $this->source); })()), "statut", [], "any", false, false, false, 129), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 134, $this->source); })()), "image", [], "any", false, false, false, 134)) {
            // line 135
            yield "                            <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uploads_show_image", ["filename" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 135, $this->source); })()), "image", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\" alt=\"Reclamation Image\">
                        ";
        } else {
            // line 137
            yield "                            No image uploaded
                        ";
        }
        // line 139
        yield "                    </td>
                </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"back-to-list\">Back to List</a>
        <a href=\"";
        // line 145
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["idReclamation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 145, $this->source); })()), "idReclamation", [], "any", false, false, false, 145)]), "html", null, true);
        yield "\" class=\"edit\">Edit</a>
        <div class=\"delete-btn\">
            ";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/_delete_form.html.twig");
        yield "
        </div>
    </div>
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow-x: auto;
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

        a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .back-to-list {
            background-color: #6c757d;
        }

        .back-to-list:hover {
            background-color: #5a6268;
        }

        .edit {
            background-color: #28a745;
        }

        .edit:hover {
            background-color: #218838;
        }

        .delete-btn {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
        }

        .delete-btn button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-btn button:hover {
            background-color: #c82333;
        }

        .description {
            max-width: 600px;
            overflow-wrap: break-word;
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
        return "reclamation/show.html.twig";
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
        return array (  173 => 5,  163 => 4,  148 => 147,  143 => 145,  139 => 144,  132 => 139,  128 => 137,  122 => 135,  120 => 134,  112 => 129,  105 => 125,  98 => 121,  91 => 117,  84 => 113,  72 => 103,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block body %}
{% block stylesheets %}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow-x: auto;
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

        a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .back-to-list {
            background-color: #6c757d;
        }

        .back-to-list:hover {
            background-color: #5a6268;
        }

        .edit {
            background-color: #28a745;
        }

        .edit:hover {
            background-color: #218838;
        }

        .delete-btn {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
        }

        .delete-btn button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-btn button:hover {
            background-color: #c82333;
        }

        .description {
            max-width: 600px;
            overflow-wrap: break-word;
        }
    </style>
{% endblock %}

    <div class=\"container\">
        <h1>Reclamation</h1>

        <table>
            <tbody>
                <tr>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ reclamation.emailR }}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ reclamation.date ? reclamation.date|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ reclamation.type }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td class=\"description\">{{ reclamation.description }}</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>{{ reclamation.statut }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        {% if reclamation.image %}
                            <img src=\"{{ path('uploads_show_image', {'filename': reclamation.image}) }}\" alt=\"Reclamation Image\">
                        {% else %}
                            No image uploaded
                        {% endif %}
                    </td>
                </tr>
            </tbody>
        </table>

        <a href=\"{{ path('app_reclamation_index') }}\" class=\"back-to-list\">Back to List</a>
        <a href=\"{{ path('app_reclamation_edit', {'idReclamation': reclamation.idReclamation}) }}\" class=\"edit\">Edit</a>
        <div class=\"delete-btn\">
            {{ include('reclamation/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "reclamation/show.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\reclamation\\show.html.twig");
    }
}
