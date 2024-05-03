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

/* evenement/frontindex.html.twig */
class __TwigTemplate_cebdc3b7755454f9f7e218a678b5cdbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/frontindex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/frontindex.html.twig"));

        // line 1
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

        // line 2
        yield "<div class=\"container mt-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"mb-4\">Event Listings</h1>
       <form action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_frontindex");
        yield "\" method=\"get\" class=\"form-inline justify-content-center mb-4\">
    <div class=\"input-group\">
        <input type=\"date\" name=\"filter_date\" class=\"form-control\" value=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "get", ["filter_date"], "method", false, false, false, 7), "html", null, true);
        yield "\" style=\"border-top-right-radius: 0; border-bottom-right-radius: 0;\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #4CAF50; border-color: #4CAF50;\">Filter</button>
    </div>
</form>

    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered\">
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 26
            yield "                <tr>
                    <td>";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                    <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "eventName", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                    <td>";
            // line 29
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 29)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>";
            // line 30
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 30)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td>
                        <a href=\"";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_showfront", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info me-2\">Details</a>
                        <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Enter Now</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "            </tbody>
        </table>
    </div>
</div>

";
        // line 46
        yield from         $this->loadTemplate("footer.html.twig", "evenement/frontindex.html.twig", 46)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/frontindex.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  150 => 46,  143 => 41,  134 => 37,  125 => 33,  121 => 32,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  101 => 26,  96 => 25,  75 => 7,  70 => 5,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<div class=\"container mt-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"mb-4\">Event Listings</h1>
       <form action=\"{{ path('app_evenement_frontindex') }}\" method=\"get\" class=\"form-inline justify-content-center mb-4\">
    <div class=\"input-group\">
        <input type=\"date\" name=\"filter_date\" class=\"form-control\" value=\"{{ app.request.query.get('filter_date') }}\" style=\"border-top-right-radius: 0; border-bottom-right-radius: 0;\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #4CAF50; border-color: #4CAF50;\">Filter</button>
    </div>
</form>

    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered\">
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
                        <a href=\"{{ path('app_evenement_showfront', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-outline-info me-2\">Details</a>
                        <a href=\"{{ path('app_participation_new', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-outline-primary\">Enter Now</a>
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
</div>

{% include \"footer.html.twig\" %}
{% endblock %}
", "evenement/frontindex.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evenement\\frontindex.html.twig");
    }
}
