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

/* security/bannedCompte.html.twig */
class __TwigTemplate_c224647d589873240987980c04ef592d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/bannedCompte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/bannedCompte.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #08335D; /* Définir la couleur de fond de la page */
        }
        .full-screen-image {
            width: 80%;
            height: 80%;
            position: absolute; /* Définir la position absolue pour la superposition */
            top: 50%; /* Placer l'image à 50% du haut */
            left: 50%; /* Placer l'image à 50% du côté gauche */
            transform: translate(-50%, -50%); /* Déplacer l'image de moitié de sa taille vers le haut et la gauche */        }
        .second-image {
            width: 1536px; /* Largeur de la deuxième image */
            height: 684px; /* Hauteur de la deuxième image */
            position: absolute; /* Définir la position absolue pour la superposition */
            top: 50%; /* Placer l'image à 50% du haut */
            left: 50%; /* Placer l'image à 50% du côté gauche */
            transform: translate(-50%, -50%); /* Déplacer l'image de moitié de sa taille vers le haut et la gauche */
        }
    </style>
</head>

<body>
    <img class=\"img-fluid full-screen-image\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/ban.png"), "html", null, true);
        echo "\" alt=\"\">
    <img class=\"img-fluid second-image\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/chaine.png"), "html", null, true);
        echo "\" alt=\"\">
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/bannedCompte.html.twig";
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
        return array (  85 => 35,  81 => 34,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Wakkel Food</title>
    <link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #08335D; /* Définir la couleur de fond de la page */
        }
        .full-screen-image {
            width: 80%;
            height: 80%;
            position: absolute; /* Définir la position absolue pour la superposition */
            top: 50%; /* Placer l'image à 50% du haut */
            left: 50%; /* Placer l'image à 50% du côté gauche */
            transform: translate(-50%, -50%); /* Déplacer l'image de moitié de sa taille vers le haut et la gauche */        }
        .second-image {
            width: 1536px; /* Largeur de la deuxième image */
            height: 684px; /* Hauteur de la deuxième image */
            position: absolute; /* Définir la position absolue pour la superposition */
            top: 50%; /* Placer l'image à 50% du haut */
            left: 50%; /* Placer l'image à 50% du côté gauche */
            transform: translate(-50%, -50%); /* Déplacer l'image de moitié de sa taille vers le haut et la gauche */
        }
    </style>
</head>

<body>
    <img class=\"img-fluid full-screen-image\" src=\"{{asset('Main/img/ban.png')}}\" alt=\"\">
    <img class=\"img-fluid second-image\" src=\"{{asset('Main/img/chaine.png')}}\" alt=\"\">
</body>

</html>
", "security/bannedCompte.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\security\\bannedCompte.html.twig");
    }
}
