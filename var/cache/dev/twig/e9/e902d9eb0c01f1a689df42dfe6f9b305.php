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

/* avisplat/show.html.twig */
class __TwigTemplate_978f84b43d3af4cae0ba33ae8ee85ce5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisplat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisplat/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avisplat/show.html.twig", 1);
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

        yield "Avisplat";
        
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
        yield "    <h1>Avisplat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAvis</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 12, $this->source); })()), "idAvis", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 16, $this->source); })()), "commentaire", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 20, $this->source); })()), "note", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DateAvis</th>
                <td>";
        // line 24
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 24, $this->source); })()), "dateAvis", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 24, $this->source); })()), "dateAvis", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Id_plat</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 28, $this->source); })()), "idPlat", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avisplat_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avisplat_edit", ["idAvis" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["avisplat"]) || array_key_exists("avisplat", $context) ? $context["avisplat"] : (function () { throw new RuntimeError('Variable "avisplat" does not exist.', 35, $this->source); })()), "idAvis", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "avisplat/_delete_form.html.twig");
        yield "
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
        return "avisplat/show.html.twig";
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
        return array (  144 => 37,  139 => 35,  134 => 33,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avisplat{% endblock %}

{% block body %}
    <h1>Avisplat</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdAvis</th>
                <td>{{ avisplat.idAvis }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ avisplat.commentaire }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ avisplat.note }}</td>
            </tr>
            <tr>
                <th>DateAvis</th>
                <td>{{ avisplat.dateAvis ? avisplat.dateAvis|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Id_plat</th>
                <td>{{ avisplat.idPlat }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_avisplat_index') }}\">back to list</a>

    <a href=\"{{ path('app_avisplat_edit', {'idAvis': avisplat.idAvis}) }}\">edit</a>

    {{ include('avisplat/_delete_form.html.twig') }}
{% endblock %}
", "avisplat/show.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\avisplat\\show.html.twig");
    }
}
