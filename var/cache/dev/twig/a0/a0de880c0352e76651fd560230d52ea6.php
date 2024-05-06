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
class __TwigTemplate_2da9fe41f97c55177b0d3f89060469b3 extends Template
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
        yield from         $this->loadTemplate("client/navbar.html.twig", "evenement/frontindex.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div class=\"container-xxl py-5 bg-dark hero-header mb-5\" style=\"background-image: url('/path/to/your/background/image.jpg');\">
    <div class=\"container mt-5\">
        ";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 47
        yield "    </div>
</div>
<style>
.table-blue {
    color: #00bcd4; /* Couleur du texte en bleu ciel */
    border-color: #fff; /* Couleur de la bordure en blanc */
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "            <div class=\"text-center mb-5\">
                <h1 class=\"mb-4 text-white\">Event Listings</h1>
               <form action=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_frontindex");
        yield "\" method=\"get\" class=\"form-inline justify-content-center mb-4\">
                <div class=\"input-group\">
                    <input type=\"date\" name=\"filter_date\" class=\"form-control\" value=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "query", [], "any", false, false, false, 9), "get", ["filter_date"], "method", false, false, false, 9), "html", null, true);
        yield "\" style=\"border-top-right-radius: 0; border-bottom-right-radius: 0;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #4CAF50; border-color: #4CAF50;\">Filter</button>
                </div>
               </form>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead class=\"table-blue\">
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 27
            yield "                            <tr>
                                <td class=\"text-white\">";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                                <td class=\"text-white\">";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "eventName", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                                <td class=\"text-white\">";
            // line 30
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 30)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                                <td class=\"text-white\">";
            // line 31
            ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 31)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_showfront", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info me-2\">Details</a>
                                    <a href=\"";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new", ["idEvent" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "idEvent", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Enter Now</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-white\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </tbody>
                </table>
            </div>
        ";
        // line 45
        yield from         $this->loadTemplate("client/footer.html.twig", "evenement/frontindex.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "        ";
        
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
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  164 => 46,  162 => 45,  157 => 42,  148 => 38,  139 => 34,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  90 => 9,  85 => 7,  81 => 5,  71 => 4,  53 => 47,  51 => 4,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}
<div class=\"container-xxl py-5 bg-dark hero-header mb-5\" style=\"background-image: url('/path/to/your/background/image.jpg');\">
    <div class=\"container mt-5\">
        {% block body %}
            <div class=\"text-center mb-5\">
                <h1 class=\"mb-4 text-white\">Event Listings</h1>
               <form action=\"{{ path('app_evenement_frontindex') }}\" method=\"get\" class=\"form-inline justify-content-center mb-4\">
                <div class=\"input-group\">
                    <input type=\"date\" name=\"filter_date\" class=\"form-control\" value=\"{{ app.request.query.get('filter_date') }}\" style=\"border-top-right-radius: 0; border-bottom-right-radius: 0;\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #4CAF50; border-color: #4CAF50;\">Filter</button>
                </div>
               </form>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered\">
                    <thead class=\"table-blue\">
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
                                <td class=\"text-white\">{{ evenement.idEvent }}</td>
                                <td class=\"text-white\">{{ evenement.eventName }}</td>
                                <td class=\"text-white\">{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</td>
                                <td class=\"text-white\">{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</td>
                                <td>
                                    <a href=\"{{ path('app_evenement_showfront', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-outline-info me-2\">Details</a>
                                    <a href=\"{{ path('app_participation_new', {'idEvent': evenement.idEvent}) }}\" class=\"btn btn-sm btn-outline-primary\">Enter Now</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-white\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% include \"client/footer.html.twig\" %}
        {% endblock %}
    </div>
</div>
<style>
.table-blue {
    color: #00bcd4; /* Couleur du texte en bleu ciel */
    border-color: #fff; /* Couleur de la bordure en blanc */
}
</style>", "evenement/frontindex.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evenement\\frontindex.html.twig");
    }
}
