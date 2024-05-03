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

/* Admin/restaurant/index.html.twig */
class __TwigTemplate_d7c4db0310a3401375960522087a4262 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/restaurant/index.html.twig", 1);
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

        echo "Restaurants List";
        
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
        <h1 class=\"text-center mb-4\">Liste des restaurants</h1>

        <div class=\"row mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <a href=\"http://127.0.0.1:8000/restaurant/dashboard/stat\" class=\"btn btn-primary\">Statistiques</a>
                    </div>
                </div>

                <div class=\"row mb-3 justify-content-center\">
                    <div class=\"col-md-6 text-center\">
                        <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        echo "\" method=\"get\" class=\"form-inline\">
                            <div class=\"form-group mr-2\">
                                <input type=\"text\" id=\"searchInput\" name=\"q\" placeholder=\"Rechercher par nom\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", ["q"], "method", false, false, false, 19), "html", null, true);
        echo "\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        </form>
                    </div>
                </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Logo</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 40, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 41
            echo "                            <tr>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresseRestaurant", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                <td>
                                    <div style=\"max-width: 100px;\">
                                        ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 48))), "html", null, true);
                echo "\" alt=\"Restaurant Image\" style=\"max-width: 100%; height: auto;\">
                                        ";
            } else {
                // line 50
                echo "                                            Pas d'image disponible
                                        ";
            }
            // line 52
            echo "                                    </div>
                                </td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["restaurant"], "restaurantCategory", [], "any", false, false, false, 54), "getCategoryName", [], "method", false, false, false, 54), "html", null, true);
            echo "</td>
                                <td>
                                    <button onclick=\"window.location.href='";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 56)]), "html", null, true);
            echo "'\" class=\"btn btn-primary\">Modifier</button>
                                    ";
            // line 57
            $this->loadTemplate("Admin/restaurant/_delete_form.html.twig", "Admin/restaurant/index.html.twig", 57)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 57)]));
            // line 58
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
            // line 61
            echo "                            <tr>
                                <td colspan=\"6\">Aucun enregistrement trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center\">
                <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_new");
        echo "\" class=\"btn btn-primary\">Créer un nouveau</a>
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
        return "Admin/restaurant/index.html.twig";
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
        return array (  225 => 72,  216 => 65,  207 => 61,  192 => 58,  190 => 57,  186 => 56,  181 => 54,  177 => 52,  173 => 50,  167 => 48,  165 => 47,  159 => 44,  155 => 43,  151 => 42,  148 => 41,  130 => 40,  106 => 19,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurants List{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Liste des restaurants</h1>

        <div class=\"row mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <a href=\"http://127.0.0.1:8000/restaurant/dashboard/stat\" class=\"btn btn-primary\">Statistiques</a>
                    </div>
                </div>

                <div class=\"row mb-3 justify-content-center\">
                    <div class=\"col-md-6 text-center\">
                        <form action=\"{{ path('app_restaurant_index') }}\" method=\"get\" class=\"form-inline\">
                            <div class=\"form-group mr-2\">
                                <input type=\"text\" id=\"searchInput\" name=\"q\" placeholder=\"Rechercher par nom\" class=\"form-control\" value=\"{{ app.request.query.get('q') }}\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        </form>
                    </div>
                </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Logo</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for restaurant in restaurants %}
                            <tr>
                                <td>{{ restaurant.idRestaurant }}</td>
                                <td>{{ restaurant.nomRestaurant }}</td>
                                <td>{{ restaurant.adresseRestaurant }}</td>
                                <td>
                                    <div style=\"max-width: 100px;\">
                                        {% if restaurant.restaurantImage %}
                                            <img src=\"{{ asset('uploads/' ~ restaurant.restaurantImage) }}\" alt=\"Restaurant Image\" style=\"max-width: 100%; height: auto;\">
                                        {% else %}
                                            Pas d'image disponible
                                        {% endif %}
                                    </div>
                                </td>
                                <td>{{ restaurant.restaurantCategory.getCategoryName() }}</td>
                                <td>
                                    <button onclick=\"window.location.href='{{ path('app_restaurant_edit', {'id': restaurant.idRestaurant}) }}'\" class=\"btn btn-primary\">Modifier</button>
                                    {% include 'Admin/restaurant/_delete_form.html.twig' with {'id': restaurant.idRestaurant} %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\">Aucun enregistrement trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center\">
                <a href=\"{{ path('app_restaurant_new') }}\" class=\"btn btn-primary\">Créer un nouveau</a>
            </div>
        </div>
    </div>
{% endblock %}
", "Admin/restaurant/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Admin\\restaurant\\index.html.twig");
    }
}
