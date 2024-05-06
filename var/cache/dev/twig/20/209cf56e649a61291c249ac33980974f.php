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

/* participation/confirmation.html.twig */
class __TwigTemplate_79b6aaa18d025adddc75bc62fcced19d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participation/confirmation.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Participation Confirmation</title>
</head>
<body>
    <h1>Confirmation of Participation</h1>
   
    
    <p>Thank you for your participation. Here are the details of your participation:</p>
    
    <ul>
        <li><strong>Event Name:</strong> ";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 17, $this->source); })()), "getIdEvent", [], "method", false, false, false, 17), "getEventName", [], "method", false, false, false, 17), "html", null, true);
        yield "</li>
        <li><strong><p>Start Date: ";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 18, $this->source); })()), "getIdEvent", [], "method", false, false, false, 18), "DateDebut", [], "any", false, false, false, 18), "Y-m-d H:i:s"), "html", null, true);
        yield "</p>
        <li><strong><p>End Date: ";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 19, $this->source); })()), "getIdEvent", [], "method", false, false, false, 19), "DateFin", [], "any", false, false, false, 19), "Y-m-d H:i:s"), "html", null, true);
        yield "</p>
       
    </ul>
    
    <p>We look forward to seeing you at the event!</p>
    
    <p>Best regards,<br>
    Your Organization</p>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "participation/confirmation.html.twig";
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
        return array (  69 => 19,  65 => 18,  61 => 17,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# confirmation.html.twig #}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Participation Confirmation</title>
</head>
<body>
    <h1>Confirmation of Participation</h1>
   
    
    <p>Thank you for your participation. Here are the details of your participation:</p>
    
    <ul>
        <li><strong>Event Name:</strong> {{ participation.getIdEvent().getEventName() }}</li>
        <li><strong><p>Start Date: {{ participation.getIdEvent().DateDebut|date('Y-m-d H:i:s') }}</p>
        <li><strong><p>End Date: {{ participation.getIdEvent().DateFin|date('Y-m-d H:i:s') }}</p>
       
    </ul>
    
    <p>We look forward to seeing you at the event!</p>
    
    <p>Best regards,<br>
    Your Organization</p>
</body>
</html>
", "participation/confirmation.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\participation\\confirmation.html.twig");
    }
}
