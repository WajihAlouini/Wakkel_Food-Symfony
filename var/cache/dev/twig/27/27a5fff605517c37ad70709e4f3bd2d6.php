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

/* client/ban.html.twig */
class __TwigTemplate_499c1587a8fc70033ed26321c69e2f2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/ban.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/ban.html.twig"));

        // line 1
        yield "<tbody>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 3
            yield "        <tr>
            <td>";
            // line 4
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "getIdClient", [], "method", false, false, false, 4), "html", null, true);
            yield "</td>
            <!-- Afficher d'autres propriétés de l'utilisateur -->
            <td>
                <div style=\"width: 92px;\">
                    <form style=\"display: inline-block\" action=\"";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isBanned", [], "method", false, false, false, 8)) {
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unban_client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            } else {
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ban_client", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            }
            yield "\" method=\"post\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("ban"), "html", null, true);
            yield "\"/>
                        <button type=\"submit\" class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1 ";
            // line 10
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isBanned", [], "method", false, false, false, 10)) {
                yield "btn-danger";
            }
            yield "\">
                            <i class=\"tf-icons ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isBanned", [], "method", false, false, false, 11)) {
                yield "text-success ti ti-check";
            } else {
                yield "text-danger ti ti-ban";
            }
            yield "\"></i> ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isBanned", [], "method", false, false, false, 11)) {
                yield "Unban";
            } else {
                yield "Ban";
            }
            // line 12
            yield "                        </button>
                    </form>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "</tbody>
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
        return "client/ban.html.twig";
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
        return array (  102 => 18,  91 => 12,  79 => 11,  73 => 10,  69 => 9,  61 => 8,  54 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tbody>
    {% for client in clients %}
        <tr>
            <td>{{ client.getIdClient() }}</td>
            <!-- Afficher d'autres propriétés de l'utilisateur -->
            <td>
                <div style=\"width: 92px;\">
                    <form style=\"display: inline-block\" action=\"{% if client.isBanned() %}{{ path('unban_client', {id: client.id}) }}{% else %}{{ path('ban_client', {id: client.id}) }}{% endif %}\" method=\"post\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('ban') }}\"/>
                        <button type=\"submit\" class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1 {% if client.isBanned() %}btn-danger{% endif %}\">
                            <i class=\"tf-icons {% if client.isBanned() %}text-success ti ti-check{% else %}text-danger ti ti-ban{% endif %}\"></i> {% if client.isBanned() %}Unban{% else %}Ban{% endif %}
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    {% endfor %}
</tbody>
", "client/ban.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\ban.html.twig");
    }
}
