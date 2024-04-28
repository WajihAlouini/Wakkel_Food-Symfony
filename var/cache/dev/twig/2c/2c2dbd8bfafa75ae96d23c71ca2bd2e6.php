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

/* client/delete.html.twig */
class __TwigTemplate_9f3ccd2b4e96ab381edd0750ae927f1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/delete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/delete.html.twig"));

        // line 1
        echo "<tbody>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 3
            echo "        <tr>
            <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getIdClient", [], "method", false, false, false, 4), "html", null, true);
            echo "</td>
            <!-- Afficher d'autres propriétés de l'utilisateur -->
            <td>
                <div style=\"width: 92px;\">
                    <form style=\"display: inline-block\"
                          action=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_client", ["id_client" => twig_get_attribute($this->env, $this->source, $context["client"], "id_client", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\"
                          method=\"post\"
                          data-confirmation=\"true\">
                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            echo "\"/>
                        <button type=\"submit\" class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1\">
                            <i class=\"tf-icons text-danger ti ti-trash\"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tbody>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/delete.html.twig";
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
        return array (  82 => 21,  67 => 12,  61 => 9,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
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
                    <form style=\"display: inline-block\"
                          action=\"{{ path('delete_client', {id_client: client.id_client}) }}\"
                          method=\"post\"
                          data-confirmation=\"true\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\"/>
                        <button type=\"submit\" class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1\">
                            <i class=\"tf-icons text-danger ti ti-trash\"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    {% endfor %}
</tbody>
", "client/delete.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\delete.html.twig");
    }
}
