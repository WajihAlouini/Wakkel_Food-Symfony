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

/* commande/index.html.twig */
class __TwigTemplate_e81ac66eb2a5f1fb887950c99a954807 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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

        echo "Commande index";
        
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
                <h1 class=\"text-center\">Commande Index</h1>

                ";
        // line 11
        if ( !twig_test_empty((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "                    <table class=\"table table-bordered table-striped\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">IdCommande</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 23
                echo "                                <tr>
                                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                                    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "statusCommande", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["idCommande" => twig_get_attribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">Show</a>
                                        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["idCommande" => twig_get_attribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        </tbody>
                    </table>
                ";
        } else {
            // line 36
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        No records found.
                    </div>
                ";
        }
        // line 40
        echo "
                <div class=\"text-center\">
                    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        echo "\" class=\"btn btn-primary\">Create New Commande</a>
                </div>
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
        return "commande/index.html.twig";
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
        return array (  158 => 42,  154 => 40,  148 => 36,  143 => 33,  133 => 29,  129 => 28,  124 => 26,  120 => 25,  116 => 24,  113 => 23,  109 => 22,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande index{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <h1 class=\"text-center\">Commande Index</h1>

                {% if commandes is not empty %}
                    <table class=\"table table-bordered table-striped\">
                        <thead class=\"thead-dark\">
                            <tr>
                                <th scope=\"col\">IdCommande</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Prix</th>
                                <th scope=\"col\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for commande in commandes %}
                                <tr>
                                    <td>{{ commande.idCommande }}</td>
                                    <td>{{ commande.statusCommande }}</td>
                                    <td>{{ commande.prix }}</td>
                                    <td>
                                        <a href=\"{{ path('app_commande_show', {'idCommande': commande.idCommande}) }}\" class=\"btn btn-sm btn-info\">Show</a>
                                        <a href=\"{{ path('app_commande_edit', {'idCommande': commande.idCommande}) }}\" class=\"btn btn-sm btn-primary\">Edit</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        No records found.
                    </div>
                {% endif %}

                <div class=\"text-center\">
                    <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-primary\">Create New Commande</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\commande\\index.html.twig");
    }
}
