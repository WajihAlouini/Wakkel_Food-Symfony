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

/* Admin/plat/new.html.twig */
class __TwigTemplate_8abc45fe3f61ff89788b4d106e730090 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/plat/new.html.twig"));

        $this->parent = $this->loadTemplate("back&front/back.html.twig", "Admin/plat/new.html.twig", 1);
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

        yield "New Plat";
        
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
            <h1 class=\"text-center mb-4\">Create new Plat</h1>


            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            ";
        // line 15
        yield "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors')) {
            // line 16
            yield "                <div class=\"alert alert-danger\">
                    <ul>
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                yield "                            <li>";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                yield "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "                    </ul>
                </div>
            ";
        }
        // line 24
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Restaurant", [], "any", false, false, false, 25), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please select a restaurant.')", "oninput" => "setCustomValidity('')"]]);
        // line 30
        yield "

            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nomPlat", [], "any", false, false, false, 32), 'row');
        yield "

            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prix", [], "any", false, false, false, 34), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please enter a valid price.')", "oninput" => "setCustomValidity('')"]]);
        // line 39
        yield "

            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ingredient", [], "any", false, false, false, 41), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please enter ingredients.')", "oninput" => "setCustomValidity('')"]]);
        // line 46
        yield "

            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "platImage", [], "any", false, false, false, 48), 'row', ["attr" => ["oninvalid" => "setCustomValidity('Please upload a valid image (JPEG or PNG).')", "oninput" => "setCustomValidity('')"]]);
        // line 53
        yield "

            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
        yield "\" class=\"btn btn-secondary ml-2\">Back to list</a>
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
        return array (  168 => 60,  162 => 57,  156 => 53,  154 => 48,  150 => 46,  148 => 41,  144 => 39,  142 => 34,  137 => 32,  133 => 30,  131 => 25,  128 => 24,  123 => 21,  114 => 19,  110 => 18,  106 => 16,  103 => 15,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back&front/back.html.twig' %}

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
", "Admin/plat/new.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\Admin\\plat\\new.html.twig");
    }
}
