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

/* Admin/plat/new.html.twig */
class __TwigTemplate_ffcee8ec666d1afa8355610d768f3a10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/plat/new.html.twig", 1);
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

        echo "New Plat";
        
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
        echo "<div class=\"container\">
    <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Create new Plat</h1>

           
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 15
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors')) {
            // line 16
            echo "                <div class=\"alert alert-danger\">
                    <ul>
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                            <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                    </ul>
                </div>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Restaurant", [], "any", false, false, false, 25), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please select a restaurant.')", "oninput" => "setCustomValidity('')"]]);
        // line 30
        echo "

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nomPlat", [], "any", false, false, false, 32), 'row');
        echo "

            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please enter a valid price.')", "oninput" => "setCustomValidity('')"]]);
        // line 39
        echo "

            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ingredient", [], "any", false, false, false, 41), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please enter ingredients.')", "oninput" => "setCustomValidity('')"]]);
        // line 46
        echo "

            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "platImage", [], "any", false, false, false, 48), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please upload a valid image (JPEG or PNG).')", "oninput" => "setCustomValidity('')"]]);
        // line 53
        echo "

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
        echo "\" class=\"btn btn-secondary ml-2\">Back to list</a>
            </div>

            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
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
        return "Admin/plat/new.html.twig";
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
        return array (  166 => 60,  160 => 57,  154 => 53,  152 => 48,  148 => 46,  146 => 41,  142 => 39,  140 => 34,  135 => 32,  131 => 30,  129 => 25,  126 => 24,  121 => 21,  112 => 19,  108 => 18,  104 => 16,  101 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Plat{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Create new Plat</h1>

           
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {# Display general form errors if any #}
            {% if form_errors(form) %}
                <div class=\"alert alert-danger\">
                    <ul>
                        {% for error in form_errors(form) %}
                            <li>{{ error.message }}</li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}

            {{ form_row(form.Restaurant, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please select a restaurant.')\",
                    'oninput': \"setCustomValidity('')\"
                }
            }) }}

            {{ form_row(form.nomPlat) }}

            {{ form_row(form.prix, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please enter a valid price.')\",
                    'oninput': \"setCustomValidity('')\"
                }
            }) }}

            {{ form_row(form.ingredient, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please enter ingredients.')\",
                    'oninput': \"setCustomValidity('')\"
                }
            }) }}

            {{ form_row(form.platImage, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please upload a valid image (JPEG or PNG).')\",
                    'oninput': \"setCustomValidity('')\"
                }
            }) }}

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <a href=\"{{ path('app_plat_index') }}\" class=\"btn btn-secondary ml-2\">Back to list</a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "Admin/plat/new.html.twig", "C:\\ReverseEngineering\\templates\\Admin\\plat\\new.html.twig");
    }
}
