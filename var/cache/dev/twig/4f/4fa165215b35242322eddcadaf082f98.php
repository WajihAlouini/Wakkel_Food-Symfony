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

/* evaluation/eb.twig */
class __TwigTemplate_84ea45240d351d2eeb7e51708634ea1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/eb.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/eb.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Evaluation Index</title>
    <style>
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

        td.commentaire {
            word-wrap: break-word;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <h1>Evaluation Index</h1>

    <table>
        <thead>
            <tr>
                <th>Id Evaluation</th>
                <th>Email</th>
                <th>Date</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 92, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 93
            yield "                <tr>
                    <td>";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                    <td>";
            // line 95
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "emailE", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                    <td style=\"white-space: nowrap;\">";
            // line 96
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "date", [], "any", false, false, false, 96)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "date", [], "any", false, false, false, 96), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 97
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "note", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                    <td class=\"commentaire\">";
            // line 98
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "commentaire", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                    <td class=\"actions\">
                        <a href=\"";
            // line 100
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_show", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\">Show</a>
                        <a href=\"";
            // line 101
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            yield "                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_new");
        yield "\" class=\"create-new\">Create New</a>
</body>
</html>
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
        return "evaluation/eb.twig";
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
        return array (  193 => 112,  188 => 109,  179 => 105,  170 => 101,  166 => 100,  161 => 98,  157 => 97,  153 => 96,  149 => 95,  145 => 94,  142 => 93,  137 => 92,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Evaluation Index</title>
    <style>
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

        td.commentaire {
            word-wrap: break-word;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <h1>Evaluation Index</h1>

    <table>
        <thead>
            <tr>
                <th>Id Evaluation</th>
                <th>Email</th>
                <th>Date</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for evaluation in evaluations %}
                <tr>
                    <td>{{ evaluation.idEvaluation }}</td>
                    <td>{{ evaluation.emailE }}</td>
                    <td style=\"white-space: nowrap;\">{{ evaluation.date ? evaluation.date|date('Y-m-d') : '' }}</td>
                    <td>{{ evaluation.note }}</td>
                    <td class=\"commentaire\">{{ evaluation.commentaire }}</td>
                    <td class=\"actions\">
                        <a href=\"{{ path('app_evaluation_show', {'idEvaluation': evaluation.idEvaluation}) }}\">Show</a>
                        <a href=\"{{ path('app_evaluation_edit', {'idEvaluation': evaluation.idEvaluation}) }}\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_evaluation_new') }}\" class=\"create-new\">Create New</a>
</body>
</html>
", "evaluation/eb.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evaluation\\eb.twig");
    }
}
