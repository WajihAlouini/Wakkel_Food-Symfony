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

/* security/confirmSms.html.twig */
class __TwigTemplate_b6d51dea035bca00a75527a5033a1b08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/confirmSms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/confirmSms.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Untitled</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>

<body>
    
    <div class=\"login-dark\">
    <form method=\"post\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_sms", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "getIdClient", [], "method", false, false, false, 18)]), "html", null, true);
        echo "\">
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        <div id=\"countdown\" class=\"countdown\"></div> <!-- Ajout du div pour afficher le timer -->
        <div class=\"form-group\">
            <input id=\"code\" class=\"form-control\" type=\"text\" name=\"key\" placeholder=\"La clé envoyée à votre numéro\">
        </div>
        <div class=\"form-group\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Confirmer</button>
        </div>
        <div id=\"message\" style=\"display: none; color: red; text-align: center;\">Votre compte a été supprimé.</div>
<div id=\"error\" style=\"color: red; text-align: center;\"></div>

        <div id=\"result\"></div>
    </form>
    


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js\"></script>

    <script>
    // Définir la date limite à 1 minute dans le futur
    var deadline = new Date(Date.now() + 1 * 60 * 1000); // Modification du temps à 1 minute

    // Mettre à jour le compte à rebours chaque seconde
    var countdownTimer = setInterval(function () {
        var now = new Date().getTime();
        var distance = deadline - now;

        if (distance < 0) {
            clearInterval(countdownTimer);
            document.getElementById(\"countdown\").style.display = \"none\"; // Masquer le compte à rebours
            document.getElementById(\"message\").style.display = \"block\"; // Afficher le message
            // Redirection vers la page de création du compte
            window.location.href = \"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_createaccount");
        echo "\";
        } else {
            // Calculer les minutes et secondes restantes
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Mettre à jour le contenu du div avec le compte à rebours
            document.getElementById(\"countdown\").innerHTML = \"Temps restant : \" + minutes + \"m \" + seconds + \"s \";
        }
    }, 1000);

    // Variable pour suivre si la clé aléatoire a été confirmée
    var keyConfirmed = false;

    // Gérer l'événement de soumission du formulaire
document.querySelector('form').addEventListener('submit', function(event) {
    // Marquer la clé comme confirmée lors de la soumission du formulaire
    keyConfirmed = true;
    
    // Empêcher l'envoi du formulaire par défaut
    event.preventDefault();
    
    // Récupérer la clé entrée par l'utilisateur
    var enteredKey = document.getElementById(\"code\").value.trim();
    
    // Comparer la clé entrée avec la clé générée
    if (enteredKey !== \"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["randomKey"]) || array_key_exists("randomKey", $context) ? $context["randomKey"] : (function () { throw new RuntimeError('Variable "randomKey" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\") {
        // Afficher un message d'erreur
        document.getElementById(\"error\").innerHTML = \"Clé incorrecte\";
    } else {
        // Soumettre le formulaire
        this.submit();
    }
});


    // Gérer l'événement avant le déchargement de la page
    window.addEventListener('beforeunload', function(event) {
        // Vérifier si la clé aléatoire a été confirmée
        if (!keyConfirmed) {
            // Si la clé n'est pas confirmée, envoyer une requête AJAX pour supprimer le compte
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(\"Compte supprimé avec succès.\");
                }
            };
            xhttp.open(\"GET\", \"/client/delete/";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 99, $this->source); })()), "getIdClient", [], "method", false, false, false, 99), "html", null, true);
        echo "\", true);
            xhttp.send();
        }
    });
</script>

";
        // line 105
        if ( !(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 105, $this->source); })())) {
            // line 106
            echo "    <script>
        window.location.href = \"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_createaccount");
            echo "\";
    </script>
";
        }
        // line 110
        echo "


<style>
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
    transition: none;
    padding: 0.5rem 1.5rem;
    color: rgba(26, 26, 26, 20);
  }
    .login-dark {
  height:1000px;
  background-image: url(\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/backgroundinscription.jpg"), "html", null, true);
        echo "\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;}

.login-dark form {
  max-width:320px;
  width:90%;
  background-color:black;
  padding:40px;
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
}

.login-dark form .btn-primary {
  background: blue;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
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

.login-dark form .btn-primary:active {
  transform:translateY(1px);
}

</style>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/confirmSms.html.twig";
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
        return array (  366 => 299,  175 => 110,  169 => 107,  166 => 106,  164 => 105,  155 => 99,  131 => 78,  102 => 52,  65 => 18,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Untitled</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
</head>

<body>
    
    <div class=\"login-dark\">
    <form method=\"post\" action=\"{{ path('confirm_sms', {'id': client.getIdClient()}) }}\">
        <div class=\"illustration\"><i class=\"icon ion-ios-locked-outline\"></i></div>
        <div id=\"countdown\" class=\"countdown\"></div> <!-- Ajout du div pour afficher le timer -->
        <div class=\"form-group\">
            <input id=\"code\" class=\"form-control\" type=\"text\" name=\"key\" placeholder=\"La clé envoyée à votre numéro\">
        </div>
        <div class=\"form-group\">
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Confirmer</button>
        </div>
        <div id=\"message\" style=\"display: none; color: red; text-align: center;\">Votre compte a été supprimé.</div>
<div id=\"error\" style=\"color: red; text-align: center;\"></div>

        <div id=\"result\"></div>
    </form>
    


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js\"></script>

    <script>
    // Définir la date limite à 1 minute dans le futur
    var deadline = new Date(Date.now() + 1 * 60 * 1000); // Modification du temps à 1 minute

    // Mettre à jour le compte à rebours chaque seconde
    var countdownTimer = setInterval(function () {
        var now = new Date().getTime();
        var distance = deadline - now;

        if (distance < 0) {
            clearInterval(countdownTimer);
            document.getElementById(\"countdown\").style.display = \"none\"; // Masquer le compte à rebours
            document.getElementById(\"message\").style.display = \"block\"; // Afficher le message
            // Redirection vers la page de création du compte
            window.location.href = \"{{ path('app_createaccount') }}\";
        } else {
            // Calculer les minutes et secondes restantes
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Mettre à jour le contenu du div avec le compte à rebours
            document.getElementById(\"countdown\").innerHTML = \"Temps restant : \" + minutes + \"m \" + seconds + \"s \";
        }
    }, 1000);

    // Variable pour suivre si la clé aléatoire a été confirmée
    var keyConfirmed = false;

    // Gérer l'événement de soumission du formulaire
document.querySelector('form').addEventListener('submit', function(event) {
    // Marquer la clé comme confirmée lors de la soumission du formulaire
    keyConfirmed = true;
    
    // Empêcher l'envoi du formulaire par défaut
    event.preventDefault();
    
    // Récupérer la clé entrée par l'utilisateur
    var enteredKey = document.getElementById(\"code\").value.trim();
    
    // Comparer la clé entrée avec la clé générée
    if (enteredKey !== \"{{ randomKey }}\") {
        // Afficher un message d'erreur
        document.getElementById(\"error\").innerHTML = \"Clé incorrecte\";
    } else {
        // Soumettre le formulaire
        this.submit();
    }
});


    // Gérer l'événement avant le déchargement de la page
    window.addEventListener('beforeunload', function(event) {
        // Vérifier si la clé aléatoire a été confirmée
        if (!keyConfirmed) {
            // Si la clé n'est pas confirmée, envoyer une requête AJAX pour supprimer le compte
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(\"Compte supprimé avec succès.\");
                }
            };
            xhttp.open(\"GET\", \"/client/delete/{{ client.getIdClient() }}\", true);
            xhttp.send();
        }
    });
</script>

{% if not client %}
    <script>
        window.location.href = \"{{ path('app_createaccount') }}\";
    </script>
{% endif %}



<style>
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
    transition: none;
    padding: 0.5rem 1.5rem;
    color: rgba(26, 26, 26, 20);
  }
    .login-dark {
  height:1000px;
  background-image: url(\"{{asset('Main/img/backgroundinscription.jpg')}}\") ;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;}

.login-dark form {
  max-width:320px;
  width:90%;
  background-color:black;
  padding:40px;
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
}

.login-dark form .btn-primary {
  background: blue;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
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

.login-dark form .btn-primary:active {
  transform:translateY(1px);
}

</style>
</body>
</html>", "security/confirmSms.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\security\\confirmSms.html.twig");
    }
}
