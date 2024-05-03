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

/* Admin/restaurant_category/stat.html.twig */
class __TwigTemplate_db251cb26fa33a2b0d2374f2c8503af4 extends Template
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
        return "back&front/back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant_category/stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant_category/stat.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "Admin/restaurant_category/stat.html.twig", 1);
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

        yield "Restaurant Category ";
        
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
        yield "
    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <section class=\"section\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"search-bar\" style=\"position: absolute; margin-top: -4.6%; right: 4.5%\"></div>

                                <canvas id=\"myChart\"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Asian', 'Tunisian', 'Syrian'],
                datasets: [{
                    label: 'Pourcentage %',
                    data: [";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["asianPercentage"]) || array_key_exists("asianPercentage", $context) ? $context["asianPercentage"] : (function () { throw new RuntimeError('Variable "asianPercentage" does not exist.', 34, $this->source); })()), "html", null, true);
        yield ", ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["tunisianPercentage"]) || array_key_exists("tunisianPercentage", $context) ? $context["tunisianPercentage"] : (function () { throw new RuntimeError('Variable "tunisianPercentage" does not exist.', 34, $this->source); })()), "html", null, true);
        yield ", ";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["syrianPercentage"]) || array_key_exists("syrianPercentage", $context) ? $context["syrianPercentage"] : (function () { throw new RuntimeError('Variable "syrianPercentage" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "],

                    backgroundColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }

            }
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
        return "Admin/restaurant_category/stat.html.twig";
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
        return array (  120 => 34,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Restaurant Category {% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <section class=\"section\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"search-bar\" style=\"position: absolute; margin-top: -4.6%; right: 4.5%\"></div>

                                <canvas id=\"myChart\"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Asian', 'Tunisian', 'Syrian'],
                datasets: [{
                    label: 'Pourcentage %',
                    data: [{{ asianPercentage }}, {{ tunisianPercentage }}, {{ syrianPercentage }}],

                    backgroundColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }

            }
        });
    </script>
{% endblock %}
", "Admin/restaurant_category/stat.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Admin\\restaurant_category\\stat.html.twig");
    }
}
