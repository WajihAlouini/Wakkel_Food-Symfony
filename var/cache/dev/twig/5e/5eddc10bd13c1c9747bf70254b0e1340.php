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

/* front/restaurant/plats.html.twig */
class __TwigTemplate_0e500862eb78bc6ecba93b473e8459ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/restaurant/plats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/restaurant/plats.html.twig"));

        // line 1
        yield from         $this->loadTemplate("client/navbar.html.twig", "front/restaurant/plats.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div class=\"page-background\"> <!-- Ajoutez cette div pour envelopper tout le contenu -->
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 275
        yield "<br>
<br>
";
        // line 277
        yield from         $this->loadTemplate("client/footer.html.twig", "front/restaurant/plats.html.twig", 277)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <br>
    <br>
    <br>
        <!-- Restaurant name and details -->
        <div class=\"restaurant-info\">
            <h1>";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 9, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>
            <p>Address: ";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 10, $this->source); })()), "adresseRestaurant", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
            <img src=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 11, $this->source); })()), "restaurantImage", [], "any", false, false, false, 11))), "html", null, true);
        yield "\" alt=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 11, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 11), "html", null, true);
        yield " Image\">
        </div>

        <!-- List of plats -->
        <div class=\"plat-list\">
            ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 18
                yield "                    <div class=\"plat product-row__info\">
                        <!-- Recent rating badge -->
                        <a href=\"#\" class=\"badge\">
                            <img src=\"";
                // line 21
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 21))), "html", null, true);
                yield "\" alt=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 21), "html", null, true);
                yield " Image\">
                            <div>
                                <div  class=\"name\">";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 23), "html", null, true);
                yield "</div>
                            </div>
                        </a>

                        <!-- Main plat content -->
                        <p class=\"plat-details\">
                            Price: ";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 29), "html", null, true);
                yield "<br>
                            Ingredients: ";
                // line 30
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "ingredient", [], "any", false, false, false, 30), "html", null, true);
                yield "
                        </p>
                        <div class=\"rating\" data-plat-id=\"";
                // line 32
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    yield "                                <span class=\"star\" data-rating=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["i"], "html", null, true);
                    yield "\">☆</span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "                        </div>
                        <div class=\"title\">Recent Rating: ";
                // line 37
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recentRatings"]) || array_key_exists("recentRatings", $context) ? $context["recentRatings"] : (function () { throw new RuntimeError('Variable "recentRatings" does not exist.', 37, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "stars", [], "any", false, false, false, 37), "html", null, true);
                yield "</div>

                        <div class=\"add-button\">
                            <button class=\"quantity-btn minus\">-</button>
                            <span class=\"quantity\">0</span>
                            <button class=\"quantity-btn plus\">+</button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "            ";
        } else {
            // line 47
            yield "                <p>No plats found for this restaurant.</p>
            ";
        }
        // line 49
        yield "        </div>

    <!-- CSS styles -->
    <style>
    /* CSS pour la background */
    .page-background {
        background-image: url(\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/platbackground.jpg"), "html", null, true);
        yield "\"); /* Remplacez 'chemin/vers/votre/image.jpg' par le chemin de votre image */
        background-size: cover;
        background-position: center;
        /* Ajoutez d'autres styles selon vos préférences */
    }
        /* CSS styles for the plat list page */
        .restaurant-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .restaurant-info img {
            max-width: 200px; /* Adjust the maximum width as needed */
            height: auto;
            margin-bottom: 10px;
        }

        .plat-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .plat {
            color: var(--helio-color-secondaryText);
            font-size: 14px;
            font-weight: 300;
            line-height: 1.6;
            margin: 0;
            word-break: break-word;
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            max-width: 200px;
        }

        .plat img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
            margin-bottom: 10px;
            margin-left: -5px; /* Move the logo a bit to the left */
        }

        /* CSS styles for rating stars */
        .rating {
            margin-top: 10px;
        }

        .star {
            cursor: pointer;
            font-size: 20px;
        }

        .star:hover,
        .star.selected {
            color: orange;
        }

        /* Additional styles for plat name and recent rating */
        .plat-name {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .recent-rating {
            font-size: 0.9rem;
            color: #666;
        }

        /* CSS styles for the badge */
        .badge {
            display: flex;
            height: 4rem;
            width: 12rem; /* Reduce the width by 20% */
            text-decoration: none;
            font-family: Helvetica, Arial, sans-serif;
            filter: drop-shadow(0 0 0.5rem #0003);
            margin-bottom: 10px; /* Adjust spacing as needed */
            margin-left: -20px; /* Move the badge a bit to the left */
            margin-top: -15px; /* Move the badge up by 15px */
        }

        .badge:focus {
            outline: 0.125rem dashed #000a;
            outline-offset: 0.25rem;
        }

        .badge img {
            clip-path: polygon(0 50%, 14% 0, 86% 0, 100% 50%, 86% 100%, 14% 100%);

        }

        .badge > div {
            background: linear-gradient(#fff, #e8e8e8);
            flex: 1;
            padding: 0.75rem 0.75rem 0 1.25rem;
            clip-path: polygon(0 0, 95% 0, 100% 50%, 95% 100%, 0 100%, 5% 50%);
        }

        .badge .name {
            color: #222;
            font-weight: 500;
            font-size: 1.2rem;
        }

        .badge .title {
            font-size: 0.9rem;
            color: #666;
        }
        .plat-details {
            font-size: 0.9rem; /* Adjust the font size as needed */
            color: #555; /* Change the color to your preferred text color */
            margin-bottom: 10px; /* Add some spacing below the plat details */
        }

        .recent-rating {
            font-weight: bold; /* Make \"Recent Rating\" text bold */
            font-size: 1rem; /* Adjust the font size as needed */
            color: #333; /* Change the color to your preferred text color */
            margin-top: 5px; /* Add some spacing above the recent rating */
        }
        .add-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .quantity {
            margin: 0 10px;
            font-size: 1rem;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background-color: #0056b3;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function() {
                const platId = this.parentNode.getAttribute('data-plat-id');
                const rating = this.getAttribute('data-rating');

                // Send platId and rating to the server via AJAX
                fetch('/save-rating', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        platId: platId,
                        rating: rating
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Process server response
                    console.log(data);
                    // Update client-side display if necessary
                    updateStars(platId, rating);
                    // Reload the page to show the updated recent rating
                    location.reload();
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            });
        });

        function updateStars(platId, rating) {
            const stars = document.querySelectorAll('.rating[data-plat-id=\"' + platId + '\"] .star');
            stars.forEach(star => {
                const starRating = parseInt(star.getAttribute('data-rating'));
                if (starRating <= rating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }document.querySelectorAll('.add-button').forEach(button => {
             const quantityElement = button.querySelector('.quantity');
             const plusButton = button.querySelector('.plus');
             const minusButton = button.querySelector('.minus');

             let quantity = 0;

             plusButton.addEventListener('click', () => {
                 quantity++;
                 updateQuantity();
             });

             minusButton.addEventListener('click', () => {
                 if (quantity > 0) {
                     quantity--;
                     updateQuantity();
                 }
             });

             function updateQuantity() {
                 quantityElement.textContent = quantity;
             }
         });
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
        return "front/restaurant/plats.html.twig";
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
        return array (  189 => 55,  181 => 49,  177 => 47,  174 => 46,  159 => 37,  156 => 36,  147 => 34,  143 => 33,  139 => 32,  134 => 30,  130 => 29,  121 => 23,  114 => 21,  109 => 18,  104 => 17,  102 => 16,  92 => 11,  88 => 10,  84 => 9,  77 => 4,  67 => 3,  56 => 277,  52 => 275,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}
<div class=\"page-background\"> <!-- Ajoutez cette div pour envelopper tout le contenu -->
    {% block content %}
    <br>
    <br>
    <br>
        <!-- Restaurant name and details -->
        <div class=\"restaurant-info\">
            <h1>{{ restaurant.nomRestaurant }}</h1>
            <p>Address: {{ restaurant.adresseRestaurant }}</p>
            <img src=\"{{ asset('uploads/' ~ restaurant.restaurantImage) }}\" alt=\"{{ restaurant.nomRestaurant }} Image\">
        </div>

        <!-- List of plats -->
        <div class=\"plat-list\">
            {% if plats is not empty %}
                {% for plat in plats %}
                    <div class=\"plat product-row__info\">
                        <!-- Recent rating badge -->
                        <a href=\"#\" class=\"badge\">
                            <img src=\"{{ asset('uploads/' ~ plat.platImage) }}\" alt=\"{{ plat.nomPlat }} Image\">
                            <div>
                                <div  class=\"name\">{{ plat.nomPlat }}</div>
                            </div>
                        </a>

                        <!-- Main plat content -->
                        <p class=\"plat-details\">
                            Price: {{ plat.prix }}<br>
                            Ingredients: {{ plat.ingredient }}
                        </p>
                        <div class=\"rating\" data-plat-id=\"{{ plat.idPlat }}\">
                            {% for i in 1..5 %}
                                <span class=\"star\" data-rating=\"{{ i }}\">☆</span>
                            {% endfor %}
                        </div>
                        <div class=\"title\">Recent Rating: {{ recentRatings[plat.idPlat].stars }}</div>

                        <div class=\"add-button\">
                            <button class=\"quantity-btn minus\">-</button>
                            <span class=\"quantity\">0</span>
                            <button class=\"quantity-btn plus\">+</button>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <p>No plats found for this restaurant.</p>
            {% endif %}
        </div>

    <!-- CSS styles -->
    <style>
    /* CSS pour la background */
    .page-background {
        background-image: url(\"{{asset('Main/img/platbackground.jpg')}}\"); /* Remplacez 'chemin/vers/votre/image.jpg' par le chemin de votre image */
        background-size: cover;
        background-position: center;
        /* Ajoutez d'autres styles selon vos préférences */
    }
        /* CSS styles for the plat list page */
        .restaurant-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .restaurant-info img {
            max-width: 200px; /* Adjust the maximum width as needed */
            height: auto;
            margin-bottom: 10px;
        }

        .plat-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .plat {
            color: var(--helio-color-secondaryText);
            font-size: 14px;
            font-weight: 300;
            line-height: 1.6;
            margin: 0;
            word-break: break-word;
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
            max-width: 200px;
        }

        .plat img {
            max-width: 100px; /* Adjust the maximum width as needed */
            height: auto;
            margin-bottom: 10px;
            margin-left: -5px; /* Move the logo a bit to the left */
        }

        /* CSS styles for rating stars */
        .rating {
            margin-top: 10px;
        }

        .star {
            cursor: pointer;
            font-size: 20px;
        }

        .star:hover,
        .star.selected {
            color: orange;
        }

        /* Additional styles for plat name and recent rating */
        .plat-name {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .recent-rating {
            font-size: 0.9rem;
            color: #666;
        }

        /* CSS styles for the badge */
        .badge {
            display: flex;
            height: 4rem;
            width: 12rem; /* Reduce the width by 20% */
            text-decoration: none;
            font-family: Helvetica, Arial, sans-serif;
            filter: drop-shadow(0 0 0.5rem #0003);
            margin-bottom: 10px; /* Adjust spacing as needed */
            margin-left: -20px; /* Move the badge a bit to the left */
            margin-top: -15px; /* Move the badge up by 15px */
        }

        .badge:focus {
            outline: 0.125rem dashed #000a;
            outline-offset: 0.25rem;
        }

        .badge img {
            clip-path: polygon(0 50%, 14% 0, 86% 0, 100% 50%, 86% 100%, 14% 100%);

        }

        .badge > div {
            background: linear-gradient(#fff, #e8e8e8);
            flex: 1;
            padding: 0.75rem 0.75rem 0 1.25rem;
            clip-path: polygon(0 0, 95% 0, 100% 50%, 95% 100%, 0 100%, 5% 50%);
        }

        .badge .name {
            color: #222;
            font-weight: 500;
            font-size: 1.2rem;
        }

        .badge .title {
            font-size: 0.9rem;
            color: #666;
        }
        .plat-details {
            font-size: 0.9rem; /* Adjust the font size as needed */
            color: #555; /* Change the color to your preferred text color */
            margin-bottom: 10px; /* Add some spacing below the plat details */
        }

        .recent-rating {
            font-weight: bold; /* Make \"Recent Rating\" text bold */
            font-size: 1rem; /* Adjust the font size as needed */
            color: #333; /* Change the color to your preferred text color */
            margin-top: 5px; /* Add some spacing above the recent rating */
        }
        .add-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity-btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .quantity {
            margin: 0 10px;
            font-size: 1rem;
            font-weight: bold;
        }

        .quantity-btn:hover {
            background-color: #0056b3;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function() {
                const platId = this.parentNode.getAttribute('data-plat-id');
                const rating = this.getAttribute('data-rating');

                // Send platId and rating to the server via AJAX
                fetch('/save-rating', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        platId: platId,
                        rating: rating
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Process server response
                    console.log(data);
                    // Update client-side display if necessary
                    updateStars(platId, rating);
                    // Reload the page to show the updated recent rating
                    location.reload();
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            });
        });

        function updateStars(platId, rating) {
            const stars = document.querySelectorAll('.rating[data-plat-id=\"' + platId + '\"] .star');
            stars.forEach(star => {
                const starRating = parseInt(star.getAttribute('data-rating'));
                if (starRating <= rating) {
                    star.classList.add('selected');
                } else {
                    star.classList.remove('selected');
                }
            });
        }document.querySelectorAll('.add-button').forEach(button => {
             const quantityElement = button.querySelector('.quantity');
             const plusButton = button.querySelector('.plus');
             const minusButton = button.querySelector('.minus');

             let quantity = 0;

             plusButton.addEventListener('click', () => {
                 quantity++;
                 updateQuantity();
             });

             minusButton.addEventListener('click', () => {
                 if (quantity > 0) {
                     quantity--;
                     updateQuantity();
                 }
             });

             function updateQuantity() {
                 quantityElement.textContent = quantity;
             }
         });
    </script>
{% endblock %}
<br>
<br>
{% include \"client/footer.html.twig\" %}
", "front/restaurant/plats.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Front\\restaurant\\plats.html.twig");
    }
}
