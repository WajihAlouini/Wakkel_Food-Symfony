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

/* evaluation/new.html.twig */
class __TwigTemplate_cda81d9929225cf39715eef3ac3b220f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        // line 1
        yield from         $this->loadTemplate("client/navbar.html.twig", "evaluation/new.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 66
        yield from         $this->loadTemplate("client/footer.html.twig", "evaluation/new.html.twig", 66)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container-xxl py-5 bg-dark mb-5\" style=\"background-image: url('URL_DE_VOTRE_IMAGE');\">
        <div class=\"container\">
            <div class=\"box-container\">
                <h1>Create New Evaluation</h1>

                <div class=\"form-container\">
                    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
                    <div class=\"form-group\">
                        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "emailE", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Your email"]]);
        yield "
                        ";
        // line 13
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "emailE", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            yield "                            <div class=\"error-message\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "emailE", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14)), "message", [], "any", false, false, false, 14), "html", null, true);
            yield "</div>
                        ";
        }
        // line 16
        yield "                    </div>
                    <div class=\"form-group\">
                        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "note", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control", "min" => 1, "max" => 5, "placeholder" => "Note (1-5)"]]);
        yield "
                        ";
        // line 19
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "note", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
            // line 20
            yield "                            <div class=\"error-message\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "note", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)), "message", [], "any", false, false, false, 20), "html", null, true);
            yield "</div>
                        ";
        }
        // line 22
        yield "                    </div>
                    <div class=\"form-group\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "commentaire", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Your comment"]]);
        yield "
                        ";
        // line 25
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "commentaire", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)) > 0)) {
            // line 26
            yield "                            <div class=\"error-message\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "commentaire", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)), "message", [], "any", false, false, false, 26), "html", null, true);
            yield "</div>
                        ";
        }
        // line 28
        yield "                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "captcha", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter captcha"]]);
        yield "
                        ";
        // line 31
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "captcha", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0)) {
            // line 32
            yield "                            <div class=\"error-message\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "captcha", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32)), "message", [], "any", false, false, false, 32), "html", null, true);
            yield "</div>
                        ";
        }
        // line 34
        yield "                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    <button id=\"showRatingBtn\" class=\"btn btn-secondary\">Show Average Rating</button>
                    <div class=\"survey-info\">
                        <p>Scan our QR code to take the survey on your phone</p>
                        <img src=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("untitled.png"), "html", null, true);
        yield "\" alt=\"Image\" class=\"survey-image\" style=\"width:100px; height:100px;\"/>
                        <a href=\"https://fr.surveymonkey.com/r/GNMLNPC\" target=\"_blank\" class=\"btn btn-info\">Take Survey online</a>
                    </div>

                    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        yield "

                    ";
        // line 47
        yield "
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('showRatingBtn').addEventListener('click', function() {
            fetch('";
        // line 55
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
        return "evaluation/new.html.twig";
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
        return array (  176 => 55,  166 => 47,  161 => 44,  154 => 40,  146 => 34,  140 => 32,  138 => 31,  134 => 30,  130 => 28,  124 => 26,  122 => 25,  118 => 24,  114 => 22,  108 => 20,  106 => 19,  102 => 18,  98 => 16,  92 => 14,  90 => 13,  86 => 12,  81 => 10,  73 => 4,  63 => 3,  52 => 66,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}

{% block body %}
    <div class=\"container-xxl py-5 bg-dark mb-5\" style=\"background-image: url('URL_DE_VOTRE_IMAGE');\">
        <div class=\"container\">
            <div class=\"box-container\">
                <h1>Create New Evaluation</h1>

                <div class=\"form-container\">
                    {{ form_start(form) }}
                    <div class=\"form-group\">
                        {{ form_row(form.emailE, {'attr': {'class': 'form-control', 'placeholder': 'Your email'}}) }}
                        {% if form.emailE.vars.errors|length > 0 %}
                            <div class=\"error-message\">{{ form.emailE.vars.errors|first.message }}</div>
                        {% endif %}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.note, { 'attr': {'class': 'form-control', 'min': 1, 'max': 5, 'placeholder': 'Note (1-5)'} }) }}
                        {% if form.note.vars.errors|length > 0 %}
                            <div class=\"error-message\">{{ form.note.vars.errors|first.message }}</div>
                        {% endif %}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.commentaire, {'attr': {'class': 'form-control', 'placeholder': 'Your comment'}}) }}
                        {% if form.commentaire.vars.errors|length > 0 %}
                            <div class=\"error-message\">{{ form.commentaire.vars.errors|first.message }}</div>
                        {% endif %}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(form.captcha, {'attr': {'class': 'form-control', 'placeholder': 'Enter captcha'}}) }}
                        {% if form.captcha.vars.errors|length > 0 %}
                            <div class=\"error-message\">{{ form.captcha.vars.errors|first.message }}</div>
                        {% endif %}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    <button id=\"showRatingBtn\" class=\"btn btn-secondary\">Show Average Rating</button>
                    <div class=\"survey-info\">
                        <p>Scan our QR code to take the survey on your phone</p>
                        <img src=\"{{ asset('untitled.png') }}\" alt=\"Image\" class=\"survey-image\" style=\"width:100px; height:100px;\"/>
                        <a href=\"https://fr.surveymonkey.com/r/GNMLNPC\" target=\"_blank\" class=\"btn btn-info\">Take Survey online</a>
                    </div>

                    {{ form_end(form) }}

                    {# Button to show average rating #}

                </div>
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
", "evaluation/new.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evaluation\\new.html.twig");
    }
}
