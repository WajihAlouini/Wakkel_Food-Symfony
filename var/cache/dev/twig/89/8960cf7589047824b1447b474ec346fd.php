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

/* front/restaurant/plats.html.twig */
class __TwigTemplate_757f46c5a236c44b9a24e4da3e197454 extends Template
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
        $this->loadTemplate("client/navbar.html.twig", "front/restaurant/plats.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container-xxl py-5 bg-dark mb-5\" style=\"background-image: url('/path/to/your/background/image.jpg');\">
    <div class=\"container my-5 py-5\">
        ";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "            <!-- Restaurant name and details -->
            <div class=\"restaurant-info\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 7, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                <p>Address: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 8, $this->source); })()), "adresseRestaurant", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 9, $this->source); })()), "restaurantImage", [], "any", false, false, false, 9))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 9, $this->source); })()), "nomRestaurant", [], "any", false, false, false, 9), "html", null, true);
        echo " Image\">
            </div>

            <!-- List of plats -->
            <div class=\"plat-list\">
                ";
        // line 14
        if ( !twig_test_empty((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 16
                echo "                        <div class=\"plat product-row__info\">
                            <h2>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 17), "html", null, true);
                echo "</h2>
                            <p>Price: ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                            <p>Ingredients: ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "ingredient", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
                            <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "platImage", [], "any", false, false, false, 20))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomPlat", [], "any", false, false, false, 20), "html", null, true);
                echo " Image\">

                            <!-- Rating stars -->
                            <div class=\"rating\" data-plat-id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "idPlat", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 25
                    echo "                                    <span class=\"star\" data-rating=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\">☆</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        } else {
            // line 31
            echo "                    <p>No plats found for this restaurant.</p>
                ";
        }
        // line 33
        echo "                ";
        $this->loadTemplate("client/footer.html.twig", "front/restaurant/plats.html.twig", 33)->display($context);
        // line 34
        echo "            </div>

            <!-- CSS styles -->
            <style>
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
            </style>

            <!-- JavaScript for rating functionality -->
            <script>
                document.querySelectorAll('.star').forEach(star => {
                    star.addEventListener('click', function() {
                        const platId = this.parentNode.getAttribute('data-plat-id');
                        const rating = this.getAttribute('data-rating');

                        // Envoyer le platId et le rating au serveur via AJAX
                        // Par exemple, utiliser fetch() pour envoyer une requête POST
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
                                // Traiter la réponse du serveur
                                console.log(data);
                                // Mettre à jour l'affichage côté client si nécessaire
                                // Par exemple, marquer les étoiles sélectionnées
                                // En fonction de la réponse du serveur
                                updateStars(platId, rating);
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
                }
            </script>
            ";
        // line 139
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 139, $this->source); })()), "bootstrap_4_pagination.html.twig");
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  268 => 139,  161 => 34,  158 => 33,  154 => 31,  151 => 30,  143 => 27,  134 => 25,  130 => 24,  126 => 23,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  103 => 16,  98 => 15,  96 => 14,  86 => 9,  82 => 8,  78 => 7,  74 => 5,  64 => 4,  52 => 141,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}
<div class=\"container-xxl py-5 bg-dark mb-5\" style=\"background-image: url('/path/to/your/background/image.jpg');\">
    <div class=\"container my-5 py-5\">
        {% block content %}
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
                            <h2>{{ plat.nomPlat }}</h2>
                            <p>Price: {{ plat.prix }}</p>
                            <p>Ingredients: {{ plat.ingredient }}</p>
                            <img src=\"{{ asset('uploads/' ~ plat.platImage) }}\" alt=\"{{ plat.nomPlat }} Image\">

                            <!-- Rating stars -->
                            <div class=\"rating\" data-plat-id=\"{{ plat.idPlat }}\">
                                {% for i in 1..5 %}
                                    <span class=\"star\" data-rating=\"{{ i }}\">☆</span>
                                {% endfor %}
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <p>No plats found for this restaurant.</p>
                {% endif %}
                {% include \"client/footer.html.twig\" %}
            </div>

            <!-- CSS styles -->
            <style>
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
            </style>

            <!-- JavaScript for rating functionality -->
            <script>
                document.querySelectorAll('.star').forEach(star => {
                    star.addEventListener('click', function() {
                        const platId = this.parentNode.getAttribute('data-plat-id');
                        const rating = this.getAttribute('data-rating');

                        // Envoyer le platId et le rating au serveur via AJAX
                        // Par exemple, utiliser fetch() pour envoyer une requête POST
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
                                // Traiter la réponse du serveur
                                console.log(data);
                                // Mettre à jour l'affichage côté client si nécessaire
                                // Par exemple, marquer les étoiles sélectionnées
                                // En fonction de la réponse du serveur
                                updateStars(platId, rating);
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
                }
            </script>
            {{ knp_pagination_render(plats, 'bootstrap_4_pagination.html.twig') }}
        {% endblock %}
    </div>
</div>
", "front/restaurant/plats.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Front\\restaurant\\plats.html.twig");
    }
}
