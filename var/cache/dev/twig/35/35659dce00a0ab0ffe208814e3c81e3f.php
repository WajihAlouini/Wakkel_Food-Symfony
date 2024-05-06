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

/* Front/restaurant/list.html.twig */
class __TwigTemplate_fb03ce18c08daf79cdfe9ec6155708e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/restaurant/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/restaurant/list.html.twig"));

        // line 1
        yield from         $this->loadTemplate("client/navbar.html.twig", "Front/restaurant/list.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <!-- Category name and images -->
    <div class=\"category-info\">
        <h1>";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurantCategory"]) || array_key_exists("restaurantCategory", $context) ? $context["restaurantCategory"] : (function () { throw new RuntimeError('Variable "restaurantCategory" does not exist.', 6, $this->source); })()), "categoryName", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>
        <div class=\"category-images\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurantCategory"]) || array_key_exists("restaurantCategory", $context) ? $context["restaurantCategory"] : (function () { throw new RuntimeError('Variable "restaurantCategory" does not exist.', 8, $this->source); })()), "categoryImage", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 9
            yield "                <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 9))), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 9), "html", null, true);
            yield "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "        </div>
    </div>

    <!-- Search form -->
    <div class=\"search-container\">
        <input type=\"text\" id=\"searchInput\" name=\"q\" placeholder=\"Search restaurants by name\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"filterRestaurants()\">Search</button>
    </div>

    <!-- List of restaurants -->
    <div class=\"box-container\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 23
            yield "            <div class=\"box restaurant-item\">
                <a href=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_plats", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "idRestaurant", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">
                    <h3>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 25), "html", null, true);
            yield "</h3>
                </a>
                <img src=\"";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 27), "html", null, true);
            yield " Image\">
                <p>Address: ";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "adresseRestaurant", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "        ";
        yield from         $this->loadTemplate("client/footer.html.twig", "Front/restaurant/list.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "    </div>

    <!-- CSS styles -->
    <style>
        /* CSS styles for the restaurant list page */
        .category-info {
            text-align: center;
        }

        .category-images {
            margin-top: 20px;
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        .search-container input {
            width: 60%;
            margin-right: 10px;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .box {
            background-color: #136F63; /* Dark background color */
            color: #fff; /* Text color */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            transition: box-shadow 0.3s ease;
            text-align: center;
        }

        .box:hover {
            box-shadow: 0 10px 15px rgba(0,0,0,.3);
        }

        .box img {
            height: 120px; /* Increased height for the logo */
            margin-bottom: 10px;
        }

        .box p {
            color: #ccc; /* Text color for address */
            font-size: 15px;
            line-height: 1.8;
        }
    </style>

    <!-- JavaScript to handle real-time search -->
    <script>
        // Function to filter restaurants based on search input value
        function filterRestaurants() {
            var searchQuery = document.getElementById('searchInput').value.toLowerCase();
            var restaurantItems = document.querySelectorAll('.restaurant-item');
            restaurantItems.forEach(function(item) {
                var restaurantName = item.querySelector('h3').textContent.toLowerCase();
                if (restaurantName.includes(searchQuery)) {
                    item.style.display = 'block'; // Show the restaurant if it matches the search query
                } else {
                    item.style.display = 'none'; // Hide the restaurant if it doesn't match the search query
                }
            });
        }

        // Call filterRestaurants() once initially to filter restaurants based on any initial search query
        filterRestaurants();
    </script>
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
        return "Front/restaurant/list.html.twig";
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
        return array (  141 => 32,  138 => 31,  129 => 28,  123 => 27,  118 => 25,  114 => 24,  111 => 23,  107 => 22,  94 => 11,  83 => 9,  79 => 8,  74 => 6,  70 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}

{% block content %}
    <!-- Category name and images -->
    <div class=\"category-info\">
        <h1>{{ restaurantCategory.categoryName }}</h1>
        <div class=\"category-images\">
            {% for image in restaurantCategory.categoryImage %}
                <img src=\"{{ asset('uploads/' ~ image.filename) }}\" alt=\"{{ image.alt }}\">
            {% endfor %}
        </div>
    </div>

    <!-- Search form -->
    <div class=\"search-container\">
        <input type=\"text\" id=\"searchInput\" name=\"q\" placeholder=\"Search restaurants by name\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"filterRestaurants()\">Search</button>
    </div>

    <!-- List of restaurants -->
    <div class=\"box-container\">
        {% for restaurant in restaurants %}
            <div class=\"box restaurant-item\">
                <a href=\"{{ path('restaurant_plats', {'id': restaurant.idRestaurant}) }}\">
                    <h3>{{ restaurant.nomRestaurant }}</h3>
                </a>
                <img src=\"{{ asset('uploads/' ~ restaurant.restaurantImage) }}\" alt=\"{{ restaurant.nomRestaurant }} Image\">
                <p>Address: {{ restaurant.adresseRestaurant }}</p>
            </div>
        {% endfor %}
        {% include \"client/footer.html.twig\" %}
    </div>

    <!-- CSS styles -->
    <style>
        /* CSS styles for the restaurant list page */
        .category-info {
            text-align: center;
        }

        .category-images {
            margin-top: 20px;
        }

        .search-container {
            text-align: center;
            margin-top: 20px;
        }

        .search-container input {
            width: 60%;
            margin-right: 10px;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .box {
            background-color: #136F63; /* Dark background color */
            color: #fff; /* Text color */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            transition: box-shadow 0.3s ease;
            text-align: center;
        }

        .box:hover {
            box-shadow: 0 10px 15px rgba(0,0,0,.3);
        }

        .box img {
            height: 120px; /* Increased height for the logo */
            margin-bottom: 10px;
        }

        .box p {
            color: #ccc; /* Text color for address */
            font-size: 15px;
            line-height: 1.8;
        }
    </style>

    <!-- JavaScript to handle real-time search -->
    <script>
        // Function to filter restaurants based on search input value
        function filterRestaurants() {
            var searchQuery = document.getElementById('searchInput').value.toLowerCase();
            var restaurantItems = document.querySelectorAll('.restaurant-item');
            restaurantItems.forEach(function(item) {
                var restaurantName = item.querySelector('h3').textContent.toLowerCase();
                if (restaurantName.includes(searchQuery)) {
                    item.style.display = 'block'; // Show the restaurant if it matches the search query
                } else {
                    item.style.display = 'none'; // Hide the restaurant if it doesn't match the search query
                }
            });
        }

        // Call filterRestaurants() once initially to filter restaurants based on any initial search query
        filterRestaurants();
    </script>
{% endblock %}
", "Front/restaurant/list.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Front\\restaurant\\list.html.twig");
    }
}
