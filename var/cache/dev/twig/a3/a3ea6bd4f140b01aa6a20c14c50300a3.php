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

/* evenement/frontindex.html.twig */
class __TwigTemplate_ff9db0843319df5169b4e5346e07987b extends Template
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
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"container mt-5\">
    <div class=\"text-center mb-5\">
        <h1 class=\"mb-4\">Event Listings</h1>
       <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_frontindex");
        echo "\" method=\"get\" class=\"form-inline justify-content-center mb-4\">
    <div class=\"input-group\">
        <input type=\"date\" name=\"filter_date\" class=\"form-control\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "get", ["filter_date"], "method", false, false, false, 7), "html", null, true);
        echo "\" style=\"border-top-right-radius: 0; border-bottom-right-radius: 0;\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "eventName", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_showfront", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-info me-2\">Details</a>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new", ["idEvent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-outline-primary\">Enter Now</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>
</div>

";
        // line 46
        $this->loadTemplate("footer.html.twig", "evenement/frontindex.html.twig", 46)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  148 => 46,  141 => 41,  132 => 37,  123 => 33,  119 => 32,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  99 => 26,  94 => 25,  73 => 7,  68 => 5,  63 => 2,  44 => 1,);
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
", "evenement/frontindex.html.twig", "C:\\Users\\user\\OneDrive\\Documents\\Bureau\\Workshops-Pidev-master\\templates\\evenement\\frontindex.html.twig");
    }
}
