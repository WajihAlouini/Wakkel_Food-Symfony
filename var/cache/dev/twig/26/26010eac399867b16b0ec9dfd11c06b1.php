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

/* Admin/plat/index.html.twig */
class __TwigTemplate_3fbaa088419be47696d16279d25b09e6 extends Template
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

        echo "Plat index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .table img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<div class=\"container\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 33, $this->source); })()));
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
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "ingredient", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 41))), "html", null, true);
                echo "\" alt=\"Plat Image\">
                            ";
            } else {
                // line 43
                echo "                                No image available
                            ";
            }
            // line 45
            echo "                        </td>
                        <td>
                            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 48), "getNomRestaurant", [], "method", false, false, false, 48), "html", null, true);
                echo "
                            ";
            } else {
                // line 50
                echo "                                No restaurant associated
                            ";
            }
            // line 52
            echo "                        </td>
                        <td>
                            <button onclick=\"window.location.href='";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 54)]), "html", null, true);
            echo "'\" class=\"btn btn-primary\">Edit</button>
                            ";
            // line 55
            $this->loadTemplate("Admin/plat/_delete_form.html.twig", "Admin/plat/index.html.twig", 55)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 55)]));
            // line 56
            echo "                        </td>
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
            echo "                    <tr>
                        <td colspan=\"7\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_new");
        echo "\" class=\"btn btn-success\">Create new</a>
    </div>
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
        return array (  244 => 68,  237 => 63,  228 => 59,  213 => 56,  211 => 55,  207 => 54,  203 => 52,  199 => 50,  193 => 48,  191 => 47,  187 => 45,  183 => 43,  177 => 41,  175 => 40,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  155 => 34,  137 => 33,  118 => 16,  108 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
", "Admin/plat/index.html.twig", "C:\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\Admin\\plat\\index.html.twig");
    }
}
