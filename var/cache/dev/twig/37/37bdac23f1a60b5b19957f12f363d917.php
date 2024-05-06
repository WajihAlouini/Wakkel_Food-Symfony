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

/* client/index.html.twig */
class __TwigTemplate_6eedd20e7025b444b47d8b3fa17fa7a1 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'java_scripts' => [$this, 'block_java_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "client/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello user!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Utilisateurs /</span> List
            <div class=\"card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row\">
                <h5 class=\"card-title mb-sm-0 me-2\"></h5>
                <div class=\"action-btns\">
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_createaccount");
        yield "\" class=\"btn btn-primary\">Ajouter</a>
                </div>
            </div>
            <li class=\"menu-item\">
    <a href=\"#\" id=\"toggleStatistics\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons ti ti-pie-chart\"></i>
        <div>Statistiques</div>
    </a>
</li>
        </h4>
        <div class=\"search-container\">
        <form id=\"search-form\">
        <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher...\">
        <button type=\"button\" id=\"search-button\"><i class=\"fas fa-search\"></i></button>
        </form>
        </div>

        <div id=\"statisticsContainer\" style=\"display: none;\">
    ";
        // line 29
        yield from         $this->loadTemplate("client/statistics.html.twig", "client/index.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "</div>


        <br>
        <div class=\"card-deck\">
        ";
        // line 35
        yield from         $this->loadTemplate("client/List.twig", "client/index.html.twig", 35)->unwrap()->yield(CoreExtension::arrayMerge($context, ["clients" => (isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 35, $this->source); })())]));
        // line 36
        yield "        </div>
        ";
        // line 37
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 65
        yield "
    </div>
    <style>
        .search-container {
            text-align: center; /* Centrer les éléments à l'intérieur */
            margin-top: -11.5vh; /* Marge depuis le haut de la page */
        }

        #search-form {
            display: inline-block; /* Permet au formulaire de s'adapter à la largeur de son contenu */
        }

        #search-input {
            padding: 10px; /* Ajouter un espace autour du texte dans l'input */
            border-radius: 5px; /* Coins arrondis */
            border: 1px solid #ccc; /* Bordure grise */
            font-size: 16px; /* Taille de la police */
        }

        #search-button {
            padding: 10px 20px; /* Ajouter un espace autour du texte dans le bouton */
            border-radius: 5px; /* Coins arrondis */
            border: none; /* Supprimer la bordure */
            background-color: #007bff; /* Couleur de fond bleue */
            color: #fff; /* Couleur du texte blanc */
            font-size: 16px; /* Taille de la police */
            cursor: pointer; /* Curseur de la souris en forme de main */
        }

        #search-button:hover {
            background-color: #0056b3; /* Couleur de fond bleu foncé au survol */
        }

    </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        yield "            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                \$(function() {
    // Fonction qui sera appelée lorsque l'utilisateur tape dans le champ de recherche
    \$('#search-input').on('input', function() {
        var searchTerm = \$(this).val(); // Récupère la chaîne de recherche
        \$.ajax({
            url: '";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "', // URL de l'action de recherche côté serveur
            type: 'POST',
            data: {searchTerm: searchTerm}, // Envoie la chaîne de recherche au serveur
            success: function(response) {
                \$('.card-deck').html(response); // Remplace le contenu de la liste des offres avec le résultat de la recherche
            }
        });
    });
});
            </script>
<script>
    \$(document).ready(function(){
        \$('#toggleStatistics').on('click', function(e){
            e.preventDefault();
            \$('#statisticsContainer').slideToggle();
        });
    });
</script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 102
    public function block_java_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        // line 103
        yield "    <script>
        \$(\".confirm-text\").click(function () {
            const form = \$(this).parents('form:first');
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: \" Vous ne pourrez pas revenir en arrière !\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmer ',
                cancelButtonText: 'Annuler',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function (result) {
                if (result.value) {
                    if (result.value) {
                        form.find('input[type=\"submit\"]').attr('disabled', 'disabled');
                        form.submit();
                    }
                }
            });
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
        return "client/index.html.twig";
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
        return array (  243 => 103,  233 => 102,  202 => 45,  193 => 38,  183 => 37,  137 => 65,  135 => 37,  132 => 36,  130 => 35,  123 => 30,  121 => 29,  100 => 11,  92 => 5,  82 => 4,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}
{% block title %}Hello user!{% endblock %}

{% block body %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Utilisateurs /</span> List
            <div class=\"card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row\">
                <h5 class=\"card-title mb-sm-0 me-2\"></h5>
                <div class=\"action-btns\">
                    <a href=\"{{ path('app_createaccount') }}\" class=\"btn btn-primary\">Ajouter</a>
                </div>
            </div>
            <li class=\"menu-item\">
    <a href=\"#\" id=\"toggleStatistics\" class=\"menu-link\">
        <i class=\"menu-icon tf-icons ti ti-pie-chart\"></i>
        <div>Statistiques</div>
    </a>
</li>
        </h4>
        <div class=\"search-container\">
        <form id=\"search-form\">
        <input type=\"text\" id=\"search-input\" placeholder=\"Rechercher...\">
        <button type=\"button\" id=\"search-button\"><i class=\"fas fa-search\"></i></button>
        </form>
        </div>

        <div id=\"statisticsContainer\" style=\"display: none;\">
    {% include 'client/statistics.html.twig' %}
</div>


        <br>
        <div class=\"card-deck\">
        {% include 'client/List.twig' with {'clients': clients} %}
        </div>
        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
            <script>
                \$(function() {
    // Fonction qui sera appelée lorsque l'utilisateur tape dans le champ de recherche
    \$('#search-input').on('input', function() {
        var searchTerm = \$(this).val(); // Récupère la chaîne de recherche
        \$.ajax({
            url: '{{ path('app_search') }}', // URL de l'action de recherche côté serveur
            type: 'POST',
            data: {searchTerm: searchTerm}, // Envoie la chaîne de recherche au serveur
            success: function(response) {
                \$('.card-deck').html(response); // Remplace le contenu de la liste des offres avec le résultat de la recherche
            }
        });
    });
});
            </script>
<script>
    \$(document).ready(function(){
        \$('#toggleStatistics').on('click', function(e){
            e.preventDefault();
            \$('#statisticsContainer').slideToggle();
        });
    });
</script>

        {% endblock %}

    </div>
    <style>
        .search-container {
            text-align: center; /* Centrer les éléments à l'intérieur */
            margin-top: -11.5vh; /* Marge depuis le haut de la page */
        }

        #search-form {
            display: inline-block; /* Permet au formulaire de s'adapter à la largeur de son contenu */
        }

        #search-input {
            padding: 10px; /* Ajouter un espace autour du texte dans l'input */
            border-radius: 5px; /* Coins arrondis */
            border: 1px solid #ccc; /* Bordure grise */
            font-size: 16px; /* Taille de la police */
        }

        #search-button {
            padding: 10px 20px; /* Ajouter un espace autour du texte dans le bouton */
            border-radius: 5px; /* Coins arrondis */
            border: none; /* Supprimer la bordure */
            background-color: #007bff; /* Couleur de fond bleue */
            color: #fff; /* Couleur du texte blanc */
            font-size: 16px; /* Taille de la police */
            cursor: pointer; /* Curseur de la souris en forme de main */
        }

        #search-button:hover {
            background-color: #0056b3; /* Couleur de fond bleu foncé au survol */
        }

    </style>

{% endblock %}

{% block java_scripts %}
    <script>
        \$(\".confirm-text\").click(function () {
            const form = \$(this).parents('form:first');
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: \" Vous ne pourrez pas revenir en arrière !\",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Confirmer ',
                cancelButtonText: 'Annuler',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function (result) {
                if (result.value) {
                    if (result.value) {
                        form.find('input[type=\"submit\"]').attr('disabled', 'disabled');
                        form.submit();
                    }
                }
            });
        });
    </script>
{% endblock %}
", "client/index.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\index.html.twig");
    }
}
