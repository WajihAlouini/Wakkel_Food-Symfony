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

/* Admin/restaurant_category/index.html.twig */
class __TwigTemplate_1b37d60d7ced04ebb33b8832865c386c extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant_category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant_category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/restaurant_category/index.html.twig", 1);
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

        yield "RestaurantCategory index";
        
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
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <h1 class=\"text-center mb-4\">Les categories des restaurants</h1>

                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restaurant_categories"]) || array_key_exists("restaurant_categories", $context) ? $context["restaurant_categories"] : (function () { throw new RuntimeError('Variable "restaurant_categories" does not exist.', 21, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant_category"]) {
            // line 22
            yield "                            <tr>
                                <td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                                <td>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "categoryName", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "categoryImage", [], "any", false, false, false, 26)) {
                // line 27
                yield "                                        <img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "categoryImage", [], "any", false, false, false, 27))), "html", null, true);
                yield "\" alt=\"Category Image\" style=\"max-width: 100px; max-height: 100px;\">
                                    ";
            } else {
                // line 29
                yield "                                        No image available
                                    ";
            }
            // line 31
            yield "                                </td>
                                <td>
                                    <a href=\"";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Edit</a>
                                    ";
            // line 34
            yield from             $this->loadTemplate("Admin/restaurant_category/_delete_form.html.twig", "Admin/restaurant_category/index.html.twig", 34)->unwrap()->yield(CoreExtension::arrayMerge($context, ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 34)]));
            // line 35
            yield "                                </td>
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
            // line 38
            yield "                            <tr>
                                <td colspan=\"4\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "                    </tbody>
                </table>

                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_new");
        yield "\" class=\"btn btn-success\">Create new</a>
            </div>
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
        return "Admin/restaurant_category/index.html.twig";
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
        return array (  188 => 45,  183 => 42,  174 => 38,  159 => 35,  157 => 34,  153 => 33,  149 => 31,  145 => 29,  139 => 27,  137 => 26,  132 => 24,  128 => 23,  125 => 22,  107 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RestaurantCategory index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <h1 class=\"text-center mb-4\">Les categories des restaurants</h1>

                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for restaurant_category in restaurant_categories %}
                            <tr>
                                <td>{{ restaurant_category.idCategory }}</td>
                                <td>{{ restaurant_category.categoryName }}</td>
                                <td>
                                    {% if restaurant_category.categoryImage %}
                                        <img src=\"{{ asset('uploads/' ~ restaurant_category.categoryImage) }}\" alt=\"Category Image\" style=\"max-width: 100px; max-height: 100px;\">
                                    {% else %}
                                        No image available
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_restaurant_category_edit', {'id': restaurant_category.idCategory}) }}\" class=\"btn btn-primary\">Edit</a>
                                    {% include 'Admin/restaurant_category/_delete_form.html.twig' with {'id': restaurant_category.idCategory} %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>

                <a href=\"{{ path('app_restaurant_category_new') }}\" class=\"btn btn-success\">Create new</a>
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/restaurant_category/index.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\Admin\\restaurant_category\\index.html.twig");
    }
}
