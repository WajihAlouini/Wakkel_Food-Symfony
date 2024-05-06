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

/* evaluation/show.html.twig */
class __TwigTemplate_17eced56af1c305787ed759e2a567f32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/show.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "evaluation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 106
        yield "
    <div class=\"container\">
        <h1>Evaluation</h1>

        <table>
            <tbody>
                <tr>
                    <th>Id Evaluation</th>
                    <td>";
        // line 114
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 114, $this->source); })()), "idEvaluation", [], "any", false, false, false, 114), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>";
        // line 118
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 118, $this->source); })()), "emailE", [], "any", false, false, false, 118), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>";
        // line 122
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 122, $this->source); })()), "date", [], "any", false, false, false, 122)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 122, $this->source); })()), "date", [], "any", false, false, false, 122), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                </tr>
                <tr>
                    <th>Note</th>
                    <td>";
        // line 126
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 126, $this->source); })()), "note", [], "any", false, false, false, 126), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Commentaire</th>
                    <td class=\"commentaire\">";
        // line 130
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 130, $this->source); })()), "commentaire", [], "any", false, false, false, 130), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <div class=\"actions\">
            <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index");
        yield "\" class=\"back-to-list\">Back to List</a>
            <a href=\"";
        // line 137
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 137, $this->source); })()), "idEvaluation", [], "any", false, false, false, 137)]), "html", null, true);
        yield "\" class=\"edit\">Edit</a>
            <div class=\"delete-btn\">
                ";
        // line 139
        yield Twig\Extension\CoreExtension::include($this->env, $context, "evaluation/_delete_form.html.twig");
        yield "
            </div>
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

        .actions {
            padding-top: 20px;
        }

        .actions a {
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

        /* Adding style for the Commentaire field */
        .commentaire {
            max-width: 400px; /* Adjust the width as needed */
            word-wrap: break-word;
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
        return "evaluation/show.html.twig";
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
        return array (  157 => 5,  147 => 4,  131 => 139,  126 => 137,  122 => 136,  113 => 130,  106 => 126,  99 => 122,  92 => 118,  85 => 114,  75 => 106,  73 => 4,  70 => 3,  60 => 2,  37 => 1,);
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

        .actions {
            padding-top: 20px;
        }

        .actions a {
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

        /* Adding style for the Commentaire field */
        .commentaire {
            max-width: 400px; /* Adjust the width as needed */
            word-wrap: break-word;
        }
    </style>
{% endblock %}

    <div class=\"container\">
        <h1>Evaluation</h1>

        <table>
            <tbody>
                <tr>
                    <th>Id Evaluation</th>
                    <td>{{ evaluation.idEvaluation }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ evaluation.emailE }}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>{{ evaluation.date ? evaluation.date|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                    <th>Note</th>
                    <td>{{ evaluation.note }}</td>
                </tr>
                <tr>
                    <th>Commentaire</th>
                    <td class=\"commentaire\">{{ evaluation.commentaire }}</td>
                </tr>
            </tbody>
        </table>

        <div class=\"actions\">
            <a href=\"{{ path('app_evaluation_index') }}\" class=\"back-to-list\">Back to List</a>
            <a href=\"{{ path('app_evaluation_edit', {'idEvaluation': evaluation.idEvaluation}) }}\" class=\"edit\">Edit</a>
            <div class=\"delete-btn\">
                {{ include('evaluation/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "evaluation/show.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evaluation\\show.html.twig");
    }
}
