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

/* @WebProfiler/Collector/notifier.html.twig */
class __TwigTemplate_8db7fb97ef5dfc34020fdcd223791ca1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/notifier.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "events", [], "any", false, false, false, 4);
        // line 5
        yield "
    ";
        // line 6
        if (Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield from                 $this->loadTemplate("@WebProfiler/Icon/notifier.svg", "@WebProfiler/Collector/notifier.html.twig", 8)->unwrap()->yield($context);
                // line 9
                yield "            <span class=\"sf-toolbar-value\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "messages", [], "any", false, false, false, 9)), "html", null, true);
                yield "</span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()), "messages", [], "any", false, false, false, 15)), "html", null, true);
                yield "</span>
            </div>

            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "transports", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                    // line 19
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 20
                    (($context["transport"]) ? (yield Twig\Extension\EscaperExtension::escape($this->env, $context["transport"], "html", null, true)) : (yield "<em>Empty Transport Name</em>"));
                    yield "</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 21
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 21, $this->source); })()), "messages", [$context["transport"]], "method", false, false, false, 21)), "html", null, true);
                    yield "</span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            yield "
        ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 26, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "events", [], "any", false, false, false, 68);
        // line 69
        yield "
    <span class=\"label ";
        // line 70
        yield ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 70, $this->source); })()), "messages", [], "any", false, false, false, 70))) ? ("") : ("disabled"));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/notifier.svg");
        yield "</span>

        <strong>Notifications</strong>
        ";
        // line 74
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 74, $this->source); })()), "messages", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            yield "            <span class=\"count\">
                <span>";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 76, $this->source); })()), "messages", [], "any", false, false, false, 76)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 79
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "events", [], "any", false, false, false, 83);
        // line 84
        yield "
    <h2>Notifications</h2>

    ";
        // line 87
        if ( !Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "messages", [], "any", false, false, false, 87))) {
            // line 88
            yield "        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    ";
        }
        // line 92
        yield "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 94, $this->source); })()), "transports", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 96, $this->source); })()), "messages", [$context["transport"]], "method", false, false, false, 96)), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 97
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["transport"], "html", null, true);
            yield "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 102, $this->source); })()), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            yield "        <h3>";
            (($context["transport"]) ? (yield Twig\Extension\EscaperExtension::escape($this->env, $context["transport"], "html", null, true)) : (yield "<em>Empty Transport Name</em>"));
            yield "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 107, $this->source); })()), "events", [$context["transport"]], "method", false, false, false, 107));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 108);
                // line 109
                yield "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #";
                // line 110
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
                yield " <small>(";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 110)) ? ("queued") : ("sent"));
                yield ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">";
                // line 115
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 115) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 115), "html", null, true)) : (yield "(empty)"));
                yield "</h2>
                                </div>
                                ";
                // line 117
                $context["notification"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", false, false, false, 117)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "notification", [], "any", false, false, false, 117)) : (null));
                // line 118
                yield "                                ";
                if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 118, $this->source); })())) {
                    // line 119
                    yield "                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">";
                    // line 123
                    (((CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, false, 123)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getContent", [], "method", false, false, false, 123), "html", null, true)) : (yield "(empty)"));
                    yield "</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">";
                    // line 125
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 125, $this->source); })()), "getImportance", [], "method", false, false, false, 125), "html", null, true);
                    yield "</pre>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 130
                yield "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            ";
                // line 132
                if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 132, $this->source); })())) {
                    // line 133
                    yield "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 137
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("Subject: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 137, $this->source); })()), "getSubject", [], "method", false, false, false, 137)), "html", null, true);
                    yield "<br/>";
                    // line 138
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("Content: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 138, $this->source); })()), "getContent", [], "method", false, false, false, 138)), "html", null, true);
                    yield "<br/>";
                    // line 139
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("Importance: " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 139, $this->source); })()), "getImportance", [], "method", false, false, false, 139)), "html", null, true);
                    yield "<br/>";
                    // line 140
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("Emoji: " . ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 140, $this->source); })()), "getEmoji", [], "method", false, false, false, 140))) ? ("(empty)") : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 140, $this->source); })()), "getEmoji", [], "method", false, false, false, 140)))), "html", null, true);
                    yield "<br/>";
                    // line 141
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("Exception: " . (((CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", true, true, false, 141) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, false, 141)) : ("(empty)"))), "html", null, true);
                    yield "<br/>";
                    // line 142
                    yield Twig\Extension\EscaperExtension::escape($this->env, ("ExceptionAsString: " . ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 142, $this->source); })()), "getExceptionAsString", [], "method", false, false, false, 142))) ? ("(empty)") : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 142, $this->source); })()), "getExceptionAsString", [], "method", false, false, false, 142)))), "html", null, true);
                    yield "
                                                        </pre>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 147
                yield "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                // line 151
                if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 151, $this->source); })()), "getOptions", [], "method", false, false, false, 151))) {
                    // line 152
                    yield "(empty)";
                } else {
                    // line 154
                    yield Twig\Extension\EscaperExtension::escape($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 154, $this->source); })()), "getOptions", [], "method", false, false, false, 154), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
                }
                // line 156
                yield "                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/notifier.html.twig";
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
        return array (  450 => 165,  428 => 156,  425 => 154,  422 => 152,  420 => 151,  415 => 147,  407 => 142,  404 => 141,  401 => 140,  398 => 139,  395 => 138,  392 => 137,  387 => 133,  385 => 132,  381 => 130,  373 => 125,  368 => 123,  362 => 119,  359 => 118,  357 => 117,  352 => 115,  342 => 110,  339 => 109,  336 => 108,  319 => 107,  311 => 103,  307 => 102,  303 => 100,  294 => 97,  290 => 96,  287 => 95,  283 => 94,  279 => 92,  273 => 88,  271 => 87,  266 => 84,  263 => 83,  253 => 82,  241 => 79,  235 => 76,  232 => 75,  230 => 74,  224 => 71,  220 => 70,  217 => 69,  214 => 68,  204 => 67,  157 => 31,  147 => 30,  133 => 26,  130 => 25,  127 => 24,  118 => 21,  114 => 20,  111 => 19,  107 => 18,  101 => 15,  97 => 13,  95 => 12,  92 => 11,  86 => 9,  83 => 8,  80 => 7,  78 => 6,  75 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {% include('@WebProfiler/Icon/notifier.svg') %}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">{{ events.messages|length }}</span>
            </div>

            {% for transport in events.transports %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ transport ?: '<em>Empty Transport Name</em>' }}</b>
                    <span class=\"sf-toolbar-status\">{{ events.messages(transport)|length }}</span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages|length ? '' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/notifier.svg') }}</span>

        <strong>Notifications</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}

    <h2>Notifications</h2>

    {% if not events.messages|length %}
        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    {% endif %}

    <div class=\"metrics\">
        {% for transport in events.transports %}
            <div class=\"metric\">
                <span class=\"value\">{{ events.messages(transport)|length }}</span>
                <span class=\"label\">{{ transport }}</span>
            </div>
        {% endfor %}
    </div>

    {% for transport in events.transports %}
        <h3>{{ transport ?: '<em>Empty Transport Name</em>' }}</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                {% for event in events.events(transport) %}
                    {% set message = event.message %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #{{ loop.index }} <small>({{ event.isQueued() ? 'queued' : 'sent' }})</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">{{ message.getSubject() ?? '(empty)' }}</h2>
                                </div>
                                {% set notification = message.notification ?? null %}
                                {% if notification %}
                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">{{ notification.getContent() ?? '(empty)' }}</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">{{ notification.getImportance() }}</pre>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            {% if notification %}
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {{- 'Subject: ' ~ notification.getSubject() }}<br/>
                                                            {{- 'Content: ' ~ notification.getContent() }}<br/>
                                                            {{- 'Importance: ' ~ notification.getImportance() }}<br/>
                                                            {{- 'Emoji: ' ~ (notification.getEmoji() is empty ? '(empty)' : notification.getEmoji()) }}<br/>
                                                            {{- 'Exception: ' ~ notification.getException() ?? '(empty)' }}<br/>
                                                            {{- 'ExceptionAsString: ' ~ (notification.getExceptionAsString() is empty ? '(empty)' : notification.getExceptionAsString()) }}
                                                        </pre>
                                                    </div>
                                                </div>
                                            {% endif %}
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {%- if message.getOptions() is null %}
                                                                {{- '(empty)' }}
                                                            {%- else %}
                                                                {{- message.getOptions()|json_encode(constant('JSON_PRETTY_PRINT')) }}
                                                            {%- endif %}
                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/notifier.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\notifier.html.twig");
    }
}
