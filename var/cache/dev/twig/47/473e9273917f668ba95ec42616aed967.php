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

/* Admin/restaurant/index.html.twig */
class __TwigTemplate_492f7f15ac2b83ed2cf55e6db4df148e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "Admin/restaurant/index.html.twig", 1);
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

        yield "Restaurants List";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        yield "\" method=\"get\" class=\"form-inline\">
                            <div class=\"form-group mr-2\">
                                <input type=\"text\" id=\"searchInput\" name=\"q\" placeholder=\"Rechercher par nom\" class=\"form-control\" value=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", ["q"], "method", false, false, false, 19), "html", null, true);
        yield "\">
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 40, $this->source); })()));
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
            yield "                            <tr>
                                <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "adresseRestaurant", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                <td>
                                    <div style=\"max-width: 100px;\">
                                        ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 47)) {
                // line 48
                yield "                                            <img src=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 48))), "html", null, true);
                yield "\" alt=\"Restaurant Image\" style=\"max-width: 100%; height: auto;\">
                                        ";
            } else {
                // line 50
                yield "                                            Pas d'image disponible
                                        ";
            }
            // line 52
            yield "                                    </div>
                                </td>
                                <td>";
            // line 54
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "restaurantCategory", [], "any", false, false, false, 54), "getCategoryName", [], "method", false, false, false, 54), "html", null, true);
            yield "</td>
                                <td>
                                    <button onclick=\"window.location.href='";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 56)]), "html", null, true);
            yield "'\" class=\"btn btn-primary\">Modifier</button>
                                    ";
            // line 57
            yield from             $this->loadTemplate("Admin/restaurant/_delete_form.html.twig", "Admin/restaurant/index.html.twig", 57)->unwrap()->yield(CoreExtension::arrayMerge($context, ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 57)]));
            // line 58
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
            // line 61
            yield "                            <tr>
                                <td colspan=\"6\">Aucun enregistrement trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-6 text-center\">
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_new");
        yield "\" class=\"btn btn-primary\">Créer un nouveau</a>
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
        return array (  227 => 72,  218 => 65,  209 => 61,  194 => 58,  192 => 57,  188 => 56,  183 => 54,  179 => 52,  175 => 50,  169 => 48,  167 => 47,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  132 => 40,  108 => 19,  103 => 17,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

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
