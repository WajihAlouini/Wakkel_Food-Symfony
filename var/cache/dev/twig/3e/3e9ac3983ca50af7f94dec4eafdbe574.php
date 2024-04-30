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

/* Admin/plat/index.html.twig */
class __TwigTemplate_56ff77385a2c5a475206d95110665b8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/plat/index.html.twig", 1);
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

        yield "Plat index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .table img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        yield "<div class=\"container\">
    <h1 class=\"text-center mb-4\">Plats List</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Ingredients</th>
                    <th>Logo</th>
                    <th>Restaurant name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 34
            yield "                    <tr>
                        <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                        <td>";
            // line 37
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "ingredient", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 40)) {
                // line 41
                yield "                                <img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 41))), "html", null, true);
                yield "\" alt=\"Plat Image\">
                            ";
            } else {
                // line 43
                yield "                                No image available
                            ";
            }
            // line 45
            yield "                        </td>
                        <td>
                            ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 47)) {
                // line 48
                yield "                                ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 48), "getNomRestaurant", [], "method", false, false, false, 48), "html", null, true);
                yield "
                            ";
            } else {
                // line 50
                yield "                                No restaurant associated
                            ";
            }
            // line 52
            yield "                        </td>
                        <td>
                            <button onclick=\"window.location.href='";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 54)]), "html", null, true);
            yield "'\" class=\"btn btn-primary\">Edit</button>
                            ";
            // line 55
            yield from             $this->loadTemplate("Admin/plat/_delete_form.html.twig", "Admin/plat/index.html.twig", 55)->unwrap()->yield(CoreExtension::arrayMerge($context, ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 55)]));
            // line 56
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 59
            yield "                    <tr>
                        <td colspan=\"7\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_new");
        yield "\" class=\"btn btn-success\">Create new</a>
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
        return "Admin/plat/index.html.twig";
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
        return array (  247 => 68,  240 => 63,  231 => 59,  216 => 56,  214 => 55,  210 => 54,  206 => 52,  202 => 50,  196 => 48,  194 => 47,  190 => 45,  186 => 43,  180 => 41,  178 => 40,  173 => 38,  169 => 37,  165 => 36,  161 => 35,  158 => 34,  140 => 33,  121 => 16,  111 => 15,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plat index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .table img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Plats List</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Ingredients</th>
                    <th>Logo</th>
                    <th>Restaurant name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for plat in plats %}
                    <tr>
                        <td>{{ plat.idPlat }}</td>
                        <td>{{ plat.nomPlat }}</td>
                        <td>{{ plat.prix }}</td>
                        <td>{{ plat.ingredient }}</td>
                        <td>
                            {% if plat.platImage %}
                                <img src=\"{{ asset('uploads/' ~ plat.platImage) }}\" alt=\"Plat Image\">
                            {% else %}
                                No image available
                            {% endif %}
                        </td>
                        <td>
                            {% if plat.restaurant %}
                                {{ plat.restaurant.getNomRestaurant() }}
                            {% else %}
                                No restaurant associated
                            {% endif %}
                        </td>
                        <td>
                            <button onclick=\"window.location.href='{{ path('app_plat_edit', {'id': plat.idPlat}) }}'\" class=\"btn btn-primary\">Edit</button>
                            {% include 'Admin/plat/_delete_form.html.twig' with {'id': plat.idPlat} %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">No records found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"{{ path('app_plat_new') }}\" class=\"btn btn-success\">Create new</a>
    </div>
</div>
{% endblock %}
", "Admin/plat/index.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\Admin\\plat\\index.html.twig");
    }
}
