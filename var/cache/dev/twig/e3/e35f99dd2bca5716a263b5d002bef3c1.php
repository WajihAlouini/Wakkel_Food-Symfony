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

/* client/list.twig */
class __TwigTemplate_ca85e6190286d8cdcb6358562177eefc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/list.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/list.twig"));

        // line 1
        echo "<!-- Invoice List Table -->
<div class=\"card\">
    <div class=\"card-datatable table-responsive\">
        <table class=\"invoice-list-table table border-top\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Numero</th>
                    <th>Adresse</th>
                    <th>Genre</th>
                    <th>ROLE</th>
                    <th class=\"cell-fit\" style=\"width: 120px\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 18
        if (array_key_exists("clients", $context)) {
            // line 19
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 20
                echo "                        <tr>
                            <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getNomC", [], "method", false, false, false, 21), "html", null, true);
                echo "</td>
                            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getPrenomC", [], "method", false, false, false, 22), "html", null, true);
                echo "</td>
                            <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getEmailC", [], "method", false, false, false, 23), "html", null, true);
                echo "</td>
                            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getNumeroC", [], "method", false, false, false, 24), "html", null, true);
                echo "</td>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getAdresseC", [], "method", false, false, false, 25), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "getGenre", [], "method", false, false, false, 26), "value", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["client"], "getRole", [], "method", false, false, false, 27), "value", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                            <td>
                                <div style=\"width: 92px;\">
                                    <form style=\"display: inline-block\"
                                          action=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "getIdClient", [], "method", false, false, false, 31)]), "html", null, true);
                echo "\"
                                          method=\"post\"
                                          data-confirmation=\"true\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
                echo "\"/>
                                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_client", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "getIdClient", [], "method", false, false, false, 35)]), "html", null, true);
                echo "\"
                                           class=\"btn btn-icon rounded-pill waves-effect\">
                                            <i class=\"tf-icons text-primary ti ti-pencil\"></i>
                                        </a>
                                        <button type=\"button\"
                                                class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1\">
                                            <i class=\"tf-icons text-danger ti ti-trash\"></i>
                                        </button>
                                    </form>
                                    <button type=\"button\"
                                            class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1 ban-btn";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["client"], "isBanned", [], "any", false, false, false, 45)) {
                    echo " btn-danger ";
                }
                echo "\"
                                            data-client-id=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getIdClient", [], "method", false, false, false, 46), "html", null, true);
                echo "\">
                                        <i class=\"tf-icons ti ti-ban\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                ";
        }
        // line 54
        echo "            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const banButtons = document.querySelectorAll(\".ban-btn\");

        banButtons.forEach(button => {
            button.addEventListener(\"click\", function() {
                const clientId = this.dataset.clientId;
                const isBanned = this.classList.contains(\"banned\");
                const url = isBanned ? \"/client/unban/\" + clientId : \"/client/ban/\" + clientId;
                const method = \"POST\";

                fetch(url, {
                    method: method,
                    headers: {
                        \"Content-Type\": \"application/json\",
                        \"X-Requested-With\": \"XMLHttpRequest\",
                        \"X-CSRF-Token\": \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("ban"), "html", null, true);
        echo "\"
                    }
                }).then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error(\"Network response was not ok.\");
                }).then(data => {
                    if (data.success) {
                        button.classList.toggle(\"banned\");
                        button.classList.toggle(\"btn-danger\");
                    } else {
                        alert(data.message);
                    }
                }).catch(error => {
                    console.error(\"Error:\", error);
                });
            });
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/list.twig";
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
        return array (  171 => 75,  148 => 54,  145 => 53,  132 => 46,  126 => 45,  113 => 35,  109 => 34,  103 => 31,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  69 => 20,  64 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Invoice List Table -->
<div class=\"card\">
    <div class=\"card-datatable table-responsive\">
        <table class=\"invoice-list-table table border-top\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Numero</th>
                    <th>Adresse</th>
                    <th>Genre</th>
                    <th>ROLE</th>
                    <th class=\"cell-fit\" style=\"width: 120px\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% if clients is defined %}
                    {% for client in clients %}
                        <tr>
                            <td>{{ client.getNomC() }}</td>
                            <td>{{ client.getPrenomC() }}</td>
                            <td>{{ client.getEmailC() }}</td>
                            <td>{{ client.getNumeroC() }}</td>
                            <td>{{ client.getAdresseC() }}</td>
                            <td>{{ client.getGenre().value }}</td>
                            <td>{{ client.getRole().value }}</td>
                            <td>
                                <div style=\"width: 92px;\">
                                    <form style=\"display: inline-block\"
                                          action=\"{{ path('delete_client', {id: client.getIdClient() }) }}\"
                                          method=\"post\"
                                          data-confirmation=\"true\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete') }}\"/>
                                        <a href=\"{{ path('edit_client', {'id': client.getIdClient() }) }}\"
                                           class=\"btn btn-icon rounded-pill waves-effect\">
                                            <i class=\"tf-icons text-primary ti ti-pencil\"></i>
                                        </a>
                                        <button type=\"button\"
                                                class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1\">
                                            <i class=\"tf-icons text-danger ti ti-trash\"></i>
                                        </button>
                                    </form>
                                    <button type=\"button\"
                                            class=\"btn btn-icon waves-effect rounded-pill confirm-text m-lg-1 ban-btn{% if client.isBanned %} btn-danger {% endif %}\"
                                            data-client-id=\"{{ client.getIdClient() }}\">
                                        <i class=\"tf-icons ti ti-ban\"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const banButtons = document.querySelectorAll(\".ban-btn\");

        banButtons.forEach(button => {
            button.addEventListener(\"click\", function() {
                const clientId = this.dataset.clientId;
                const isBanned = this.classList.contains(\"banned\");
                const url = isBanned ? \"/client/unban/\" + clientId : \"/client/ban/\" + clientId;
                const method = \"POST\";

                fetch(url, {
                    method: method,
                    headers: {
                        \"Content-Type\": \"application/json\",
                        \"X-Requested-With\": \"XMLHttpRequest\",
                        \"X-CSRF-Token\": \"{{ csrf_token('ban') }}\"
                    }
                }).then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error(\"Network response was not ok.\");
                }).then(data => {
                    if (data.success) {
                        button.classList.toggle(\"banned\");
                        button.classList.toggle(\"btn-danger\");
                    } else {
                        alert(data.message);
                    }
                }).catch(error => {
                    console.error(\"Error:\", error);
                });
            });
        });
    });
</script>
", "client/list.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\list.twig");
    }
}
