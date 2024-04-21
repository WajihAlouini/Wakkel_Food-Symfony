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

/* Admin/restaurant/list.html.twig */
class __TwigTemplate_0b721d5243feaa8da59928e8a792ee62 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/restaurant/list.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "Admin/restaurant/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <!-- Category name and images -->
    <div class=\"category-info\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["restaurantCategory"]) || array_key_exists("restaurantCategory", $context) ? $context["restaurantCategory"] : (function () { throw new RuntimeError('Variable "restaurantCategory" does not exist.', 6, $this->source); })()), "categoryName", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
        <div class=\"category-images\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["restaurantCategory"]) || array_key_exists("restaurantCategory", $context) ? $context["restaurantCategory"] : (function () { throw new RuntimeError('Variable "restaurantCategory" does not exist.', 8, $this->source); })()), "categoryImage", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 9
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 9))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </div>
    </div>

    <!-- List of restaurants -->
    <div class=\"box-container\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 17
            echo "            <div class=\"box\">
                <h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 18), "html", null, true);
            echo "</h3>
                <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "restaurantImage", [], "any", false, false, false, 19))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nomRestaurant", [], "any", false, false, false, 19), "html", null, true);
            echo " Image\">
                <p>Adresse: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresseRestaurant", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>

    <!-- CSS styles -->
    <style>
        /* CSS styles for the restaurant list page */
        .category-info {
            text-align: center;
        }

        .category-images {
            margin-top: 20px;
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/restaurant/list.html.twig";
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
        return array (  125 => 23,  116 => 20,  110 => 19,  106 => 18,  103 => 17,  99 => 16,  92 => 11,  81 => 9,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

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

    <!-- List of restaurants -->
    <div class=\"box-container\">
        {% for restaurant in restaurants %}
            <div class=\"box\">
                <h3>{{ restaurant.nomRestaurant }}</h3>
                <img src=\"{{ asset('uploads/' ~ restaurant.restaurantImage) }}\" alt=\"{{ restaurant.nomRestaurant }} Image\">
                <p>Adresse: {{ restaurant.adresseRestaurant }}</p>
            </div>
        {% endfor %}
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
{% endblock %}
", "Admin/restaurant/list.html.twig", "C:\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\Admin\\restaurant\\list.html.twig");
    }
}
