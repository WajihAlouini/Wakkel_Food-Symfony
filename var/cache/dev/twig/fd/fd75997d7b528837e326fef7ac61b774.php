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
class __TwigTemplate_bbd8961ce2176057929c3a0eb7dac95e extends Template
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
        return "back&front/back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "Admin/plat/index.html.twig", 1);
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

        echo "Index des plats";
        
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
            max-width: 100px; /* Ajuster la largeur maximale au besoin */
            height: auto;
        }
        .table-container {
            margin: 0 auto; /* Centrer la table horizontalement */
            width: 80%; /* Ajuster la largeur selon les besoins */
        }
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
        .action-buttons button {
            margin-left: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Liste des plats</h1>
        <div class=\"action-buttons\">
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_new");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\">
                <button type=\"button\" class=\"btn btn-outline-success\">Tri Croissant</button>
            </a>
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trid");
        echo "\">
                <button type=\"button\" class=\"btn btn-outline-warning\">Tri Décroissant</button>
            </a>
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exportExcel");
        echo "\">
                <button type=\"button\" class=\"btn btn-outline-info\">Exporter Excel</button>
            </a>
        </div>
        <div class=\"table-responsive table-container\">
            <table class=\"table table-bordered table-striped\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Ingrédients</th>
                    <th>Logo</th>
                    <th>Nom du restaurant</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 56, $this->source); })()));
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
            // line 57
            echo "                    <tr>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "ingredient", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                        <td>
    ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 63)) {
                // line 64
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 64))), "html", null, true);
                echo "\" alt=\"Image du plat\" style=\"max-width: 100px; height: auto;\">
    ";
            } else {
                // line 66
                echo "        Pas d'image disponible
    ";
            }
            // line 68
            echo "</td>
                        <td>
                            ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 70)) {
                // line 71
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "restaurant", [], "any", false, false, false, 71), "getNomRestaurant", [], "method", false, false, false, 71), "html", null, true);
                echo "
                            ";
            } else {
                // line 73
                echo "                                Aucun restaurant associé
                            ";
            }
            // line 75
            echo "                        </td>
                        <td>
                            <button onclick=\"window.location.href='";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 77)]), "html", null, true);
            echo "'\" class=\"btn btn-primary\">Modifier</button>
                            ";
            // line 78
            $this->loadTemplate("Admin/plat/_delete_form.html.twig", "Admin/plat/index.html.twig", 78)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 78)]));
            // line 79
            echo "                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </tbody>
            </table>
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
        return array (  263 => 82,  247 => 79,  245 => 78,  241 => 77,  237 => 75,  233 => 73,  227 => 71,  225 => 70,  221 => 68,  217 => 66,  211 => 64,  209 => 63,  204 => 61,  200 => 60,  196 => 59,  192 => 58,  189 => 57,  172 => 56,  151 => 38,  145 => 35,  139 => 32,  135 => 31,  130 => 28,  120 => 27,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Index des plats{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .table img {
            max-width: 100px; /* Ajuster la largeur maximale au besoin */
            height: auto;
        }
        .table-container {
            margin: 0 auto; /* Centrer la table horizontalement */
            width: 80%; /* Ajuster la largeur selon les besoins */
        }
        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
        .action-buttons button {
            margin-left: 5px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Liste des plats</h1>
        <div class=\"action-buttons\">
            <a href=\"{{ path('app_plat_new') }}\" class=\"btn btn-primary\">Ajouter</a>
            <a href=\"{{ path('tri') }}\">
                <button type=\"button\" class=\"btn btn-outline-success\">Tri Croissant</button>
            </a>
            <a href=\"{{ path('trid') }}\">
                <button type=\"button\" class=\"btn btn-outline-warning\">Tri Décroissant</button>
            </a>
            <a href=\"{{ path('exportExcel') }}\">
                <button type=\"button\" class=\"btn btn-outline-info\">Exporter Excel</button>
            </a>
        </div>
        <div class=\"table-responsive table-container\">
            <table class=\"table table-bordered table-striped\">
                <thead class=\"thead-dark\">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Ingrédients</th>
                    <th>Logo</th>
                    <th>Nom du restaurant</th>
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
        <img src=\"{{ asset('uploads/' ~ plat.platImage) }}\" alt=\"Image du plat\" style=\"max-width: 100px; height: auto;\">
    {% else %}
        Pas d'image disponible
    {% endif %}
</td>
                        <td>
                            {% if plat.restaurant %}
                                {{ plat.restaurant.getNomRestaurant() }}
                            {% else %}
                                Aucun restaurant associé
                            {% endif %}
                        </td>
                        <td>
                            <button onclick=\"window.location.href='{{ path('app_plat_edit', {'id': plat.idPlat}) }}'\" class=\"btn btn-primary\">Modifier</button>
                            {% include 'Admin/plat/_delete_form.html.twig' with {'id': plat.idPlat} %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "Admin/plat/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Admin\\plat\\index.html.twig");
    }
}
