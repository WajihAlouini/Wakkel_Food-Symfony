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

/* evenement/showfront.html.twig */
class __TwigTemplate_bc719dcde0d8ff3710b009782cc0c217 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showfront.html.twig"));

        // line 1
        yield from         $this->loadTemplate("navbar.html.twig", "evenement/showfront.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 79
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Event Details";
        
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
        yield "<style>
    /* Styles for modal-like appearance */
    .modal {
        display: block;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 80%;
        max-width: 600px;
    }

    .modal-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }

    .modal-body {
        padding: 20px;
    }
    .qr-code {
    width: 150px; /* Adjust the width as needed */
    height: 150px; /* Adjust the height as needed */
    }
    .table th {
        width: 30%;
    }
</style>


<div class=\"modal\">
    <div class=\"modal-header\">
        <h1 class=\"my-4\">Event Details</h1>
    </div>

    <div class=\"modal-body\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">IdEvent</th>
                            <td>";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 53, $this->source); })()), "idEvent", [], "any", false, false, false, 53), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Event Name</th>
                            <td>";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "eventName", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Start Date</th>
                            <td>";
        // line 61
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 61, $this->source); })()), "dateDebut", [], "any", false, false, false, 61)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 61, $this->source); })()), "dateDebut", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">End Date</th>
                            <td>";
        // line 65
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "dateFin", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "dateFin", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class=\"text-center mb-3\">QR Code</h4>
                        <div class=\"text-center\">
    <img src=\"";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["qrImage"]) || array_key_exists("qrImage", $context) ? $context["qrImage"] : (function () { throw new RuntimeError('Variable "qrImage" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "\" alt=\"QR Code de l'evenement ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 72, $this->source); })()), "getIdEvent", [], "method", false, false, false, 72), "html", null, true);
        yield "\" class=\"img-fluid product-image qr-code\">
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
        return "evenement/showfront.html.twig";
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
        return array (  180 => 72,  170 => 65,  163 => 61,  156 => 57,  149 => 53,  100 => 6,  90 => 5,  70 => 3,  58 => 79,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"navbar.html.twig\" %}

{% block title %}Event Details{% endblock %}

{% block body %}
<style>
    /* Styles for modal-like appearance */
    .modal {
        display: block;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        width: 80%;
        max-width: 600px;
    }

    .modal-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }

    .modal-body {
        padding: 20px;
    }
    .qr-code {
    width: 150px; /* Adjust the width as needed */
    height: 150px; /* Adjust the height as needed */
    }
    .table th {
        width: 30%;
    }
</style>


<div class=\"modal\">
    <div class=\"modal-header\">
        <h1 class=\"my-4\">Event Details</h1>
    </div>

    <div class=\"modal-body\">
        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">IdEvent</th>
                            <td>{{ evenement.idEvent }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Event Name</th>
                            <td>{{ evenement.eventName }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Start Date</th>
                            <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">End Date</th>
                            <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class=\"text-center mb-3\">QR Code</h4>
                        <div class=\"text-center\">
    <img src=\"{{ qrImage }}\" alt=\"QR Code de l'evenement {{ evenement.getIdEvent() }}\" class=\"img-fluid product-image qr-code\">
</div>

    </div>
</div>

{% endblock %}

", "evenement/showfront.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\evenement\\showfront.html.twig");
    }
}
