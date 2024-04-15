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

/* restaurant_category/new.html.twig */
class __TwigTemplate_6eaea16f12137d9a2c5a514a03ab0aa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant_category/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant_category/new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

";
        // line 4
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "categoryName", [], "any", false, false, false, 4), 'errors')) {
            // line 5
            echo "    <div class=\"alert alert-danger\">
        <ul>
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "categoryName", [], "any", false, false, false, 7), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 8), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    </div>
";
        }
        // line 13
        echo "
";
        // line 15
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors')) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        <ul>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                ";
                if ((null === twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
                    echo "</li>
                ";
                }
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </ul>
    </div>
";
        }
        // line 26
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "categoryName", [], "any", false, false, false, 27), 'row');
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "categoryImage", [], "any", false, false, false, 28), 'row');
        echo "

<button type=\"submit\" class=\"btn btn-primary\">Save</button>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "restaurant_category/new.html.twig";
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
        return array (  118 => 31,  112 => 28,  108 => 27,  105 => 26,  100 => 23,  94 => 22,  88 => 20,  85 => 19,  81 => 18,  77 => 16,  75 => 15,  72 => 13,  67 => 10,  58 => 8,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

{# Display error messages for the categoryName field #}
{% if form_errors(form.categoryName) %}
    <div class=\"alert alert-danger\">
        <ul>
            {% for error in form_errors(form.categoryName) %}
                <li>{{ error.message }}</li>
            {% endfor %}
        </ul>
    </div>
{% endif %}

{# Display global errors #}
{% if form_errors(form) %}
    <div class=\"alert alert-danger\">
        <ul>
            {% for error in form_errors(form) %}
                {% if error.origin is null %}
                    <li>{{ error.message }}</li>
                {% endif %}
            {% endfor %}
        </ul>
    </div>
{% endif %}

{{ form_row(form.categoryName) }}
{{ form_row(form.categoryImage) }}

<button type=\"submit\" class=\"btn btn-primary\">Save</button>
{{ form_end(form) }}
", "restaurant_category/new.html.twig", "C:\\ReverseEngineering\\templates\\restaurant_category\\new.html.twig");
    }
}
