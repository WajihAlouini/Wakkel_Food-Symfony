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

/* evenement/show.html.twig */
class __TwigTemplate_61fe755d022afb5bd6d64bc80f1125e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "evenement/show.html.twig", 1);
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

        yield "Evenement Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Evenement Details</h1>

    <div class=\"card\">
        <div class=\"card-body\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"width: 30%;\" scope=\"row\">IdEvent</th>
                        <td>";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 14, $this->source); })()), "idEvent", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Event Name</th>
                        <td>";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "eventName", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Start Date</th>
                        <td>";
        // line 22
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "dateDebut", [], "any", false, false, false, 22)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "dateDebut", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">End Date</th>
                        <td>";
        // line 26
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "dateFin", [], "any", false, false, false, 26)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "dateFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"mt-4\">
        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        yield "\" class=\"btn btn-secondary me-2\">Back to List</a>
        <a href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 35, $this->source); })()), "idEvent", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\">Edit</a>
        ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "evenement/_delete_form.html.twig");
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
        return "evenement/show.html.twig";
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
        return array (  141 => 36,  137 => 35,  133 => 34,  122 => 26,  115 => 22,  108 => 18,  101 => 14,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}
{% block title %}Evenement Details{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Evenement Details</h1>

    <div class=\"card\">
        <div class=\"card-body\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th style=\"width: 30%;\" scope=\"row\">IdEvent</th>
                        <td>{{ evenement.idEvent }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Event Name</th>
                        <td>{{ evenement.eventName }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Start Date</th>
                        <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">End Date</th>
                        <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class=\"mt-4\">
        <a href=\"{{ path('app_evenement_index') }}\" class=\"btn btn-secondary me-2\">Back to List</a>
        <a href=\"{{ path('app_evenement_edit', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-primary me-2\">Edit</a>
        {{ include('evenement/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}

", "evenement/show.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evenement\\show.html.twig");
    }
}
