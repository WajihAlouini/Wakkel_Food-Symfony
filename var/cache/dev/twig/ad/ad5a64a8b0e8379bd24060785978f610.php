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

/* participation/new.html.twig */
class __TwigTemplate_ac0f51526d41da6c31865cb4757dd9cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/new.html.twig"));

        // line 1
        yield from         $this->loadTemplate("client/navbar.html.twig", "participation/new.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
<style>
    body {
        font-size: 18px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .event-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .event-body {
        padding: 40px;
        background-color: #f2f2f2;
        border-radius: 15px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        width: 100%;
        max-width: 900px;
    }

    .form-container {
        margin-bottom: 40px;
        width: 100%;
    }

    .back-link {
        text-align: center;
        margin-top: 40px;
        width: 100%;
    }

    /* Styling for flash messages */
    .flash-message {
        margin-bottom: 40px;
        padding: 30px;
        border-radius: 15px;
        font-size: 20px;
        font-weight: bold;
    }

    .flash-success {
        background-color: #dff0d8;
        color: #3c763d;
    }

    .flash-error {
        background-color: #f2dede;
        color: #a94442;
    }

    .flash-info {
        background-color: #d9edf7;
        color: #31708f;
    }
</style>

<div class=\"container\">
    <div class=\"event-header\">
        <h1 style=\"font-size: 36px;\">New Participation</h1>
    </div>

    <div class=\"event-body\">
        ";
        // line 76
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "flashes", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 77
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 78
                yield "                <div class=\"flash-message flash-";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["type"], "html", null, true);
                yield "\" role=\"alert\">
                    ";
                // line 79
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "
        ";
        // line 85
        yield "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    <div class=\"form-container mb-4\">
                        ";
        // line 89
        yield from         $this->loadTemplate("participation/_form.html.twig", "participation/new.html.twig", 89)->unwrap()->yield($context);
        // line 90
        yield "                    </div>
                    <div class=\"back-link\">
                        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_frontindex");
        yield "\" style=\"font-size: 22px;\">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 100
        yield from         $this->loadTemplate("client/footer.html.twig", "participation/new.html.twig", 100)->unwrap()->yield($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "participation/new.html.twig";
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
        return array (  177 => 100,  166 => 92,  162 => 90,  160 => 89,  154 => 85,  151 => 83,  145 => 82,  136 => 79,  131 => 78,  126 => 77,  121 => 76,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"client/navbar.html.twig\" %}

<style>
    body {
        font-size: 18px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .event-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .event-body {
        padding: 40px;
        background-color: #f2f2f2;
        border-radius: 15px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
        width: 100%;
        max-width: 900px;
    }

    .form-container {
        margin-bottom: 40px;
        width: 100%;
    }

    .back-link {
        text-align: center;
        margin-top: 40px;
        width: 100%;
    }

    /* Styling for flash messages */
    .flash-message {
        margin-bottom: 40px;
        padding: 30px;
        border-radius: 15px;
        font-size: 20px;
        font-weight: bold;
    }

    .flash-success {
        background-color: #dff0d8;
        color: #3c763d;
    }

    .flash-error {
        background-color: #f2dede;
        color: #a94442;
    }

    .flash-info {
        background-color: #d9edf7;
        color: #31708f;
    }
</style>

<div class=\"container\">
    <div class=\"event-header\">
        <h1 style=\"font-size: 36px;\">New Participation</h1>
    </div>

    <div class=\"event-body\">
        {# Display flash messages here #}
        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"flash-message flash-{{ type }}\" role=\"alert\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        {# Display the form #}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1\">
                    <div class=\"form-container mb-4\">
                        {% include('participation/_form.html.twig') %}
                    </div>
                    <div class=\"back-link\">
                        <a href=\"{{ path('app_evenement_frontindex') }}\" style=\"font-size: 22px;\">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% include \"client/footer.html.twig\" %}
", "participation/new.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\participation\\new.html.twig");
    }
}
