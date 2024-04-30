<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* evenement/index.html.twig */
class __TwigTemplate_1a14666bf68aa8af3c1f93e68aa5b422 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Evenement Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<div class=\"container\">
    <h1 class=\"my-4\">Evenement Index</h1>

    ";
        // line 10
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\" method=\"get\" class=\"mb-3\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" name=\"eventName\" placeholder=\"Search by Event Name\" aria-label=\"Search\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", ["eventName"], "method", false, false, false, 12), "html", null, true);
        echo "\">
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </div>
    </form>

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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "eventName", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 34
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info me-2\">Show</a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\" class=\"btn btn-primary mt-3\">Create New</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  172 => 49,  166 => 45,  157 => 41,  148 => 37,  144 => 36,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  124 => 30,  119 => 29,  99 => 12,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Evenement Index{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"my-4\">Evenement Index</h1>

    {# Search Form #}
    <form action=\"{{ path('app_evenement_index') }}\" method=\"get\" class=\"mb-3\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" name=\"eventName\" placeholder=\"Search by Event Name\" aria-label=\"Search\" value=\"{{ app.request.query.get('eventName') }}\">
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
        </div>
    </form>

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
            {% for evenement in evenements %}
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
</div>
{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\user\\OneDrive\\Documents\\Bureau\\Workshops-Pidev-master\\templates\\evenement\\index.html.twig");
    }
}
