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

/* security/createCompte.html.twig */
class __TwigTemplate_615df7ba5054b210a3a97ab534274fef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/createCompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/createCompte.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">
                        <span class=\"arrow\">&#60;</span> <span class=\"text\">Precedent</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

";
        // line 27
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        yield "<div class=\"login-dark\">
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\" enctype=\"multipart/form-data\">
        ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        <div id=\"etape1\">
            <h2 class=\"sr-only\">Login Form</h2>
            <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>

            <div class=\"form-group champs-inscrire\">

                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom_c", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre nom", "oninput" => "validateNom(this)"]]);
        yield "
                <span id=\"nomError\" class=\"error-message\"></span>
                <span id=\"nomTick\" class=\"tick\"></span>

                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prenom_c", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre prénom", "oninput" => "validatePrenom(this)"]]);
        yield "
                <span id=\"prenomError\" class=\"error-message\"></span>
                <span id=\"prenomTick\" class=\"tick\"></span>

                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "genre", [], "any", false, false, false, 46), 'row', ["attr" => ["class" => "form-control genremodify", "onchange" => "validateGenre(this)"]]);
        yield "

                <!-- Cachez le bouton de sélection de fichier par défaut -->
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control", "id" => "fileInput", "onchange" => "previewImage(this)"]]);
        yield "

                <input type=\"file\"style=\"display: none;\" id=\"fileInput\" accept=\"image/*\" onchange=\"previewImage(this)\">
                <div id=\"previewImageContainer\" class=\"mt-2\"></div>

                <div class=\"btn-suivant\">
                    <button type=\"button\" onclick=\"nextStep()\">Suivant</button>
                </div>
            </div>
        </div>

        <div id=\"etape2\" style=\"display: none;\">
        <h2 class=\"sr-only\">Login Form</h2>
            <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
                <div class=\"form-group champs-inscrire\">
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email_c", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre email", "oninput" => "validateEmail(this)"]]);
        yield "
                <span id=\"emailError\" class=\"error-message\"></span>
            <span id=\"emailTick\" class=\"tick\"></span>

            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "numero_c", [], "any", false, false, false, 68), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre numéro de telephone", "oninput" => "validateNumtel(this)"]]);
        yield "
            <span id=\"numtelError\" class=\"error-message\"></span>
            <span id=\"numtelTick\" class=\"tick\"></span>

            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresse_c", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre adresse", "oninput" => "validateAdresse(this)"]]);
        yield "
            <span id=\"adresseError\" class=\"error-message\"></span>
            <span id=\"adresseTick\" class=\"tick\"></span>

            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "mdp", [], "any", false, false, false, 76), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre mot de passe", "oninput" => "validateMdp(this)"]]);
        yield "
            <span id=\"mdpError\" class=\"error-message\"></span>
            <span id=\"mdpTick\" class=\"tick\"></span>

            <div class=\"btn-precedent\">
                <button type=\"button\" onclick=\"prevStep()\">Précédent</button>
            </div>
            <div class=\"btn-inscrire\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">S'inscrire</button>
            </div>
            </div>
            </div>
        ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "
    </form>
</div>

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

.champs-inscrire {
    position: absolute;
    max-width:500px;
    width:90%;
    top: 106px; /* Ajustez cette valeur selon vos besoins */
    left: 50%;
    transform: translateX(-50%);
}
</style>

<script>
function nextStep() {
        document.getElementById('etape1').style.display = 'none';
        document.getElementById('etape2').style.display = 'block';
    }

    function prevStep() {
        document.getElementById('etape2').style.display = 'none';
        document.getElementById('etape1').style.display = 'block';
    }

function resetPreviewImage() {
        var preview = document.getElementById('previewImageContainer');
        preview.innerHTML = '';
    }

    function previewImage(input) {
        resetPreviewImage();
        var preview = document.getElementById('previewImageContainer');
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'img-fluid';
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }



    function hidePassword(input) {
        input.setAttribute('type', 'password');
    }

    function validateForm() {
        var valid = true;

        var numtel = document.forms[\"myForm\"][\"";
        // line 164
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "numero_c", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "full_name", [], "any", false, false, false, 164), "html", null, true);
        yield "\"].value;
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
        // line 176
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "email_c", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "full_name", [], "any", false, false, false, 176), "html", null, true);
        yield "\"].value;
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

        var nom = document.forms[\"myForm\"][\"";
        // line 189
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "nom_c", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "full_name", [], "any", false, false, false, 189), "html", null, true);
        yield "\"].value;
    if (nom === \"\" || nom.length > 12) {
        document.getElementById(\"nomError\").innerHTML = \"Le nom ne doit pas être vide et ne doit pas dépasser 12 caractères.\";
        document.getElementById(\"nomTick\").classList.remove(\"tick\");
        document.getElementById(\"nomTick\").classList.add(\"cross\");
        valid = false;
    } else {
        document.getElementById(\"nomError\").innerHTML = \"\";
        document.getElementById(\"nomTick\").classList.remove(\"cross\");
        document.getElementById(\"nomTick\").classList.add(\"tick\");
    }

    var prenom = document.forms[\"myForm\"][\"";
        // line 201
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "prenom_c", [], "any", false, false, false, 201), "vars", [], "any", false, false, false, 201), "full_name", [], "any", false, false, false, 201), "html", null, true);
        yield "\"].value;
    if (prenom === \"\" || prenom.length > 12) {
        document.getElementById(\"prenomError\").innerHTML = \"Le prénom ne doit pas être vide et ne doit pas dépasser 12 caractères.\";
        document.getElementById(\"prenomTick\").classList.remove(\"tick\");
        document.getElementById(\"prenomTick\").classList.add(\"cross\");
        valid = false;
    } else {
        document.getElementById(\"prenomError\").innerHTML = \"\";
        document.getElementById(\"prenomTick\").classList.remove(\"cross\");
        document.getElementById(\"prenomTick\").classList.add(\"tick\");
    }

        var mdp = document.forms[\"myForm\"][\"";
        // line 213
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "mdp", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "full_name", [], "any", false, false, false, 213), "html", null, true);
        yield "\"].value;
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

        var genre = document.forms[\"myForm\"][\"";
        // line 225
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "genre", [], "any", false, false, false, 225), "vars", [], "any", false, false, false, 225), "full_name", [], "any", false, false, false, 225), "html", null, true);
        yield "\"];
        if (!genre.value) {
            document.getElementById(\"genreError\").innerHTML = \"Veuillez choisir un genre.\";
            valid = false;
        } else {
            document.getElementById(\"genreError\").innerHTML = \"\";
        }

        var adresse = document.forms[\"myForm\"][\"";
        // line 233
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "adresse_c", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "full_name", [], "any", false, false, false, 233), "html", null, true);
        yield "\"].value;
        if (adresse === \"\") {
            document.getElementById(\"adresseError\").innerHTML = \"L'adresse ne doit pas être vide.\";
            document.getElementById(\"adresseTick\").classList.remove(\"tick\");
            document.getElementById(\"adresseTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"adresseError\").innerHTML = \"\";
            document.getElementById(\"adresseTick\").classList.remove(\"cross\");
            document.getElementById(\"adresseTick\").classList.add(\"tick\");
        }

        return valid;
    }

    function validateNom(input) {
    var value = input.value;
    var regex = /^[a-zA-Z]*\$/; // Seules les lettres sont autorisées
    if (!regex.test(value)) {
        // Afficher un message d'erreur si des caractères autres que des lettres sont entrés
        input.value = value.replace(/[^a-zA-Z]/g, ''); // Supprimer les caractères non autorisés
        document.getElementById(\"nomTick\").classList.remove(\"tick\");
        document.getElementById(\"nomTick\").classList.add(\"cross\");
    } else {
        // Si la saisie ne contient que des lettres, valider le nom
        if (input.value.length === 0 || input.value.length < 4 || input.value.length > 12) {
            input.setCustomValidity(\"Le nom ne doit pas être vide et ne doit pas dépasser 12 caractères.\");
            document.getElementById(\"nomTick\").classList.remove(\"tick\");
            document.getElementById(\"nomTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"nomTick\").classList.remove(\"cross\");
            document.getElementById(\"nomTick\").classList.add(\"tick\");
        }
    }
}   

    function validatePrenom(input) {
    var value = input.value;
    var regex = /^[a-zA-Z]*\$/; // Seules les lettres sont autorisées
    if (!regex.test(value)) {
        // Afficher un message d'erreur si des caractères autres que des lettres sont entrés
        input.value = value.replace(/[^a-zA-Z]/g, ''); // Supprimer les caractères non autorisés
        document.getElementById(\"prenomTick\").classList.remove(\"tick\");
        document.getElementById(\"prenomTick\").classList.add(\"cross\");
    } else {
        // Si la saisie ne contient que des lettres, valider le prenom
        if (input.value.length === 0 || input.value.length < 4 || input.value.length > 12) {
            input.setCustomValidity(\"Le prenom ne doit pas être vide et ne doit pas dépasser 12 caractères.\");
            document.getElementById(\"prenomTick\").classList.remove(\"tick\");
            document.getElementById(\"prenomTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"prenomTick\").classList.remove(\"cross\");
            document.getElementById(\"prenomTick\").classList.add(\"tick\");
        }
    }
}

    function validateGenre(input) {
        var genreError = document.getElementById(\"genreError\");
        if (!input.value) {
            genreError.innerHTML = \"Veuillez choisir un genre.\";
        } else {
            genreError.innerHTML = \"\";
        }
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

    function validateAdresse(input) {
        var adresse = input.value;
        if (adresse === \"\") {
            input.setCustomValidity(\"L'adresse ne doit pas être vide.\");
            document.getElementById(\"adresseTick\").classList.remove(\"tick\");
            document.getElementById(\"adresseTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"adresseTick\").classList.remove(\"cross\");
            document.getElementById(\"adresseTick\").classList.add(\"tick\");
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

 function uncheckOther(checkbox) {
        var checkboxes = document.querySelectorAll('input[name=\"' + checkbox.name + '\"]');
        var checkedCount = 0;
        checkboxes.forEach(function(cb) {
            if (cb.checked) {
                checkedCount++;
            }
        });
        checkboxes.forEach(function(cb) {
            if (cb !== checkbox && cb.checked) {
                cb.checked = false;
            }
        });
        if (checkedCount === 0) {
            checkbox.checked = true;
        }
    }

</script>

</body>
</html>
<style>
/* CSS pour changer la couleur du texte dans la liste de choix du genre */
.form-control.genremodify option {
    color: black;
}
.navbar-nav .nav-item .nav-link {
    position: relative;
    left: -200px;
    color: rgba(128, 128, 128, 0.5);
    background-color: transparent;
    border: 2px solid rgba(128, 128, 128, 0.5);
    border-radius: 5px;
    padding: 0.5rem 1rem;
}
.navbar-nav .nav-item .nav-link .arrow {
    left: -20px;
    top: 50%;
    transform: translateY(-50%);
    color: inherit;
    text-shadow: none;
}
.navbar-nav .nav-item .nav-link .text {
    display: inline-block;
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
user agent stylesheet
div {
    display: block;
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
    .login-dark {
  height:1000px;
  background-image: url(\"";
        // line 475
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/backgroundinscription.jpg"), "html", null, true);
        yield "\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
}

.login-dark form {
  max-width:500px;
  width:90%;
  height:77%;
  background-color:black;
  padding:5px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
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
  background: #9f1818;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:-242px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#dc35358c;
  outline:none;
}

.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
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
        width: 100px; /* Définissez la largeur du cercle */
        height: 100px; /* Définissez la hauteur du cercle */
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
        top: 606px; /* Ajustez cette valeur selon vos besoins */
        left: 50%;
        transform: translateX(-50%);
    }

    /* Styles pour le bouton Suivant */
.btn-suivant button {
    width: 100%;
    background: blue;
    border: none;
    border-radius: 4px;
    padding: 11px;
    box-shadow: none;
    margin-top: 12px;
    text-shadow: none;
    outline: none;
    color: white;
}
.btn-suivant button:hover,
.btn-suivant button:active {
    background: #214a80;
    outline: none;
}

/* Styles pour le bouton Précédent */
.btn-precedent button {
    width: 100%;
    background: blue;
    border: none;
    border-radius: 4px;
    padding: 13px;
    box-shadow: none;
    margin-top: 20px;
    text-shadow: none;
    outline: none;
    color: white;
}
.btn-precedent button:hover,
.btn-precedent button:active {
    background: #214a80;
    outline: none;
}

</style>
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
        return "security/createCompte.html.twig";
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
        return array (  596 => 475,  351 => 233,  340 => 225,  325 => 213,  310 => 201,  295 => 189,  279 => 176,  264 => 164,  185 => 88,  170 => 76,  163 => 72,  156 => 68,  149 => 64,  131 => 49,  125 => 46,  118 => 42,  111 => 38,  100 => 30,  96 => 28,  76 => 27,  53 => 7,  45 => 1,);
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
<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">
                        <span class=\"arrow\">&#60;</span> <span class=\"text\">Precedent</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{% block body %}
<div class=\"login-dark\">
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\" enctype=\"multipart/form-data\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        <div id=\"etape1\">
            <h2 class=\"sr-only\">Login Form</h2>
            <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>

            <div class=\"form-group champs-inscrire\">

                {{ form_row(form.nom_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre nom', 'oninput': 'validateNom(this)'}}) }}
                <span id=\"nomError\" class=\"error-message\"></span>
                <span id=\"nomTick\" class=\"tick\"></span>

                {{ form_row(form.prenom_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre prénom', 'oninput': 'validatePrenom(this)'}}) }}
                <span id=\"prenomError\" class=\"error-message\"></span>
                <span id=\"prenomTick\" class=\"tick\"></span>

                {{ form_row(form.genre, {'attr': {'class': 'form-control genremodify', 'onchange': 'validateGenre(this)'}}) }}

                <!-- Cachez le bouton de sélection de fichier par défaut -->
                {{ form_row(form.image, {'attr': {'class': 'form-control', 'id': 'fileInput', 'onchange': 'previewImage(this)'}}) }}

                <input type=\"file\"style=\"display: none;\" id=\"fileInput\" accept=\"image/*\" onchange=\"previewImage(this)\">
                <div id=\"previewImageContainer\" class=\"mt-2\"></div>

                <div class=\"btn-suivant\">
                    <button type=\"button\" onclick=\"nextStep()\">Suivant</button>
                </div>
            </div>
        </div>

        <div id=\"etape2\" style=\"display: none;\">
        <h2 class=\"sr-only\">Login Form</h2>
            <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
                <div class=\"form-group champs-inscrire\">
                {{ form_row(form.email_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre email', 'oninput': 'validateEmail(this)'}}) }}
                <span id=\"emailError\" class=\"error-message\"></span>
            <span id=\"emailTick\" class=\"tick\"></span>

            {{ form_row(form.numero_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre numéro de telephone', 'oninput': 'validateNumtel(this)'}}) }}
            <span id=\"numtelError\" class=\"error-message\"></span>
            <span id=\"numtelTick\" class=\"tick\"></span>

            {{ form_row(form.adresse_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre adresse', 'oninput': 'validateAdresse(this)'}}) }}
            <span id=\"adresseError\" class=\"error-message\"></span>
            <span id=\"adresseTick\" class=\"tick\"></span>

            {{ form_row(form.mdp, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre mot de passe', 'oninput': 'validateMdp(this)'}}) }}
            <span id=\"mdpError\" class=\"error-message\"></span>
            <span id=\"mdpTick\" class=\"tick\"></span>

            <div class=\"btn-precedent\">
                <button type=\"button\" onclick=\"prevStep()\">Précédent</button>
            </div>
            <div class=\"btn-inscrire\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">S'inscrire</button>
            </div>
            </div>
            </div>
        {{ form_end(form) }}
    </form>
</div>

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

.champs-inscrire {
    position: absolute;
    max-width:500px;
    width:90%;
    top: 106px; /* Ajustez cette valeur selon vos besoins */
    left: 50%;
    transform: translateX(-50%);
}
</style>

<script>
function nextStep() {
        document.getElementById('etape1').style.display = 'none';
        document.getElementById('etape2').style.display = 'block';
    }

    function prevStep() {
        document.getElementById('etape2').style.display = 'none';
        document.getElementById('etape1').style.display = 'block';
    }

function resetPreviewImage() {
        var preview = document.getElementById('previewImageContainer');
        preview.innerHTML = '';
    }

    function previewImage(input) {
        resetPreviewImage();
        var preview = document.getElementById('previewImageContainer');
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'img-fluid';
            preview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }



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

        var nom = document.forms[\"myForm\"][\"{{ form.nom_c.vars.full_name }}\"].value;
    if (nom === \"\" || nom.length > 12) {
        document.getElementById(\"nomError\").innerHTML = \"Le nom ne doit pas être vide et ne doit pas dépasser 12 caractères.\";
        document.getElementById(\"nomTick\").classList.remove(\"tick\");
        document.getElementById(\"nomTick\").classList.add(\"cross\");
        valid = false;
    } else {
        document.getElementById(\"nomError\").innerHTML = \"\";
        document.getElementById(\"nomTick\").classList.remove(\"cross\");
        document.getElementById(\"nomTick\").classList.add(\"tick\");
    }

    var prenom = document.forms[\"myForm\"][\"{{ form.prenom_c.vars.full_name }}\"].value;
    if (prenom === \"\" || prenom.length > 12) {
        document.getElementById(\"prenomError\").innerHTML = \"Le prénom ne doit pas être vide et ne doit pas dépasser 12 caractères.\";
        document.getElementById(\"prenomTick\").classList.remove(\"tick\");
        document.getElementById(\"prenomTick\").classList.add(\"cross\");
        valid = false;
    } else {
        document.getElementById(\"prenomError\").innerHTML = \"\";
        document.getElementById(\"prenomTick\").classList.remove(\"cross\");
        document.getElementById(\"prenomTick\").classList.add(\"tick\");
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

        var genre = document.forms[\"myForm\"][\"{{ form.genre.vars.full_name }}\"];
        if (!genre.value) {
            document.getElementById(\"genreError\").innerHTML = \"Veuillez choisir un genre.\";
            valid = false;
        } else {
            document.getElementById(\"genreError\").innerHTML = \"\";
        }

        var adresse = document.forms[\"myForm\"][\"{{ form.adresse_c.vars.full_name }}\"].value;
        if (adresse === \"\") {
            document.getElementById(\"adresseError\").innerHTML = \"L'adresse ne doit pas être vide.\";
            document.getElementById(\"adresseTick\").classList.remove(\"tick\");
            document.getElementById(\"adresseTick\").classList.add(\"cross\");
            valid = false;
        } else {
            document.getElementById(\"adresseError\").innerHTML = \"\";
            document.getElementById(\"adresseTick\").classList.remove(\"cross\");
            document.getElementById(\"adresseTick\").classList.add(\"tick\");
        }

        return valid;
    }

    function validateNom(input) {
    var value = input.value;
    var regex = /^[a-zA-Z]*\$/; // Seules les lettres sont autorisées
    if (!regex.test(value)) {
        // Afficher un message d'erreur si des caractères autres que des lettres sont entrés
        input.value = value.replace(/[^a-zA-Z]/g, ''); // Supprimer les caractères non autorisés
        document.getElementById(\"nomTick\").classList.remove(\"tick\");
        document.getElementById(\"nomTick\").classList.add(\"cross\");
    } else {
        // Si la saisie ne contient que des lettres, valider le nom
        if (input.value.length === 0 || input.value.length < 4 || input.value.length > 12) {
            input.setCustomValidity(\"Le nom ne doit pas être vide et ne doit pas dépasser 12 caractères.\");
            document.getElementById(\"nomTick\").classList.remove(\"tick\");
            document.getElementById(\"nomTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"nomTick\").classList.remove(\"cross\");
            document.getElementById(\"nomTick\").classList.add(\"tick\");
        }
    }
}   

    function validatePrenom(input) {
    var value = input.value;
    var regex = /^[a-zA-Z]*\$/; // Seules les lettres sont autorisées
    if (!regex.test(value)) {
        // Afficher un message d'erreur si des caractères autres que des lettres sont entrés
        input.value = value.replace(/[^a-zA-Z]/g, ''); // Supprimer les caractères non autorisés
        document.getElementById(\"prenomTick\").classList.remove(\"tick\");
        document.getElementById(\"prenomTick\").classList.add(\"cross\");
    } else {
        // Si la saisie ne contient que des lettres, valider le prenom
        if (input.value.length === 0 || input.value.length < 4 || input.value.length > 12) {
            input.setCustomValidity(\"Le prenom ne doit pas être vide et ne doit pas dépasser 12 caractères.\");
            document.getElementById(\"prenomTick\").classList.remove(\"tick\");
            document.getElementById(\"prenomTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"prenomTick\").classList.remove(\"cross\");
            document.getElementById(\"prenomTick\").classList.add(\"tick\");
        }
    }
}

    function validateGenre(input) {
        var genreError = document.getElementById(\"genreError\");
        if (!input.value) {
            genreError.innerHTML = \"Veuillez choisir un genre.\";
        } else {
            genreError.innerHTML = \"\";
        }
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

    function validateAdresse(input) {
        var adresse = input.value;
        if (adresse === \"\") {
            input.setCustomValidity(\"L'adresse ne doit pas être vide.\");
            document.getElementById(\"adresseTick\").classList.remove(\"tick\");
            document.getElementById(\"adresseTick\").classList.add(\"cross\");
        } else {
            input.setCustomValidity(\"\");
            document.getElementById(\"adresseTick\").classList.remove(\"cross\");
            document.getElementById(\"adresseTick\").classList.add(\"tick\");
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

 function uncheckOther(checkbox) {
        var checkboxes = document.querySelectorAll('input[name=\"' + checkbox.name + '\"]');
        var checkedCount = 0;
        checkboxes.forEach(function(cb) {
            if (cb.checked) {
                checkedCount++;
            }
        });
        checkboxes.forEach(function(cb) {
            if (cb !== checkbox && cb.checked) {
                cb.checked = false;
            }
        });
        if (checkedCount === 0) {
            checkbox.checked = true;
        }
    }

</script>

</body>
</html>
<style>
/* CSS pour changer la couleur du texte dans la liste de choix du genre */
.form-control.genremodify option {
    color: black;
}
.navbar-nav .nav-item .nav-link {
    position: relative;
    left: -200px;
    color: rgba(128, 128, 128, 0.5);
    background-color: transparent;
    border: 2px solid rgba(128, 128, 128, 0.5);
    border-radius: 5px;
    padding: 0.5rem 1rem;
}
.navbar-nav .nav-item .nav-link .arrow {
    left: -20px;
    top: 50%;
    transform: translateY(-50%);
    color: inherit;
    text-shadow: none;
}
.navbar-nav .nav-item .nav-link .text {
    display: inline-block;
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
user agent stylesheet
div {
    display: block;
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
    .login-dark {
  height:1000px;
  background-image: url(\"{{asset('Main/img/backgroundinscription.jpg')}}\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
}

.login-dark form {
  max-width:500px;
  width:90%;
  height:77%;
  background-color:black;
  padding:5px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
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
  background: #9f1818;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:-242px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#dc35358c;
  outline:none;
}

.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
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
        width: 100px; /* Définissez la largeur du cercle */
        height: 100px; /* Définissez la hauteur du cercle */
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
        top: 606px; /* Ajustez cette valeur selon vos besoins */
        left: 50%;
        transform: translateX(-50%);
    }

    /* Styles pour le bouton Suivant */
.btn-suivant button {
    width: 100%;
    background: blue;
    border: none;
    border-radius: 4px;
    padding: 11px;
    box-shadow: none;
    margin-top: 12px;
    text-shadow: none;
    outline: none;
    color: white;
}
.btn-suivant button:hover,
.btn-suivant button:active {
    background: #214a80;
    outline: none;
}

/* Styles pour le bouton Précédent */
.btn-precedent button {
    width: 100%;
    background: blue;
    border: none;
    border-radius: 4px;
    padding: 13px;
    box-shadow: none;
    margin-top: 20px;
    text-shadow: none;
    outline: none;
    color: white;
}
.btn-precedent button:hover,
.btn-precedent button:active {
    background: #214a80;
    outline: none;
}

</style>
{% endblock %}", "security/createCompte.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\security\\createCompte.html.twig");
    }
}
