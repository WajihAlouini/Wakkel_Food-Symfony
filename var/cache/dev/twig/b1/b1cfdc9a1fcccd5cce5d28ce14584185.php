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

/* client/editc.html.twig */
class __TwigTemplate_8a5fd90a21a7b3aaeb47429a925b346c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/editc.html.twig"));

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
        $this->loadTemplate("client/navbar.html.twig", "client/editc.html.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 50
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

     // Fonction pour afficher l'image utilisateur actuelle
    function displayCurrentImage(imageUrl) {
        var preview = document.getElementById('previewImageContainer');
        var img = document.createElement('img');
        img.src = imageUrl;
        img.className = 'img-fluid';
        preview.appendChild(img);
    }

    // Afficher l'image utilisateur actuelle au chargement de la page
    window.onload = function() {
        var imageUrl = \"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/imageC/" . (isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 117, $this->source); })()))), "html", null, true);
        echo "\";
        displayCurrentImage(imageUrl);
    };



    function validateForm() {
        var valid = true;

        var nom = document.forms[\"myForm\"][\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "nom_c", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "full_name", [], "any", false, false, false, 126), "html", null, true);
        echo "\"].value;
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
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "prenom_c", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "full_name", [], "any", false, false, false, 138), "html", null, true);
        echo "\"].value;
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


        var genre = document.forms[\"myForm\"][\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "genre", [], "any", false, false, false, 151), "vars", [], "any", false, false, false, 151), "full_name", [], "any", false, false, false, 151), "html", null, true);
        echo "\"];
        if (!genre.value) {
            document.getElementById(\"genreError\").innerHTML = \"Veuillez choisir un genre.\";
            valid = false;
        } else {
            document.getElementById(\"genreError\").innerHTML = \"\";
        }

        var adresse = document.forms[\"myForm\"][\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "adresse_c", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "full_name", [], "any", false, false, false, 159), "html", null, true);
        echo "\"].value;
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
  margin-top: 60px;
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
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/backgroundinscription.jpg"), "html", null, true);
        echo "\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 112vh;
}

.login-dark form {
  max-width:500px;
  width:90%;
  height:98%;
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
  margin-top:10px;
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
        width: 100px; /* Définissez la largeur du cercle */
        height: 100px; /* Définissez la hauteur du cercle */
        border-radius: 50%; /* Créez un cercle en utilisant la bordure arrondie à 50% de la largeur/hauteur */
        overflow: hidden; /* Masquez tout contenu dépassant du cercle */
        margin: 0 auto; /* Centrez le cercle horizontalement */
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

        echo "    
<div class=\"login-dark\">
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\" enctype=\"multipart/form-data\">
        <h2 class=\"sr-only\">Login Form</h2>
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom_c", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre nom", "oninput" => "validateNom(this)"]]);
        echo "
        <span id=\"nomError\" class=\"error-message\"></span>
        <span id=\"nomTick\" class=\"tick\"></span>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom_c", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre prénom", "oninput" => "validatePrenom(this)"]]);
        echo "
        <span id=\"prenomError\" class=\"error-message\"></span>
        <span id=\"prenomTick\" class=\"tick\"></span>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adresse_c", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Entrer votre adresse", "oninput" => "validateAdresse(this)"]]);
        echo "
        <span id=\"adresseError\" class=\"error-message\"></span>
        <span id=\"adresseTick\" class=\"tick\"></span>
        <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "genre", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control genremodify", "onchange" => "validateGenre(this)"]]);
        echo "
        </div>

        <!-- Cachez le bouton de sélection de fichier par défaut -->
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control", "id" => "fileInput", "onchange" => "previewImage(this)"]]);
        echo "

        <input type=\"file\"style=\"display: none;\" id=\"fileInput\" accept=\"image/*\" onchange=\"previewImage(this)\">
            <div id=\"previewImageContainer\" class=\"mt-2\"></div>

        <div class=\"form-group btn-inscrire\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Modifier</button>
        </div>
            <a href=\"/verifmdp\" class=\"forgot\">Modifier vos autres champs</a>
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
    </form>
</div>
";
        // line 48
        $this->loadTemplate("client/footer.html.twig", "client/editc.html.twig", 48)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/editc.html.twig";
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
        return array (  566 => 48,  560 => 45,  548 => 36,  541 => 32,  534 => 28,  528 => 25,  522 => 22,  518 => 21,  502 => 16,  398 => 362,  192 => 159,  181 => 151,  165 => 138,  150 => 126,  138 => 117,  69 => 50,  67 => 16,  64 => 15,  62 => 14,  52 => 7,  44 => 1,);
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
    <form method=\"post\" onsubmit=\"return validateForm();\" name=\"myForm\" enctype=\"multipart/form-data\">
        <h2 class=\"sr-only\">Login Form</h2>
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        {{ form_row(form.nom_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre nom', 'oninput': 'validateNom(this)'}}) }}
        <span id=\"nomError\" class=\"error-message\"></span>
        <span id=\"nomTick\" class=\"tick\"></span>
        {{ form_row(form.prenom_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre prénom', 'oninput': 'validatePrenom(this)'}}) }}
        <span id=\"prenomError\" class=\"error-message\"></span>
        <span id=\"prenomTick\" class=\"tick\"></span>
        {{ form_row(form.adresse_c, {'attr': {'class': 'form-control', 'placeholder': 'Entrer votre adresse', 'oninput': 'validateAdresse(this)'}}) }}
        <span id=\"adresseError\" class=\"error-message\"></span>
        <span id=\"adresseTick\" class=\"tick\"></span>
        <div class=\"form-group\">
        {{ form_row(form.genre, {'attr': {'class': 'form-control genremodify', 'onchange': 'validateGenre(this)'}}) }}
        </div>

        <!-- Cachez le bouton de sélection de fichier par défaut -->
        {{ form_row(form.image, {'attr': {'class': 'form-control', 'id': 'fileInput', 'onchange': 'previewImage(this)'}}) }}

        <input type=\"file\"style=\"display: none;\" id=\"fileInput\" accept=\"image/*\" onchange=\"previewImage(this)\">
            <div id=\"previewImageContainer\" class=\"mt-2\"></div>

        <div class=\"form-group btn-inscrire\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Modifier</button>
        </div>
            <a href=\"/verifmdp\" class=\"forgot\">Modifier vos autres champs</a>
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

     // Fonction pour afficher l'image utilisateur actuelle
    function displayCurrentImage(imageUrl) {
        var preview = document.getElementById('previewImageContainer');
        var img = document.createElement('img');
        img.src = imageUrl;
        img.className = 'img-fluid';
        preview.appendChild(img);
    }

    // Afficher l'image utilisateur actuelle au chargement de la page
    window.onload = function() {
        var imageUrl = \"{{ asset('uploads/imageC/' ~ imageUrl) }}\";
        displayCurrentImage(imageUrl);
    };



    function validateForm() {
        var valid = true;

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
  margin-top: 60px;
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
  height:98%;
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
  margin-top:10px;
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
        width: 100px; /* Définissez la largeur du cercle */
        height: 100px; /* Définissez la hauteur du cercle */
        border-radius: 50%; /* Créez un cercle en utilisant la bordure arrondie à 50% de la largeur/hauteur */
        overflow: hidden; /* Masquez tout contenu dépassant du cercle */
        margin: 0 auto; /* Centrez le cercle horizontalement */
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

</style>", "client/editc.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\editc.html.twig");
    }
}
