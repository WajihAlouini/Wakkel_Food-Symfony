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

/* Admin/plat/edit.html.twig */
class __TwigTemplate_9a338a91cad7830fb3a1f0d0ca879b64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/edit.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "Admin/plat/edit.html.twig", 1);
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

        yield "Edit Plat";
        
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
        yield "<div class=\"container\">
    <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Edit Plat</h1>

            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            ";
        // line 14
        yield "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors')) {
            // line 15
            yield "                <div class=\"alert alert-danger\">
                    <ul>
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                yield "                            <li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 18), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "                    </ul>
                </div>
            ";
        }
        // line 23
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Restaurant", [], "any", false, false, false, 24), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please select a restaurant.')", "oninput" => "setCustomValidity('')"]]);
        // line 29
        yield "

            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nomPlat", [], "any", false, false, false, 31), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Nom plat cannot be empty.')"]]);
        // line 35
        yield "

            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please type a valid number for Prix.')"]]);
        // line 41
        yield "

            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "ingredient", [], "any", false, false, false, 43), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Ingredient cannot be empty.')"]]);
        // line 47
        yield "

            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "platImage", [], "any", false, false, false, 49), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please upload a valid image (JPEG or PNG).')"]]);
        // line 53
        yield "

            <div class=\"d-grid gap-2 mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
        yield "\" class=\"btn btn-secondary mt-3\">Back to list</a>
            </div>

            ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        yield "
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
        return "Admin/plat/edit.html.twig";
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
        return array (  168 => 60,  162 => 57,  156 => 53,  154 => 49,  150 => 47,  148 => 43,  144 => 41,  142 => 37,  138 => 35,  136 => 31,  132 => 29,  130 => 24,  127 => 23,  122 => 20,  113 => 18,  109 => 17,  105 => 15,  102 => 14,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

{% block title %}Edit Plat{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center align-items-center\" style=\"height: 100vh;\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center mb-4\">Edit Plat</h1>

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

            {{ form_row(form.nomPlat, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Nom plat cannot be empty.')\"
                }
            }) }}

            {{ form_row(form.prix, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please type a valid number for Prix.')\"
                }
            }) }}

            {{ form_row(form.ingredient, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Ingredient cannot be empty.')\"
                }
            }) }}

            {{ form_row(form.platImage, {
                'attr': {
                    'oninvalid': \"setCustomValidity('Please upload a valid image (JPEG or PNG).')\"
                }
            }) }}

            <div class=\"d-grid gap-2 mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                <a href=\"{{ path('app_plat_index') }}\" class=\"btn btn-secondary mt-3\">Back to list</a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}
", "Admin/plat/edit.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Admin\\plat\\edit.html.twig");
    }
}
