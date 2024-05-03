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

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_5640b33d665b5a3e130d253ef1a19cd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            yield "        ";
            $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 7)) ? ("red") : (""));
            // line 8
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 10
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "messages", [], "any", false, false, false, 10)), "html", null, true);
                yield "</span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "buses", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                    // line 15
                    yield "                ";
                    $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 15);
                    // line 16
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 17
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["bus"], "html", null, true);
                    yield "</b>
                    <span
                        title=\"";
                    // line 19
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 19, $this->source); })()), "html", null, true);
                    yield " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 20
                    yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 20, $this->source); })())) ? ("red") : (""));
                    yield "\"
                    >
                        ";
                    // line 22
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 22)), "html", null, true);
                    yield "
                    </span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            yield "
        ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 28, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 32
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        yield "    <span class=\"label";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 33)) ? (" label-status-error") : (""));
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "messages", [], "any", false, false, false, 33))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
        yield "</span>
        <strong>Messages</strong>
        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 36) > 0)) {
            // line 37
            yield "            <span class=\"count\">
                <span>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 38), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 41
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 45
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
        td.message-bus-dispatch-caller { background: #f1f2f3; }
        .theme-dark td.message-bus-dispatch-caller { background: var(--base-1); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 65
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 66
        yield "    ";
        $macros["helper"] = $this;
        // line 67
        yield "
    <h2>Messages</h2>

    ";
        // line 70
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "messages", [], "any", false, false, false, 70))) {
            // line 71
            yield "        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } else {
            // line 75
            yield "        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                ";
            // line 77
            $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "messages", [], "any", false, false, false, 77);
            // line 78
            yield "                ";
            $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "exceptionsCount", [], "any", false, false, false, 78);
            // line 79
            yield "                <h3 class=\"tab-title\">All<span class=\"badge ";
            yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 79, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 79, $this->source); })()) == Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 79, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 79, $this->source); })())), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    ";
            // line 83
            yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 83, $this->source); })()), true], 83, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "buses", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 88
                yield "                <div class=\"tab message-bus\">
                    ";
                // line 89
                $context["messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "messages", [$context["bus"]], "method", false, false, false, 89);
                // line 90
                yield "                    ";
                $context["exceptionsCount"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "exceptionsCount", [$context["bus"]], "method", false, false, false, 90);
                // line 91
                yield "                    <h3 class=\"tab-title\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["bus"], "html", null, true);
                yield "<span class=\"badge ";
                yield (((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 91, $this->source); })())) ? (((((isset($context["exceptionsCount"]) || array_key_exists("exceptionsCount", $context) ? $context["exceptionsCount"] : (function () { throw new RuntimeError('Variable "exceptionsCount" does not exist.', 91, $this->source); })()) == Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 91, $this->source); })())))) ? ("status-error") : ("status-some-errors"))) : (""));
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 91, $this->source); })())), "html", null, true);
                yield "</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 94
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["bus"], "html", null, true);
                yield "</code> bus</p>
                        ";
                // line 95
                yield CoreExtension::callMacro($macros["helper"], "macro_render_bus_messages", [(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 95, $this->source); })())], 95, $context, $this->getSourceContext());
                yield "
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "        </div>
    ";
        }
        // line 101
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 104
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 105
            yield "    ";
            $context["discr"] = Twig\Extension\CoreExtension::random($this->env);
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 106, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 107
                yield "    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-";
                // line 111
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 111, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 111), "html", null, true);
                yield "-details\"
                    data-toggle-initial=\"";
                // line 112
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 112)) ? ("display") : (""));
                yield "\"
                >
                    <span class=\"dump-inline\">";
                // line 114
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 114), "type", [], "any", false, false, false, 114));
                yield "</span>
                    ";
                // line 115
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new RuntimeError('Variable "showBus" does not exist.', 115, $this->source); })())) {
                    // line 116
                    yield "                        <span class=\"label\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 116), "html", null, true);
                    yield "</span>
                    ";
                }
                // line 118
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 118)) {
                    // line 119
                    yield "                        <span class=\"label status-error\">exception</span>
                    ";
                }
                // line 121
                yield "                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">";
                // line 122
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/images/icon-minus-square.svg");
                yield "</span>
                        <span class=\"icon icon-open\">";
                // line 123
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/images/icon-plus-square.svg");
                yield "</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 128
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 128, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128), "html", null, true);
                yield "-details\" class=\"sf-toggle-content\">
            <tr>
                <td colspan=\"2\" class=\"message-bus-dispatch-caller\">
                    <span class=\"metadata\">In
                        ";
                // line 132
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "caller", [], "any", false, false, false, 132);
                // line 133
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 133, $this->source); })()), "line", [], "any", false, false, false, 133)) {
                    // line 134
                    yield "                            ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 134, $this->source); })()), "file", [], "any", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 134, $this->source); })()), "line", [], "any", false, false, false, 134));
                    // line 135
                    yield "                            ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 135, $this->source); })())) {
                        // line 136
                        yield "                                <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 136, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 136, $this->source); })()), "file", [], "any", false, false, false, 136), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136), "html", null, true);
                        yield "</a>
                            ";
                    } else {
                        // line 138
                        yield "                                <abbr title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 138, $this->source); })()), "file", [], "any", false, false, false, 138), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 138, $this->source); })()), "name", [], "any", false, false, false, 138), "html", null, true);
                        yield "</abbr>
                            ";
                    }
                    // line 140
                    yield "                        ";
                } else {
                    // line 141
                    yield "                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141), "html", null, true);
                    yield "
                        ";
                }
                // line 143
                yield "                        line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 143, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 143), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 143, $this->source); })()), "line", [], "any", false, false, false, 143), "html", null, true);
                yield "</a>
                    </span>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 146
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["discr"]) || array_key_exists("discr", $context) ? $context["discr"] : (function () { throw new RuntimeError('Variable "discr" does not exist.', 146, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 146), "html", null, true);
                yield "\">
                        <div class=\"trace\">
                            ";
                // line 148
                yield Twig\Extension\CoreExtension::replaceFilter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 148, $this->source); })()), "file", [], "any", false, false, false, 148), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 148, $this->source); })()), "line", [], "any", false, false, false, 148)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 153
                yield "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 158
                if ((isset($context["showBus"]) || array_key_exists("showBus", $context) ? $context["showBus"] : (function () { throw new RuntimeError('Variable "showBus" does not exist.', 158, $this->source); })())) {
                    // line 159
                    yield "                <tr>
                    <td class=\"text-bold\">Bus</td>
                    <td>";
                    // line 161
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "bus", [], "any", false, false, false, 161), "html", null, true);
                    yield "</td>
                </tr>
            ";
                }
                // line 164
                yield "            <tr>
                <td class=\"text-bold\">Message</td>
                <td>";
                // line 166
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "message", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166), 2);
                yield "</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">when dispatching</span></td>
                <td>
                    ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps", [], "any", false, false, false, 171));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 172
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    yield "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 174
                    yield "                        <span class=\"text-muted\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                yield "                </td>
            </tr>
            ";
                // line 178
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", true, true, false, 178)) {
                    // line 179
                    yield "                <tr>
                    <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">after dispatch</span></td>
                    <td>
                        ";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "stamps_after_dispatch", [], "any", false, false, false, 182));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 183
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                        yield "
                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 185
                        yield "                            <span class=\"text-muted\">No items</span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    yield "                    </td>
                </tr>
            ";
                }
                // line 190
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true, false, 190)) {
                    // line 191
                    yield "                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        ";
                    // line 194
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", false, false, false, 194), "value", [], "any", false, false, false, 194), 1);
                    yield "
                    </td>
                </tr>
            ";
                }
                // line 198
                yield "        </tbody>
    </table>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
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
        return array (  604 => 198,  597 => 194,  592 => 191,  589 => 190,  584 => 187,  577 => 185,  569 => 183,  564 => 182,  559 => 179,  557 => 178,  553 => 176,  546 => 174,  538 => 172,  533 => 171,  525 => 166,  521 => 164,  515 => 161,  511 => 159,  509 => 158,  502 => 153,  500 => 148,  493 => 146,  482 => 143,  476 => 141,  473 => 140,  465 => 138,  455 => 136,  452 => 135,  449 => 134,  446 => 133,  444 => 132,  435 => 128,  427 => 123,  423 => 122,  420 => 121,  416 => 119,  413 => 118,  407 => 116,  405 => 115,  401 => 114,  396 => 112,  390 => 111,  384 => 107,  366 => 106,  363 => 105,  344 => 104,  332 => 101,  328 => 99,  318 => 95,  314 => 94,  303 => 91,  300 => 90,  298 => 89,  295 => 88,  291 => 87,  284 => 83,  274 => 79,  271 => 78,  269 => 77,  265 => 75,  259 => 71,  257 => 70,  252 => 67,  249 => 66,  239 => 65,  208 => 45,  198 => 44,  186 => 41,  180 => 38,  177 => 37,  175 => 36,  170 => 34,  164 => 33,  154 => 32,  140 => 28,  137 => 27,  134 => 26,  124 => 22,  119 => 20,  115 => 19,  110 => 17,  107 => 16,  104 => 15,  99 => 14,  97 => 13,  94 => 12,  89 => 10,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  65 => 5,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? 'red' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/messenger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? 'red' }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'messenger', status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label{{ collector.exceptionsCount ? ' label-status-error' }}{{ collector.messages is empty ? ' disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/messenger.svg') }}</span>
        <strong>Messages</strong>
        {% if collector.exceptionsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.exceptionsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 170px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
        td.message-bus-dispatch-caller { background: #f1f2f3; }
        .theme-dark td.message-bus-dispatch-caller { background: var(--base-1); }
    </style>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs message-bus\">
            <div class=\"tab\">
                {% set messages = collector.messages %}
                {% set exceptionsCount = collector.exceptionsCount %}
                <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                    {{ helper.render_bus_messages(messages, true) }}
                </div>
            </div>

            {% for bus in collector.buses %}
                <div class=\"tab message-bus\">
                    {% set messages = collector.messages(bus) %}
                    {% set exceptionsCount = collector.exceptionsCount(bus) %}
                    <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

                    <div class=\"tab-content\">
                        <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                        {{ helper.render_bus_messages(messages) }}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"sf-toggle\"
                    data-toggle-selector=\"#message-item-{{ discr }}-{{ loop.index0 }}-details\"
                    data-toggle-initial=\"{{ loop.first ? 'display' }}\"
                >
                    <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                    {% if showBus %}
                        <span class=\"label\">{{ dispatchCall.bus }}</span>
                    {% endif %}
                    {% if dispatchCall.exception is defined %}
                        <span class=\"label status-error\">exception</span>
                    {% endif %}
                    <a class=\"toggle-button\">
                        <span class=\"icon icon-close\">{{ include('@WebProfiler/images/icon-minus-square.svg') }}</span>
                        <span class=\"icon icon-open\">{{ include('@WebProfiler/images/icon-plus-square.svg') }}</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ loop.index0 }}-details\" class=\"sf-toggle-content\">
            <tr>
                <td colspan=\"2\" class=\"message-bus-dispatch-caller\">
                    <span class=\"metadata\">In
                        {% set caller = dispatchCall.caller %}
                        {% if caller.line %}
                            {% set link = caller.file|file_link(caller.line) %}
                            {% if link %}
                                <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                            {% else %}
                                <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                            {% endif %}
                        {% else %}
                            {{ caller.name }}
                        {% endif %}
                        line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ discr }}-{{ loop.index0 }}\">{{ caller.line }}</a>
                    </span>

                    <div class=\"hidden\" id=\"sf-trace-{{ discr }}-{{ loop.index0 }}\">
                        <div class=\"trace\">
                            {{ caller.file|file_excerpt(caller.line)|replace({
                                '#DD0000': 'var(--highlight-string)',
                                '#007700': 'var(--highlight-keyword)',
                                '#0000BB': 'var(--highlight-default)',
                                '#FF8000': 'var(--highlight-comment)'
                            })|raw }}
                        </div>
                    </div>
                </td>
            </tr>
            {% if showBus %}
                <tr>
                    <td class=\"text-bold\">Bus</td>
                    <td>{{ dispatchCall.bus }}</td>
                </tr>
            {% endif %}
            <tr>
                <td class=\"text-bold\">Message</td>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth=2) }}</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">when dispatching</span></td>
                <td>
                    {% for item in dispatchCall.stamps %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            {% if dispatchCall.stamps_after_dispatch is defined %}
                <tr>
                    <td class=\"text-bold\">Envelope stamps <span class=\"text-muted\">after dispatch</span></td>
                    <td>
                        {% for item in dispatchCall.stamps_after_dispatch %}
                            {{ profiler_dump(item) }}
                        {% else %}
                            <span class=\"text-muted\">No items</span>
                        {% endfor %}
                    </td>
                </tr>
            {% endif %}
            {% if dispatchCall.exception is defined %}
                <tr>
                    <td class=\"text-bold\">Exception</td>
                    <td>
                        {{ profiler_dump(dispatchCall.exception.value, maxDepth=1) }}
                    </td>
                </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\messenger.html.twig");
    }
}
