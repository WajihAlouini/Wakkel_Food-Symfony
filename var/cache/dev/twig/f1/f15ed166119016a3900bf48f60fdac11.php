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

/* client/editPrivacy.htm.twig */
class __TwigTemplate_b6521d78bfd6fbca68ac96683a5129ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editPrivacy.htm.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editPrivacy.htm.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>

<body>
";
        // line 14
        $this->loadTemplate("client/navbar.html.twig", "client/editPrivacy.htm.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
</body>
</html>
<style>
.error-message {
    color: red;
}

.tick:before {
    content: \"✔\";
    color: green;
    float: right;
    position: relative;
    top: -16px;
    right: 18px;
}

.cross:before {
    content: \"✘\";
    color: red;
    float: right;
    position: relative;
    top: -16px;
    right: 18px;
}

.btn-inscrire {
    position: absolute;
    max-width:500px;
    width:90%;
    top: 600px; /* Ajustez cette valeur selon vos besoins */
    left: 50%;
    transform: translateX(-50%);
}
</style>

<script>
    function hidePassword(input) {
        input.setAttribute('type', 'password');
    }

    function validateForm() {
        var valid = true;

        var numtel = document.forms[\"myForm\"][\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "numero_c", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "full_name", [], "any", false, false, false, 84), "html", null, true);
        echo "\"].value;
        if (isNaN(numtel) || numtel.length != 8) {
            document.getElementById(\"numtelError\").innerHTML = \"Le numéro de téléphone doit être un nombre de 8 chiffres.\";
            document.getElementById(\"numtelTick\").classList.remove(\"tick\");
            document.getElementById(\"numtelTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"numtelError\").innerHTML = \"\";
            document.getElementById(\"numtelTick\").classList.remove(\"cross\");
            document.getElementById(\"numtelTick\").classList.add(\"tick\");
        }

        var email = document.forms[\"myForm\"][\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "email_c", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "full_name", [], "any", false, false, false, 96), "html", null, true);
        echo "\"].value;
        var regex = /^\\S+@\\S+\\.\\S+\$/;
        if (!regex.test(email)) {
            document.getElementById(\"emailError\").innerHTML = \"L'adresse email doit être valide.\";
            document.getElementById(\"emailTick\").classList.remove(\"tick\");
            document.getElementById(\"emailTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"emailError\").innerHTML = \"\";
            document.getElementById(\"emailTick\").classList.remove(\"cross\");
            document.getElementById(\"emailTick\").classList.add(\"tick\");
        }

        var mdp = document.forms[\"myForm\"][\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "mdp", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "full_name", [], "any", false, false, false, 109), "html", null, true);
        echo "\"].value;
        if (mdp.length < 6) {
            document.getElementById(\"mdpError\").innerHTML = \"Le mot de passe doit contenir au moins 6 caractères.\";
            document.getElementById(\"mdpTick\").classList.remove(\"tick\");
            document.getElementById(\"mdpTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"mdpError\").innerHTML = \"\";
            document.getElementById(\"mdpTick\").classList.remove(\"cross\");
            document.getElementById(\"mdpTick\").classList.add(\"tick\");
        }

        return valid;
    }

    function validateMdp(input) {
        var mdp = input.value;
        if (mdp.length < 6) {
            input.setCustomValidity(\"Le mot de passe doit contenir au moins 6 caractères.\");
            document.getElementById(\"mdpTick\").classList.remove(\"tick\");
            document.getElementById(\"mdpTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"mdpTick\").classList.remove(\"cross\");
            document.getElementById(\"mdpTick\").classList.add(\"tick\");
        }
    }
    function validateNumtel(input) {
        if (isNaN(input.value) || input.value.length != 8) {
        input.setCustomValidity(\"Le numéro de téléphone doit être un nombre de 8 chiffres.\");
        document.getElementById(\"numtelTick\").classList.remove(\"tick\");
        document.getElementById(\"numtelTick\").classList.add(\"cross\");
    } else {
        input.setCustomValidity(\"\");
        document.getElementById(\"numtelTick\").classList.remove(\"cross\");
        document.getElementById(\"numtelTick\").classList.add(\"tick\");
    }
}
    function validateEmail(input) {
        var regex = /^\\S+@\\S+\\.\\S+\$/;
        if (!regex.test(input.value)) {
        input.setCustomValidity(\"L'adresse email doit être valide.\");
        document.getElementById(\"emailTick\").classList.remove(\"tick\");
        document.getElementById(\"emailTick\").classList.add(\"cross\");
    } else {
        input.setCustomValidity(\"\");
        document.getElementById(\"emailTick\").classList.remove(\"cross\");
        document.getElementById(\"emailTick\").classList.add(\"tick\");
    }
}
    
</script>

<style>
body {
    margin: 0;
    padding: 0;
}

footer {
    margin-top: 0;
    padding-top: 0;
}

    .navbar > .container,
    .navbar > .container-fluid,
    .navbar > .container-sm,
    .navbar > .container-md,
    .navbar > .container-lg,
    .navbar > .container-xl,
    .navbar > .container-xxl {
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
}
@media (min-width: 992px)
.px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
@media (min-width: 1200px)
.container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
}
@media (min-width: 992px)
.container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
}
@media (min-width: 768px)
.container-md, .container-sm, .container {
    max-width: 720px;
}
@media (min-width: 576px)
.container-sm, .container {
    max-width: 540px;
}
.container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}
body {
    letter-spacing: 0.0625em;
}
body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
#mainNav .nav-link {
    background-color: rgb(183 192 199 / 39%);
    color: rgba(26, 26, 26, 20);
  }
/******************************************/
.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:14px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
  margin-top: 130px;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
}
/* CSS pour changer la couleur du texte dans la liste de choix du genre */
.form-control.genremodify option {
    color: black;
}
    .login-dark {
  background-image: url(\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/backgroundinscription.jpg"), "html", null, true);
        echo "\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 112vh;
}

.login-dark form {
  max-width:500px;
  width:90%;
  height:68%;
  background-color:black;
  padding:5px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:60%;
  left:50%;
  color:#fff;
  box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
  text-align:center;
  padding:15px 0 20px;
  font-size:100px;
  color: #fff;
}

.login-dark form .form-control {
  background:none;
  border:none;
  border-bottom:1px solid #434a52;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  width: 80%;
  margin: 0 auto;
}

.login-dark form .btn-primary {
  background: blue;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:-354px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
  outline:none;
}


.login-dark form .btn-primary:active {
  transform:translateY(1px);
}

.checkbox-group {
    display: flex;
    justify-content: center; /* Aligner les éléments horizontalement au centre */
}

.checkbox-group .form-check {
    margin-right: 80px; /* Ajoute un espace entre les cases à cocher */
    color: #9e9e9e;
}
/* Ajoutez ces styles pour créer un cercle autour de l'image */
    #previewImageContainer {
        width: 10px; /* Définissez la largeur du cercle */
        height: 10px; /* Définissez la hauteur du cercle */
        border-radius: 50%; /* Créez un cercle en utilisant la bordure arrondie à 50% de la largeur/hauteur */
        overflow: hidden; /* Masquez tout contenu dépassant du cercle */
        margin: 0 auto; /* Centrez le cercle horizontalement */
        top: -20px;
    }

    #previewImage {
        width: 100%; /* Assurez-vous que l'image occupe la totalité du cercle */
        height: auto; /* Permettez à l'image de conserver son ratio hauteur/largeur */
        display: block; /* Assurez-vous que l'image est affichée en bloc */
    }

    .btn-inscrire {
        position: absolute;
        max-width:500px;
        width:90%;
        top: 600px; /* Ajustez cette valeur selon vos besoins */
        left: 50%;
        transform: translateX(-50%);
    }

</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"login-dark\">
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\">
        <h2 class=\"sr-only\">Login Form</h2>
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email_c", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre email", "oninput" => "validateEmail(this)"]]);
        echo "
        <span id=\"emailError\" class=\"error-message\"></span>
        <span id=\"emailTick\" class=\"tick\"></span>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "numero_c", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre numéro de telephone", "oninput" => "validateNumtel(this)"]]);
        echo "
        <span id=\"numtelError\" class=\"error-message\"></span>
        <span id=\"numtelTick\" class=\"tick\"></span>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "mdp", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre mot de passe", "oninput" => "validateMdp(this)"]]);
        echo "
        <span id=\"mdpError\" class=\"error-message\"></span>
        <span id=\"mdpTick\" class=\"tick\"></span>

        <div class=\"form-group btn-inscrire\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Modifier</button>
        </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
    </form>
</div>
";
        // line 38
        $this->loadTemplate("client/footer.html.twig", "client/editPrivacy.htm.twig", 38)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/editPrivacy.htm.twig";
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
        return array (  456 => 38,  450 => 35,  440 => 28,  434 => 25,  428 => 22,  424 => 21,  418 => 17,  408 => 16,  302 => 262,  146 => 109,  130 => 96,  115 => 84,  69 => 40,  67 => 16,  64 => 15,  62 => 14,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>

<body>
{% include \"client/navbar.html.twig\" %}

{% block body %}
<div class=\"login-dark\">
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\">
        <h2 class=\"sr-only\">Login Form</h2>
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        {{ form_row(form.email_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre email', 'oninput': 'validateEmail(this)'}}) }}
        <span id=\"emailError\" class=\"error-message\"></span>
        <span id=\"emailTick\" class=\"tick\"></span>
        {{ form_row(form.numero_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre numéro de telephone', 'oninput': 'validateNumtel(this)'}}) }}
        <span id=\"numtelError\" class=\"error-message\"></span>
        <span id=\"numtelTick\" class=\"tick\"></span>
        {{ form_row(form.mdp, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre mot de passe', 'oninput': 'validateMdp(this)'}}) }}
        <span id=\"mdpError\" class=\"error-message\"></span>
        <span id=\"mdpTick\" class=\"tick\"></span>

        <div class=\"form-group btn-inscrire\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Modifier</button>
        </div>
        {{ form_end(form) }}
    </form>
</div>
{% include \"client/footer.html.twig\" %}
{% endblock %}

</body>
</html>
<style>
.error-message {
    color: red;
}

.tick:before {
    content: \"✔\";
    color: green;
    float: right;
    position: relative;
    top: -16px;
    right: 18px;
}

.cross:before {
    content: \"✘\";
    color: red;
    float: right;
    position: relative;
    top: -16px;
    right: 18px;
}

.btn-inscrire {
    position: absolute;
    max-width:500px;
    width:90%;
    top: 600px; /* Ajustez cette valeur selon vos besoins */
    left: 50%;
    transform: translateX(-50%);
}
</style>

<script>
    function hidePassword(input) {
        input.setAttribute('type', 'password');
    }

    function validateForm() {
        var valid = true;

        var numtel = document.forms[\"myForm\"][\"{{ form.numero_c.vars.full_name }}\"].value;
        if (isNaN(numtel) || numtel.length != 8) {
            document.getElementById(\"numtelError\").innerHTML = \"Le numéro de téléphone doit être un nombre de 8 chiffres.\";
            document.getElementById(\"numtelTick\").classList.remove(\"tick\");
            document.getElementById(\"numtelTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"numtelError\").innerHTML = \"\";
            document.getElementById(\"numtelTick\").classList.remove(\"cross\");
            document.getElementById(\"numtelTick\").classList.add(\"tick\");
        }

        var email = document.forms[\"myForm\"][\"{{ form.email_c.vars.full_name }}\"].value;
        var regex = /^\\S+@\\S+\\.\\S+\$/;
        if (!regex.test(email)) {
            document.getElementById(\"emailError\").innerHTML = \"L'adresse email doit être valide.\";
            document.getElementById(\"emailTick\").classList.remove(\"tick\");
            document.getElementById(\"emailTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"emailError\").innerHTML = \"\";
            document.getElementById(\"emailTick\").classList.remove(\"cross\");
            document.getElementById(\"emailTick\").classList.add(\"tick\");
        }

        var mdp = document.forms[\"myForm\"][\"{{ form.mdp.vars.full_name }}\"].value;
        if (mdp.length < 6) {
            document.getElementById(\"mdpError\").innerHTML = \"Le mot de passe doit contenir au moins 6 caractères.\";
            document.getElementById(\"mdpTick\").classList.remove(\"tick\");
            document.getElementById(\"mdpTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"mdpError\").innerHTML = \"\";
            document.getElementById(\"mdpTick\").classList.remove(\"cross\");
            document.getElementById(\"mdpTick\").classList.add(\"tick\");
        }

        return valid;
    }

    function validateMdp(input) {
        var mdp = input.value;
        if (mdp.length < 6) {
            input.setCustomValidity(\"Le mot de passe doit contenir au moins 6 caractères.\");
            document.getElementById(\"mdpTick\").classList.remove(\"tick\");
            document.getElementById(\"mdpTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"mdpTick\").classList.remove(\"cross\");
            document.getElementById(\"mdpTick\").classList.add(\"tick\");
        }
    }
    function validateNumtel(input) {
        if (isNaN(input.value) || input.value.length != 8) {
        input.setCustomValidity(\"Le numéro de téléphone doit être un nombre de 8 chiffres.\");
        document.getElementById(\"numtelTick\").classList.remove(\"tick\");
        document.getElementById(\"numtelTick\").classList.add(\"cross\");
    } else {
        input.setCustomValidity(\"\");
        document.getElementById(\"numtelTick\").classList.remove(\"cross\");
        document.getElementById(\"numtelTick\").classList.add(\"tick\");
    }
}
    function validateEmail(input) {
        var regex = /^\\S+@\\S+\\.\\S+\$/;
        if (!regex.test(input.value)) {
        input.setCustomValidity(\"L'adresse email doit être valide.\");
        document.getElementById(\"emailTick\").classList.remove(\"tick\");
        document.getElementById(\"emailTick\").classList.add(\"cross\");
    } else {
        input.setCustomValidity(\"\");
        document.getElementById(\"emailTick\").classList.remove(\"cross\");
        document.getElementById(\"emailTick\").classList.add(\"tick\");
    }
}
    
</script>

<style>
body {
    margin: 0;
    padding: 0;
}

footer {
    margin-top: 0;
    padding-top: 0;
}

    .navbar > .container,
    .navbar > .container-fluid,
    .navbar > .container-sm,
    .navbar > .container-md,
    .navbar > .container-lg,
    .navbar > .container-xl,
    .navbar > .container-xxl {
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
}
@media (min-width: 992px)
.px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
@media (min-width: 1200px)
.container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
}
@media (min-width: 992px)
.container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
}
@media (min-width: 768px)
.container-md, .container-sm, .container {
    max-width: 720px;
}
@media (min-width: 576px)
.container-sm, .container {
    max-width: 540px;
}
.container, .container-fluid, .container-xxl, .container-xl, .container-lg, .container-md, .container-sm {
    width: 100%;
    padding-right: var(--bs-gutter-x, 0.75rem);
    padding-left: var(--bs-gutter-x, 0.75rem);
    margin-right: auto;
    margin-left: auto;
}
.px-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
}
*, *::before, *::after {
    box-sizing: border-box;
}
body {
    letter-spacing: 0.0625em;
}
body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
#mainNav .nav-link {
    background-color: rgb(183 192 199 / 39%);
    color: rgba(26, 26, 26, 20);
  }
/******************************************/
.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:14px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
  margin-top: 130px;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
}
/* CSS pour changer la couleur du texte dans la liste de choix du genre */
.form-control.genremodify option {
    color: black;
}
    .login-dark {
  background-image: url(\"{{asset('Main/img/backgroundinscription.jpg')}}\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 112vh;
}

.login-dark form {
  max-width:500px;
  width:90%;
  height:68%;
  background-color:black;
  padding:5px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:60%;
  left:50%;
  color:#fff;
  box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
  text-align:center;
  padding:15px 0 20px;
  font-size:100px;
  color: #fff;
}

.login-dark form .form-control {
  background:none;
  border:none;
  border-bottom:1px solid #434a52;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
  width: 80%;
  margin: 0 auto;
}

.login-dark form .btn-primary {
  background: blue;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:-354px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
  outline:none;
}


.login-dark form .btn-primary:active {
  transform:translateY(1px);
}

.checkbox-group {
    display: flex;
    justify-content: center; /* Aligner les éléments horizontalement au centre */
}

.checkbox-group .form-check {
    margin-right: 80px; /* Ajoute un espace entre les cases à cocher */
    color: #9e9e9e;
}
/* Ajoutez ces styles pour créer un cercle autour de l'image */
    #previewImageContainer {
        width: 10px; /* Définissez la largeur du cercle */
        height: 10px; /* Définissez la hauteur du cercle */
        border-radius: 50%; /* Créez un cercle en utilisant la bordure arrondie à 50% de la largeur/hauteur */
        overflow: hidden; /* Masquez tout contenu dépassant du cercle */
        margin: 0 auto; /* Centrez le cercle horizontalement */
        top: -20px;
    }

    #previewImage {
        width: 100%; /* Assurez-vous que l'image occupe la totalité du cercle */
        height: auto; /* Permettez à l'image de conserver son ratio hauteur/largeur */
        display: block; /* Assurez-vous que l'image est affichée en bloc */
    }

    .btn-inscrire {
        position: absolute;
        max-width:500px;
        width:90%;
        top: 600px; /* Ajustez cette valeur selon vos besoins */
        left: 50%;
        transform: translateX(-50%);
    }

</style>", "client/editPrivacy.htm.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\editPrivacy.htm.twig");
    }
}
