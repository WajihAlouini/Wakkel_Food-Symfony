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

/* reclamation/new.html.twig */
class __TwigTemplate_5e2a0f907b8a7b3a393634e4077714d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        // line 1
        yield from         $this->loadTemplate("client/navbar.html.twig", "reclamation/new.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<style>
    .bg-custom {
        background-image: url('URL_DE_VOTRE_IMAGE');
        background-size: cover;
        background-position: center;
        padding-top: 100px;
        padding-bottom: 100px;
    }

     .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-weight: bold;
            color: #333; /* Couleur du texte des labels */
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            line-height: 1.5;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f9f9f9; /* Couleur de fond des champs de texte */
            color: #333; /* Couleur du texte des champs de texte */
            transition: border-color 0.3s ease; /* Transition pour la couleur de bordure */
        }
        
        .form-control:focus {
            border-color: #007bff; /* Couleur de bordure lorsqu'un champ de texte est en focus */
        }
        
        .textarea-custom {
            height: 150px; /* Hauteur fixe pour les zones de texte */
            resize: vertical;
        }
        
        .form-file {
            display: block;
            margin-top: 5px;
        }
        
        /* Style pour les boutons */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
        
        /* Style pour les messages d'erreur */
        .error-message {
            color: red;
            font-size: 14px;
        }
        .box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
</style>
";
        // line 75
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 127
        yield from         $this->loadTemplate("client/footer.html.twig", "reclamation/new.html.twig", 127)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        yield "    <div class=\"container-xxl py-5 bg-dark mb-5 bg-custom\">
        <div class=\"container\">
        <h1>Create New Reclamation</h1>

        <div class=\"box\"> <!-- Ajout de la classe 'box' -->
            ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    <label for=\"emailR\" class=\"form-label\">Email</label>
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "emailR", [], "any", false, false, false, 84), 'errors');
        yield "
                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "emailR", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your email"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    <label for=\"type\" class=\"form-label\">Type</label>
                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "type", [], "any", false, false, false, 90), 'errors');
        yield "
                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "type", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter type"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    <label for=\"description\" class=\"form-label\">Description</label>
                    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "description", [], "any", false, false, false, 96), 'errors');
        yield "
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "description", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control textarea-custom", "placeholder" => "Enter description"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    <label for=\"image\" class=\"form-label\">Image</label>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control form-file", "placeholder" => "Choose image"]]);
        yield "
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "image", [], "any", false, false, false, 103), 'errors');
        yield "
                </div>
                
                <button type=\"submit\" class=\"btn\">";
        // line 106
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 106, $this->source); })()), "Submit")) : ("Submit")), "html", null, true);
        yield "</button>
            ";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        yield "

            <div class=\"actions\">
            </div>
        </div>
    </div>

    <script>
        document.getElementById('showRatingBtn').addEventListener('click', function() {
            fetch('";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("average_rating");
        yield "')
                .then(response => response.json())
                .then(data => {
                    alert('Average Rating: ' + data.averageRating);
                })
                .catch(error => {
                    console.error('Error:', error);
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
        return "reclamation/new.html.twig";
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
        return array (  220 => 116,  208 => 107,  204 => 106,  198 => 103,  194 => 102,  186 => 97,  182 => 96,  174 => 91,  170 => 90,  162 => 85,  158 => 84,  152 => 81,  145 => 76,  135 => 75,  124 => 127,  122 => 75,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}
<style>
    .bg-custom {
        background-image: url('URL_DE_VOTRE_IMAGE');
        background-size: cover;
        background-position: center;
        padding-top: 100px;
        padding-bottom: 100px;
    }

     .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            font-weight: bold;
            color: #333; /* Couleur du texte des labels */
        }
        
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            line-height: 1.5;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #f9f9f9; /* Couleur de fond des champs de texte */
            color: #333; /* Couleur du texte des champs de texte */
            transition: border-color 0.3s ease; /* Transition pour la couleur de bordure */
        }
        
        .form-control:focus {
            border-color: #007bff; /* Couleur de bordure lorsqu'un champ de texte est en focus */
        }
        
        .textarea-custom {
            height: 150px; /* Hauteur fixe pour les zones de texte */
            resize: vertical;
        }
        
        .form-file {
            display: block;
            margin-top: 5px;
        }
        
        /* Style pour les boutons */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
        
        /* Style pour les messages d'erreur */
        .error-message {
            color: red;
            font-size: 14px;
        }
        .box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
</style>
{% block body %}
    <div class=\"container-xxl py-5 bg-dark mb-5 bg-custom\">
        <div class=\"container\">
        <h1>Create New Reclamation</h1>

        <div class=\"box\"> <!-- Ajout de la classe 'box' -->
            {{ form_start(form) }}
                <div class=\"form-group\">
                    <label for=\"emailR\" class=\"form-label\">Email</label>
                    {{ form_errors(form.emailR) }}
                    {{ form_widget(form.emailR, {'attr': {'class': 'form-control', 'placeholder': 'Enter your email'}}) }}
                </div>

                <div class=\"form-group\">
                    <label for=\"type\" class=\"form-label\">Type</label>
                    {{ form_errors(form.type) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'Enter type'}}) }}
                </div>

                <div class=\"form-group\">
                    <label for=\"description\" class=\"form-label\">Description</label>
                    {{ form_errors(form.description) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control textarea-custom', 'placeholder': 'Enter description'}}) }}
                </div>

                <div class=\"form-group\">
                    <label for=\"image\" class=\"form-label\">Image</label>
                    {{ form_widget(form.image, {'attr': {'class': 'form-control form-file', 'placeholder': 'Choose image'}}) }}
                    {{ form_errors(form.image) }}
                </div>
                
                <button type=\"submit\" class=\"btn\">{{ button_label|default('Submit') }}</button>
            {{ form_end(form) }}

            <div class=\"actions\">
            </div>
        </div>
    </div>

    <script>
        document.getElementById('showRatingBtn').addEventListener('click', function() {
            fetch('{{ path('average_rating') }}')
                .then(response => response.json())
                .then(data => {
                    alert('Average Rating: ' + data.averageRating);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
{% endblock %}
{% include \"client/footer.html.twig\" %}
", "reclamation/new.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\reclamation\\new.html.twig");
    }
}
