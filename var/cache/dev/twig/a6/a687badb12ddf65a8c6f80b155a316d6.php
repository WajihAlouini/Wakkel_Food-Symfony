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

/* participation/index.html.twig */
class __TwigTemplate_cd89d0513778251664d89377ead5396b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "participation/index.html.twig", 1);
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

        yield "Participation Index";
        
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
        yield "    <h1>Participation Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Participation ID</th>
                    <th>User ID</th>
                    <th>Number of Places</th>
                    <th>User Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participations"]) || array_key_exists("participations", $context) ? $context["participations"] : (function () { throw new RuntimeError('Variable "participations" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 21
            yield "                <tr>
                    <td>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "getIdP", [], "method", false, false, false, 22), "html", null, true);
            yield "</td>
                    <td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "idUser", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "nbrPlace", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                    <td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "getEmailUser", [], "method", false, false, false, 25), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_show", ["idP" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "getIdP", [], "method", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_edit", ["idP" => CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "getIdP", [], "method", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Edit</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            yield "                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_new");
        yield "\" class=\"btn btn-success\">Create New</a>
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
        return "participation/index.html.twig";
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
        return array (  159 => 40,  153 => 36,  144 => 32,  135 => 28,  131 => 27,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  111 => 21,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Participation Index{% endblock %}

{% block body %}
    <h1>Participation Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Participation ID</th>
                    <th>User ID</th>
                    <th>Number of Places</th>
                    <th>User Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for participation in participations %}
                <tr>
                    <td>{{ participation.getIdP() }}</td>
                    <td>{{ participation.idUser }}</td>
                    <td>{{ participation.nbrPlace }}</td>
                    <td>{{ participation.getEmailUser() }}</td>
                    <td>
                        <a href=\"{{ path('app_participation_show', {'idP': participation.getIdP()}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                        <a href=\"{{ path('app_participation_edit', {'idP': participation.getIdP()}) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
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

    <a href=\"{{ path('app_participation_new') }}\" class=\"btn btn-success\">Create New</a>
{% endblock %}
", "participation/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\participation\\index.html.twig");
    }
}
