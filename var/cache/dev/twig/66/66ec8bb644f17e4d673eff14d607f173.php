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

/* Admin/restaurant_category/index.html.twig */
class __TwigTemplate_f085542728ea656c6d0bf7441f40a657 extends Template
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

        echo "RestaurantCategory index";
        
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
        echo "    <div class=\"container\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurant_categories"]) || array_key_exists("restaurant_categories", $context) ? $context["restaurant_categories"] : (function () { throw new RuntimeError('Variable "restaurant_categories" does not exist.', 21, $this->source); })()));
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
            echo "                            <tr>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "categoryName", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "categoryImage", [], "any", false, false, false, 26)) {
                // line 27
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "categoryImage", [], "any", false, false, false, 27))), "html", null, true);
                echo "\" alt=\"Category Image\" style=\"max-width: 100px; max-height: 100px;\">
                                    ";
            } else {
                // line 29
                echo "                                        No image available
                                    ";
            }
            // line 31
            echo "                                </td>
                                <td>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>
                                    ";
            // line 34
            $this->loadTemplate("Admin/restaurant_category/_delete_form.html.twig", "Admin/restaurant_category/index.html.twig", 34)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant_category"], "idCategory", [], "any", false, false, false, 34)]));
            // line 35
            echo "                                </td>
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
            echo "                            <tr>
                                <td colspan=\"4\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>

                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_new");
        echo "\" class=\"btn btn-success\">Create new</a>
            </div>
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
        return array (  186 => 45,  181 => 42,  172 => 38,  157 => 35,  155 => 34,  151 => 33,  147 => 31,  143 => 29,  137 => 27,  135 => 26,  130 => 24,  126 => 23,  123 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
", "Admin/restaurant_category/index.html.twig", "C:\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\Admin\\restaurant_category\\index.html.twig");
    }
}
