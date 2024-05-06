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

/* evenement/index.html.twig */
class __TwigTemplate_c024cbe02ee8883b1ec07b2a6eeb96c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "evenement/index.html.twig", 1);
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

        yield "Evenement Index";
        
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
        yield "<div class=\"container\">
    <h1 class=\"my-4\">Evenement Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Event Name</th>
                    <th scope=\"col\">Start Date</th>
                    <th scope=\"col\">End Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 22
            yield "                <tr>
                    <td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "eventName", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 25)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 26)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>
                        <a href=\"";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info me-2\">Show</a>
                        <a href=\"";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            yield "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        yield "\" class=\"btn btn-primary mt-3\">Create New</a>
    ";
        // line 43
        yield "    ";
        yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 43, $this->source); })()));
        yield "
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
        return "evenement/index.html.twig";
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
        return array (  164 => 43,  160 => 41,  154 => 37,  145 => 33,  136 => 29,  132 => 28,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  107 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Evenement Index{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Evenement Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Event Name</th>
                    <th scope=\"col\">Start Date</th>
                    <th scope=\"col\">End Date</th>
                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for evenement in pagination %}
                <tr>
                    <td>{{ evenement.idEvent }}</td>
                    <td>{{ evenement.eventName }}</td>
                    <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</td>
                    <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</td>
                    <td>
                        <a href=\"{{ path('app_evenement_show', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-info me-2\">Show</a>
                        <a href=\"{{ path('app_evenement_edit', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <a href=\"{{ path('app_evenement_new') }}\" class=\"btn btn-primary mt-3\">Create New</a>
    {# Display pagination links #}
    {{ knp_pagination_render(pagination) }}
</div>
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evenement\\index.html.twig");
    }
}
