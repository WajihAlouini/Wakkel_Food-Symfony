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

/* client/statistics.html.twig */
class __TwigTemplate_7e41db345e5d6643c09b327c2bbbbea2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'java_scripts' => [$this, 'block_java_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/statistics.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Client Statistics</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
</head>
<body>
    <canvas id=\"clientStatisticsChart\" width=\"500\" height=\"500\"></canvas>
";
        // line 11
        yield from $this->unwrap()->yieldBlock('java_scripts', $context, $blocks);
        // line 51
        yield "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_java_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        // line 12
        yield "    <script>
        var ctx = document.getElementById('clientStatisticsChart').getContext('2d');
        var maleCount = ";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["male_count"]) || array_key_exists("male_count", $context) ? $context["male_count"] : (function () { throw new RuntimeError('Variable "male_count" does not exist.', 14, $this->source); })()), "html", null, true);
        yield ";
        var femaleCount = ";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["female_count"]) || array_key_exists("female_count", $context) ? $context["female_count"] : (function () { throw new RuntimeError('Variable "female_count" does not exist.', 15, $this->source); })()), "html", null, true);
        yield ";
        var data = {
            datasets: [{
                data: [maleCount, femaleCount],
                backgroundColor: [
                    'blue',
                    'pink'
                ],
            }],
            labels: [
                'Homme',
                'Femme'
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Répartition des clients par genre'
                }
            }
        };

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });
    </script>
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
        return "client/statistics.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  89 => 15,  85 => 14,  81 => 12,  71 => 11,  59 => 51,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Client Statistics</title>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
</head>
<body>
    <canvas id=\"clientStatisticsChart\" width=\"500\" height=\"500\"></canvas>
{% block java_scripts %}
    <script>
        var ctx = document.getElementById('clientStatisticsChart').getContext('2d');
        var maleCount = {{ male_count }};
        var femaleCount = {{ female_count }};
        var data = {
            datasets: [{
                data: [maleCount, femaleCount],
                backgroundColor: [
                    'blue',
                    'pink'
                ],
            }],
            labels: [
                'Homme',
                'Femme'
            ]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Répartition des clients par genre'
                }
            }
        };

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });
    </script>
{% endblock %}
</body>
</html>", "client/statistics.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\statistics.html.twig");
    }
}
