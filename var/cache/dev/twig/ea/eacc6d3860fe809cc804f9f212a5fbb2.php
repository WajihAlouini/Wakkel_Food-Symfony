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

/* participation/show.html.twig */
class __TwigTemplate_45d385ff3254c68c13932fb9708ba51b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/show.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "participation/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Participation";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Participation Details</h1>

        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 15, $this->source); })()), "idP", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">User ID</th>
                            <td>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 19, $this->source); })()), "idUser", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Number of Places</th>
                            <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 23, $this->source); })()), "nbrPlace", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 27, $this->source); })()), "emailUser", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"mt-4\">
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        yield "\" class=\"btn btn-secondary me-2\">Back to List</a>
            <a href=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_edit", ["idP" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 36, $this->source); })()), "idP", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">Edit</a>
            ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "participation/_delete_form.html.twig");
        yield "
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
        return "participation/show.html.twig";
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
        return array (  141 => 37,  137 => 36,  133 => 35,  122 => 27,  115 => 23,  108 => 19,  101 => 15,  90 => 6,  80 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}
{% block title %}Participation{% endblock %}


{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Participation Details</h1>

        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table table-striped\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>{{ participation.idP }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">User ID</th>
                            <td>{{ participation.idUser }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Number of Places</th>
                            <td>{{ participation.nbrPlace }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>{{ participation.emailUser }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"mt-4\">
            <a href=\"{{ path('app_participation_index') }}\" class=\"btn btn-secondary me-2\">Back to List</a>
            <a href=\"{{ path('app_participation_edit', {'idP': participation.idP}) }}\" class=\"btn btn-primary me-2\">Edit</a>
            {{ include('participation/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "participation/show.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\participation\\show.html.twig");
    }
}
